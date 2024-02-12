<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Reservation;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //pour affcher tous les books
        // $books = Book::all();

        // pour afficher just les books pas reserver
         $books = Book::doesntHave('reservations')->get();
        return view('welcome',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $books= Book::paginate(5);
        return view('ajouter',compact('books'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
         $book = new Book();
        $book ->title=$request->input('title');
         $book->author=$request->input('author');
         $book ->description=$request->input('description');
        $book ->save();
        return redirect()->route('books.create');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $book =Book::find($id);
        return view('detail',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $book = Book::find($id);
        return view('edit', compact('book'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
       $book= Book::find($id);
         $book ->title=$request->input('title');
        $book ->author=$request->input('author');
         $book->description=$request->input('description');
        $book ->save();
        return redirect()->route('books.create');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $book= Book::find($id);
        $book -> delete();
        return redirect()->route('books.create');
        

    }


}
