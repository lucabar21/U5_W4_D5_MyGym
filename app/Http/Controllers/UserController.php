<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use App\Models\Course;
use App\Models\User;

class UserController extends Controller
{
    public function dashboard()
    {
        $userId = Auth::id();
        $acceptedBookings = Booking::where('status', 'accepted')->where('user_id', $userId)->get();
        $courses = Course::all();

        return view('user.dashboard', compact('acceptedBookings', 'courses'));
    }

    public function sendBooking(Booking $booking)
    {

        $booking->status = 'pending';
        $booking->save();

        return redirect()->route('user.dashboard')->with('success', 'Prenotazione inviata con successo!');
    }

    public function discardBooking(Booking $booking)
    {

        // $booking->status = 'rejected';
        $booking->delete();

        return redirect()->route('user.dashboard')->with('success', ' Corso annullato con successo!');
    }
}
