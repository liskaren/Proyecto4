<?php

namespace App\Http\Controllers;

use App\Models\Linea;
use Illuminate\Http\Request;

/**
 * Class LineaController
 * @package App\Http\Controllers
 */
class LineaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lineas = Linea::paginate();

        return view('linea.index', compact('lineas'))
            ->with('i', (request()->input('page', 1) - 1) * $lineas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $linea = new Linea();
        return view('linea.create', compact('linea'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Linea::$rules);

        $linea = Linea::create($request->all());

        return redirect()->route('lineas.index')
            ->with('success', 'Linea created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $linea = Linea::find($id);

        return view('linea.show', compact('linea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $linea = Linea::find($id);

        return view('linea.edit', compact('linea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Linea $linea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Linea $linea)
    {
        request()->validate(Linea::$rules);

        $linea->update($request->all());

        return redirect()->route('lineas.index')
            ->with('success', 'Linea updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $linea = Linea::find($id)->delete();

        return redirect()->route('lineas.index')
            ->with('success', 'Linea deleted successfully');
    }
}
