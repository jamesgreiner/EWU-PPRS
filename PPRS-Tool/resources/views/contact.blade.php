@extends('layouts.format')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            
    /* Style the body map */
    .map_placement {
        background-color: lightslategrey;
        width: auto;
        height: 400px;
        text-align: center;
        line-height:350px;        
        border-left: 60px whitesmoke;
        border-right: 60px whitesmoke;
        padding: 50px;
        margin: 60px;
     
    }
     /* Style the body paragraph */
    .body_paragraph {
        background-color: lightslategrey;
        width: auto;
        height: 400px;        
        border-left: 60px whitesmoke;
        border-right: 60px whitesmoke;
        padding: 50px;
        margin: 60px;
      
    }
    /* Style the navigation bar */
    .navbar {
        width: 100%;
        background-color: #555;
        overflow: auto;
    }

    /* Navbar links */
    .navbar a {
        float: left;
        text-align: center;
        padding: 12px;
        color: white;
        text-decoration: none;
        font-size: 17px;
    }

    /* Navbar links on mouse-over */
    .navbar a:hover {
        background-color: #ff0000;
    }

    /* Current/active navbar link */
    .active {
        background-color: #4CAF50;
    }

    /* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
    @media screen and (max-width: 500px) {
        .navbar a {
            float: none;
            display: block;
        }   
    } 

    
    body{
        margin: 0;
    }

    .div-1{
        background-color:#b7142e;
        color:white;
    }

    .div-2{
        background-color:grey;
        color:white;
    }
    </style> 
    <title>EWU Prairie Restoration Site Contacts</title>  
</head>
    <body>

    <div class="header">
        <img src="images/ewu.jpg" alt="Banner EWU Logo">
    </div>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
     <!-- navbar menu  -->
     <!-- Repalce # with link location-->
    <div class="navbar">
        <a class="active" href="/home"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="/information"><i class="fa fa-fw fa-book"></i> Information</a>
        <a href="/research"><i class="fa fa-fw fa-book"></i> Research Projects</a>
        <a href="/view-data"><i class="fa fa-fw fa-search"></i> View Data</a>
        <a href="/data-entry"><i class="fa fas fa-edit"></i> Enter Data</a>
        <a href="/faq"><i class="fa far fa-comment"></i> FAQ</a>
        <a href="/contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
        <a href="/login"><i class="fa fa-fw fa-user"></i> Login</a>
        <!--<input type="text" placeholder="Search">  commented out because it doesnt format correctly yet -->
    </div> 
        
       <!---------------Title-------------------------------->
       <center>
        <div class="div-1">
            <br>
            <h1>    
                Contacts  
            </h1>
            <br>
        </div>
        </center>


        <!--------Biology Department----------------------------->
        <div class="div-2">    
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
        <div class="div-2">    
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
            <div class="div-2">    
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
        <!------------------------------------------------>
    </body>
</html>