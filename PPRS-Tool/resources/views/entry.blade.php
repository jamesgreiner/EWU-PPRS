@extends('layouts.entry-format')

<!DOCTYPE html>
<html>
<head>
<style>    
            
        </style>
    <title>Data Entry Form</title>
</head>

<body>
    <div class="header">
        <img src="images/ewu-banner.jpg" alt="EWU name and logo">
    </div>

    <div class="page-header">Data Entry Form</div>
    
    <!-- form start -->
    <form accept-charset="utf-8" action="entry-files.blade.php" enctype="multipart/form-data" method="POST">
        <!-- This div holds the entire entry form -->
        <div class="entry-form">
        @csrf
            <!-- Section 1: Information -->
            <div class="section1">
                <p class="section-header">Information</p>
                <div>
                    <div style="display: flex; margin-bottom: 4rem">
                        <div class="left-inner-element">
                            <label for="study_id">Study ID</label><br>
                            <input type="text" id="study_id" name="study_id" placeholder="123" maxlength="10" size="15"><br><br><br><br><br>
                            <label for="study_name">Study Name</label><br>
                            <input type="text" id="study_name" name="study_name" placeholder="Effects of Biochar Concentration" maxlength="100" size="45">
                        </div>

                        <div style="margin-left: 3rem; margin-right: 0.5rem">
                            <label for="study_description">Study Description</label><br>
                            <textarea style="resize: none" id="study_description" name="study_description" placeholder="Please briefly describe what this study is researching." rows="12" cols="60" maxlength="500" size="500"></textarea>
                        </div>
                    </div>

                    <div style="display: flex; margin-bottom: 4rem">
                        <div class="left-inner-element" style="display: inline-block">
                            <label for="start_date">Start Date</label><br>
                            <input type="date" id="start_date" name="start_date">
                        </div>
                        <div style="display: inline-block; margin-left: 10rem">
                            <label for="end_date">End Date</label><br>
                            <input type="date" id="end_date" name="end_date">
                        </div>
                    </div>
                    
                    

                    <div style="display: flex; margin-bottom: 4rem">
<!-------------------------------faculty information section---------------------------------------------------------------------------------------------------------------------------------------------------->
                        <div class="left-inner-element">
                            <label for="faculty_name">Faculty Lead</label><br>
                            <input type="text" id="faculty_name" name="faculty_name" placeholder="John Doe" maxlength="50" size="30"><br><br>

                            <label for="faculty_contact">Faculty Email Address</label><br>
                            <input type="text" id="faculty_contact" name="faculty_contact" placeholder="jdoe@ewu.edu" maxlength="50" size="30">
                        </div>

<!-------------------------------student information section----------------------------------------------------------------------------------------------------------------------------------------------------->
                        <div style="margin-left: 10rem;">
                            <label for="student_name">Student Lead</label><br>
                            <input type="text" id="student_name" name="student_name" placeholder="Jane Doe" maxlength="50" size="30"><br><br>

                            <label for="student_contact">Student Email Address</label><br>
                            <input type="text" id="student_contact" name="student_contact" placeholder="jdoe@eagles.ewu.edu" maxlength="50" size="30">
                        </div>
                    </div>

<!-------------------------------project keywords section-------------------------------------------------------------------------------------------------------------------------------------------------------->
                    
                    <div class="sub-section-header">Keywords</div>
                        <div class="left-inner-element">
                            <input type="checkbox" name="keywords[]" id="soil" value="soil"> soil<br>
                            <input type="checkbox" name="keywords[]" id="plant" value="plant"> plant<br>
                            <input type="checkbox" name="keywords[]" id="biochar" value="biochar"> biochar<br>
                            <input type="checkbox" name="keywords[]" id="nematode" value="nematode"> nematode<br>
                            <input type="checkbox" name="keywords[]" id="archaeology" value="archaeology"> archaeology<br>
                            <input type="checkbox" name="keywords[]" id="hydrology" value="hydrology"> hydrology<br>
                            <input type="checkbox" name="keywords[]" id="lead" value="lead"> lead<br>
                            <input type="checkbox" name="keywords[]" id="annual" value="annual"> annual<br>
                            <input type="checkbox" name="keywords[]" id="perennial" value="perennial"> perennial<br>
                            <input type="checkbox" name="keywords[]" id="weed_management" value="weed_management"> weed management<br>
                            <input type="checkbox" name="keywords[]" id="vertebrate" value="vertebrate"> vertebrate<br>
                            <input type="checkbox" name="keywords[]" id="invertebrate" value="invertebrate"> invertebrate<br>
                            <input type="checkbox" name="keywords[]" id="pollenator" value="pollenator"> pollenator<br>
                            <input type="checkbox" name="keywords[]" id="gis" value="gis"> GIS<br>
                    </div>
                </div>
            </div>


