<?php

namespace App\Http\Controllers;

use App\Models\detailtransaksi;
use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\transaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

class UserController extends Controller
{
    public function home()
    {
        $data = produk::all();
        return view('welcome', compact('data'));
    }

    public function detail(Request $request, produk $produk)
    {
        return view('main', compact('produk'));
    }

    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        // dd($request->all());
        $cek = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($cek)) {
            $user = Auth::user();
            return redirect()->route('home')->with('status', 'Selamat Datang : ' . $user->name);
            if ($user->role == 'admin') {
                return redirect()->route('admin.produk')->with('status', 'Selamat Datang : ' . $user->name);
            } else {
                return redirect()->route('home')->with('status', 'Selamat Datang : ' . $user->name);
            }
        }
        return back()->with('status', 'Email atau Password salah');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }

    public function postkeranjang(Request $request, produk $produk)
    // $produk_id
    {

        $request->validate([
            'banyak' => 'required'
        ]);
        // $produk = produk::find($produk_id);
        // dd($produk);
        detailtransaksi::create([
            'qty' => $request->banyak,
            'user_id' => Auth::id(),
            'produk_id' => $produk->id,
            'status' => 'keranjang',
            'totalharga' =>  $produk->harga * $request->banyak
        ]);
        return redirect()->route('home')->with('status', 'Dimasukan kedalam keranjang');
    }

    public function keranjang(Request $request)
    {
        $detailtransaksi = detailtransaksi::where('status', 'keranjang')->with('produk')->get();
        return view('keranjang', compact('detailtransaksi'));
    }

    public function bayar(Request $request, detailtransaksi $detailtransaksi)
    {
        $produk = $detailtransaksi->produk;
        return view('bayar', compact('produk', 'detailtransaksi'));
    }

    public function prosesbayar(Request $request, detailtransaksi $detailtransaksi)
    {
        $request->validate([
            'bukti_transaksi' => 'required|file'
        ]);

        $transaksi = transaksi::create([
            'user_id' => auth()->id(),
            'totalharga' => $detailtransaksi->totalharga,
            'kode' => 'INV' . Str::random(8)
        ]);

        $detailtransaksi->update([
            'transaksi_id' => $transaksi->id,
            'status' => 'checkout',
            'bukti_transaksi' => $request->bukti_transaksi->store('images'),
            'invoice' => 'INV' . Str::random(8)
        ]);

        return redirect()->route('pelanggan.summary')->with('status', 'Berhasil checkout/upload bukti');
    }

    public function summary(Request $request)
    {
        $detailtransaksi = detailtransaksi::where('user_id', auth()->id())->where('status', 'checkout')->get();
        return view('summary', compact('detailtransaksi'));
    }

    public function register()
    {
        return view('register');
    }

    public function postregister(Request $request)
    {
        $cek = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'name' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'customer'
        ]);

        return redirect()->route('login')->with('status', 'Berhasil membuat akun');
    }
}
