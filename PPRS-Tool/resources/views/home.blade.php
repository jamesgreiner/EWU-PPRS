@extends('layouts.format')
<!DOCTYPE html>
<html>
    <body>
        @section('content')
            <!-- Title for home page -->
            <div class="page-header">EWU Palouse Prairie Restoration Project</div>

            <!-- Photo of campus -->
            <div class="home-photo-container">
               <img style="border: solid grey 30px" src="images/ewu-campus.jpg" height="800" alt="Ariel photgraph of EWU campus">
            </div>

            <!-- Overall project description-->
            <div class="body_paragraph">
                <div><p><h3><?php include('files/Intro.txt'); ?></h3></p></div>
            
                <div><p><?php include('files/HomeParagraphBodyOne.txt'); ?></p></div>
            </div>
        @endsection
    </body>
</html> 