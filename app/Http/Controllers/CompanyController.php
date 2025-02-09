<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'document' => 'required|string|max:255',
            'adress' => 'required|string|max:255',
        ]);

        Company::create([
            'name' => $request->name,
            'type' => $request->type,
            'document' => $request->document,
            'adress' => $request->adress,
        ]);

        return redirect(route('site.companies'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        Company::where('id', $request->id)->update([
            'name' => $request->name,
            'type' => $request->type,
            'document' => $request->document,
            'adress' => $request->adress,
            'status' => $request->status,
        ]);

        return redirect(route('site.companies'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
