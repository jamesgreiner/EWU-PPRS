<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <!-- <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">-->
        <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
        <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                font-family: 'Times New Roman', Times, serif;
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
        
            
            table,th,td{
        
            border-collapse: collapse;
            }
            td{
            background-color: white;
            }
            .center {
            
            overflow-x: auto;
            width: 100%;
            }
            td:nth-child(even) {
            background-color: #f5f5f5;
            }
            .table_header {
            text-align: center;
            background-color: #b7142e;
            font-weight: bold;
            color: white;
            }
            .page-header{
                background-color:#b7142e;
                color:white;
                text-align: center;
                line-height: 5rem;
                margin-top: 0;
            }
        </style>
    </head>
        
    <body>
        <div class="header">
            <img src="images/ewu.jpg" alt="Banner EWU Logo">
        </div>
        <div class="navbar">
            <a class="active" href="/"><i class="fa fa-fw fa-home"></i> Home</a>
            <a href="/project-info"><i class="fa fa-fw fa-book"></i> Information</a>
            <a href="/projects"><i class="fa fa-fw fa-book"></i> Research Projects</a>
            <a href="/faq"><i class="fa far fa-comment"></i> FAQ</a>
            <a href="/contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
            <!--- If user logged in display dashboard link
                If user NOT logged in display login link -->
                @auth
                    <a href="{{ url('/dashboard') }}"><i class="fa fa-fw fa-user"></i> Dashboard</a>
                @else
                    <a href="{{ route('login') }}"><i class="fa fa-fw fa-user"></i> Login</a>
                @endauth
        </div>
        @yield('content')
    
    </body>
</html> 