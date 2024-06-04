<?php

namespace App\Http\Controllers;

use App\Models\Slot;
use App\Models\Course;
use App\Models\Booking;
use App\Models\Activity;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        $slots = Slot::all();
        $courses = Course::all();
        $activities = Activity::all();
        return view('courses.index', compact('courses', 'bookings', 'slots', 'activities'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {

        $course = Course::create($request->all());
        // $activity = Activity::findOrFail($request->activity_id);
        // $course->activity()->associate($activity);
        // $slot = Slot::findOrFail($request->slot_id);
        // $course->slot()->associate($slot);
        // $course->save();
        return redirect()->route('courses.index');
    }

    public function show(Course $course)
    {
        $acceptedBookings = $course->bookings()->where('status', 'accepted')->get();
        // $acceptedBookings = Booking::where('status', 'accepted')->get();
        return view('courses.show', compact('course', 'acceptedBookings'));
    }

    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $course->update($request->all());
        return redirect()->route('courses.index');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index');
    }


    public function book(Request $request, Course $course)
    {

        if (!$course) {
            return redirect()->back()->with('errore');
        }

        $booking = new Booking();
        $booking->course_id = $course->id;
        $booking->user_id = auth()->id();
        $booking->status = 'pending';
        $booking->save();


        return redirect()->route('user.dashboard');
    }
}
