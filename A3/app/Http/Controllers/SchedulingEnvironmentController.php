<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\LearningEnvironment;
use App\Models\SchedulingEnvironment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SchedulingEnvironmentController extends Controller
{
    private $rules = [
        'course_id' => 'required|numeric',
        'instructor_document' => 'required|numeric',
        'environment_id' => 'required|numeric',
        'date_scheduling' => 'required|date_format:Y-m-d'
    ];

    private $traductionAttributes = [
        'course_id' => 'curso',
        'instructor_document' => 'documento del instructor',
        'environment_id' => 'ambiente',
        'date_scheduling' => 'fecha de programación'
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scheduling_environments= SchedulingEnvironment::all(); // select * from causal
        //dd($causals);
        return view('scheduling_environment.index', compact('scheduling_environments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $courses = Course::all();
        $learning_environments = LearningEnvironment::all();
        return view('scheduling_environment.create', compact('courses', 'learning_environments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules);
        $validator->setAttributeNames($this->traductionAttributes);

        if ($validator->fails()) {
            return redirect()->route('scheduling_environment.create')->withInput()->withErrors($validator);
        }

        $scheduling_environments = SchedulingEnvironment::create($request->all());
        session()->flash('message', 'Registro creado exitosamente');
        return redirect()->route('scheduling_environments.index');
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
        $scheduling_environment = SchedulingEnvironment::find($id);
        if($scheduling_environment)
        {

        $courses = Course::all();
        $learning_environments = LearningEnvironment::all();
        return view('scheduling_environment.edit', compact('scheduling_environment', 'courses', 'learning_environments'));
        }

        session()->flash('warning', 'No se encuntra el registro solicitado');
        return redirect()->route('scheduling_environment.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), $this->rules);
        $validator->setAttributeNames($this->traductionAttributes);

        if ($validator->fails()) {
            return redirect()->route('scheduling_environment.edit', $id)->withInput()->withErrors($validator);
        }
        
        $scheduling_environment = SchedulingEnvironment::find($id);
        if($scheduling_environment) // si la causal existe
        {
           $scheduling_environment->update($request->all());
            session()->flash('message', 'Registro actualizado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el registro solicitado');
           
        }
        return redirect()->route('scheduling_environment.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $scheduling_environment = SchedulingEnvironment::find($id);
        if($scheduling_environment) // si la causal existe
        {
            $scheduling_environment->delete(); //delete from causal where id = x
            session()->flash('message', 'Registro eliminado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el registro solicitado');
           
        }
        return redirect()->route('scheduling_environment.index');
    }
}
