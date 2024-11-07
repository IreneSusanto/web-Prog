<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post as PostModel;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //nisialisasi faker dengan bhs indonesia
        $faker = Faker::create('id_ID');

        //mengisi data dengan data fake sebnyk 20 untuk data post->looping
        for($i=0; $i<20; $i++){
            //insert into post values('')
            PostModel::create([
                'title' => $faker->sentence, //judul post bhs indo
                'body' => $faker->paragraph, //isi post bhs indo
            ]);
        }
    }
}
