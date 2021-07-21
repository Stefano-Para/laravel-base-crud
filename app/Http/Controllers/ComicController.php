<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(5);
        // è come se fosse
        // $comics = [
        //     'comics' => $comics
        // ];

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $comic = new Comic();

        // $comic->title = $data["title"];
        // $comic->description = $data["description"];
        // $comic->sale_date = $data["sale_date"];
        // $comic->price = $data["price"];
        // $comic->thumb = $data["thumb"];
        // $comic->series = $data["series"];
        // $comic->type = $data["type"];
        // $slug = $data["title"];
        //     $comic->slug = Str::slug($slug, '-');

        // mass assignment
        $slug = $data["title"];
        $data["slug"] = Str::slug($slug, '-');

        $comic->fill($data); // bisogna dare il $fillable nel model

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // 1) -- find e ABORT:
        // $comic = Comic::find($id);
        // if ($comic) {
            // return view('comics/show', compact('comic'));
        // }
        // abort('404', "Ops, something went wrong");

        // 2) -- find or Fail:
        // $comic = Comic::findOrFail($id);
        // return view('comics.show', compact('comic'));

        //3) -- ricerca per slug:
        // $comic = Comic::where('slug', $slug)->firstOrFail();

        //3b) -- ricerca per slug con gestione eccezione::
        // $comic = Comic::where('slug', $slug)->firstOrFail();
        // if($comic) {
        //     return view('comic.show', compact('comic'));
        // }
        // abort (404, 'Page not found');
        
        //4) -- return diretto con errore preimpostato da Laravel: 
        // $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        // $comic = Comic::findOrFail($id);
        return view("comics.edit", compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        // $comic = Comic::findOfFail($id);
        $slug = $data["title"];
        $data["slug"] = Str::slug($slug, '-');
        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        dd($comic);
    }
}
