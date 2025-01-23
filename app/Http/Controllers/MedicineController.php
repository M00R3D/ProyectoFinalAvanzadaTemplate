<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MedicineController extends Controller
{
    /**
     * Obtener todas las medicinas.
     */
    public function index()
{
    // Obtener todas las medicinas
    $medicines = Medicine::all();

    // Pasar las medicinas a la vista
    return view('medicines', compact('medicines'));
}

    public function handleLogin(Request $request)
    {
        // Lógica de inicio de sesión
    }

    public function details()
    {
        return view('medicinesDetail'); // Asegúrate de tener esta vista creada
    }
     // public function index()
    // {
    //     $medicines = Medicine::all();

    //     return response()->json([
    //         'success' => true,
    //         'data' => $medicines
    //     ], 200); // Código HTTP 200: OK
    // }

    /**
     * Crear una nueva medicina.
     */
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'dosage' => 'required|string|max:50',
            'frequency' => 'required|string|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422); // Código HTTP 422: Unprocessable Entity
        }

        // Crear la medicina
        $medicine = Medicine::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Medicine created successfully',
            'data' => $medicine
        ], 201); // Código HTTP 201: Created
    }

    /**
     * Mostrar una medicina específica.
     */
    public function show($id)
    {
        $medicine = Medicine::find($id);

        if (!$medicine) {
            return response()->json([
                'success' => false,
                'message' => 'Medicine not found'
            ], 404); // Código HTTP 404: Not Found
        }

        return response()->json([
            'success' => true,
            'data' => $medicine
        ], 200); // Código HTTP 200: OK
    }

    /**
     * Actualizar una medicina específica.
     */
    public function update(Request $request, $id)
    {
        $medicine = Medicine::findOrFail($id);
    
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'dosage' => 'required|string|max:255',
            'frequency' => 'required|string|max:255',
            // Otros campos si los hay
        ]);
    
        try {
            $medicine->update($validated);
            return redirect()->route('medicines.edit', $medicine->id)
                ->with('success', 'Medicamento actualizado correctamente');
        } catch (\Exception $e) {
            return redirect()->route('medicines.edit', $medicine->id)
                ->with('error', 'Hubo un error al guardar los cambios');
        }
    }
    

    /**
     * Eliminar una medicina específica.
     */
    public function destroy($id)
    {
        $medicine = Medicine::find($id);

        if (!$medicine) {
            return response()->json([
                'success' => false,
                'message' => 'Medicine not found'
            ], 404); // Código HTTP 404: Not Found
        }

        $medicine->delete();

        return response()->json([
            'success' => true,
            'message' => 'Medicine deleted successfully'
        ], 200); // Código HTTP 200: OK
    }

    public function edit($id)
    {
        $medicine = Medicine::findOrFail($id);
        return view('medicines.edit', compact('medicine'));
    }

}
