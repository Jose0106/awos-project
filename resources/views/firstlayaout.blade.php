@extends('layouts.app')
@section('title', 'Home')
@section('content')
<!DOCTYPE html>
<html>
<head> 
            <title> estilos de txto </title>
            <style>
                #p1, #p3 , #h5 {
                    text-align: center;
                    text-decoration: underline;
                    font-size: 35px;
                    font-style: italic;
                    font-family: Verdana, Geneva, Tahoma, sans-serif;
                    text-shadow: 20px 15px 5px  green ;
                    text-transform: capitalize;
                    font-weight: 900;
                    letter-spacing: 10px ;
                    color: purple;
                  
                }
                #p2, #p4, #h6{
                    text-align: center;
                    text-decoration: underline;
                    font-size: 35px;
                    font-style: italic;
                    font-family: Verdana, Geneva, Tahoma, sans-serif;
                    text-shadow: 20px 15px 5px black;
                    text-transform: capitalize;
                    font-weight: 900;
                    letter-spacing: 10px ;
                    color: red;
                }
                body{
                    background-color: gold;
                }
        
        
            </style>
</head>
<body>
    <p id="p1"> oh damn here we go again </p>
    <p id="p2"> damn here we go again </p>
    <p id="p3"> here we go again </p>
    <p id="p4">  we go again </p>
    <h3 id="h5"> go again </h3>
    <h3 id="h6"> again </h3>  </h3>
</body>
</html>