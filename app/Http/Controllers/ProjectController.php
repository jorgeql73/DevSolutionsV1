<?php

namespace JQDeveloper\Http\Controllers;

use Illuminate\Http\Request;
use JQDeveloper\Project;
use JQDeveloper\Http\Requests\SaveProjectRequest;
class ProjectController extends Controller
{

    public function __construct(){

        $this ->middleware('auth')->except('index', 'show');
        // $this ->middleware('EsAdmin')->except('index', 'show');
    }
    public function index(){

        
        return view('Projects.index',[
            'projects' =>Project::latest()->paginate()
        ]);
    }
    public function show(Project $Project){
        
        return view('Projects.show',[
            'project'=>$Project
        ]);
    }
    public function create(){
        
        return view('Projects.create',[
            'project'=> new Project
        ]);
        
    }
    public function store(SaveProjectRequest $request){
      
        Project::create($request->validated());
        return redirect()->route('Projects.index')->with('status', 'El proyecto fue creado con exito');

    }
    public function edit(Project $Project){
        
        
        return view('Projects.edit',[
            'project'=>$Project
        ]);
    }
    public function update(Project $Project, SaveProjectRequest $request){

        $Project->update($request->validated());
        return redirect()->route('Projects.show', $Project)->with('status', 'El proyecto fue actualizado con exito');

    }
    public function destroy(Project $Project){

        $Project->delete();
        return redirect()->route('Projects.index')->with('status', 'El proyecto fue eliminado con exito');

    }
}
