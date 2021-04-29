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
        <a href="/faq"><i class="fa far fa-comment"></i> FAQ</a>
        <a href="/contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
        @auth
            <a href="{{ url('/dashboard') }}"><i class="fa fa-fw fa-user"></i> Dashboard</a>
        @else
            <a href="{{ route('login') }}"><i class="fa fa-fw fa-user"></i> Login</a>
        @endauth
    </div> 
    
<h2 class="faq_title">Frequently Asked Questions:</h2>



<button class="faq_head">-- I can't edit my research project? </button>
<div class="content">
  <p class="faq_body">Only submitting user of project can edit project data.<br>
     Submitting user must be logged in to edit submitted data. </p>
</div>

<button class="faq_head">-- How do I delete a submitted research project?</button>
<div class="content">
  <p class="faq_body">To delete a submitted research project please contact the biology department.  </p>
</div>

<button class="faq_head">-- FAQ head</button>
<div class="content">
  <p class="faq_body">Faq body</p>
</div>

<script>
var coll = document.getElementsByClassName("faq_head");
var i;
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

</body>
</html>