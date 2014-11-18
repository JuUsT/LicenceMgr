<?php

class ProgramController extends BaseController {
    
    public function getAdd($type,$id)
    {
        if($type === Editor::NAME) {
             $editor = Editor::findOrFail($id); 
            
             return View::make('program/add')->with('title',$editor->name)->with('editorId',$id); 
        } elseif($type === Program::NAME) {
            $program = Program::findOrFail($id);
            
            return View::make('program/add')->with('title',$program->name)->with('programId', $id);
        }
        return View::abord(404);
    }
   
    
    public function postAdd() {
        $program = new Program;
        $program->name = Input::get('name');
        if(Input::has('program_id'))
        {
            $program->parent_id = Input::get('program_id');
            
            $program->save();
        }
        elseif(Input::has('editor_id'))
        {
            $program->editor_id = Input::get('editor_id');
            $program->save();
        }
        
        
    }
    
}