<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWordTypeRequest;
use App\Http\Requests\UpdateWordTypeRequest;
use App\Models\WordType;

class WordTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $wordtypes = WordType::paginate(5);

        return view('wordtypes.index', ['wordtypes'=>$wordtypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWordTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // public function show(WordType $wordType)
    // {
    //     //
    // }
    public function show(int $id)
    {
        $wordtypes = WordType::find($id);

        return view('wordtypes.show', compact(['wordtypes']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WordType $wordType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWordTypeRequest $request, WordType $wordType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WordType $wordType)
    {
        //
    }
}
