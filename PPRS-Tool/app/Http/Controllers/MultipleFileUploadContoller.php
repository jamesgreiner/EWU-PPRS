<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class MultipleFileUploadContoller extends Controller
{
    public function index()
    {
        $files = File::all();

        return view('research',[
            'files' => $files,
        ]);
    }
 
    public function store(Request $request)
    {
         
        $validatedData = $request->validate([
        'files' => 'required',
        'files.*' => 'mimes:csv,txt,xlx,xls,pdf'
        ]);
 
 
        if($request->hasfile('files'))
         {
            foreach($request->file('files') as $key => $file)
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
 
        return redirect('files-upload')->with('status', 'Multiple File has been uploaded Successfully');
 
    }
}