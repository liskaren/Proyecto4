<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use Illuminate\Http\Request;

/**
 * Class OperatorController
 * @package App\Http\Controllers
 */
class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operators = Operator::paginate();

        return view('operator.index', compact('operators'))
            ->with('i', (request()->input('page', 1) - 1) * $operators->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $operator = new Operator();
        return view('operator.create', compact('operator'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Operator::$rules);

        $operator = Operator::create($request->all());

        return redirect()->route('operators.index')
            ->with('success', 'Operator created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $operator = Operator::find($id);

        return view('operator.show', compact('operator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $operator = Operator::find($id);

        return view('operator.edit', compact('operator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Operator $operator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Operator $operator)
    {
        request()->validate(Operator::$rules);

        $operator->update($request->all());

        return redirect()->route('operators.index')
            ->with('success', 'Operator updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $operator = Operator::find($id)->delete();

        return redirect()->route('operators.index')
            ->with('success', 'Operator deleted successfully');
    }
}
