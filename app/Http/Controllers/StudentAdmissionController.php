<?php

namespace App\Http\Controllers;

use App\Models\StudentAdmission;
use Illuminate\Http\Request;

class StudentAdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            "data" => StudentAdmission::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = StudentAdmission::create($request->all());
        return response()->json([
            "message" => "Student added successfully",
            "data" => $student,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        $registration = StudentAdmission::find($id);
        if (!$registration) {
            abort(code: 404, message: "Invalid Information");
        }
        return response()->json([
            "message" => "Student retrieved successfully.",
            "data" => StudentAdmission::find($id),
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registration $registration, $id)
    {
        $registration->update($request->all());
        return response()->json([
            "message" => "Student info updated successfully.",
            "data" => $registration,
        ]);
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration, $id)
    {
        $student->delete();
        return response()->json([
            "message" => "Student was deleted successfully.",
            "data" => $student,
        ]);
    }
}
