<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\produk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function produkIndex()
    {
        $produk = produk::paginate(10);

        return view('produk.index', compact('produk'));
    }

    public function showtambahproduk(kategori $kategori)
    {
        $kategori = kategori::all();
        return view('produk.tambah', compact('kategori'));
    }

    public function tambahproduk(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required',
            'name' => 'required',
            'foto' => 'required|file|image',
            'harga' => 'required|numeric'
        ]);

        produk::create([
            'kategori_id' => $request->kategori_id,
            'name' => $request->name,
            'foto' => $request->foto->store('images'),
            'harga' => $request->harga
        ]);
        return redirect()->route('admin.produk');
    }

    public function ubahproduk(produk $produk)
    {
        $kategori = kategori::all();

        return view('produk.ubah', compact('produk', 'kategori'));
    }

    public function baruproduk(Request $request, produk $produk)
    {
        $data = $request->validate([
            'kategori_id' => 'required',
            'name' => 'required',
            'foto' => 'file|image',
            'harga' => 'required|numeric'
        ]);
        if ($request->hasFile('foto')) {

            $data['foto'] = $request->foto->store('images', 'public');
        } else {
            unset($data['foto']);
        }

        $produk->update($data);

        return redirect()->route('admin.produk');
    }

    public function hapusproduk(produk $produk)
    {
        $produk->delete();

        return redirect()->route('admin.produk');
    }
}
