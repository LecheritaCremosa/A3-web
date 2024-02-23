<?php

namespace App\Http\Controllers;

use App\Models\EnvironmentType;
use App\Models\LearningEnvironment;
use App\Models\Location;
use Illuminate\Http\Request;

class LearningEnvironmentController extends Controller
{
    private $rules = [
        'name' => 'required|string|max:50|min:2',
        'capacity' => 'numeric|min:3|max:999999999',
        'area_mt2' => 'numeric|max:999999999|min:3',
        'floor' => 'required|string|max:50|min:1',
        'inventory' => 'string|max:150|min:1',
        'type_id' => 'numeric',
        'location_id' => 'numeric',
        'status' => 'string|max:20|min:5',
    ];

    private $traductionAttributes = [
        'name' => 'Nombre',
        'capacity' => 'Capacidad',
        'area_mt2' => 'Area',
        'floor' => 'Piso',
        'inventory' => 'Inventario',
        'type_id' => 'Tipo',
        'location_id' => 'Ubicación',
        'status' => 'Estado',
    ];
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $learning_environments = LearningEnvironment::all(); 
        return view('learning_environment.index', compact('learning_environments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $environments_types = EnvironmentType::all();
        $locations = Location::all();
        
        $status = array(
            ['name' => 'ACTIVO', 'value' => 'ACTIVO'],
            ['name' => 'INACTIVO', 'value' => 'INACTIVO'],
        );

        return view('learning_environment.create', compact('environments_types', 'locations', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $learning_environment = LearningEnvironment::create($request->all());
        session()->flash('message', 'Registro creado exitosamente');
        return redirect()->route('learning_environment.index');
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
        $learning_environment = LearningEnvironment::find($id);
        if($learning_environment) 
        {
            $environment_types = EnvironmentType::all();
            $locations = Location::all();
            $status = array(
                ['name' => 'ACTIVO', 'value' => 'ACTIVO'],
                ['name' => 'INACTIVO', 'value' => 'INACTIVO'],
            );
            return view('learning_environment.edit', compact('learning_environment', 'environments_types', 'locations', 'status')); //error OTAKUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUU
        }

        session()->flash('warning', 'No se encuentra el registro solicitado');
        return redirect()->route('learning_environment.index');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $learning_environment = LearningEnvironment::find($id);
        if($learning_environment) 
        {
            $learning_environment->update($request->all());
            session()->flash('message', 'Registro actualizado exitosamente');
        }
        else
        {
            return redirect()->route('learning_environment.index');
            session()->flash('warning', 'No se encuentra el registro solicitado');
        }
        return redirect()->route('learning_environment.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $learning_environment = LearningEnvironment::find($id);
        if($learning_environment) 
        {
            $learning_environment->delete(); 
            session()->flash('message', 'Registro eliminado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el registro solicitado');
        }
        return redirect()->route('learning_environment.index');
    }
}
