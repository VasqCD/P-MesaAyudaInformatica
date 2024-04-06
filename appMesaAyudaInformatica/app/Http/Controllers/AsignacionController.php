<?php

namespace App\Http\Controllers;

use App\Models\Asignacion;
use App\Http\Requests\AsignacionRequest;

/**
 * Class AsignacionController
 * @package App\Http\Controllers
 */
class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asignacions = Asignacion::paginate();

        return view('asignacion.index', compact('asignacions'))
            ->with('i', (request()->input('page', 1) - 1) * $asignacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $asignacion = new Asignacion();
        return view('asignacion.create', compact('asignacion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AsignacionRequest $request)
    {
        Asignacion::create($request->validated());

        return redirect()->route('asignacions.index')
            ->with('success', 'Asignacion created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $asignacion = Asignacion::find($id);

        return view('asignacion.show', compact('asignacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $asignacion = Asignacion::find($id);

        return view('asignacion.edit', compact('asignacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AsignacionRequest $request, Asignacion $asignacion)
    {
        $asignacion->update($request->validated());

        return redirect()->route('asignacions.index')
            ->with('success', 'Asignacion updated successfully');
    }

    public function destroy($id)
    {
        Asignacion::find($id)->delete();

        return redirect()->route('asignacions.index')
            ->with('success', 'Asignacion deleted successfully');
    }
}
