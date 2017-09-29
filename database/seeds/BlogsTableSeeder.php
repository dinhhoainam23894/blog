<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Blog;
class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker  = faker::create();
        for($i=0;$i<2;$i++){
            $blog = new BLog;
            $blog->title = $faker->title;
            $blog->description = 'aaaaaaaaaaaaaaaa';
            $blog->content = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
            $blog->image = $faker->imageUrl($width = 640, $height = 480);
            $blog->user_id = rand(1,10);
            $blog->save();
        }    
    }
}
