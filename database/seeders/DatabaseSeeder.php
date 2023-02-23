<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    
            User::create([
                'name' => 'Muhammad Fauzan',
                'username' => 'Fauzan',
                'email' => 'fauzan@gmail.com',
                'password' => bcrypt('password')
            ]);

            // User::create([
            //     'name' => 'Muhammad Leborn',
            //     'email' => 'leb@gmail.com',
            //     'password' => bcrypt('123')
            // ]);

            User::factory(3)->create();

            Category::create([
                'name' => 'Progamming',
                'slug' => 'progamming'
            ]);

            Category::create([
                'name' => 'Web Design',
                'slug' => 'web-design'
            ]);
            
            Category::create([
                'name' => 'Personal',
                'slug' => 'personal'
            ]);

            Post::factory(20)->create();

            

            // Post::create([ 
            //     "title" => "Judul Pertama",
            //     "slug" => "judul-pertama", 
            //     "excerpt" => "Lorem ipsum judul pertama, sit amet consectetur
            //     adipisicing elit. Quibusdam doloribus a ab dolores itaque", 
            //     "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam
            //         doloribus a ab dolores itaque, perferendis rerum voluptas praesentium,
            //         sapiente iusto adipisci inventore esse, accusantium officiis asperiores.
            //         Dolor dolorum molestias perspiciatis totam amet iste reprehenderit, illum,
            //         ad maiores aperiam veniam. Reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae labore
            //         dolores impedit nesciunt culpa eaque maxime dolorem maiores ad autem!",
            //     'category_id' => 1,
            //     'user_id' => 2
            // ]);
            
            // Post::create([ 
            //     "title" => "Judul ke Dua", 
            //     "slug" => "judul-ke-dua", 
            //     "excerpt" => "Lorem ipsum judul ke Dua, sit amet consectetur
            //     adipisicing elit. Quibusdam doloribus a ab dolores itaque", 
            //     "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam
            //         doloribus a ab dolores itaque, perferendis rerum voluptas praesentium,
            //         sapiente iusto adipisci inventore esse, accusantium officiis asperiores.
            //         Dolor dolorum molestias perspiciatis totam amet iste reprehenderit, illum,
            //         ad maiores aperiam veniam. Reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae labore
            //         dolores impedit nesciunt culpa eaque maxime dolorem maiores ad autem!",
            //     'category_id' => 1,
            //     'user_id' => 1
            // ]);

            // Post::create([ 
            //     "title" => "Judul ke Tiga", 
            //     "slug" => "judul-ke-tiga", 
            //     "excerpt" => "Lorem ipsum judul ke Tiga, sit amet consectetur
            //     adipisicing elit. Quibusdam doloribus a ab dolores itaque", 
            //     "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam
            //         doloribus a ab dolores itaque, perferendis rerum voluptas praesentium,
            //         sapiente iusto adipisci inventore esse, accusantium officiis asperiores.
            //         Dolor dolorum molestias perspiciatis totam amet iste reprehenderit, illum,
            //         ad maiores aperiam veniam. Reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae labore
            //         dolores impedit nesciunt culpa eaque maxime dolorem maiores ad autem!",
            //     'category_id' => 2,
            //     'user_id' => 1
            // ]);

            // Post::create([ 
            //     "title" => "Judul ke Empat", 
            //     "slug" => "judul-ke-empat", 
            //     "excerpt" => "Lorem ipsum judul ke Empat, sit amet consectetur
            //     adipisicing elit. Quibusdam doloribus a ab dolores itaque", 
            //     "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam
            //         doloribus a ab dolores itaque, perferendis rerum voluptas praesentium,
            //         sapiente iusto adipisci inventore esse, accusantium officiis asperiores.
            //         Dolor dolorum molestias perspiciatis totam amet iste reprehenderit, illum,
            //         ad maiores aperiam veniam. Reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae labore
            //         dolores impedit nesciunt culpa eaque maxime dolorem maiores ad autem!",
            //     'category_id' => 3,
            //     'user_id' => 2
            // ]);



    }
}
