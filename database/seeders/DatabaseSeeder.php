<?php

namespace Database\Seeders;

use App\Models\kategori;
use App\Models\produk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $kategori = kategori::create([
            'name' => 'makanan'
        ]);
        $kategori = kategori::create([
            'name' => 'minuman'
        ]);
        $kategori = kategori::create([
            'name' => 'aksesoris'
        ]);

        produk::create([
            'kategori_id' => 1,
            'name' => 'nasi padang',
            'harga' => 45000,
            'foto' => 'images/naspad.jpg',
        ]);
        produk::create([
            'kategori_id' => 1,
            'name' => 'ikan gurame',
            'harga' => 27000,
            'foto' => 'images/gurame.jpg',
        ]);
        produk::create([
            'kategori_id' => 2,
            'name' => 'es teh',
            'harga' => 3000,
            'foto' => 'images/esteh.jpg',
        ]);
        produk::create([
            'kategori_id' => 2,
            'name' => 'ocha ice',
            'harga' => 45000,
            'foto' => 'images/ocha.jpg',
        ]);
        produk::create([
            'kategori_id' => 3,
            'name' => 'gelang permata',
            'harga' => 380000,
            'foto' => 'images/gelang.jpg',
        ]);

        User::create([
            'name' => 'Admin ',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('a'),
            'role' => 'admin',
        ]);
    }
}
