<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Artikel;
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
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Muhammad Kahfi',
        //     'email' => 'kahfi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        Artikel::factory(5)->create();
        // Artikel::create([
        //     'tittle' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint recusandae iure repudiandae debitis quisquam quasi natus repellendus blanditiis non,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint recusandae iure repudiandae debitis quisquam quasi natus repellendus blanditiis non, ipsum odit officiis quae quia rem adipisci voluptatibus iste delectus sit sapiente, fugit quidem nesciunt tempora amet doloremque. Culpa ipsam consequuntur iure tempora maiores voluptate quidem, ipsa voluptatem quam facilis labore corporis modi, doloribus fuga eveniet atque totam impedit obcaecati, laboriosam autem ullam harum nulla! Rerum, aliquid a. Dolores consequuntur cum nisi assumenda consectetur incidunt possimus asperiores repellendus! Sunt dolorum dolorem fugit quos illum? Adipisci rem quos accusamus cum unde deleniti consectetur, blanditiis nam accusantium, possimus voluptates nesciunt perspiciatis tempora molestiae.',
        //     'user_id' => 1
        // ]);
    }
}
