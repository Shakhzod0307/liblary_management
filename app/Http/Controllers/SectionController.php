<?php

namespace App\Http\Controllers;
use App\Models\Section;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $section = Section::get();
       
        return view('sections')->with('section', $section);
    }

    public function editsection(string $id)
    {
        $section = Section::find($id); 
        return view('editsection')->with('section',$section);
    }


    /**
     * Update the specified resource in storage.
     */
    public function updatesection(Request $request, string $id):RedirectResponse
    {
        $input = $request->all();
        $update = Section::find($id);
        $update->update($input);
        return redirect()->route('sections')->with('success','Successfully updated!');
        
    }
    public function deletesection(string $id)
    {
        Section::destroy($id);
        return redirect()->back()->with('success','Successfully deleted!');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
