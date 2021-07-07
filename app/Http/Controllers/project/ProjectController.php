<?php

namespace App\Http\Controllers\project;


use App\Models\Project;

use Helper\Constants\CommonValidations;
use Helper\Core\HelperController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProjectController extends HelperController
{

    public function index(){
        $list=Project::all();
        return $this->respond($list,[],'admin.project.list');
    }


    public function createForm(){

        return $this->respond('',[],'admin.project.create');
    }

    public function editForm(Project $id){

        $projectData=Project::where('id',$id['id'])->first();

        return $this->respond($projectData,[],'admin.project.edit');
    }

    public function createProject(Request $request){

        $validator=Validator::make($request->all(),[
            'projectName'=>CommonValidations::NAME,
            'projectSku'=>CommonValidations::NAME,
            'projectsDesc'=>CommonValidations::TEXT

        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }else{
            $project = new Project();
            $project->name=$request->projectName;
            $project->sku=$request->projectSku;
            $project->notes=$request->projectsDesc;
            $project->save();
            if (!self::isAPI()){
                $list=Project::all();
                return $this->respond($list,[],'admin.project.list');

            }else{
                return $this->respond($project,[],'');
            }


        }
    }

    public function updateProject(Request $request,Project $id){


        $validator=Validator::make($request->all(),[
            'projectName'=>CommonValidations::NAME,
            'projectSku'=>CommonValidations::NAME,
            'projectsDesc'=>CommonValidations::TEXT

        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }else{
            $project = Project::where('id',$id['id'])->first();
            $project->name=$request->projectName;
            $project->sku=$request->projectSku;
            $project->notes=$request->projectsDesc;
            $project->save();
            if (!self::isAPI()){
                $list=Project::all();
                return $this->respond($list,[],'admin.project.list');

            }else{
                return $this->respond($project,[],'');
            }


        }
    }

    public function delete(string $id)
    {

        Project::destroy($id);
        $list=Project::all();
        return $this->respond($list,[],'admin.project.list');

    }


}
