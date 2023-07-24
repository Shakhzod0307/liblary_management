<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Section;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books')->with('books',$books);
    }

    // Display authors of database
    public function authors()
    {

        $name = Book::all();
        return view('authors')->with('authors', $name);
    }


    public function publisher()
    {
        $publishers = Book::all();
        return view('publishers')->with('publishers',$publishers);
    }

    public function settings():View
    {
        $books = Book::all();
        return view('settings')->with('books',$books);
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
        $book = Book::find($id); 
        $section = Section::pluck('name','id');
        return view('bookshow')->with('books',$book)->with('section',$section);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editauthor(string $id)
    {
        $author = Book::find($id); 
        return view('editauthor')->with('author',$author);
    }


    /**
     * Update the specified resource in storage.
     */
    public function updateauthor(Request $request, string $id):RedirectResponse
    {
        $input = $request->all();
        $update = Book::find($id);
        $update->update($input);
        return redirect()->route('authors')->with('success','Successfully updated!');
        
    }

    public function editpublisher(string $id)
    {
        $publisher = Book::find($id); 
        return view('editpublisher')->with('publisher',$publisher);
    }


    /**
     * Update the specified resource in storage.
     */
    public function updatepublisher(Request $request, string $id):RedirectResponse
    {
        $input = $request->all();
        $update = Book::find($id);
        $update->update($input);
        return redirect()->route('publishers')->with('success','Successfully updated!');
        
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function deleteauthor(string $id)
    {
        Book::destroy($id);
        return redirect()->route('authors')->with('success','Successfully deleted!');

    }
    public function deletepublisher(string $id)
    {
        Book::destroy($id);
        return redirect()->route('publishers')->with('success','Successfully deleted!');

    }

    public function editsettings(Request $request, string $id)
    {
        $settings = Book::find($id);
        
        $section = Section::pluck('name','id');
        return view('editsettings')->with('settings',$settings)->with('section',$section);
    }
    public function updatesettings(Request $request, string $id):RedirectResponse
    {
        $settings = Book::find($id);    
        if($request->file('image')){
            $file= $request->file('image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('/images'), $filename);
            $settings['image']= $filename;
        }
        $settings->image = $settings['image']= $filename;
        $input = $request->all();
        $update = Book::find($id);
        $update->update($input);
        $settings->save();
        return redirect()->route('settings')->with('success','Successfully updated!');
        
    }
    /**
     * Remove the specified resource from storage.
     */
    public function deletesettings(string $id)
    {
        Book::destroy($id);
        return redirect()->back()->with('success','Successfully deleted!');
    }

}
