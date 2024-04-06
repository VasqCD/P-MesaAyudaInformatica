<?php

namespace App\Http\Controllers;

use App\Models\Secuencium;
use App\Http\Requests\SecuenciumRequest;

/**
 * Class SecuenciumController
 * @package App\Http\Controllers
 */
class SecuenciumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $secuencia = Secuencium::paginate();

        return view('secuencium.index', compact('secuencia'))
            ->with('i', (request()->input('page', 1) - 1) * $secuencia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $secuencium = new Secuencium();
        return view('secuencium.create', compact('secuencium'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SecuenciumRequest $request)
    {
        Secuencium::create($request->validated());

        return redirect()->route('secuencia.index')
            ->with('success', 'Secuencium created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $secuencium = Secuencium::find($id);

        return view('secuencium.show', compact('secuencium'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $secuencium = Secuencium::find($id);

        return view('secuencium.edit', compact('secuencium'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SecuenciumRequest $request, Secuencium $secuencium)
    {
        $secuencium->update($request->validated());

        return redirect()->route('secuencia.index')
            ->with('success', 'Secuencium updated successfully');
    }

    public function destroy($id)
    {
        Secuencium::find($id)->delete();

        return redirect()->route('secuencia.index')
            ->with('success', 'Secuencium deleted successfully');
    }
}
