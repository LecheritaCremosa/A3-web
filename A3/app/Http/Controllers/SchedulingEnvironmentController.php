<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Instructor;
use App\Models\LearningEnvironment;
use App\Models\SchedulingEnvironment;
use Barryvdh\DomPDF\Facade\Pdf;
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
    public function reports()
    {
       $courses = Course::all();
       $instructors = Instructor::all();
       return view('scheduling_environment.reports', compact('courses', 'instructors'));
    }

    public function export_scheduling_environments_by_course(Request $request)

    {
        
        
        $courses = Course::where('id', '=', $request['course_id'])->first();
        $learning_environments = LearningEnvironment::all();
        $scheduling_environments = SchedulingEnvironment::whereBetween('date_scheduling', [$request['initial_date'], $request['final_date']])->where();
        $data = array(
            'initial_date' => $request['initial_date'],
            'final_date' => $request['final_date'],
            'courses' => $courses,
            'scheduling_environments' => $scheduling_environments,
            'learning_environments' => $learning_environments
        );
        
        $data = ['scheduling_environments' => $scheduling_environments];

        foreach ($scheduling_environments as $scheduling_environment)    {
            $courseCode = SchedulingEnvironment::find($scheduling_environment->course_id)->code;
        

            $data = ['scheduling_environments' => $scheduling_environments, 'courseCode' => $courseCode];
        }
        $pdf = Pdf::loadView('reports\export_scheduling_environment', $data)->setPaper('letter', 'portrait');
        return $pdf->download('SchedulingEnvironmentsByCourse.pdf');
    }

    public function export_scheduling_environments_by_instructor(Request $request)
    {
        $instructors = Instructor::where('id', '=', $request['instructor_document'])->first();
        $learning_environments = LearningEnvironment::all();
        $scheduling_environments = SchedulingEnvironment::whereBetween('date_scheduling', [$request['initial_date'], $request['final_date']])->get();
        $data = array(
            'initial_date' => $request['initial_date'],
            'final_date' => $request['final_date'],
            'instructors' => $instructors,
            'scheduling_environments' => $scheduling_environments,
            'learning_environments' => $learning_environments
        );
        $pdf = Pdf::loadView('reports\export_scheduling_environment_instructor', $data)->setPaper('letter', 'portrait');
        return $pdf->download('SchedulingEnvironmentsByInstructor.pdf');
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
