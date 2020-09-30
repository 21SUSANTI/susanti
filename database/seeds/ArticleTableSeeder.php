<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'id' => 5,
            'title' => 'Pembelajaran Jobsheet 4 - model',
            'content' => 'Hallo disini saya belajar mengenai model. Model adalah bagian dari MVS
            yang bertanggung jawab untuk menangani basis data (database)',
            'imageurl' => ' '

        ]);
    }
}
