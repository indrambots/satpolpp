<?php

use App\Models\BobotWarga;
use Illuminate\Database\Seeder;

class BobotWargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $bobots = array(
            array("aspek_penilaian" => "Keaslian Gagasan: Orisinil dan Aktual","uraian"=>"Orisinal: Invensi/Inovasi baru, belum pernah dipublikasikan sebelumnya. Aktual: gagasan sesuai dengan kondisi kekinian yang ada di masyarakat.","nilai"=>30,"tahun"=>2022),
            array("aspek_penilaian" => "Kreativitas","uraian"=>"Kreatif: Invensi/Inovasi memberikan pendekatan baru dalam menyelesaikan permasalahan yang ada di masyarakat/unit kerja","nilai"=>15,"tahun"=>2022),
            array("aspek_penilaian" => "Dampak yang ditimbulkan","uraian"=>"Dampak: pengaruh yang ditimbulkan dari invensi/inovasi yang diusulkan baik di tingkat lingkungan kerja, lingkungan, wilayah, kota, provinsi, nasional.","nilai"=>35,"tahun"=>2022),
            array("aspek_penilaian"             => "Dapat direplikasi","uraian"=>"Replikasi: Invensi/Inovasi yang diusulkan harus dapat direplikasi (diimplementasikan ulang) di tempat/daerah lain.","nilai"=>20,"tahun"=>2022),
        );
        foreach ($bobots as $key => $value) {
            BobotWarga::Create($value);
        }
    }
}
