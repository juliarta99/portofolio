<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use App\Models\Pemrograman;
use App\Models\Project;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        
        Pemrograman::create([
            'name' => 'HTML',
            'slug' => 'HTML'
        ]);
        Pemrograman::create([
            'name' => 'CSS',
            'slug' => 'CSS'
        ]);
        Pemrograman::create([
            'name' => 'Javascript',
            'slug' => 'Javascript'
        ]);
        Pemrograman::create([
            'name' => 'PHP',
            'slug' => 'PHP'
        ]);
        Pemrograman::create([
            'name' => 'Laravel',
            'slug' => 'Laravel'
        ]);
        Pemrograman::create([
            'name' => 'Tailwind',
            'slug' => 'Tailwind'
        ]);
        Pemrograman::create([
            'name' => 'Bootstrap',
            'slug' => 'Bootstrap'
        ]);
        Pemrograman::create([
            'name' => 'React JS',
            'slug' => 'ReactJS'
        ]);
        Pemrograman::create([
            'name' => 'Vue JS',
            'slug' => 'VueJS'
        ]);

        User::create([
            'name' => 'Jul',
            'email' => 'julll9900@gmail.com',
            'password' => Hash::make('090809'),
        ]);

        Blog::factory(10)->create();
    }
    
}
// Blog::create([
//     'title' => 'Judul Pertama',
//     'slug' => 'judul-pertama',
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus facilis in quam impedit a est!',
//     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non quo est saepe repellat, totam facilis quaerat eveniet expedita qui molestiae sed earum molestias commodi labore voluptatum ducimus voluptatibus quas libero, autem quia. Quia, commodi numquam doloremque sint nemo reprehenderit placeat, natus porro temporibus explicabo et eius aliquam eos distinctio omnis voluptas quo quasi veniam accusantium quae ipsam! Quod impedit fuga nisi est deserunt sint repellendus assumenda doloribus libero fugiat veritatis odio eius perspiciatis veniam esse labore nulla, ad iure quos quibusdam omnis facere repudiandae? Voluptates, culpa libero? Architecto odio amet incidunt quo accusantium consequuntur repudiandae eaque porro? Totam, numquam blanditiis?',
//     'category_id' => 1,
// ]);
// Blog::create([
//     'title' => 'Judul kedua',
//     'slug' => 'judul-kedua',
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus facilis in quam impedit a est!',
//     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non quo est saepe repellat, totam facilis quaerat eveniet expedita qui molestiae sed earum molestias commodi labore voluptatum ducimus voluptatibus quas libero, autem quia. Quia, commodi numquam doloremque sint nemo reprehenderit placeat, natus porro temporibus explicabo et eius aliquam eos distinctio omnis voluptas quo quasi veniam accusantium quae ipsam! Quod impedit fuga nisi est deserunt sint repellendus assumenda doloribus libero fugiat veritatis odio eius perspiciatis veniam esse labore nulla, ad iure quos quibusdam omnis facere repudiandae? Voluptates, culpa libero? Architecto odio amet incidunt quo accusantium consequuntur repudiandae eaque porro? Totam, numquam blanditiis?',
//     'category_id' => 1,
// ]);
// Blog::create([
//     'title' => 'Judul ketiga',
//     'slug' => 'judul-ketiga',
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus facilis in quam impedit a est!',
//     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non quo est saepe repellat, totam facilis quaerat eveniet expedita qui molestiae sed earum molestias commodi labore voluptatum ducimus voluptatibus quas libero, autem quia. Quia, commodi numquam doloremque sint nemo reprehenderit placeat, natus porro temporibus explicabo et eius aliquam eos distinctio omnis voluptas quo quasi veniam accusantium quae ipsam! Quod impedit fuga nisi est deserunt sint repellendus assumenda doloribus libero fugiat veritatis odio eius perspiciatis veniam esse labore nulla, ad iure quos quibusdam omnis facere repudiandae? Voluptates, culpa libero? Architecto odio amet incidunt quo accusantium consequuntur repudiandae eaque porro? Totam, numquam blanditiis?',
//     'category_id' => 3,
// ]);
// Blog::create([
//     'title' => 'Judul keempat',
//     'slug' => 'judul-keempat',
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus facilis in quam impedit a est!',
//     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non quo est saepe repellat, totam facilis quaerat eveniet expedita qui molestiae sed earum molestias commodi labore voluptatum ducimus voluptatibus quas libero, autem quia. Quia, commodi numquam doloremque sint nemo reprehenderit placeat, natus porro temporibus explicabo et eius aliquam eos distinctio omnis voluptas quo quasi veniam accusantium quae ipsam! Quod impedit fuga nisi est deserunt sint repellendus assumenda doloribus libero fugiat veritatis odio eius perspiciatis veniam esse labore nulla, ad iure quos quibusdam omnis facere repudiandae? Voluptates, culpa libero? Architecto odio amet incidunt quo accusantium consequuntur repudiandae eaque porro? Totam, numquam blanditiis?',
//     'category_id' => 2,
// ]);

// \App\Models\User::factory(10)->create();

// \App\Models\User::factory()->create([
//     'name' => 'Test User',
//     'email' => 'test@example.com',
// ]);