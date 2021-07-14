<?php

namespace App\Http\Controllers;

use App\Models\Word;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class WordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Word  $words
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $input= $request->all();
        $lang_from=Arr::get($input,'lang_from');
        $lang_to=Arr::get($input,'lang_to');
        $word=Arr::get($input,'word');



        $Result=Word::where('dictionary_word',$word)->with("bridge")->first();

        return response()->json($Result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Word  $words
     * @return \Illuminate\Http\Response
     */
    public function edit(Word $words)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Word  $words
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Word $words)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Word  $words
     * @return \Illuminate\Http\Response
     */
    public function destroy(Word $words)
    {
        //
    }
}
