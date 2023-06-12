<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use Illuminate\Http\Request;

class AccomodationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            "data" => Accomodation::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $accomodation = Accomodation::create($request->all());
        return response()->json([
            "message" => "Room Booking done successfully",
            "data" => $accomodation,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Accomodation $accomodation)
    {
        $accomodation = Accomodation::find($id);
        if (!$accomodation) {
            abort(code: 404, message: "Invalid Information");
        }
        return response()->json([
            "message" => "Room details retrieved successfully.",
            "data" => Accomodation::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accomodation $accomodation)
    {
        $accomodation->update($request->all());
        return response()->json([
            "message" => "Room info updated successfully.",
            "data" => $accomodation,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accomodation $accomodation)
    {
        $accomodation->delete();
        return response()->json([
            "message" => "Accomodation details deleted successfully.",
            "data" => $accomodation,
        ]);
    }
}
