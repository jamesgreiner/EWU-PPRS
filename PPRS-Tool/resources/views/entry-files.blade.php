@extends('layouts.entry-format')

<?php
    //let's start the session
    session_start();

    //store our posted values in the session variables
    if(isset($_POST['next']))
    {
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
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <div class="header">
            <img src="images/ewu-banner.jpg" alt="EWU name and logo">
        </div>

        <div class="page-header">Upload Files</div>

        <form name="save-multiple-files" method="POST"  action="{{ url('save-multiple-files') }}" accept-charset="utf-8" enctype="multipart/form-data">
        @csrf  
            <div class="entry-form">
                <div class="left-inner-element">
                    <input type="hidden" id="study_id" name="study_id" value="{{ $_POST['study_id'] }}">
                    <label for="data_description">Description of Data</label><br>
                    <textarea id="data_description" name="data_description" placeholder="Please describe the data being submitted." rows="15" cols="75" maxlength="1000" size="1000"></textarea> <br><br>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group" style="margin-bottom: 2rem;">
                            <label for="files[]">Files</label><br>
                            <input type="file" name="files[]" multiple >  
                        </div>

                        @error('data_files')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                        
                    <div class="col-md-12">
                        <button type="submit" id="submit">Submit Data</button>
                    </div>
                </div> 
            </div>        
        </form>
    </body>
</html>