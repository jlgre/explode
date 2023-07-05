<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('characters.index', [
            'characters' => Character::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('characters.upsert', [
            'campaigns' => Campaign::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Campaign::findOrFail($request->get('campaign_id'))->characters()->create($request->all());

        return redirect('/characters');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('characters.show', [
            'character' => Character::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('characters.upsert', [
            'character' => Character::findOrFail($id),
            'campaigns' => Campaign::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Character::findOrFail($id)->update($request->all());

        return redirect('/characters/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Character::findOrFail($id)->delete();

        return redirect('/characters');
    }
}
