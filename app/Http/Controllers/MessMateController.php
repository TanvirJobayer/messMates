<?php

namespace App\Http\Controllers;

use App\Models\messMate;
use Illuminate\Http\Request;

class MessMateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messMates = messMate::all();
        return view('messMates.index', compact('messMates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('messMates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $messMate = new messMate;
        $messMate->name = request('name');
        $messMate->email = request('email');
        $messMate->phone = request('phone');
        $messMate->district = request('district');
        $messMate->status = request('status');
        $messMate->age = request('age');
        $messMate->save();
        return redirect('/messMates');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $messMate = messMate::findOrFail($id);
        return view('messMates.show', compact('messMate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $messMate = messMate::findOrFail($id);
        return view('messMates.edit', compact('messMate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $messMate = messMate::findOrFail($id);
        $messMate->name = request('name');
        $messMate->email = request('email');
        $messMate->phone = request('phone');
        $messMate->district = request('district');
        $messMate->status = request('status');
        $messMate->age = request('age');
        $messMate->save();
        return redirect('/messMates');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $messMate = messMate::findOrFail($id);
        $messMate->delete();
        return redirect('/messMates');
    }
}
