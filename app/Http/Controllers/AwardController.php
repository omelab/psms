<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('modules.award.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules.award.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Award $award)
    {
        return view('modules.award.single');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Award $award)
    {
        return view('modules.award.create');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Award $award)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Award $award)
    {
        //
    }
}
