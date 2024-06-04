<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Booking;

class AdminController extends Controller
{
    public function dashboard()
    {

        $pendingBookings = Booking::where('status', 'pending')->get();
        $courses = Course::all();

        return view('admin.dashboard', compact('pendingBookings', 'courses'));
    }

    public function acceptBooking(Booking $booking)
    {

        $booking->status = 'accepted';
        $booking->save();

        return redirect()->route('admin.dashboard')->with('success', 'Prenotazione accettata con successo!');
    }

    public function rejectBooking(Booking $booking)
    {

        $booking->status = 'rejected';
        $booking->save();

        return redirect()->route('admin.dashboard')->with('successo', 'Prenotazione rifiutata ');
    }
}
