@extends('layouts.entry-format')

<?php
    //let's start the session
    session_start();

    //store our posted values in the session variables
    $_SESSION['study_id'] = $_POST['study_id'];
    $_SESSION['study_name'] = $_POST['study_name'];
    $_SESSION['study_description'] = $_POST['study_description'];
    $_SESSION['start_date'] = $_POST['start_date'];
    $_SESSION['end_date'] = $_POST['end_date'];
    $_SESSION['faculty_name'] = $_POST['faculty_name'];
    $_SESSION['faculty_contact'] = $_POST['faculty_contact'];
    $_SESSION['student_name'] = $_POST['student_name'];
    $_SESSION['student_contact'] = $_POST['student_contact'];
    $_SESSION['keywords'] = $_POST['keywords'];
    $_SESSION['seed_name'] = $_POST['seed_name'];
    $_SESSION['seeding_date'] = $_POST['seeding_date'];
    $_SESSION['plant_name'] = $_POST['plant_name'];
    $_SESSION['planting_date'] = $_POST['planting_date'];
    $_SESSION['flora_other'] = $_POST['flora_other'];
    $_SESSION['fauna_other'] = $_POST['fauna_other'];
    $_SESSION['soil_amendment_type'] = $_POST['soil_amendment_type'];
    $_SESSION['soil_amendment_date'] = $_POST['soil_amendment_date'];
    $_SESSION['soil_other'] = $_POST['soil_other'];
    $_SESSION['hydrological_other'] = $_POST['hydrological_other'];
    $_SESSION['herbicide_treatment_type'] = $_POST['herbicide_treatment_type'];
    $_SESSION['herbicide_treatment_date'] = $_POST['herbicide_treatment_date'];
    $_SESSION['mowings'] = $_POST['mowings'];
    $_SESSION['management_other'] = $_POST['management_other'];
?>

<doc
<div class="section3">
            <p class="section-header">Data</p>
                <div class="left-inner-element">
                    <label for="data_description">Description of Data</label><br>
                    <textarea id="data_description" name="data_description" placeholder="Please describe the data being submitted." rows="15" cols="75" maxlength="1000" size="1000"></textarea> <br><br>

                    <label  for="metadata_files">Upload Metadata File(s)</label><br>
                    <input type="file" name="metadata_files" id="metadata_files" multiple><br><br>

                    <label for="data_files">Upload Data File(s)</label><br>
                    <input type="file" name="data_files" id="data_files" multiple><br><br>

                    <label for="project_files">Upload Project(report, poster, presentation)</label><br>
                    <input type="file" name="project_files" id="project_files" multiple>
                </div>
            </div>
        </div>

            
        <!-- <input type="button" value="Cancel" onclick="history.back(-1)"/> -->
        
        <div class="text-center">
        
        <form name="save-multiple-files" method="POST"  action="{{ url('save-multiple-files') }}" accept-charset="utf-8" enctype="multipart/form-data">

        @csrf
                    
            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <input type="file" name="files[]" placeholder="Choose files" multiple >
                        
                    </div>
                    @error('files')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                    
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                </div>
            </div>     
        </form>

        </div>