@extends('layouts.format')
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <style>
        body{
            margin: 0;
        }

        .tab { 
                display: inline-block; 
                margin-left: 30px; 
            } 
        
        ul {
            width: 50%;
            margin-left: 65px;
        }

        li{
            font-size:18px;
        }

        .div-2{
            background-color:grey;
            color:white;
        }
        

    </style>
    </head>
    
    <body>
        @section('content')
            <!-- Title for information page -->
            <div class="page-header">General Information</div>
            <br>

           <!-----------EWU Overview--------------------------------------------------------------------->
        <div class="card">
            <div class="faq-divider"></div>
            <center>
            <div class="div-2">
                <div class="card-header">
                    <div class="card-title h2"><h2>EWU Overview<h2></div>
                </div>
            
                <div class="card-image">
                    <img src="images/ewu-campus.jpg" width="1200" height="600" alt="image43.jpg">
                </div>
            <br></div>
            </center>
            <div class="faq-divider"></div>
            <div class="card-body">
                <ul>
                    <li>Regional comprehension state university</li>
                    <li>
                        Located in Cheney, WA
                        <ul>
                            <li> Rural community</li>
                            <li>20 minutes for Spokane, WA</li>
                        </ul>
                    </li>
                    <li>2017-2018 enrollment = 12,600 students</li>
                    <li>
                        340 acre campus
                        <ul><li>150 acres of campus is leased farmland</li></ul>
                    </li>
                    <li>No large "green space" on campus</li>
                    <li>Project planned to restore leased farmland to native vegetation</li>
                </ul>
                </div>       
            </div>

            <!-----------Project Vision--------------------------------------------------------------------->
                    <div class="card">
                        <div class="faq-divider"></div>
                        <center>
                        <div class="div-2">
                            <div class="card-header">
                            <div class="card-title h5">
                                    <h2>Project Vision</h2>
                            </div>
                        </div>
                        <div class="faq-divider"></div>
                        </div>
                            <div class="card-image">
                                <img src="images/image1.jpg" width="750" height="400" alt="image1.jpg">
                            </div>
                        
                        </center>
                        <div class="card-body">
                            <ul>
                                <li>Restore EWU farmland to native habitat with the goal to preserve 
                                natural land on campus that will foster research and educational 
                                opportunities, increase biodiversity, provide recreational space on multi-use trails.
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <div>
                                <ul>
                                    <li>Campus = red dotted line</li>
                                    <li>Resoration Site = light blue line</li>
                                </ul>
                            </div>
                        </div>
                    </div>

            <!-----------Invisible Biodiversity Loss------------------------------------------------------>

                    <div class="card">
                        <div class="faq-divider"></div>
                        <center>
                        <div class="div-2">
                            <div class="card-header">
                                <div class="card-title h2"><h2>Invisible Biodiversity Loss</h2></div>
                            </div>
                        </div>
                        <div class="faq-divider"></div>
                        <div class="card-image">
                            <img src="images/image2.jpg" width="750" height="400" alt="image2.jpg">
                        </div>
                        
                        </center>
                        <div class="card-body">
                            <ul>
                                <li>A critically endangered ecosystem(Noss 1995)</li>
                                <li>Over 99% converted to agriculture</li>
                                <li>Remaining parcels isolated and invaded by weeds</li>
                                <li>Wetlands were abundant</li>
                                <li>primarily dryland wheat and lentil crops</li>
                            </ul>
                        </div> 
                    </div>

            <!-----------Restoration--------------------------------------------------------------------->
            
                    <div class="card">
                        <div class="faq-divider"></div>
                        <center>
                        <div class="div-2">
                            <div class="card-header">
                                <div class="card-title h2"><h2>Restoration</h2></div>
                            </div>
                        </div>
                        <div class="faq-divider"></div>
                        <div class="card-image">
                            <img src="images/image3.jpg" width="200" height="300" alt="image3.jpg">
                            <img src="images/image4.jpg" width="200" height="300" alt="image4.jpg">
                            <img src="images/image5.jpg" width="200" height="300" alt="image5.jpg">
                            <img src="images/image6.jpg" width="200" height="300" alt="image6.jpg">
                        </div>
                        
                        </center>
                        <div class="card-body">
                        <div class="card-subtitle text-gray"><h4>Diverse Habitiats</h4></div>
                            <ul>
                                <li>Prairie</li>
                                <li>Ponderosa Pine Eyebrows</li>
                                <li>Wet Meadow</li>
                                <li>Pollinators</li>
                                <li>Pilot Site</li>
                            </ul>
                        </div> 
                    </div>

            <!-----------Education----------------------------------------------------------------------->
                    
                    <div class="card">
                        <div class="faq-divider"></div>
                        <center>
                        <div class="div-2">
                            <div class="card-header">
                                <div class="card-title h2"><h2>Education</h2></div>
                            </div>
                        </div>
                        <div class="faq-divider"></div>
                        <div class="card-image">
                        <img src="images/image7.jpg" width="750" height="300" alt="image7.jpg"><br>
                        <img src="images/image8.jpg" width="250" height="250" alt="image8.jpg">
                        <img src="images/image9.jpg" width="250" height="250" alt="image9.jpg">
                        <img src="images/image10.jpg" width="250" height="250" alt="image10.jpg">
                        </div>
                        
                        </center>
                        <div class="card-body">
                            <ul>
                                <li>Class based projects</li>
                                <li>Signs/Kiosks</li>
                                <li>Web content</li>
                                <li>Outdoor classrooms</li>
                            </ul>
                        </div> 
                    </div>

            <!-----------Research----------------------------------------------------------------------->

                    <div class="card">
                        <div class="faq-divider"></div>
                        <center>
                        <div class="div-2">
                            <div class="card-header">
                                <div class="card-title h2"><h2>Research</h2></div>
                            </div>
                        </div>
                        <div class="faq-divider"></div>
                        <div class="card-image">
                            <img src="images/image11.jpg" width="250" height="250" alt="image11.jpg">
                            <img src="images/image12.jpg" width="250" height="250" alt="image12.jpg">
                            <img src="images/image14.jpg" width="250" height="250" alt="image14.jpg">
                            <img src="images/image13.jpg" width="750" height="300" alt="image13.jpg">
                        </div>
                        
                        </center>
                        <div class="card-body">
                            <div class="card-subtitle text-gray"><h4>Onisite research opportunities</h4></div>
                            <ul>
                                <li>Living laboratory</li>
                                <li>Traditional and transdisciplinary approaches</li>
                                <li>Faculty and student research projects</li>
                            </ul>
                        </div> 
                    </div>  

            <!-----------Master Plan--------------------------------------------------------------------->

                    <div class="card">
                        <div class="faq-divider"></div>
                        <center>
                        <div class="div-2">
                            <div class="card-header">
                                <div class="card-title h2"><h2>Master Plan</h2></div>
                            </div>
                        </div>
                        <div class="faq-divider"></div>
                        <div class="card-image">
                            <img src="images/image15.jpg" width="600" height="700" alt="image15.jpg">
                        </div>
                        
                        </center>
                        <div class="card-body">
                            <!--TEXT HERE FOR FUTURE-->
                        </div> 
                    </div>


            <!-----------Educational Opportunities-------------------------------------------------------->
                    <div class="card">
                        <div class="faq-divider"></div>
                        <center>
                        <div class="div-2">
                            <div class="card-header">
                                <div class="card-title h2"><h2>Educational Opportunities</h2></div>
                            </div>
                        </div>
                        <div class="faq-divider"></div>
                        </center>


                        <!-----------Bio&Geoloogy--------------------------------------------------------->
                        <br><br>
                        <div class="card-subtitle text-gray"><h4>Biology & Geology</h4></div>

                        <ul>
                            <li>Used by 10+ courses as a field site before resortation has even begun</li>
                            <li>Projects in basic science and projects supporting restoration and sustainabability</li>
                            <li>Numerous undergraduate and graduate research projects</li>
                        </ul>
                        <center>
                        <img src="images/image16.jpg" width="250" height="250" alt="image16.jpg">
                        <img src="images/image17.jpg" width="250" height="250" alt="image17.jpg">
                        </center>
                        <ul>
                            <li>Directly related to sustainability - Climate Change Biology (Dr. Justin Bastow)</li>
                            <li>Students researched scientific literature to find previous data to evaluate carbon storage potential</li>
                        </ul>
                            <center>
                            <img src="images/image18.jpg" width="250" height="250" alt="image18.jpg">
                            <img src="images/image19.jpg" width="250" height="250" alt="image19.jpg">
                            </center>
                        
                        <br><br>

                        <!-----------Capstone--------------------------------------------------------->
                        <div class="card-subtitle text-gray"><h4>Restoration Ecology- Capstone Course</h4></div>

                        <ul>
                            <li>Soil carbon</li>
                            <li>Plant diversity</li>
                            <li>Pollinator diversity</li>
                        </ul>
                        <center>
                        <img src="images/image20.jpg" width="250" height="250" alt="image20.jpg">
                        <img src="images/image21.jpg" width="250" height="250" alt="image21.jpg">
                        <img src="images/image22.jpg" width="250" height="250" alt="image22.jpg">
                        </center>

                        <!-----------Ariel System--------------------------------------------------------->
                        <br><br>
                        <div class="card-subtitle text-gray"><h4>Unmanned Ariel System - Certificate (Dr. Chad Pritchard)</h4></div>
                        
                        <ul>
                            <li>Drone operations and flight planning</li>
                            <li>Spectral imagery to monitor plan growth</li>
                            <li>Thermal camera to monitor plant growth</li>
                            <li>ground truthing</li>
                        </ul>
                        <center>
                        <img src="images/image23.jpg" width="250" height="250" alt="image23.jpg">
                        <img src="images/image24.jpg" width="250" height="250" alt="image24.jpg">
                        </center>

                        <!-----------Engaging the Community------------------------------------------------->
                        <br><br>
                        <div class="card-subtitle text-gray"><h4>Engaging the Community in the PPPR(EPA EE Grant)</h4></div>

                        <ul>
                            <li>Salish School of Spokane</li>
                            <li>Cheney Middle School</li>
                            <li>West Valley Schools</li>
                            <li>Tekoa Schools</li>
                            <li>Cheney Parks and Recreation</li>
                            <ul>
                                <li>Senior Center</li>
                                <li>Summer daya-camp</li>
                            </ul>
                        </ul>
                        <center>
                        <img src="images/image25.jpg" width="250" height="250" alt="image25.jpg">
                        <img src="images/image26.jpg" width="250" height="250" alt="image26.jpg">
                        <img src="images/image27.jpg" width="250" height="250" alt="image27.jpg">
                        </center>

                        <!----------Geography/Anthropology/Archaeology-------------------------------------->
                        <br><br>
                        <div class="card-subtitle text-gray"><h4>Geography/Anthropology/Archaeology</h4></div>

                        <center>
                        <img src="images/image28.jpg" width="350" height="250" alt="image28.jpg">
                        <img src="images/image29.jpg" width="350" height="250" alt="image29.jpg">
                        </center>

                        <!----------Technical Communications and Visual Communications Design--------------->
                        <br><br>
                        <div class="card-subtitle text-gray"><h4>Technical Communications and Visual Communications Design</h4></div>

                        <center>
                        <img src="images/image30.jpg" width="350" height="250" alt="image30.jpg">
                        </center>

                        <!----------Theater and Film------------------------------------------------------->
                        <br><br>
                        <div class="card-subtitle text-gray"><h4>Theater and Film</h4></div>

                        <center>
                        <img src="images/image31.jpg" width="350" height="250" alt="image30.jpg">
                        <img src="images/image32.jpg" width="350" height="250" alt="image32.jpg">
                        </center>

            <!-----------Community Engagement and Partnerships-------------------------------------------------------->
            <br><br>
                    <div class="card">
                        <div class="faq-divider"></div>
                        <center>
                        <div class="div-2">
                            <div class="card-header">
                                <div class="card-title h2"><h2>Community Engagement and Partnerships</h2></div>
                            </div>
                        </div>
                        <div class="faq-divider"></div>
                        <div class="card-image">
                            <img src="images/image33.jpg" width="350" height="250" alt="image33.jpg">
                            <img src="images/image34.jpg" width="350" height="250" alt="image34.jpg">
                        </div>
                        
                        </center>
                        <div class="card-body">
                            <ul>
                                <li>Spokane Tribe</li>
                                <li>Local Elementary Schools</li>
                                <li>Parks and Recreation</li>
                            </ul>
                        </div> 
                    </div>

            <!-----------Pilot Site-------------------------------------------------------->

                    <div class="card">
                        <div class="faq-divider"></div>
                        <center>
                        <div class="div-2">
                            <div class="card-header">
                                <div class="card-title h2"><h2>Pilot Site</h2></div>
                            </div>
                        </div>
                        <div class="faq-divider"></div>
                        <div class="card-image">
                            <img src="images/image35.jpg" width="500" height="600" alt="image35.jpg">
                            <img src="images/image36.jpg" width="350" height="600" alt="image36.jpg">
                        </div>
                        
                        </center>
                        <div class="card-body">
                            <ul>
                                <li>Pilot Site ~ 15 acres</li>
                                <li>24 Test strips</li>
                                <ul>
                                    <li>6 replicates</li>
                                    <ul>
                                        <li>Randomized block design</li>
                                    </ul>
                                    <li>4 Seed mixes</li>
                                    <ul>
                                        <li>Grasses only</li>
                                        <li>Low diversity forbs (30%)</li>
                                        <li>Low diversity forbs (30%)</li>
                                        <li>High diversity forbs (70%)</li>
                                    </ul>
                                </ul>
                            </ul>
                        </div> 
                    </div>

            <!------------Pilot site- Seed Mixes---------------------------------------------->
                    
                    <div class="card">
                        <div class="faq-divider"></div>
                        <center>
                        <div class="div-2">
                            <div class="card-header">
                                <div class="card-title h2"><h2>Pilot Site- Seed Mixes</h2></div>
                            </div>
                        </div>
                        <div class="faq-divider"></div>
                        <div class="card-image">
                            <img src="images/image37.jpg" width="350" height="250" alt="image37.jpg">
                            <img src="images/image38.jpg" width="350" height="250" alt="image38.jpg">
                            <img src="images/image39.jpg" width="350" height="400" alt="image39.jpg">   
                        </div>
                        
                        </center>
                        <div class="card-body">
                            <!--TEXT FOR FUTURE USE-->
                        </div> 
                    </div>

            <!------------Pilot Site- BioChar---------------------------------------------->
            
                    <div class="card">
                        <div class="faq-divider"></div>
                        <center>
                        <div class="div-2">
                            <div class="card-header">
                                <div class="card-title h2"><h2>Pilot Site - Biochar</h2></div>
                            </div>
                        </div>
                        <div class="faq-divider"></div>
                        <div class="card-image">
                            <img src="images/image40.jpg" width="350" height="500" alt="image40.jpg">
                            <img src="images/image41.jpg" width="400" height="500" alt="image41.jpg">
                        </div>
                        
                        </center>
                        <div class="card-body">
                            <ul>
                                <li>Charcoal-like materail produced from burning biomass at high temeratures and pressure without oxygen</li>
                                <li>Soil additives to boost organic content in soil</li>
                                <ul>
                                    <li>Helps with water retention and developing soil microbes</li>
                                    <li>Can provide available carbon to microorganisms/plants</li>
                                </ul>
                                <li>Also used as a tool for carbon sequestration/climate change mitigation</li>
                            </ul>
                        </div> 
                    </div>
                    <div class="faq-divider"></div>
            <!------Back to top link--------------------------------------------------------->
            <br>
                    <a href="#top">Back to top of page</a>
            <br>
            <!------------------------------------------------------------------------------->
        @endsection
    </body>
</html>