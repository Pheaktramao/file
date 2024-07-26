<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ShowStudentResource;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::list();
        $students = StudentResource::collection($students);
        return response()->json(['success' => true, 'data' => $students], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = Student::store($request);
        return response()->json([
            'success' => $student,
            'data' => true,
            'message' => 'Student created successfully'
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        $student = new ShowStudentResource($student);
        if (!$student) {
            # code...
            return response()->json([
                'success' => false,
                'data' => false,
                'message' => "Student not found with id " . $id
            ], 404);
        }
        return response()->json([
        'success' => true,
        'data' => $student,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Student::find($id)) {
            # code...
            return response()->json([
                'success' => false,
                'data' => false,
                'message' => "Student not found with id ". $id
            ], 404);
        }
        $student = Student::store($request, $id);
        return response()->json([
            'success' => true,
            'data' => $student,
            'message' => 'Student updated successfully'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Student::find($id)) {
            # code...
            return response()->json([
                'success' => false,
                'data' => false,
                'message' => "Student not found with id ". $id
            ], 404);
        }
        Student::find($id)->delete();
        return response()->json([
            'success' => true,
            'data' => true,
            'message' => 'Student deleted successfully'
        ], 200);
    }
}
