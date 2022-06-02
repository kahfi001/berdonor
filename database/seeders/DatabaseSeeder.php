<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Artikel;
use App\Models\Faq;
use App\Models\Donor;
use App\Models\Stokdarah;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
        ]);

        Stokdarah::create([
            'a' => '2',
            'b' => '1',
            'ab' => '3',
            'o' => '4'
        ]);

        // Donor::create([
        //     'nama' => 'andre',
        //     'user_id' => '1',
        //     'alamat' => 'bali',
        //     'tlp' => '1234312',
        //     'tempat' => 'singaraja',
        //     'tgl_lahir' => ' ',
        //     'jk' => 'laki',
        //     'donor_terakhir' => '',
        //     'skrdonor' => '2',
        //     'lokasi_donor' => 'sd',
        //     'tgl_donor' => ' ',
        //     'jam' => ' '
        // ]);

        User::factory(3)->create();

        Artikel::factory(10)->create();

        Faq::create([
            'pertanyaan' => 'Apakah Boleh Mendonorkan Darah Apabila Saya Memiliki Riwayat Penyakit? ',
            'jawaban' => 'Apabila bukan suatu penyakit yang parah dan anda masih dalam
            kondisi yang cukup stabil dan memenuhi semua persyaratan.'
        ]);
        Faq::create([
            'pertanyaan' => 'Apakah Website Memerlukan KTP Untuk Registration User? ',
            'jawaban' => 'Tidak, NIK KTP akan dibutuhkan ketika mendaftar untuk berdonor'
        ]);
        Faq::create([
            'pertanyaan' => 'Apakah Saya Perlu Memiliki Akun di Berdonor? ',
            'jawaban' => 'Jika kebutuhan anda adalah menerima  atau menyumbang, Ya.'
        ]);
        Faq::create([
            'pertanyaan' => 'Bagaimana Cara Membatalkan Formulir Pendaftaran?  ',
            'jawaban' => 'Silahkan buka halaman pendaftaran. Lalu silahkan pilih riwayat pendaftaran  '
        ]);
        Faq::create([
            'pertanyaan' => 'Apakah Saya Bisa Mengakses Website Berdonor Melalui SmartPhone?',
            'jawaban' => 'Tentu saja, Website berdonor dapat diakses melalui smartphone anda.'
        ]);
        Faq::create([
            'pertanyaan' => 'Apakah Privasi Data User Aman ? ',
            'jawaban' => 'Tenang, data privasi anda akan terjamin di tangan kami.'
        ]);
        // Artikel::create([
        //     'tittle' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint recusandae iure repudiandae debitis quisquam quasi natus repellendus blanditiis non,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint recusandae iure repudiandae debitis quisquam quasi natus repellendus blanditiis non, ipsum odit officiis quae quia rem adipisci voluptatibus iste delectus sit sapiente, fugit quidem nesciunt tempora amet doloremque. Culpa ipsam consequuntur iure tempora maiores voluptate quidem, ipsa voluptatem quam facilis labore corporis modi, doloribus fuga eveniet atque totam impedit obcaecati, laboriosam autem ullam harum nulla! Rerum, aliquid a. Dolores consequuntur cum nisi assumenda consectetur incidunt possimus asperiores repellendus! Sunt dolorum dolorem fugit quos illum? Adipisci rem quos accusamus cum unde deleniti consectetur, blanditiis nam accusantium, possimus voluptates nesciunt perspiciatis tempora molestiae.',
        //     'user_id' => 1
        // ]);
    }
}
