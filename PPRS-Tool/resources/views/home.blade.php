@extends('layouts.format')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


    <style>
        /* full page */
    body {
        margin: 0;
    }
  
    /* Style the body map */
    .map_placement {
        background-color:grey;
        color:white;
        width: auto;
        height: 700px;
        text-align: center;
        line-height:350px;        
        border-left: 60px whitesmoke;
        border-right: 60px whitesmoke;
        padding: 50px;
        margin: 60px;
     
    }

     /* Style the body paragraph */
    .body_paragraph {
        background-color: grey;
        color:white;
        width: auto;
        height: 500px;        
        border-left: 60px whitesmoke;
        border-right: 60px whitesmoke;
        padding: 50px;
        margin: 60px;
      
    }

    .div-1{
        background-color:#b7142e;
        color:white;
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
        background-color: #b7142e;
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
        </style>
    </head>

    <body class="antialiased">
    <div class="header">
        <img src="images/ewu.jpg" alt="Banner EWU Logo">
    </div>
    <div class="navbar">
        <a class="active" href="/"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="/project-info"><i class="fa fa-fw fa-book"></i> Information</a>
        <a href="/projects"><i class="fa fa-fw fa-book"></i> Research Projects</a>
        <a href="/view-data"><i class="fa fa-fw fa-search"></i> View Data</a>
        <a href="/entry-form"><i class="fa fas fa-edit"></i> Enter Data</a>
        <a href="/faq"><i class="fa far fa-comment"></i> FAQ</a>
        <a href="/contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
        <a href="/login"><i class="fa fa-fw fa-user"></i> Login</a>
        <!--<input type="text" placeholder="Search">  commented out because it doesnt format correctly yet -->
    </div> 
  
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
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
 -->
          


    <!-- -->
    <div class="div-1">
        <center><br>
        <h1>EWU Palouse Prairie Restoration Project</h1>
        <br></center>
    </div>

    <!--  -->
    <div class="map_placement">
        <!--<h1>Interactive map placement</h1>-->
        <img src="images/image43.jpg" width="1200" height="600" alt="image43.jpg">
    </div>

    <!--  -->
    <div class="body_paragraph">
        <div><p><h3><?php include('files/Intro.txt'); ?></h3></p></div>
       
        <div><p><?php include('files/HomeParagraphBodyOne.txt'); ?></p></div>
        

    </div>
    
</body>
</html> 