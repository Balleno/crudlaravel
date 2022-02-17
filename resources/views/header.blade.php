<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Restaurante</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        /*------------------- TODO -------------------*/
        * {
            text-align: center;
        }
        /*------------------ FUENTES -----------------*/
        @import url('https://fonts.googleapis.com/css2?family=Quintessential&display=swap');

        /*----------------- MENU -------------------*/

        #menunav {
            text-align: center;
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            margin-bottom: 15px;
        }

        #menunav > li {
            display: inline;
        }

        #menunav > li a {
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-family: 'Quintessential';
            font-size: 30px;
            transition: 1.5s;
        }

        #menunav > li a:hover {
            background-color: #111;
            color: white;
            text-decoration: none;
        }

        /*------------ FOOTER ----------------*/
        footer {
            background-color: #333;
            position:absolute;
            bottom:0;
            height: 200px;
            width:100%;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            color: white;
            text-decoration: none;
        }

        /*---------------- RESPONSIVE ---------------*/

        @media (max-width: 600px) {

            #menunav li a {
                display: block;
            }

        }

        @media (min-width: 600px) and (max-width: 1000px) {

            #menunav li a {
                display: block;
            }

        }

        @media (min-width: 1000px) {

            #menunav li a {
                display: inline-block;
            }

        }

    </style>
</head>
<body>
    <nav id="header">
        <ul id="menunav">
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ url('plato/') }}">Menú</a></li>
        </ul>
    </nav>
