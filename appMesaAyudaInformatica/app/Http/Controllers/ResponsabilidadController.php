<?php

namespace App\Http\Controllers;

use App\Models\Responsabilidad;
use App\Http\Requests\ResponsabilidadRequest;

/**
 * Class ResponsabilidadController
 * @package App\Http\Controllers
 */
class ResponsabilidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $responsabilidads = Responsabilidad::paginate();

        return view('responsabilidad.index', compact('responsabilidads'))
            ->with('i', (request()->input('page', 1) - 1) * $responsabilidads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $responsabilidad = new Responsabilidad();
        return view('responsabilidad.create', compact('responsabilidad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ResponsabilidadRequest $request)
    {
        Responsabilidad::create($request->validated());

        return redirect()->route('responsabilidads.index')
            ->with('success', 'Responsabilidad created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $responsabilidad = Responsabilidad::find($id);

        return view('responsabilidad.show', compact('responsabilidad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $responsabilidad = Responsabilidad::find($id);

        return view('responsabilidad.edit', compact('responsabilidad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ResponsabilidadRequest $request, Responsabilidad $responsabilidad)
    {
        $responsabilidad->update($request->validated());

        return redirect()->route('responsabilidads.index')
            ->with('success', 'Responsabilidad updated successfully');
    }

    public function destroy($id)
    {
        Responsabilidad::find($id)->delete();

        return redirect()->route('responsabilidads.index')
            ->with('success', 'Responsabilidad deleted successfully');
    }
}
