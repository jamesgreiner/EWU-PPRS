@extends('layouts.format')
<!DOCTYPE html>
<html >
    <head>
    <body class="antialiased">
        @section('content')
        <!-- Title for the contact page-->
        <div class="page-header">Contact Information</div>

        <!--------Biology Department----------------------------->
        <div>    
            <h2>
                Biology Department
            </h2>
        </div>
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
                     Erick Budsberg, EWU Sustainabability Coordinator: 
                     <ul>
                        <li>Phone: 509-359-6476</li>
                        <li>Email: ebudsberg@ewu.edu</li>
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
        <div>    
            <h2>
                Geography Department
            </h2>
        </div>
        <div>
            <ul>
                <li>
                    Dr. Stacy Warren, Geography Professor: 
                    <ul>
                        <li>swarren@ewu.edu</li>
                    </ul>
                </li>
            </ul>
        </div>

        <!--------CS Department-------------------------------->
        <div>
            <div>    
                <h2>
                    Website and Database Experience
                </h2>
            </div>

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
        <br><br>
        @endsection
    </body>
</html>