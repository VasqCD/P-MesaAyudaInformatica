<?php

namespace App\Http\Controllers;

use App\Models\Problema;
use App\Http\Requests\ProblemaRequest;

/**
 * Class ProblemaController
 * @package App\Http\Controllers
 */
class ProblemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $problemas = Problema::paginate();

        return view('problema.index', compact('problemas'))
            ->with('i', (request()->input('page', 1) - 1) * $problemas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $problema = new Problema();
        return view('problema.create', compact('problema'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProblemaRequest $request)
    {
        Problema::create($request->validated());

        return redirect()->route('problemas.index')
            ->with('success', 'Problema created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $problema = Problema::find($id);

        return view('problema.show', compact('problema'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $problema = Problema::find($id);

        return view('problema.edit', compact('problema'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProblemaRequest $request, Problema $problema)
    {
        $problema->update($request->validated());

        return redirect()->route('problemas.index')
            ->with('success', 'Problema updated successfully');
    }

    public function destroy($id)
    {
        Problema::find($id)->delete();

        return redirect()->route('problemas.index')
            ->with('success', 'Problema deleted successfully');
    }
}
