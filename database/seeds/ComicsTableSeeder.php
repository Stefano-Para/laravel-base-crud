<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Illuminate\Support\Str;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $comic) {
            // creazione istanza
            $newComic = new Comic();
            
            // valorizzazione proprietà
            $newComic->title = $comic["title"];
            $newComic->description = $comic["description"];
            $newComic->thumb = $comic["thumb"];
            $newComic->price = $comic["price"];
            $newComic->series = $comic["series"];
            $newComic->sale_date = $comic["sale_date"];
            $newComic->type = $comic["type"];
            $slug = $comic["title"];
            $newComic->slug = Str::slug($slug, '-');

            // salvataggio oggetto
            $newComic->save();
        }
    }
}
