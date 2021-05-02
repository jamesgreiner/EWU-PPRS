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
    
            .page-header{
                background-color:#b7142e;
                color:white;
                text-align: center;
                line-height: 4rem;
                margin-top: 0;
            }

            .faq-head{
                font-size: 30px;
                font-weight: bold;
                margin-left: 1rem;
            }

            .faq-body{
                font-size: 16px;
                font-weight: normal;
                margin-left: 2rem; 
            }

            .faq-divider{
                border-bottom: black;
                border-bottom-style: solid;
            }

            
            .navbar {
                width: 100%;
                background-color: #555;
                overflow: auto;
            }
           
            .navbar a {
                float: left;
                text-align: center;
                padding: 12px;
                color: white;
                text-decoration: none;
                font-size: 17px;
            }
            
            .navbar a:hover {
                background-color: #b7142e;
            }
            
            @media screen and (max-width: 500px) 
            {
                .navbar a {
                    float: none;
                    display: block;
                } 
            } 
        </style>
    </head>

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
   
    

<h1 class="page-header" style="border-bottom: black; border-bottom-style: solid; margin-bottom: 0">Frequently Asked Questions</h1>

<div class="faq-head">What is the Palouse Prairie Restoration Project?</div>
<div class="content">
    <p class="faq-body">
        Please visit the information tab for a more detailed look at what the project aims to accomplish.
    </p>
</div>
<div class="faq-divider"></div>

<div class="faq-head">How do I edit data that was submitted for a research project?</div>
<div class="content">
    <p class="faq-body">
        Any data submitted for a project can only be edited by the person who submitted it. 
        If you need to edit data that you submitted, please make sure you are logged into your account for this option to be available.
    </p>
</div>
<div class="faq-divider"></div>

<div class="faq-head">How do I edit data that was submitted for a research project?</div>
<div class="content">
    <p class="faq-body">
        Any data submitted for a project can only be edited by the person who submitted it. 
        If you need to edit data that you submitted, please make sure you are logged into your account for this option to be available.
    </p>
</div>
<div class="faq-divider"></div>

<div class="faq-head">How do I delete data that was submitted for a research project?</div>
<div class="content">
    <p class="faq-body">
        To delete any data submitted for a project, you must have admin access. 
        If you are a student researcher, please contact the biology department.
    </p>
</div>
<div class="faq-divider"></div>



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