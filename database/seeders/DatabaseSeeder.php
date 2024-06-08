<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Agita Setya Hanifah',
            'username' => 'agitasetyahanifah',
            'email' => 'agitahanifah@gmail.com',
            'password' => bcrypt('12345')
        ]);
        
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        

        // User::create([
        //     'name' => 'Min Yoongi',
        //     'email' => 'myg@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, accusamus necessitatibus vel corporis minima ratione voluptatum sed impedit?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, accusamus necessitatibus vel corporis minima ratione voluptatum sed impedit? Ducimus enim quo odit sed quam corrupti nobis tempore facilis repellat dignissimos!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius fuga, repudiandae voluptatum accusamus ratione odio veniam fugiat omnis commodi animi vitae a quos similique, vel incidunt sapiente, facere consequuntur excepturi?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, accusamus necessitatibus vel corporis minima ratione voluptatum sed impedit?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, accusamus necessitatibus vel corporis minima ratione voluptatum sed impedit? Ducimus enim quo odit sed quam corrupti nobis tempore facilis repellat dignissimos!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius fuga, repudiandae voluptatum accusamus ratione odio veniam fugiat omnis commodi animi vitae a quos similique, vel incidunt sapiente, facere consequuntur excepturi?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, accusamus necessitatibus vel corporis minima ratione voluptatum sed impedit?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, accusamus necessitatibus vel corporis minima ratione voluptatum sed impedit? Ducimus enim quo odit sed quam corrupti nobis tempore facilis repellat dignissimos!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius fuga, repudiandae voluptatum accusamus ratione odio veniam fugiat omnis commodi animi vitae a quos similique, vel incidunt sapiente, facere consequuntur excepturi?</p>',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, accusamus necessitatibus vel corporis minima ratione voluptatum sed impedit?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, accusamus necessitatibus vel corporis minima ratione voluptatum sed impedit? Ducimus enim quo odit sed quam corrupti nobis tempore facilis repellat dignissimos!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius fuga, repudiandae voluptatum accusamus ratione odio veniam fugiat omnis commodi animi vitae a quos similique, vel incidunt sapiente, facere consequuntur excepturi?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Kelima',
        //     'slug' => 'judul-kelima',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, accusamus necessitatibus vel corporis minima ratione voluptatum sed impedit?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, accusamus necessitatibus vel corporis minima ratione voluptatum sed impedit? Ducimus enim quo odit sed quam corrupti nobis tempore facilis repellat dignissimos!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius fuga, repudiandae voluptatum accusamus ratione odio veniam fugiat omnis commodi animi vitae a quos similique, vel incidunt sapiente, facere consequuntur excepturi?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

    }
}
