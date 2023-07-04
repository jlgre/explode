<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('campaigns.index', [
            'campaigns' => Campaign::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('campaigns.upsert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Campaign::create([
            'name' => $request->get('name')
        ]);

        return redirect('/campaigns');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('campaigns.show', [
            'campaign' => Campaign::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('campaigns.upsert', [
            'campaign' => Campaign::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Campaign::findOrFail($id)->update($request->all());

        return redirect('/campaigns/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Campaign::findOrFail($id)->delete();

        return redirect('/campaigns');
    }
}
