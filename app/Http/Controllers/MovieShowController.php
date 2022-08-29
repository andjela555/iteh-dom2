<?php

namespace App\Http\Controllers;

use App\Models\MovieShow;
use Illuminate\Http\Request;

class MovieShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(MovieShow::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movieShow = MovieShow::create($request->all());
        return response()->json($movieShow);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MovieShow  $movieShow
     * @return \Illuminate\Http\Response
     */
    public function show(MovieShow $movieShow)
    {
        return response()->json($movieShow);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MovieShow  $movieShow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MovieShow $movieShow)
    {
        $movieShow->update($request->all());
        return response()->json($movieShow);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MovieShow  $movieShow
     * @return \Illuminate\Http\Response
     */
    public function destroy(MovieShow $movieShow)
    {
        $movieShow->delete();
        return response()->noContent();
    }
}
