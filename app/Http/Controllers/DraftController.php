<?php

namespace App\Http\Controllers;

use App\Models\Draft;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class DraftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drafts = Draft::where('user_id', auth()->id())->paginate(10);
        return view('draft.index', compact('drafts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('draft.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //pass all $request to the back page
        return back()->with('success', $request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Draft $draft)
    {
        return view('draft.show', compact('draft'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Draft $draft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Draft $draft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Draft $draft)
    {
        //
    }
}
