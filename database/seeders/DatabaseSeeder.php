<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // rodar apenas uma classe de seed
        /* $this->call(ArticlesSeed::class); */

        //rodar varias classes ao mesmo tempo
         $this->call([
            CategoriesSeed::class,
            ArticlesSeed::class
        ]);
        
    }
}
