<?php

namespace App\Http\Controllers;

use App\Models\TipoServicio;
use Illuminate\Http\Request;

class TipoServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos = TipoServicio::all();
        return view('/admin/Extras.index', compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/Extras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipoServicio' => 'nullable|string|max:20',
        ]);

        TipoServicio::create($request->all());
        return redirect()->route('/admin/Extras.index')->with('success', 'Tipo de Servicio creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('/admin/Extras.show', compact('tipoServicio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('/admin/Extras.edit', compact('tipoServicio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoServicio $tipoServicio,string $id)
    {
        $request->validate([
            'tipoServicio' => 'nullable|string|max:20',
        ]);

        $tipoServicio->update($request->all());
        return redirect()->route('/admin/Extras.index')->with('success', 'Tipo de Servicio actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoServicio $tipoServicio, string $id)
    {
        $tipoServicio->delete();
        return redirect()->route('/admin/Extras.index')->with('success', 'Tipo de Servicio eliminado exitosamente.');
    }
}
