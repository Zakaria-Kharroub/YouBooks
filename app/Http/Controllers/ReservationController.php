<?php

namespace App\Http\Controllers;
use App\Models\Reservation;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $book= Reservation::all();
        return view('welcome',compact('book'));
        
    }

    public function myReservation()
    {
       $user = auth()->user();
    //    $reservations = Reservation::where('user_id',$user->id)->get();
       $reservations = Reservation::with('book')->where('user_id', $user->id)->get();


         return view('myReservation',compact('reservations'));
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



    public function reservation(Request $request)
    {
        
        $reservation = new Reservation();
         $reservation->book_id = $request->input('book_id');
        $reservation->user_id = $request->input('user_id');
         $reservation->date_debut = $request->input('date_debut');
        $reservation->date_fin = $request->input('date_fin');
        $reservation->save();
        return redirect()->route('books.index');

    }

    public function retourner($id)
    {
        $reservation = Reservation::find($id);
         $reservation->delete();
        return redirect()->route('myReservation');
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
