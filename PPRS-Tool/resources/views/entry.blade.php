

<!DOCTYPE html>
<html>
<head>
<style>    
            * {
                box-sizing: border-box;
                padding: 0;
                margin: 0;
            }
            .page-header {
                    background-color:#b7142e;
                    border-bottom: black; 
                    border-bottom-style: solid;
                    color: white;
                    font-size: 40px;
                    font-family: 'Times New Roman', Times, serif;
                    font-weight: bold;
                    line-height: 5rem;
                    text-align: center;
                    margin-top: 0;
                    margin-bottom: 0;
            }
            .entry-form {
                display: grid;
                grid-template-columns: auto auto auto;
                background: lightgrey;
                height: auto;
            }
            .section-header {
                color: black; 
                font-size: 40px;
                margin-bottom: 1rem;
                text-align: center;
                text-decoration: underline;
            }
    
            .section1 {
                border-left-style: solid;
                border-right-style: solid;
            }
    
            .section2 {
                border-right-style: solid;
            }
                
            .section3 {
                border-right-style: solid;
            }
            .sub-section-header {
                font-family: 'Courier New', Courier, monospace;
                font-size: x-large;
                font-weight: 600;
                margin-left: 1rem;
            }
    
            .footer {    
                height: 50px;
            }

            label {
                font-size: large;
                font-weight: 500;
            }

            input {
                
                margin-top: 0.25rem; 
            }
        </style>
    <title>Data Entry Form</title>
</head>

<body>
    <div class="header">
        <img src="images/ewu-banner.jpg" alt="EWU name and logo">
    </div>

    <div class="page-header">Data Entry Form</div>
    
    <!-- form start -->
    <form accept-charset="utf-8" action="/entries" enctype="multipart/form-data" method="POST">
        <!-- This div holds the entire entry form -->
        <div class="entry-form">
        @csrf
            <!-- Section 1: Information -->
            <div class="section1">
                <p class="section-header">Information</p>
                <div>
                    <div style="display: flex; margin-bottom: 2rem">
                        <div style="margin-left: 1rem">
                            <label for="study_id">Study ID</label><br>
                            <input type="text" id="study_id" name="study_id" placeholder="123" maxlength="10" size="15"><br><br><br><br><br>
                            <label for="study_name">Study Name</label><br>
                            <input type="text" id="study_name" name="study_name" placeholder="Effects of Biochar Concentration" maxlength="100" size="45">
                        </div>

                        <div style="margin-left: 3rem; margin-right: 3rem">
                            <label for="study_description">Study Description</label><br>
                            <textarea style="resize: none" id="study_description" name="study_description" placeholder="Please briefly describe what this study is researching." rows="12" cols="60" maxlength="500" size="500"></textarea>
                        </div>
                    </div>

                    <div style="display: flex; margin-bottom: 2rem">
                        <label style="margin-left: 1rem; margin-right: 0.5rem" for="start_date">Start Date</label><br>
                        <input type="date" id="start_date" name="start_date">

                        <label style="margin-right: 0.5rem" for="end_date">End Date</label><br>
                        <input type="date" id="end_date" name="end_date">
                    </div>
                    

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
                    
                    <div class="sub-section-header">Keywords</div>
                        <div style="margin-left: 1rem;">
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
                    <br><br>
                    <div class="sub-section-header">FLORA VARIABLES</div>
<!-------------------------------flora seeding section------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
                    <div style="display: inline-block;">
                        <label style="margin-left: 10px" for="seed_name">Seed Mix</label><br>
                        <textarea style="margin-left: 10px; resize: none" id="seed_name" name="seed_name" placeholder="Please list any seed mixes that were used." rows="8" cols="40" maxlength="500" size="500"></textarea><br>
                        
                        <label style="margin-left: 10px" for="seeding_date">Seeding Dates</label><br>
                        <textarea style="margin-left: 10px; resize: none" id="seeding_date" name="seeding_date" placeholder="Please list the corresponding dates(mm/dd/yyyy) that the seedings were done." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>
                   
