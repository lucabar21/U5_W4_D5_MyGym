<?php

namespace App\Http\Controllers;

use App\Models\Slot;
use Illuminate\Http\Request;

class SlotController extends Controller
{
    public function index()
    {
        $slots = Slot::all();
        return view('slots.index', compact('slots'));
    }

    public function create()
    {
        return view('slots.create');
    }

    public function store(Request $request)
    {


        Slot::create($request->all());

        return redirect()->route('slots.index');
    }

    public function edit(Slot $slot)
    {
        return view('slots.edit', compact('slot'));
    }

    public function update(Request $request, Slot $slot)
    {


        $slot->update($request->all());

        return redirect()->route('slots.index');
    }

    public function destroy(Slot $slot)
    {
        $slot->delete();

        return redirect()->route('slots.index');
    }
}
