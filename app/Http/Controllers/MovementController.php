<?php

namespace App\Http\Controllers;

use App\Models\Movement;
use App\Models\MovementProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'flux' => 'required|string|max:255',
            'company_id' => 'required|numeric',
            'product_id' => 'required|numeric',
            'quantity' => 'required|numeric',
            'delivery_price' => 'nullable|numeric',
            'observations' => 'nullable|string',
        ]);

        $movement = Movement::create([
            'flux' => $request->flux,
            'company_id' => $request->company_id,
            'delivery_price' => $request->delivery_price,
            'observations' => $request->observations,
            'user_id' => Auth::id(),
        ]);

        MovementProduct::create([
            'movement_id' => $movement->id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
        ]);

        return redirect(route('site.movements'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Movement $movement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movement $movement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movement $movement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movement $movement)
    {
        //
    }
}
