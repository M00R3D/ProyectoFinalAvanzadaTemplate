<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    public function index()
    {
        return view('patients');
    }

    public function handleLogin(Request $request)
    {
        // Lógica de inicio de sesión
    }

    public function details()
    {
        return view('patientsDetail'); // Asegúrate de tener esta vista creada
    }

    // public function index()
    // {
    //     $patients = Patient::all();

    //     return response()->json([
    //         'success' => true,
    //         'data' => $patients
    //     ], 200);
    // }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'medical_history' => 'nullable|string',
            'user_id' => 'required|exists:users,id_user'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }

        $patient = Patient::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Patient created successfully',
            'data' => $patient
        ], 201);
    }

    public function show($id)
    {
        $patient = Patient::find($id);

        if (!$patient) {
            return response()->json([
                'success' => false,
                'message' => 'Patient not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $patient
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $patient = Patient::find($id);

        if (!$patient) {
            return response()->json([
                'success' => false,
                'message' => 'Patient not found'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'medical_history' => 'nullable|string',
            'user_id' => 'required|exists:users,id_user'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }

        $patient->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Patient updated successfully',
            'data' => $patient
        ], 200);
    }

    public function destroy($id)
    {
        $patient = Patient::find($id);

        if (!$patient) {
            return response()->json([
                'success' => false,
                'message' => 'Patient not found'
            ], 404);
        }

        $patient->delete();

        return response()->json([
            'success' => true,
            'message' => 'Patient deleted successfully'
        ], 200);
    }
}
