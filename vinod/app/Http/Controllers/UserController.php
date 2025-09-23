<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // GET /users
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    // GET /users/{id}
    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json($user);
    }

    // POST /users
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->mobile = $request->input('mobile');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->address = $request->input('address');
       // $user->password = bcrypt($request->input('password')); // Hash the password 
       // $user->created() = now();
       // $user->updated() = now();

       // $user->password = bcrypt($request->input('password')); // Hash the password
        $user->save();
        if ($user) {
            return response()->json(['message' => 'User created successfully', 'data' => $user], 201);
        } else {
            return response()->json(['message' => 'User creation failed'], 500);
        }
    }
     // put
    public function update(Request $request, $id)
    {
        // Validate incoming data
        $validated = $request->validate([
            'name'          => 'required|string|max:50',
            'email'         => 'required|email|unique:users,email,' . $id,
            'mobile'        => 'nullable|string|max:20',
            'date_of_birth' => 'nullable|date',
            'address'       => 'nullable|string|max:255',
        ]);

        // Find user or return 404
        $user = User::findOrFail($id);

        // Update user
        $user->update($validated);

        return response()->json([
            'message' => 'User updated successfully',
            'data'    => $user
        ], 200);
    }

    // DELETE /users/{id}
    public function destroy($id)
    {
        $deleted = User::destroy($id);
        if ($deleted) {
            return response()->json(['message' => 'User deleted successfully']);
        }

        return response()->json(['message' => 'User not found'], 404);
    }
}