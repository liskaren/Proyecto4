<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

/**
 * Class PlantController
 * @package App\Http\Controllers
 */
class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plants = Plant::paginate();

        return view('plant.index', compact('plants'))
            ->with('i', (request()->input('page', 1) - 1) * $plants->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plant = new Plant();
        return view('plant.create', compact('plant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Plant::$rules);

        $plant = Plant::create($request->all());

        return redirect()->route('plants.index')
            ->with('success', 'Plant created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plant = Plant::find($id);

        return view('plant.show', compact('plant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plant = Plant::find($id);

        return view('plant.edit', compact('plant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Plant $plant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plant $plant)
    {
        request()->validate(Plant::$rules);

        $plant->update($request->all());

        return redirect()->route('plants.index')
            ->with('success', 'Plant updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $plant = Plant::find($id)->delete();

        return redirect()->route('plants.index')
            ->with('success', 'Plant deleted successfully');
    }
}
