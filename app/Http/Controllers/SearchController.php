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
        $data = $request->all();
        $books = Book::all();
        if ($data['type'] == 'keywords') 
        {
            $books = $books->where('title', 'LIKE', '%'.$data['keywords'].'%');
        } 
        else if ($data['type'] == 'categories') 
        {
            $category = Category::where('name', $data['keywords'])->name;
            $books = $books->where('category', 'LIKE', '%'.$category.'%');
        } 
        else if ($data['type'] == 'newbooks') 
        {
            $books = $books->sortBy('created_at');
        } 
        else if ($data['type'] == 'popular') 
        {
            $books = $books->sortBy('views');
        } 
        else 
            $books = $books->sortBy('readers');

        return view('search')->with('books', $books);
    }
}
