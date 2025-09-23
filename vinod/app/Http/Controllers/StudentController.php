<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  function list(){
    return Student::all();
  }
  public function store(Request $request)
    {
        // Validate incoming data
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|string|max:20',
        ]);

        // Create the student
        $student = Student::create($validated);

        // Return JSON response
        return response()->json([
            'message' => 'Student added successfully',
            'data'    => $student,
        ], 201);
    }

  function updateStudent(Request $req)  {
    return Student::where('id',$req->id)->update([
      'name'=>$req->name,
      'email'=>$req->email,
      'phone'=>$req->phone
    ]);
    
  }
   public function destroy($id)
    {
        $deleted = Student::destroy($id);   // returns number of records deleted

        if ($deleted) {
            return response()->json(['message' => 'Student deleted successfully'], 200);
        }

        return response()->json(['message' => 'Student not found'], 404);
    }
    public function search(Request $request)
    {
        $keyword = $request->query('keyword');
        if (!$keyword) {
            return response()->json([
                'message' => 'Please provide a search keyword.'
            ], 400);
        }

        $results = Student::where('name', 'LIKE', "%{$keyword}%")
            ->orWhere('email', 'LIKE', "%{$keyword}%")
            ->orWhere('phone', 'LIKE', "%{$keyword}%")
            ->get();

        return response()->json([
            'count'   => $results->count(),
            'results' => $results
        ]);
    }

}