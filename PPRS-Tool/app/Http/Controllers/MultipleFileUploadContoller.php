<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class MultipleFileUploadContoller extends Controller
{
    public function index()
    {
        $metadata_files = File::all();
        $data_files = File::all();
        $project_files = File::all();


        return view('research',[
            'metadata_files'=> $metadata_files,
            'data_files' => $data_files,
            'project_files' => $project_files
        ]);
    }
 
    public function store(Request $request)
    {
         
        $validatedData = $request->validate([
        'metadata_files' => 'required',
        'metadata_files.*' => 'mimes:csv,txt,xlx,xls,pdf',
        'data_files' => 'required',
        'data_files.*' => 'mimes:csv,txt,xlx,xls,pdf',
        'project_files' => 'required',
        'project_files.*' => 'mimes:csv,txt,xlx,xls,pdf'
        ]);
 
 
        if($request->hasfile('data_files'))
         {
            foreach($request->file('data_files') as $key => $file)
            {
                $path = $file->store('public/files');
                $name = $file->getClientOriginalName();
                $study_id = request('study_id');                
                $insert[$key]['study_id'] = $study_id;
                $insert[$key]['name'] = $name;
                $insert[$key]['path'] = $path;
 
            }
         }
 
        File::insert($insert);
 
        return redirect('files-upload')->with('status', 'Data files have been uploaded successfully.');
 
    }
}