<!-------------------------------Section 2: Research Parameters--------------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="section2">
                <p class="section-header">Research Parameters</p>
                <div>  
                    <div class="sub-section-header">FLORA VARIABLES</div>
<!-------------------------------flora seeding section------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
                    <div class="left-inner-element" style="display: inline-block;">
                        <label for="seed_name">Seed Mix</label><br>
                        <textarea id="seed_name" name="seed_name" placeholder="Please list any seed mixes that were used." rows="8" cols="40" maxlength="500" size="500"></textarea><br>
                        
                        <label for="seeding_date">Seeding Dates</label><br>
                        <textarea id="seeding_date" name="seeding_date" placeholder="Please list the corresponding dates(mm/dd/yyyy) that the seedings were done." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>
                   
<!-------------------------------flora planting section----------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                    <div class="left-inner-element" style="display: inline-block;">
                        <label for="plant_name">Planting</label><br>
                        <textarea id="plant_name" name="plant_name" placeholder="Please list any plantings that were done in this study." rows="8" cols="40" maxlength="500" size="500"></textarea><br>

                        <label for="planting_date">Planting Dates</label><br>
                        <textarea id="planting_date" name="planting_date" placeholder="Please list the corresponding dates(mm/dd/yyyy) that the plantings were done." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>
<!-------------------------------flora other section----------------------------------------------------------------------------------------------------------------------------------------------------------------------->                   
                    <div class="left-inner-element">
                        <label for="flora_other">Other</label><br>
                        <textarea id="flora_other" name="flora_other" placeholder="Please describe any other flora variables that were modified including the dates of measurement/observation." rows="8" cols="40" maxlength="500" size="500"></textarea><br>
                    </div>

<!-------------------------------fauna section--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                    <div class="sub-section-header">FAUNA VARIABLES</div>
                    <div class="left-inner-element" style="display: inline-block;">
                        <label for="fauna_other">Other</label><br>
                        <textarea id="fauna_other" name="fauna_other" placeholder="Please describe any fauna that were studied and list any corresponding dates of measurement/observation." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>

<!-------------------------------soil section--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                    <div class="sub-section-header">SOIL VARIABLES</div>
                    <div class="left-inner-element" style="display: inline-block;">
                        <label for="soil_amendment_type">Soil Amendment</label><br>
                        <textarea id="soil_amendment_type" name="soil_amendment_type" placeholder="Please list any amendments that were done to the soil during this study." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>

                    <div class="left-inner-element" style="display: inline-block;">
                        <label for="soil_amendment_date">Amendment Date(s)</label><br>
                        <textarea id="soil_amendment_date" name="soil_amendment_date" placeholder="Please list the correspponding dates(mm/dd/yyyy) for the amendments." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>

                    <div class="left-inner-element" style="display: inline-block;">
                        <label for="soil_other">Other</label><br>
                        <textarea id="soil_other" name="soil_other" placeholder="Please describe other variables that were studied in the soil and list any corresponding dates of measurement/observation." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>

<!-------------------------------hydrological section--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                    <div class="sub-section-header">HYDROLOGICAL VARIABLES</div>
                    <div class="left-inner-element" style="display: inline-block;">
                        <label for="hydrological_other">Other</label><br>
                        <textarea id="hydrological_other" name="hydrological_other" placeholder="Please describe any hydrological variables that were studied and list any corresponding dates of measurement/observation." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>

<!-------------------------------management section---------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                    <div class="sub-section-header">MANAGEMENT VARIABLES</div>
                    <div class="left-inner-element"style="display: inline-block;">
                        <label for="herbicide_treatment_type">Herbicide Treatment</label><br>
                        <textarea id="herbicide_treatment_type" name="herbicide_treatment_type" placeholder="Please list any herbicide treatments that were used." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>

                    <div class="left-inner-element"style="display: inline-block;">
                        <label for="herbicide_treatment_date">Treatment Dates</label><br>
                        <textarea id="herbicide_treatment_date" name="herbicide_treatment_date" placeholder="Please list the corresponding dates(mm/dd/yyyy) for the treatments were done." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>
                
                    <div class="left-inner-element">
                        <label for="mowings">Mowing</label><br>
                        <textarea id="mowings" name="mowings" placeholder="Please list any dates(mm/dd/yyyy) that mowing was done during this study." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>
                    
                    <div class="left-inner-element" style="display: inline-block;">
                        <label for="management_other">Other</label><br>
                        <textarea id="management_other" name="management_other" placeholder="Please describe any other management that was done to the grass/weeds and list any corresponding dates of modification." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>
                </div>
            </div>
           
            <input type="submit" value="Next">
        </form>
    </body>
</html>