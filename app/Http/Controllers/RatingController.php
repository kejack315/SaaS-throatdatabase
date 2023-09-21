<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRatingRequest;
use App\Http\Requests\UpdateRatingRequest;
use App\Models\Rating;
use App\Models\WordType;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ratings = Rating::all();
        return view('ratings.index', compact(['ratings']) );
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
    public function store(StoreRatingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // public function show(Rating $rating)
    // {
    //     //


    // }

    public function show(Rating $rating)
    {
        //

//        $ratings = Rating::find($id);

        return view('ratings.show', compact(['rating']));
    }
    public function edit(Rating $rating)
    {
        return view('ratings.edit', compact('rating'));
    }

    /**
     * Show the form for editing the specified resource.
     */
//    public function edit(Rating $edit)
//    {
//        return view('ratings.edit', compact(['edit']));
//        //
//    }
//
protected $fullable= [

]
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRatingRequest $request, Rating $rating)
    {
        $newName = $request->name;
        $newIcon = $request->icon;
        $newStars = $request->stars;
        $rating->update([
            'name'=>$newName,
            'star'=>$newStars,
            'icon'=>$newIcon,
        ]);
        return redirect('ratings.index')
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rating $rating)
    {
        //
    }
}
