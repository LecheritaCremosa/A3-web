<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
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
            ['name' => 'diurna', 'value' => 'DIURNA'],
            ['name' => 'mixta', 'value' => 'MIXTA'],
            ['name' => 'nocturna', 'value' => 'NOCTURNA'],  
        );
        $status = array(
            ['name' => 'lectiva', 'value' => 'LECTIVA'],
            ['name' => 'productiva', 'value' => 'PRODUCTIVA'],
            ['name' => 'induccion', 'value' => 'INDUCCION'],
        );
        return view('course.create', compact('status', 'shifts' ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
                ['name' => 'diurna', 'value' => 'DIURNA'],
                ['name' => 'mixta', 'value' => 'MIXTA'],
                ['name' => 'nocturna', 'value' => 'NOCTURNA'],  
            );
            $status = array(
                ['name' => 'lectiva', 'value' => 'LECTIVA'],
                ['name' => 'productiva', 'value' => 'PRODUCTIVA'],
                ['name' => 'induccion', 'value' => 'INDUCCION'],
            );
            return view('course.edit', compact('course', 'status', 'shifts'));
        }
        session()->flash('warning', 'No se encuntra el registro solicitado');
        return redirect()->route('course.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
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
