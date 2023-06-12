<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use Illuminate\Http\Request;

class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            "data" => Parents::all(),
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $parents = Parents::create($request->all());
        return response()->json([
            "message" => "Parent added successfully",
            "data" => $parents,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Parents $parents)
    {
        $parents = Parents::find($id);
        if (!$parents) {
            abort(code: 404, message: "Invalid Information");
        }
        return response()->json([
            "message" => "Parent retrieved successfully.",
            "data" => Parent::find($id),
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Parents $parents)
    {
        $parents->update($request->all());
        return response()->json([
            "message" => "Parent info updated successfully.",
            "data" => $parents,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parents $parents)
    {
        $parents->delete();
        return response()->json([
            "message" => "Parent was deleted successfully.",
            "data" => $parents,
        ]);
    }
}
