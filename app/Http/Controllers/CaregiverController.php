<?php

namespace App\Http\Controllers;

use App\Models\Caregiver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CaregiverController extends Controller
{
    /**
     * Obtener todos los cuidadores.
     */
    public function index()
    {
        $caregivers = Caregiver::all();

        return response()->json([
            'success' => true,
            'data' => $caregivers
        ], 200);
    }

    /**
     * Crear un nuevo cuidador.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:caregivers,email',
            'phone' => 'nullable|string|max:15',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }

        $caregiver = Caregiver::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Caregiver created successfully',
            'data' => $caregiver
        ], 201);
    }

    /**
     * Mostrar un cuidador específico.
     */
    public function show($id)
    {
        $caregiver = Caregiver::find($id);

        if (!$caregiver) {
            return response()->json([
                'success' => false,
                'message' => 'Caregiver not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $caregiver
        ], 200);
    }

    /**
     * Actualizar un cuidador específico.
     */
    public function update(Request $request, $id)
    {
        $caregiver = Caregiver::find($id);

        if (!$caregiver) {
            return response()->json([
                'success' => false,
                'message' => 'Caregiver not found'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:caregivers,email,' . $id,
            'phone' => 'nullable|string|max:15',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }

        $caregiver->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Caregiver updated successfully',
            'data' => $caregiver
        ], 200);
    }

    /**
     * Eliminar un cuidador específico.
     */
    public function destroy($id)
    {
        $caregiver = Caregiver::find($id);

        if (!$caregiver) {
            return response()->json([
                'success' => false,
                'message' => 'Caregiver not found'
            ], 404);
        }

        $caregiver->delete();

        return response()->json([
            'success' => true,
            'message' => 'Caregiver deleted successfully'
        ], 200);
    }
}
