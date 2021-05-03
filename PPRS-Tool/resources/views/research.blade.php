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
        background-color: #b7142e;
    }
   
    /* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
    @media screen and (max-width: 500px) {
        .navbar a {
            float: none;
            display: block;
        }   
    } 
  
    table{
      margin-top: 40px;
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
      background-color: #f1f1f1;
      font-weight: bold;
    }
  </style>

   <!-- Styles -->
   <link rel="stylesheet" href="{{ mix('css/app.css') }}">
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
   

<div>
<table id="projectTable" width="100%">
  <tr>
  <td class="table_header" ><h2>Research Projects</h2></td>
  </tr>
</table>
    <!---tailwin table templet used https://tailwindui.com/components/application-ui/lists/tables -->
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
          
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <thead>
            
                                    
                                <tr>
                                    <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Study Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Student Lead
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Faculty Lead
                                                             </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Keywords
                                    </th>
                                    <th scope="col" width="200" class="px-6 py-3 bg-gray-50">

                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                               
                               <!---Loop thru all study entries in users database -->
                               
                                @foreach ($entries as $entry)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{$entry->id}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{$entry->study_name}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{$entry->student_name}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{$entry->faculty_name}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        @foreach ($entry->keywords as $keyword)
                                            {{ $loop->first ? '' : ',  ' }}
                                            <span class="nice">{{  $keyword }}</span>
                                        @endforeach
                                        </td>   
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a  class="text-blue-600 hover:text-blue-900 mb-2 mr-2">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</body>
</html>