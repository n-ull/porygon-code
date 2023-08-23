<?php

namespace App\Http\Controllers;

use App\Models\Draft;
use App\Models\DraftVersion;
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

        //validate the request
        $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'v_title' => 'required|min:3|max:255',
            'v_content' => 'required|min:10',
        ]);

        //create a new draft
        $draft = Draft::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category,
            'user_id' => auth()->id(),
        ]);

        // create first version of the draft
        $draftVersion = DraftVersion::create([
            'title' => $request->v_title,
            'content' => $request->v_content,
            'draft_id' => $draft->id
        ]);

        $draft->anchoredVersion()->associate($draftVersion);
        $draft->save();

        //pass all $request to the back page
        return redirect()->to(route('draft.show', $draft->id));
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
