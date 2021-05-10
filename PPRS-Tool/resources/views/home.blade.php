@extends('layouts.format')
<!DOCTYPE html>
<html>
    <head>
        <style>

 
        </style>
    </head>
    
    
    <body>
        @section('content')
            <!-- Title for home page -->
            <div class="page-header">EWU Palouse Prairie Restoration Project</div>

            <!-- Photo of campus -->
            <img class="home-photo" src="images/ewu-campus.jpg" height="650" alt="Arial photgraph of EWU campus">

            <!-- Overall project description-->
            <div class="home-content">
                <div class="home-intro"><?php include('files/Intro.txt'); ?></div>

                <div class="home-body"><?php include('files/HomeParagraphBodyOne.txt'); ?></div>
            </div>
        @endsection
    </body>
</html> 