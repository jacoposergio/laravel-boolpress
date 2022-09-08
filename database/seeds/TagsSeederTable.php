<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'Piatto veloce',
            'Vegano',
            'Piatto freddo',
            'Gluten free',
            'Vegetariano'
        ];

        foreach ($tags as $tag_name) {
            $new_tag = new Tag();
            $new_tag->name = $tag_name;
            $new_tag->slug = Str::slug($tag_name, '-');
            $new_tag->save();
         }
    }
}
