<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> 

    header{
        background:blue;
        color:white;
    }

    h1,h3,p{
        font-family:arial;
        margin-left:2rem;
    }
    h1{
        font-size:4em;
    }

    h3{
        font-size:2em;
    }

    p{
        font-size:1em;
        font-weight:bold;
        color:coral;
    }
    nav {
        width: 100%;
        display: flex;
        flex-flow: column wrap;
        text-align: left;
        font-family:arial;
        text-transform: uppercase;
        font-weight:bold;  
        margin: 0em;    

    }
    nav ul {
        list-style:none;
        margin: 1em;
    }
    nav li{
        
        cursor:pointer;
        
    }
    nav li a:hover {
        color:red;
    }

    nav li a{
        background:blue;
        color:white;
        text-decoration: none;
        padding-left:1em;
    }
    
    footer{
        font-family:helvetica;
        text-align:center;
        background:blue;
        color:white;
        width: 100%;
        position:absolute;
    }
    </style>
    <title>Examen Programación Web con PHP</title>
</head>
<body>
    <!----- header ----->
    <!----- menu ----->
    <header>
    <?php
        include ('templates/header.php');
        include ('templates/menu.php');
    ?>
    </header>


    <!----- footer ----->
    <footer>
    <?php
        include ('templates/footer.php'); 
    ?>
    </footer>
<body>
</html>