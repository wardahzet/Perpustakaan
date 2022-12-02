<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $books = Book::all();
        if ($request['type'] == 'keywords') 
        {
            $books = $books->where('title', 'LIKE', '%'.$request['keywords'].'%');
        } 
        else if ($request['type'] == 'categories') 
        {
            $category = Category::where('name', $request['keywords'])->name;
            $books = $books->where('category', 'LIKE', '%'.$category.'%');
        } 
        else if ($request['type'] == 'newbooks') 
        {
            $books = $books->sortBy('created_at');
        } 
        else if ($request['type'] == 'popular') 
        {
            $books = $books->sortBy('views');
        } 
        else 
            $books = $books->sortBy('readers');

        return view('search')->with('books', $books);
    }
}
