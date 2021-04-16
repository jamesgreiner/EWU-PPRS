@extends('layouts.format')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    
  <style>
      /* */
    body {
        margin: 0;
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

    .faq_title{
        margin-top: 20px;
        padding: 18px;
        text-align: left;
        color: black;
        

    }

    .faq_head {
        background-color: #b7142e;
        color: white;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        margin-top: 20px;
        font-weight: bold;

    }

    .active {
        background-color: #b7142e;
    }
    .faq_head:hover {
        background-color: #777;
    }

    .content {
        padding: 0 18px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
        background-color: #f1f1f1;
    }
</style>
</head>
<body>
<div class="header">
        <img src="images/ewu.jpg" alt="Banner EWU Logo">
    </div>
    <div class="navbar">
        <a class="active" href="/home"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="/information"><i class="fa fa-fw fa-book"></i> Information</a>
        <a href="/research"><i class="fa fa-fw fa-book"></i> Research Projects</a>
        <a href="/view-data"><i class="fa fa-fw fa-search"></i> View Data</a>
        <a href="/data-entry"><i class="fa fas fa-edit"></i> Enter Data</a>
        <a href="/faq"><i class="fa far fa-comment"></i> FAQ</a>
        <a href="/contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
        <a href="/login"><i class="fa fa-fw fa-user"></i> Login</a>
        <!--<input type="text" placeholder="Search"> commented out because it doesnt format correctly yet -->
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