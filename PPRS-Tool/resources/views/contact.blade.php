@extends('layouts.format')
<!DOCTYPE html>
<html>
    <head>
        <style>
            .department-title {
                background-color: grey;
                border-bottom: black solid;
                border-top: black solid;
                color: white;
                font-size: x-large;
                font-weight: bold;
                padding-bottom: 0.5rem;
                padding-left: 1rem;
                padding-top: 0.5rem;
                
            }
        </style>
    </head>
    <body>
        @section('content')
        <!-- Title for the contact page-->
        <div class="page-header">Contact Information</div>
        
        <!-- Biology Department -->
        <div class="department-title" style="border-top: none;">Biology Department</div>
        <div>
            <ul>
                <li>
                    Dr. Rebecca Brown, Biology Professor and Biology Department Chair: 
                    <ul>
                        <li>Phone: 509-359-2528</li>
                        <li>Email: rbrown@ewu.edu</li>
                    </ul>
                </li>

                <li>
                    Dr. Justin Bastow, Biology Professor: 
                    <ul>
                        <li>Phone: 509-359-2810</li>
                        <li>Email: jbastow@ewu.edu</li>
                    </ul>  
                </li>
            </ul>
        </div>

        <!--------Geography----------------------------->
        <div class="department-title">Geography Department</div>
        <div>
            <ul>
                <li>
                    Dr. Stacy Warren, Geography Professor: 
                    <ul>
                        <li>Email: swarren@ewu.edu</li>
                    </ul>
                </li>
            </ul>
        </div>

        <!--------CS Department-------------------------------->
        <div>
            <div class="department-title">Website and Database Experience</div>
            <div>
                <ul>
                    <li>
                        James Greiner:
                        <ul><li>Email: jgreiner1@eagles.ewu.edu</li></ul>   
                    </li>
                    
                    <li>
                        Daniel Tekel:
                        <ul><li>Email: dtekle1@eagles.ewu.edu</li></ul>
                    </li>
            
                    <li>
                        Colton Cronquist:
                        <ul><li>Email: ccronquist@eagles.ewu.edu</li></ul>   
                    </li>
                    
                </ul>
            </div>
        </div>

        <!--------EWU Office of Sustainability--------------->
        <div>        
            <div class="department-title">EWU Office Of Sustainability</div>
            
            <div>    
                <ul>
                    <li>
                        Erick Budsberg, EWU Sustainabability Coordinator: 
                        <ul>
                            <li>Phone: 509-359-6476</li>
                            <li>Email: ebudsberg@ewu.edu</li>
                        </ul>  
                    </li>
                </ul>
            </div> 
        </div>       
        @endsection
    </body>
</html>