<?php

namespace App\Http\Controllers;

use App\Models\OwnersBoard;
use Illuminate\Http\Request;

class OwnersBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('modules.owner.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules.owner.create');
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
    public function show(OwnersBoard $ownersBoard)
    {
        return view('modules.owner.slngle');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OwnersBoard $ownersBoard)
    {
        return view('modules.owner.create');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OwnersBoard $ownersBoard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OwnersBoard $ownersBoard)
    {
        //
    }
}