<!-------------------------------flora planting section----------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                    <div style="display: inline-block;">
                        <label style="margin-left: 10px" for="plant_name">Planting</label><br>
                        <textarea style="margin-left: 10px; resize: none" id="plant_name" name="plant_name" placeholder="Please list any plantings that were done in this study." rows="8" cols="40" maxlength="500" size="500"></textarea><br>

                        <label style="margin-left: 10px" for="planting_date">Planting Dates</label><br>
                        <textarea style="margin-left: 10px; resize: none" id="planting_date" name="planting_date" placeholder="Please list the corresponding dates(mm/dd/yyyy) that the plantings were done." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>
<!-------------------------------flora other section----------------------------------------------------------------------------------------------------------------------------------------------------------------------->                   
                    <div>
                        <label style="margin-left: 10px" for="flora_other">Other</label><br>
                        <textarea style="margin-left: 10px; resize: none" id="flora_other" name="flora_other" placeholder="Please describe any other flora variables that were modified including the dates of measurement/observation." rows="8" cols="40" maxlength="500" size="500"></textarea><br>
                    </div>

                    <br><br>

                    <div class="sub-section-header">FAUNA VARIABLES</div>
<!-------------------------------fauna section--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                    <div style="display: inline-block;">
                        <label style="margin-left: 10px" for="fauna_other">Other</label><br>
                        <textarea style="margin-left: 10px; resize: none" id="fauna_other" name="fauna_other" placeholder="Please describe any fauna that were studied and list any corresponding dates of measurement/observation." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>

                    <br><br>

                    <div class="sub-section-header">SOIL VARIABLES</div>
<!-------------------------------soil section--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                    <div style="display: inline-block;">
                        <label style="margin-left: 10px" for="soil_amendment_type">Soil Amendment</label><br>
                        <textarea style="margin-left: 10px; resize: none" id="soil_amendment_type" name="soil_amendment_type" placeholder="Please list any amendments that were done to the soil during this study." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>

                    <div style="display: inline-block;">
                        <label style="margin-left: 10px" for="soil_amendment_date">Amendment Date(s)</label><br>
                        <textarea style="margin-left: 10px; resize: none" id="soil_amendment_date" name="soil_amendment_date" placeholder="Please list the correspponding dates(mm/dd/yyyy) for the amendments." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>

                    <div style="display: inline-block;">
                        <label style="margin-left: 10px" for="soil_other">Other</label><br>
                        <textarea style="margin-left: 10px; resize: none" id="soil_other" name="soil_other" placeholder="Please describe other variables that were studied in the soil and list any corresponding dates of measurement/observation." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>

                    <br><br>

                    <div class="sub-section-header">HYDROLOGICAL VARIABLES</div>
<!-------------------------------hydrological section--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                    <div style="display: inline-block;">
                        <label style="margin-left: 10px" for="hydrological_other">Other</label><br>
                        <textarea style="margin-left: 10px; resize: none" id="hydrological_other" name="hydrological_other" placeholder="Please describe any hydrological variables that were studied and list any corresponding dates of measurement/observation." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>

                    <br><br>

                    <div class="sub-section-header">MANAGEMENT VARIABLES</div>
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
<!-------------------------------mowing section---------------------------------------------------------------------------------------------------------------------------------------------------------->
                    <div>
                        <label style="margin-left: 10px" for="mowings">Mowing</label><br>
                        <textarea style="margin-left: 10px; resize: none" id="mowings" name="mowings" placeholder="Please list any dates(mm/dd/yyyy) that mowing was done during this study." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>



                    
                    <div style="display: inline-block;">
                        <label style="margin-left: 10px" for="management_other">Other</label><br>
                        <textarea style="margin-left: 10px; resize: none" id="management_other" name="management_other" placeholder="Please describe any other management that was done to the grass/weeds and list any corresponding dates of modification." rows="8" cols="40" maxlength="500" size="500"></textarea>
                    </div>
                </div>
            </div>

<!-------------------------------Section 3: Data------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="section3">
            <p class="section-header">Data</p>
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

    </body>
</html>