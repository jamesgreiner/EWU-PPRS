<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Response;

class MultipleFileUploadContoller extends Controller
{
    public function index()
    {
        /* $files = File::all();
        return view('research',[
            'files' => $files,
        ]); */
    }
 
    public function store(Request $request)
    {
        $files = new \App\Models\File();
        

        $validatedData = $request->validate([
        'files' => 'required',
        'files.*' => 'mimes:csv,txt,xlsx,xls,pdf,jpg,png'
        ]);
 
 
        if($request->hasfile('files'))
         {
            foreach($request->file('files') as $key => $file)
            {
                $data_description = request('data_description');
                $path = $file->store('public/files');
                $name = $file->getClientOriginalName();
                $study_id = request('study_id');                
                $insert[$key]['study_id'] = $study_id;
                $insert[$key]['name'] = $name;
                $insert[$key]['path'] = $path;
                $insert[$key]['data_description'] = $data_description;
            }
         }
 
        File::insert($insert);
 
        return redirect('/')->with('status', 'Multiple File has been uploaded Successfully');
 
    }

    public function download(Request $request)
    {
     
    }

}