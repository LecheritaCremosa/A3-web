<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\IntroduceCacheDirectoryAttribute;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructors = Instructor::all(); // select * from career
        return view('instructor.index', compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $instructor = Instructor::all();
        if($instructor)
        {
            $types = array(
                ['name' => 'Contratista', 'value' => 'CONTRATISTA'],
                ['name' => 'Planta', 'value' => 'PLANTA'], 
            );
            return view('instructor.create', compact('instructor', 'types'));
        }

        return redirect()->route('instructor.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $instructor = Instructor::create($request->all());
        session()->flash('message', 'Registro creado exitosamente');
        return redirect()->route('instructor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    
        $instructor = Instructor::where('document', '=', $id)->first();
        if($instructor)
        {
        $types = array(
                ['name' => 'Contratista', 'value' => 'CONTRATISTA'],
                ['name' => 'Planta', 'value' => 'PLANTA'] 
            );
         return view('instructor.edit', compact('instructor', 'types'));
        }
        session()->flash('warning', 'No se encuentra el registro solicitado');
        return redirect()->route('instructor.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $document)
    {
        $instructor = Instructor::where('document', '=', $document)->first();
        if($instructor)
        {
            $instructor->fullname = $request->fullname;
            $instructor->sena_email = $request->sena_email;
            $instructor->personal_email = $request->personal_email;
            $instructor->phone = $request->phone;
            $instructor->password = $request->password;
            $instructor->type = $request->type;
            $instructor->profile = $request->profile;
            $instructor->save();
            session()->flash('message', 'Registro actualizado exitosamente');
            
        }
        else
        {
            session()->flash('warning', 'No se encuentra el registro solicitado');
        }

        return redirect()->route('technician.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $instructor = Instructor::where('document', '=', $id)->first();
        if($instructor)
        {
            
            $instructor->delete();
            session()->flash('message', 'Registro eliminado exitosamente');
            
        }
        else
        {
            session()->flash('warning', 'No se encuentra el registro solicitado');
        }

        return redirect()->route('instructor.index');
    }
}
