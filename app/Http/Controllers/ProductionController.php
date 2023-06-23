<?php

namespace App\Http\Controllers;

use App\Models\Production;
use Illuminate\Http\Request;

/**
 * Class ProductionController
 * @package App\Http\Controllers
 */
class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productions = Production::paginate();

        return view('production.index', compact('productions'))
            ->with('i', (request()->input('page', 1) - 1) * $productions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $production = new Production();
        return view('production.create', compact('production'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Production::$rules);

        $production = Production::create($request->all());

        return redirect()->route('productions.index')
            ->with('success', 'Production created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $production = Production::find($id);

        return view('production.show', compact('production'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $production = Production::find($id);

        return view('production.edit', compact('production'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Production $production
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Production $production)
    {
        request()->validate(Production::$rules);

        $production->update($request->all());

        return redirect()->route('productions.index')
            ->with('success', 'Production updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $production = Production::find($id)->delete();

        return redirect()->route('productions.index')
            ->with('success', 'Production deleted successfully');
    }
}
