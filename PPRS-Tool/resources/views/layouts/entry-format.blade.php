<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            * {
                box-sizing: border-box;
                padding: 0;
                margin: 0;
            }
            .left-inner-element {
                margin-left: 1rem;
            }

            .page-header {
                    background-color:#b7142e;
                    border-bottom: black; 
                    border-bottom-style: solid;
                    color: white;
                    font-size: 40px;
                    font-family: 'Times New Roman', Times, serif;
                    font-weight: bold;
                    line-height: 5rem;
                    text-align: center;
                    margin-top: 0;
                    margin-bottom: 0;
            }

            .entry-form {
                display: grid;
                grid-template-columns: auto auto;
                background: lightgrey;
                height: auto;
            }

            .section-header {
                color: black; 
                font-size: 40px;
                margin-bottom: 1rem;
                text-align: center;
                text-decoration: underline;
            }
    
            .section1 {
                border-left-style: solid;
                border-right-style: solid;
            }
    
            .section2 {
                border-right-style: solid;
            }
                
            .section3 {
                border-right-style: solid;
            }
            .sub-section-header {
                font-family: 'Courier New', Courier, monospace;
                font-size: x-large;
                font-weight: 600;
                margin-left: 1rem;
            }

            label {
                font-size: large;
                font-weight: 500;
            }

            input {
                
                margin-top: 0.25rem; 
            }

            textarea {
                resize: none;
            }
        </style>
    </head>
       
</html> 