<?php

namespace App\Http\Controllers;

use App\Models\Line;
use Illuminate\Http\Request;

/**
 * Class LineController
 * @package App\Http\Controllers
 */
class LineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lines = Line::paginate();

        return view('line.index', compact('lines'))
            ->with('i', (request()->input('page', 1) - 1) * $lines->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $line = new Line();
        return view('line.create', compact('line'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Line::$rules);

        $line = Line::create($request->all());

        return redirect()->route('lines.index')
            ->with('success', 'Line created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $line = Line::find($id);

        return view('line.show', compact('line'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $line = Line::find($id);

        return view('line.edit', compact('line'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Line $line
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Line $line)
    {
        request()->validate(Line::$rules);

        $line->update($request->all());

        return redirect()->route('lines.index')
            ->with('success', 'Line updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $line = Line::find($id)->delete();

        return redirect()->route('lines.index')
            ->with('success', 'Line deleted successfully');
    }
}
