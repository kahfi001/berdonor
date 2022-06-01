<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Artikel;
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
            'name' => 'Muhammad Kahfi',
            'username' => 'kahfi',
            'email' => 'kahfi@gmail.com',
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
        // Artikel::create([
        //     'tittle' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint recusandae iure repudiandae debitis quisquam quasi natus repellendus blanditiis non,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint recusandae iure repudiandae debitis quisquam quasi natus repellendus blanditiis non, ipsum odit officiis quae quia rem adipisci voluptatibus iste delectus sit sapiente, fugit quidem nesciunt tempora amet doloremque. Culpa ipsam consequuntur iure tempora maiores voluptate quidem, ipsa voluptatem quam facilis labore corporis modi, doloribus fuga eveniet atque totam impedit obcaecati, laboriosam autem ullam harum nulla! Rerum, aliquid a. Dolores consequuntur cum nisi assumenda consectetur incidunt possimus asperiores repellendus! Sunt dolorum dolorem fugit quos illum? Adipisci rem quos accusamus cum unde deleniti consectetur, blanditiis nam accusantium, possimus voluptates nesciunt perspiciatis tempora molestiae.',
        //     'user_id' => 1
        // ]);
    }
}
