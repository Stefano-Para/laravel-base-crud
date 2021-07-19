<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
