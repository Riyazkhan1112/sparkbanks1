<!-- nav section starts here -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sparks Bank</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <link rel="stylesheet" type="text/css" href="css/createuser.css">
  <link rel="stylesheet" type="text/css" href="css/contact.css">
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel = "icon" href = "img/logo.png" type = "image/x-icon">


  <style>
    @import url('https://fonts.googleapis.com/css2?family=Odibee+Sans&family=Suez+One&display=swap');

@media (min-width: 992px){
    .navbar li {
        margin-left : 1em;
        margin-right : 1em;
    }
}

.bg{
    background-image: url('img/bank1.jpg');
    background-position: center;
    background-size: cover;
    height: 100vh;
}

  
.vertical-center {
    margin-top: 0;
    position: absolute;
    top: 100%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}

h1{

    background-color:transparent;
    cursor: pointer;
    color: maroon;
    text-align: center;
    height: 70px;
    margin-bottom: 0 !important;
    border: 0 !important;
    height: auto;
    transform: 1s;
    font-family: 'Suez One', serif;
}

h1:hover{
    background-color:transparent;
    color:black;
    transition-duration: 1s;
}


.btn-button{
    display: inline-block;
    position: relative;
    color: white;
    background-color: black;

}

.btn-button:hover{
    
    background-color: white;
    color: black;
}

.navbar{
  background-color:lightblue;
    height: 60px;
    margin-bottom: 0 !important;
    border: 0 !important;
}

.nav-item{
    background-color: maroon;
    border-radius: 10px;
}


.center{
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.operations{
    list-style: none;
    /*border: 2px solid #fff;*/
    font-size: 15px;
    font-weight: bold;
    margin: 30px;
    border-radius: 15px;
    font-family: arial;
}

.operations button{
    text-decoration: none;
    padding: 15px 35px;
    display: block;
    text-align: center;
    box-shadow: #020405;
}

a{
    text-decoration: none;
}

#red{
    background-color: transparent;
    color: red;
    border-radius: 15px;
    border: 2px solid red;
    width: 300px;
    text-decoration: none;
}

#red:hover{
    background-color: red;
    color: white;
}

#blue{
    background-color: transparent;
    color: blue;
    border-radius: 15px;
    border: 2px solid blue;
    width: 300px;
    text-decoration: none;
}

#blue:hover{
    background-color: blue;
    color: white;
}

#green{
    background-color: transparent;
    color: green;
    border-radius: 15px;
    border: 2px solid green;
    width: 300px;
    text-decoration: none;
}

#green:hover{
    background-color: green;
    color: white;
}

a #container {
    min-height:100%;
    position:relative;
 }
 /*
 #footer {
    background-color:black;
    padding:10px;
    color: aliceblue;
    height: auto;
 }*/

 #container #header{
    color: rgb(165, 163, 163);
    text-align: center;
    height: 50px;
    margin-bottom: 0 !important;
    border: 0 !important;
    margin-bottom: 5px;
 }

 

</style>
  

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light" >
    <div class="container-fluid">
      <a class="navbar-brand logo" href="index.php"><img src="img/logo.png" alt="logo" height=50px width=50px></a>
      <h1> Sparks Bank...</h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">


          <li class="nav-item btn btn-secondary  " >
            <a class="nav-link text-white" href="index.php">Home</a>
          </li>
          <li class="nav-item btn btn-secondary">
            <a class="nav-link link-text text-white" href="https://riyazpathan.dypefengineering.in/">About Us</a>
          </li>
          <li class="nav-item btn btn-secondary">
            <a class="nav-link link-text text-white" href="contactme.php">Contact Us </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>

  
  
