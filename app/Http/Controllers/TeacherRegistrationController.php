<?php

namespace App\Http\Controllers;

use App\Models\TeacherRegistration;
use Illuminate\Http\Request;

class TeacherRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            "data" => TeacherRegistration::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teacher = TeacherRegistration::create($request->all());
        return response()->json([
            "message" => "Teacher added successfully",
            "data" => $teacher,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        $registration = TeacherRegistration::find($id);
        if (!$registration) {
            abort(code: 404, message: "Invalid Information");
        }
        return response()->json([
            "message" => "Teacher retrieved successfully.",
            "data" => TeacherRegistration::find($id),
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registration $registration, $id)
    {
        $registration->update($request->all());
        return response()->json([
            "message" => "Teacher info updated successfully.",
            "data" => $registration,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration, $id)
    {
        $teacher->delete();
        return response()->json([
            "message" => "Teacher was deleted successfully.",
            "data" => $teacher,
        ]);
    }
}
