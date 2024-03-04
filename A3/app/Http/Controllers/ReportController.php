<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Course;
use App\Models\EnvironmentType;
use App\Models\LearningEnvironment;
use App\Models\SchedulingEnvironment;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // $environment_types = EnvironmentType::all();
        $learning_environments = LearningEnvironment::all();
        return view('reports.index', compact('learning_environments'));
    }

    public function export_learning_environments()
    {
        
             $enviroment_types = EnvironmentType::all();
            $learnig_environments = LearningEnvironment::all();
            $data = array(
            'learning_environments' => $learnig_environments,
            'enviroment_types' =>  $enviroment_types 
           );
            $pdf = Pdf::loadView('reports.export_learning_environments', $data)->setPaper('letter', 'portrait');
            return $pdf->download('learning_enviroments.pdf');
    
    }

    public function generatePdf()
    {
        $courses = Course::all();
        $careers = Career::all()->find('1')->name;


        $data = array(
            'courses' => $courses,
            'careers' => $careers
        );
             $pdf = Pdf::loadView('course.pdf', $data)->setPaper('letter', 'portrait');
              return $pdf->download('generatePdf.pdf');

     
    }
    
    public function export_scheduling_environments_by_course(Request $request)
    {
            $courses = Course::where('id', '=', $request['course_id'])->first();
            $learning_environments = LearningEnvironment::all();
            $scheduling_environments = SchedulingEnvironment::whereBetween('date_scheduling',[ $request['initial_date'], $request['final_date']])
                    ->where('course_id' , '=' , $request['course_id'])->get();
            $data = array(
                'initial_date' => $request['initial_date'],
                'final_date' => $request['final_date'],
                'courses' => $courses,
                'learning_environments' => $learning_environments,
                'scheduling_environments' => $scheduling_environments
                
            );
    
            $pdf = Pdf::loadView('reports.export_scheduling_environments_by_course', $data)->setPaper('letter','portrait');
            return $pdf->download('scheduling_environments_by_course.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
