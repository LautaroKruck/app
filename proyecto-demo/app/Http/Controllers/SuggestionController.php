<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuggestionController extends Controller
{
    // Mostrar el formulario de sugerencias
    public function create()
    {
        return view('do-suggestion');
    }

    // Guardar una nueva sugerencia
    public function store(Request $request)
    {
        $request->validate([
            'contact_name' => 'required|string|max:255',
            'contact_email' => 'required|email',
            'suggested_name' => 'required|string|max:255',
            'suggested_age' => 'required|integer|min:10|max:50',
            'suggested_nationality' => 'required|string|max:255',
            'suggested_position' => 'required|string|max:255',
            'message' => 'nullable|string|max:1000',
        ]);

        Suggestion::create([
            'user_id' => Auth::id(),
            'contact_name' => $request->contact_name,
            'contact_email' => $request->contact_email,
            'suggested_name' => $request->suggested_name,
            'suggested_age' => $request->suggested_age,
            'suggested_nationality' => $request->suggested_nationality,
            'suggested_position' => $request->suggested_position,
            'message' => $request->message,
        ]);

        return redirect()->route('profile.mysuggestions')->with('success', 'Sugerencia enviada con éxito.');
    }

    // Eliminar una sugerencia
    public function destroy(Suggestion $suggestion)
    {
        // Asegúrate de que el usuario sea el dueño
        if ($suggestion->user_id !== Auth::id()) {
            abort(403);
        }

        $suggestion->delete();

        return back()->with('success', 'Sugerencia eliminada.');
    }

    // (Opcional) Mostrar sugerencias propias en una vista
    public function index()
    {
        $suggestions = Suggestion::where('user_id', Auth::id())->latest()->get();
        return view('users.my-suggestions', compact('suggestions'));
    }
}
