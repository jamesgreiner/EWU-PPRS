@extends('layouts.format')

<!DOCTYPE html>
<html>
<head>
    <style>    
        * 
        {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        .entire_form 
        {
	        display: grid;
            grid-template-columns: auto auto auto;
            background: lightgrey;
            height: 1000px;
        }
 
        .header 
        {
	        color: black;
        }
 
        .section1 
        {
	        border-style: solid;
        }
 
        .section2 
        {
            border-style: solid;
        }
            
        .section3 
        {
	        border-style: solid;
        }
 
        .footer 
        {    
            height: 50px;
        }
    </style>

    <title>Data Entry Form</title>
</head>

<body>
    <div class="header">
        <img src="images/ewu.jpg" alt="Banner EWU Logo">
    </div>

    <div id="header"><center><header style="font-size: 50px">Data Entry Form</header></center></div>
    
<!-------------------------------This form will be processed and the input will be stored in a mysql database--------------------------------------------------------------------------------------------------->
    <form action="/entries" method="POST" enctype="multipart/form-data">
<!-------------------------------This div is the outer grid of the data entry form that encloses all sections--------------------------------------------------------------------------------------------------->
        <div class="entire_form">
        @csrf
<!-------------------------------Section 1: Information--------------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="section1">
                <center><p style="color: black; font-size: 40px"><u>Section 1: Information</u></p></center>
                <div>
                    <div style="display: flex;">
                        <div style="margin-left: 10px">
                            <label for="study_ID">Study ID</label><br>
                            <input type="text" id="study_id" name="study_id"placeholder="123" maxlength="10" size="15"><br><br>
                            
                            <label for="study_name">Study Name</label><br>
                            <input type="text" id="study_name" name="study_name"placeholder="Effects of Biochar Concentration" maxlength="50" size="40">
                        </div>

                        <div style="margin-left: 100px">
                            <label style="margin-left: 10px" for="study_description">Study Description</label><br>
                            <textarea style="margin-left: 10px; resize: none" id="study_description" name="study_description" placeholder="Please briefly describe what this study is researching." rows="12" cols="60" maxlength="500" size="500"></textarea>
                        </div>
                    </div>
                    
                    <br><br>

                    <label style="margin-left: 10px" for="start_date">Start Date</label>
                    <input type="date" id="start_date" name="start_date">

                    <label style="margin-left: 77px" for="end_date">End Date</label>
                    <input type="date" id="end_date" name="end_date"><br><br><br>

                    <div style="display:flex;">
<!-------------------------------faculty information section---------------------------------------------------------------------------------------------------------------------------------------------------->
                        <div style="margin-left: 10px">
                            <label for="faculty_name">Faculty Lead</label><br>
                            <input type="text" id="faculty_name" name="faculty_name" placeholder="John Doe" maxlength="50" size="30"><br><br>

                            <label for="faculty_contact">Faculty Email Address</label><br>
                            <input type="text" id="faculty_contact" name="faculty_contact" placeholder="jdoe@ewu.edu" maxlength="50" size="30">
                        </div>

<!-------------------------------student information section----------------------------------------------------------------------------------------------------------------------------------------------------->
                        <div style="margin-left: 50px;">
                            <label for="student_name">Student Lead</label><br>
                            <input type="text" id="student_name" name="student_name" placeholder="Jane Doe" maxlength="50" size="30"><br><br>

                            <label for="student_contact">Student Email Address</label><br>
                            <input type="text" id="student_contact" name="student_contact" placeholder="jdoe@eagles.ewu.edu" maxlength="50" size="30">
                        </div>
                    </div>

                    <br><br><br>

<!-------------------------------project keywords section-------------------------------------------------------------------------------------------------------------------------------------------------------->
                    <div style="margin-left: 10px;">
                        <fieldset>
                            <label>Keywords associated with study</label><br>
                            <input type="checkbox" name="keywords[]" id="soil" value="soil">soil<br>
                            <input type="checkbox" name="keywords[]" id="plant" value="plant">plant<br>
                            <input type="checkbox" name="keywords[]" id="biochar" value="biochar">biochar<br>
                            <input type="checkbox" name="keywords[]" id="nematode" value="nematode">nematode<br>
                            <input type="checkbox" name="keywords[]" id="archaeology" value="archaeology">archaeology<br>
                            <input type="checkbox" name="keywords[]" id="hydrology" value="hydrology">hydrology<br>
                            <input type="checkbox" name="keywords[]" id="lead" value="lead">lead<br>
                            <input type="checkbox" name="keywords[]" id="annual" value="annual">annual<br>
                            <input type="checkbox" name="keywords[]" id="perennial" value="perennial">perennial<br>
                            <input type="checkbox" name="keywords[]" id="weed_management" value="weed_management">weed management<br>
                            <input type="checkbox" name="keywords[]" id="vertebrate" value="vertebrate">vertebrate<br>
                            <input type="checkbox" name="keywords[]" id="invertebrate" value="invertebrate">invertebrate<br>
                            <input type="checkbox" name="keywords[]" id="pollenator" value="pollenator">pollenator<br>
                            <input type="checkbox" name="keywords[]" id="gis" value="gis">GIS<br>
                            <!--special case: 'other' - allows user to specify a non-listed keyword-->
                        </fieldset>
                        
                    </div>
                </div>
            </div>


<!-------------------------------Section 2: Research Parameters--------------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="section2">
                <center><p style="color: black; font-size: 40px"><u>Section 2: Research Parameters</u></p></center>
                <div>  
                    <br><br>
                    <h3 style="margin-left: 10px;">PLANTING VARIABLES</h3>
<!-------------------------------seeding section------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
                    <div style="display: inline-block;">
                        <label style="margin-left: 10px" for="seed_name">Seed Mix</label><br>
                        <textarea style="margin-left: 10px; resize: none" id="seed_name" name="seed_name" placeholder="Please list any seed mixes that were used." rows="8" cols="40" maxlength="500" size="500"></textarea><br>
                        
                        <label style="margin-left: 10px" for="seeding_date">Seeding Dates</label><br>
                        <textarea style="margin-left: 10px; resize: none" id="seeding_date" name="seeding_date" placeholder="Please list the corresponding dates(mm/dd/yyyy) that the seedings were done." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>
                   
<!-------------------------------planting section----------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                    <div style="display: inline-block;">
                        <label style="margin-left: 10px" for="plant_name">Planting</label><br>
                        <textarea style="margin-left: 10px; resize: none" id="plant_name" name="plant_name" placeholder="Please list any plantings that were done in this study." rows="8" cols="40" maxlength="500" size="500"></textarea><br>

                        <label style="margin-left: 10px" for="planting_date">Planting Dates</label><br>
                        <textarea style="margin-left: 10px; resize: none" id="planting_date" name="planting_date" placeholder="Please list the corresponding dates(mm/dd/yyyy) that the plantings were done." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>
                    
                    <br><br>

                    <h3 style="margin-left: 10px;">SOIL AMENDMENTS</h3>
<!-------------------------------soil section--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                    <div style="display: inline-block;">
                        <label style="margin-left: 10px" for="soil_amendment_type">Soil Amendment</label><br>
                        <textarea style="margin-left: 10px; resize: none" id="soil_amendment_type" name="soil_amendment_type" placeholder="Please list any amendments that were done to the soil during this study." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>

                    <div style="display: inline-block;">
                        <label style="margin-left: 10px" for="soil_amendment_date">Amendment Date(s)</label><br>
                        <textarea style="margin-left: 10px; resize: none" id="soil_amendment_date" name="soil_amendment_date" placeholder="Please list the correspponding dates(mm/dd/yyyy) for the amendments." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>

                    <br><br>

                    <h3 style="margin-left: 10px;">WEED MANAGEMENT</h3>
<!-------------------------------herbicide section---------------------------------------------------------------------------------------------------------------------------------------------------------------------->

                    <div>
                        <div style="display: inline-block;">
                            <label style="margin-left: 10px" for="herbicide_treatment_type">Herbicide Treatment</label><br>
                            <textarea style="margin-left: 10px; resize: none" id="herbicide_treatment_type" name="herbicide_treatment_type" placeholder="Please list any herbicide treatments that were used." rows="8" cols="40" maxlength="500" size="500"></textarea>
                        </div>

                        <div style="display: inline-block;">
                            <label style="margin-left: 10px" for="herbicide_treatment_date">Treatment Dates</label><br>
                            <textarea style="margin-left: 10px; resize: none" id="herbicide_treatment_date" name="herbicide_treatment_date" placeholder="Please list the corresponding dates(mm/dd/yyyy) for the treatments were done." rows="8" cols="40" maxlength="500" size="500"></textarea>
                        </div>
                    </div>
<!-------------------------------weed management/mowing section---------------------------------------------------------------------------------------------------------------------------------------------------------->
                    <div>
                        <label style="margin-left: 10px" for="mowings">Mowing</label><br>
                        <textarea style="margin-left: 10px; resize: none" id="mowings" name="mowings" placeholder="Please list any dates(mm/dd/yyyy) that mowing was done during this study." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>
                </div>
            </div>

<!-------------------------------Section 3: Data------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="section3">
                <center><p style="color: black; font-size: 40px"><u>Section 3: Data</u></p></center>
                <div style="margin-left: 10px">
                    <label for="data_description">Description of Data</label><br>
                    <textarea style="resize: none" id="data_description" name="data_description" placeholder="Please describe the data being submitted." rows="15" cols="75" maxlength="1000" size="1000"></textarea> <br><br>

                    <label  for="metadata_files">Upload Metadata File(s)</label><br>
                    <input type="file" name="metadata_files" id="metadata_files" multiple><br><br>

                    <label for="data_files">Upload Data File(s)</label><br>
                    <input type="file" name="data_files" id="data_files" multiple><br><br>

                    <label for="project_files">Upload Project(report, poster, presentation)</label><br>
                    <input type="file" name="project_files" id="project_files" multiple>
                </div>
            </div>
        </div>

            <!--submit button for data form-->
            <input type="submit" value="Submit Data">
    </form>
        <input type="button" value="Cancel" onclick="history.back(-1)"/>
        
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
        //collect values of input fields
            //section 1
            $study_ID = $_POST['study_ID'];
            $study_name = $_POST['study_name'];
            $study_description = $_POST['study_description'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];

            $faculty_name = $_POST['faculty_name'];
            $faculty_contact = $_POST['faculty_contact'];
            $student_name = $_POST['student_name'];
            $student_contact = $_POST['student_contact'];

            $soil = $_POST['soil'];
            $plant = $_POST['plant'];
            $biochar = $_POST['biochar'];
            $soil = $_POST['soil'];
            $nematode = $_POST['nematode'];
            $archaeology = $_POST['archaeology'];
            $hydrology = $_POST['hydrology'];
            $lead = $_POST['lead'];
            $annual = $_POST['annual'];
            $perennial = $_POST['perennial'];
            $weed_management = $_POST['weed_management'];
            $vertebrate = $_POST['vertebrate'];
            $invertebrate = $_POST['invertebrate'];
            $pollenator = $_POST['pollenator'];
            $GIS = $_POST['GIS'];
            //end section 1

            //section 2
            $seed_mix = $_POST['seed_mix'];
            $seeding_dates = $_POST['seeding_dates'];
            $plantings = $_POST['plantings'];
            $planting_dates = $_POST['planting_dates'];
            $soil_amendment = $_POST['soil_amendment'];
            $soil_amendment_dates = $_POST['soil_amendment_dates'];
            $herbicide_treatment = $_POST['herbicide_treatment'];
            $herbicide_dates = $_POST['herbicide_dates'];
            $mowings = $_POST['mowings'];
            //end section 2

            //section 3 - files and photos


            
            //error checking?
            if (empty($name)) 
            {
                echo "Name is empty";
            } 
            else 
            {
                //insert into database tables
                echo $name;

                $insertion_query1 = "INSERT INTO entries (
                                    study_id,  
                                    study_description,
                                    start_date,
                                    end_date,
                                    student_lead,
                                    student_contact,
                                    faculty_lead,
                                    faculty_contact
                                    ) VALUES (
                                        $study_ID,
                                        $study_description,
                                        $start_date,
                                        $end_date,
                                        $student_name,
                                        $student_contact,
                                        $faculty_name,
                                        $faculty_contact)";

                $insertion_query2 = "INSERT INTO studies (
                    study_id,  
                    study_name
                    ) VALUES (
                        $study_ID,
                        $study_name)";

                $insertion_query3 = "INSERT INTO seed_mix (
                    seed_name,  
                    seeding_date
                    ) VALUES (
                        $seed_mix,
                        $seeding_dates)";
                
                $insertion_query4 = "INSERT INTO plants (
                    plant_name,  
                    planting_date
                    ) VALUES (
                        $plantings,
                        $planting_dates)";
                
                $insertion_query5 = "INSERT INTO soil_amd (
                    soil_amd_type,  
                    soil_amd_date
                    ) VALUES (
                        $soil_amendment,
                        $soil_amendment_dates)";

                $insertion_query6 = "INSERT INTO herbicide_treatment (
                    herbicide_treatment_type,  
                    herbicide_treatment_date
                    ) VALUES (
                        $herbicide_treatment,
                        $herbicide_dates)";
                    
                $insertion_query7 = "INSERT INTO weed_management (
                    weed_man_type,  
                    ) VALUES (
                        $herbicide_treatment,
                        $herbicide_dates)";
            }
        }
    ?>


    </body>
</html>