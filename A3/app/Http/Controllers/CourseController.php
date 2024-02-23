<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    
    private $rules = [
        'code' => 'required',
        'shift' => 'required',
        'career_id' => 'required',
        'initial_date' => 'required',
        'final_date' => 'required',
        'status' => 'required',

    ];

    private $traductionAttributes = [
        'code' => 'Código',
        'shift' => 'Turno',
        'career_id' => 'Carrera',
        'initial_date' => 'Fecha de inicio',
        'final_date' => 'Fecha de finalización',
        'status' => 'Estatus',  
    ];
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all(); // select * from career
        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $shifts = array(
            ['name' => 'DIURNA', 'value' => 'DIURNA'],
            ['name' => 'MIXTA', 'value' => 'MIXTA'],
            ['name' => 'NOCTURNA', 'value' => 'NOCTURNA'],  
        );
        $status = array(
            ['name' => 'LECTIVA', 'value' => 'LECTIVA'],
            ['name' => 'PRODUCTIVA', 'value' => 'PRODUCTIVA'],
            ['name' => 'INDUCCION', 'value' => 'INDUCCION'],
        );
        return view('course.create', compact('status', 'shifts' ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules);
        $validator->setAttributeNames($this->traductionAttributes);
        if($validator->fails())
        $request->validate([
            'name' => 'required',
            'shift' => 'required',
            'status' => 'required',
        ]);
        $course = Course::create($request->all());
        session()->flash('message', 'Registro creado exitosamente');
        return redirect()->route('course.index');
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
        $course = Course::find($id);
        if($course)
        {
            $shifts = array(
                ['name' => 'DIURNA', 'value' => 'DIURNA'],
                ['name' => 'MIXTA', 'value' => 'MIXTA'],
                ['name' => 'NOCTURNA', 'value' => 'NOCTURNA'],  
            );
            $status = array(
                ['name' => 'LECTIVA', 'value' => 'LECTIVA'],
                ['name' => 'PRODUCTIVA', 'value' => 'PRODUCTIVA'],
                ['name' => 'INDUCCION', 'value' => 'INDUCCION'],
            );
            return view('course.edit', compact('course', 'status', 'shifts'));
        }
        session()->flash('warning', 'No se encuentra el registro solicitado');
        return redirect()->route('course.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), $this->rules);
        if($validator->fails())
        {
            $errors = $validator->errors();
            return redirect()->route('course.edit', $id)->withInput()->withErrors($errors);
        }

        $course = Course::find($id);
        if($course) // si la carrera existe
        {
           $course->update($request->all());
            session()->flash('message', 'Registro actualizado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el registro solicitado');
           
        }
        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::find($id);
        if($course) // si la causal existe
        {
            $course->delete(); //delete from causal where id = x
            session()->flash('message', 'Registro eliminado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el registro solicitado');
           
        }
        return redirect()->route('course.index');
    }
}
