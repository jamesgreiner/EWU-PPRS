<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class EntryController extends Controller
{
    public function index()
    {
        $entries = Entry::all();
        return view('research.index', [
            'entries' => $entries,
        ]);    
    }

    public function create()
    {
        return view('entry');
    }
    public function show($id)
    {
        $entry = Entry::findorfail($id);
        $files = File::all();
       
        return view('research.show', ['entry' => $entry],['files' => $files]);    
    }
    public function store()
    {
        //capture data for entries table
        $entry = new \App\Models\Entry();
        $entry->study_id = request('study_id');
        $entry->study_name = request('study_name');
        $entry->study_description = request('study_description');
        $entry->start_date = request('start_date');
        $entry->end_date = request('end_date');
        $entry->faculty_name = request('faculty_name');
        $entry->faculty_contact = request('faculty_contact');
        $entry->student_name = request('student_name');
        $entry->student_contact = request('student_contact');
        $entry->keywords = request('keywords');
        $entry->seed_name = request('seed_name');
        $entry->seeding_date = request('seeding_date');
        $entry->plant_name = request('plant_name');
        $entry->planting_date = request('planting_date');
        $entry->flora_other = request('flora_other');
        $entry->fauna_other = request('fauna_other');
        $entry->soil_amendment_type = request('soil_amendment_type');
        $entry->soil_amendment_date = request('soil_amendment_date');
        $entry->soil_other = request('soil_other');
        $entry->hydrological_other = request('hydrological_other');
        $entry->herbicide_treatment_type = request('herbicide_treatment_type');
        $entry->herbicide_treatment_date = request('herbicide_treatment_date');
        $entry->mowings = request('mowings');
        $entry->management_other = request('management_other');
       
        //save entry form data and return to home screen
        $entry->save();
        return view('entry-files');
    }

        /**
     * Display the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
}