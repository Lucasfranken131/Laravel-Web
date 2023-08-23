<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class FormController extends Controller {
    public function showForm() {
        return view('form');
    }

    public function processForm(Request $request) {
        try {
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);
            return response()->json(['message' => 'Dados validados com sucesso', 'data' => $validatedData]);
        
        } catch (ValidationException $exception) {
            return response()->json(['error' => 'Erro de validacao', 'messages' => $exception->errors()], 422);
        }
    }
}


