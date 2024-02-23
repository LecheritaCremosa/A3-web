<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    private $rules = [
        'name' => 'required|max:100|min:8',
        'type' => 'required|max:100|min:8',
    ];

    private $traductionAttributes = [
        'name' => 'Nombre',
        'type' => 'Tipo',
    ];
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = Career::all(); // select * from career
        return view('career.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = array(
            ['name' => 'TÉCNICO', 'value' => 'TÉCNICO'],
            ['name' => 'TECNOLOGO', 'value' => 'TECNOLOGO'],
         
            
        );
        return view('career.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $career = Career::create($request->all());
        session()->flash('message', 'Registro creado exitosamente');
        return redirect()->route('career.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $career = Career::find($id);
        if($career)
        {
        $types = array(
                ['name' => 'TECNICO', 'value' => 'TECNICO'],
                ['name' => 'TECNOLOGO', 'value' => 'TECNOLOGO'],   
            );
         return view('career.edit', compact('career', 'types'));
        
        }

        session()->flash('warning', 'No se encuentra el registro solicitado');
        return redirect()->route('career.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $career = Career::find($id);
        if($career) // si la carrera existe
        {
           $career->update($request->all());
            session()->flash('message', 'Registro actualizado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el registro solicitado');
           
        }
        return redirect()->route('career.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $career = Career::find($id);
        if($career) // si la causal existe
        {
            $career->delete(); //delete from causal where id = x
            session()->flash('message', 'Registro eliminado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el registro solicitado');
           
        }
        return redirect()->route('career.index');
    }
}
