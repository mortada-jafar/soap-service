<?php

namespace App\Http\Controllers;


use App\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RestStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $students = Student::get();
        return response($students, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $student = Student::create($request->all());
        return response()->json([
            "message" => "student record created",
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show($student)
    {
        $student = Student::findOrFail($student);
        return response($student, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Request $request,  $student)
    {
        $student = Student::findOrFail($student);
        $student->fill($request->all())->save();
        return response()->json([
            "message" => "records updated successfully",
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Student $student
     * @return JsonResponse
     */
    public function destroy( $student)
    {
        $student = Student::findOrFail($student);
        $student->delete();
        return response()->json([
            "message" => "records deleted",
        ], 202);
    }
}
