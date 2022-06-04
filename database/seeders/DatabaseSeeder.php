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
        Artikel::create([
            'tittle' => 'Yuk Kenalan dengan Donor Plasma Konvalesen',
            'slug' => 'donor-plasma-kevalen',
            'excerpt' => 'Selama pandemi COVID-19 ini, kita mungkin pernah mendapatkan pesan broadcast pada aplikasi chat atau media sosial mengenai pasien yang membutuhkan plasma konvalesen. Lalu apa itu plasma konvalesen? Apakah semua orang bisa mendonorkan plasma konvalesen? Kita bahas selengkapnya melalui artikel ini ya.',
            'body' => 'Apa saja syarat untuk donor plasma konvalesen?
            Pernah terkonfirmasi dan sembuh dari COVID-19
            Membawa dokumen hasil swab positif dan negatif, atau surat keterangan sehat dari Dinkes setempat
            Berusia 17-60 tahun, berat badan minimal 55 kg
            Diutamakan laki-laki. Untuk perempuan, belum pernah hamil (antibodi HLA negatif)
            Bebas keluhan atau gejala minimal 14 hari
            Jika sudah vaksin, maka perlu menunggu minimal 2 minggu setelah vaksin dosis kedua
            Jika memenuhi syarat-syarat tersebut, kita bisa datang ke UTD PMI yang memfasilitasi donor plasma konvalesen.
            Datang ke UTD PMI untuk donor plasma konvalesen dengan mesin apheresis

            Donor plasma konvalesen ini memang berbeda dengan donor darah biasa. Calon pendonor harus dua kali ke PMI untuk bisa mendonorkan plasma konvalesen. Namun, jika kita tidak memenuhi syarat untuk donor plasma konvalesen, apa yang bisa kita lakukan? Kita masih tetap bisa mendonorkan darah biasa di PMI karena kebutuhan donor darah biasa juga masih tinggi selama pandemi ini. Baik donor plasma konvalesen maupun donor darah biasa, keduanya sama-sama penting dan bermanfaat. Jadi, sudah waktunya donor nih? Yuk kita donor di Unit Transfusi Darah (UTD) PMI atau jadwal mobil unit PMI terdekat, cek jadwalnya di',
            'user_id' => 1
        ]);
        Artikel::create([
            'tittle' => 'Cara Meningkatkan Hemoglobin untuk Donor Darah',
            'slug' => 'cara-meningkatkan-hemoglobin',
            'excerpt' => 'Selama pandemi COVID-19 ini, kita mungkin pernah mendapatkan pesan broadcast pada aplikasi chat atau media sosial mengenai pasien yang membutuhkan plasma konvalesen. Lalu apa itu plasma konvalesen? Apakah semua orang bisa mendonorkan plasma konvalesen? Kita bahas selengkapnya melalui artikel ini ya.',
            'body' => 'Apa saja syarat untuk donor plasma konvalesen?
            Pernah terkonfirmasi dan sembuh dari COVID-19
            Membawa dokumen hasil swab positif dan negatif, atau surat keterangan sehat dari Dinkes setempat
            Berusia 17-60 tahun, berat badan minimal 55 kg
            Diutamakan laki-laki. Untuk perempuan, belum pernah hamil (antibodi HLA negatif)
            Bebas keluhan atau gejala minimal 14 hari
            Jika sudah vaksin, maka perlu menunggu minimal 2 minggu setelah vaksin dosis kedua
            Jika memenuhi syarat-syarat tersebut, kita bisa datang ke UTD PMI yang memfasilitasi donor plasma konvalesen.
            Datang ke UTD PMI untuk donor plasma konvalesen dengan mesin apheresis

            Donor plasma konvalesen ini memang berbeda dengan donor darah biasa. Calon pendonor harus dua kali ke PMI untuk bisa mendonorkan plasma konvalesen. Namun, jika kita tidak memenuhi syarat untuk donor plasma konvalesen, apa yang bisa kita lakukan? Kita masih tetap bisa mendonorkan darah biasa di PMI karena kebutuhan donor darah biasa juga masih tinggi selama pandemi ini. Baik donor plasma konvalesen maupun donor darah biasa, keduanya sama-sama penting dan bermanfaat. Jadi, sudah waktunya donor nih? Yuk kita donor di Unit Transfusi Darah (UTD) PMI atau jadwal mobil unit PMI terdekat, cek jadwalnya di',
            'user_id' => 3
        ]);
        Artikel::create([
            'tittle' => 'Apakah aman untuk donor darah selama pandemi COVID-19?',
            'slug' => 'aman-donor-darah-ketika-pandemi',
            'excerpt' => 'Banyak dari kita yang takut untuk keluar rumah selama pandemi COVID-19 ini. Hal ini juga berdampak pada sedikitnya pendonor yang datang ke Unit Transfusi Darah atau mobil unit PMI untuk mendonorkan darah. Padahal kebutuhan darah tidak menurun, tapi terus meningkat setiap harinya. PMI telah menerapkan protokol kesehatan yang ketat, agar pendonor tetap aman dan nyaman untuk mendonorkan darahnya. Lalu, bagaimana jika kita masih takut?',
            'body' => 'Banyak dari kita yang takut untuk keluar rumah selama pandemi COVID-19 ini. Hal ini juga berdampak pada sedikitnya pendonor yang datang ke Unit Transfusi Darah atau mobil unit PMI untuk mendonorkan darah. Padahal kebutuhan darah tidak menurun, tapi terus meningkat setiap harinya. PMI telah menerapkan protokol kesehatan yang ketat, agar pendonor tetap aman dan nyaman untuk mendonorkan darahnya. Lalu, bagaimana jika kita masih takut?
            Jangan takut donor darah.
Ayo jangan takut berdonor darah. Donor darah tidak menularkan virus COVID-19. Saat ini belum ada bukti bahwa transfusi bisa menularkan virus COVID-19.

Donor darah aman.
Orang yang berdonor darah adalah orang yang sehat. Kemudian darah yang didonorkan akan melalui uji saring untuk memastikan darah yang siap ditransfusi adalah darah yang sehat dan aman.

Ada pasien yang harus diselamatkan.
Prosedur yang dijalankan oleh PMI dalam pengelolaan darah adalah untuk menghasilkan darah yang aman bagi pasien yang harus diselamatkan.

Pelajari hal-hal berikut ini sebelum donor darah.

Anda dalam kondisi sehat
Tidak habis bepergian dari luar negeri
Tidak memiliki kontak dengan ODP (Orang Dalam Pengawasan) atau PDP (Pasien Dalam Pengawasan)
Pasien yang menderita kanker, thalassemia, demam berdarah, serta ibu melahirkan tetap membutuhkan darah untuk penanganan medis. Yuk, yang sudah saatnya donor, segera datang ke PMI terdekat ya.',
            'user_id' => 2
        ]);
        Artikel::create([
            'tittle' => 'Donor Darah Bisa Menurunkan Berat Badan',
            'slug' => 'donor-dapat-menurunkan-berat-badan',
            'excerpt' => 'Apakah donor darah bisa menurunkan berat badan? Apakah benar-benar fakta, dan bukan mitos? Memang benar bahwa, salah satu manfaat donor darah yaitu bisa membakar kalori secara teratur.',
            'body' => 'Apakah donor darah bisa menurunkan berat badan? Apakah benar-benar fakta, dan bukan mitos? Memang benar bahwa, salah satu manfaat donor darah yaitu bisa membakar kalori secara teratur.

            Penelitian yang dilakukan oleh University of California, San Diego, menyatakan bahwa seseorang yang rutin donor darah akan kehilangan berat badan sesuai volume darah yang didonorkan, karena ada sekitar 650 kalori yang terbakar dalam tubuh.

            Namun, hal ini tidak bisa menjadikan donor darah sebagai program diet bagi kita, karena donor darah hanya bisa dilakukan maksimal sekali dalam dua bulan. Oleh karena itu, kita harus tetap menjaga gaya hidup sehat dengan makan dan minum teratur yang cukup dan rutin berolahraga untuk menurunkan berat badan kita hingga memiliki berat badan ideal.',
            'user_id' => 1
        ]);
    }
}
