<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Article;
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //sinh dữ liệu giả
        $faker = Faker::create('vi');//tạo đối tượng faker băng ngôn ngữ việt nam
        for ($i = 0; $i < 50; $i++) 
        {
            Article::create([
                'title' => 'Bài viết số '.$i+1,
                'content' => $faker->text,
                'author' => $faker->name,
            ]);
        }
    }
}
