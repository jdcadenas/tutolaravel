<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Image;
use App\Models\Location;
use App\Models\Profile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        \App\Models\Group::factory(3)->create();
        \App\Models\Level::factory()->create(['name' => 'Oro']);
        \App\Models\Level::factory()->create(['name' => 'Plata']);
        \App\Models\Level::factory()->create(['name' => 'Bronce']);
        
        \App\Models\User::factory(5)->create()->each(function ($user) {
            $profile = $user->profile()->save(Profile::factory()->make());
            $profile->location()->save(Location::factory()->make());
            $user->groups()->attach($this->array(rand(1, 3)));

            $user->image()->save(Image::factory()->make([
                'url' => 'https://lorempixel.com/90/90/'

               
            ]));
        });

        \App\Models\Category::factory(4)->create();
        \App\Models\Tag::factory(12)->create();

        \App\Models\Post::factory(40)->create()->each(function($post){
            $post->image()->save(Image::factory()->make());
            $post->tags()->attach($this->array(rand(1, 12)));

            $number_comments=rand(1,6);

            for ($i=0; $i <= $number_comments; $i++) { 
                $post->comments()->save(Comment::factory()->make());
            }

        });

        
        \App\Models\Category::factory(4)->create();
        \App\Models\Tag::factory(12)->create();

        \App\Models\Video::factory(40)->create()->each(function($video){
            $video->image()->save(Image::factory()->make());
            $video->tags()->attach($this->array(rand(1, 12)));

            $number_comments=rand(1,6);

            for ($i=0; $i <= $number_comments; $i++) { 
                $video->comments()->save(Comment::factory()->make());
            }

        });

    }

    public function array($max)
    {
        $values = [];
        for ($i = 0; $i <= $max; $i++) {
            $values = $i;
        }

        return $values;
    }
}
