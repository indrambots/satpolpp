<?php

use Illuminate\Database\Seeder;
use App\Inovasi;

class UpdateKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $inovasis = Inovasi::whereHas('user', function ($query) {
            $query->where('level', '=', '5');
        })->get();
        foreach ($inovasis as $key => $item) {
            $item->update(['kategori'=> array((string)$item->kategori )]);
        }
    }
}
