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

</head>


<body>
<!---------------------ADD BANNER AND NAVBAR HERE--------------------------------------------------------------------------------->
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
 
   
<!--------------------------------------------------------------------------------------------------------------------------------->
<table id="projectTable" class="center">
  <tr>
    <td class="table_header" ><h2 style="background-color: #b7142e;">Research Projects</h2></td>
  </tr>
</table>
<br>

<script>
//------------------------------------------------------------------------------------------
  //data will be imported from database
  var title = "Research Title";
  //change # with research page
  var infoButton = ' <button type="button" onclick="#">File</button>';
  var authors = "---Research Contributors";
  var description = "---Research Description";
  var entryCount = 5;
//--------------------------------------------------------------------------------------------
  //function researchTableSlot() {
    for (var i = 1; i < entryCount; i++){
      
      var table = document.getElementById("projectTable");
      
      //add title row
      var row = table.insertRow(-1);
      var cell1 = row.insertCell(0);
      cell1.style.backgroundColor = "#b7142e"; 
      cell1.style.color = "white";
      cell1.style.padding = "5px";
      cell1.style.boarderBottom = "none";
      cell1.style.align = "left";
     
    
      cell1.innerHTML = title.fontsize(6).bold();
      
      
      //add contributors row
      var row = table.insertRow(-1);
      var cell2= row.insertCell(0);
      cell2.style.boarderBottom = "none";
      cell2.style.padding = "5px";
      cell2.style.backgroundColor = "#f1f1f1"; 
      cell2.innerHTML = authors;
      
      //add description row
      var row = table.insertRow(-1);
      var cell3 = row.insertCell(0);
      cell3.style.boarderBottom = "none";
      cell3.style.padding = "5px";
      cell3.style.backgroundColor = "#f1f1f1";
      cell3.innerHTML = description;
       
       //will implement for loop to add buttons to each file
       //add file row
       var row = table.insertRow(-1);
      var cell3 = row.insertCell(0);
      cell3.style.boarderBottom = "none";
      cell3.style.padding = "5px";
      cell3.style.backgroundColor = "#f1f1f1";
      cell3.innerHTML = infoButton + infoButton + infoButton;
    //}
  }
</script>

</body>
</html>