
<?php include('nav.php') ?>

<!-- <style>
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

 

</style> -->




<div class="bg">
  <div class="center">
 
    <ul>
      <li class="operations"><a href="transfer_money.php"><button class="btn" id="red">View All Users</button></a></li>
      <li class="operations"><a href="transfer_money.php"><button class="btn" id="blue">Trasnfer Money</button></a></li>
      <li class="operations"><a href="transactionhistory.php"><button class="btn" id="green">View Transfer History</button></a></li>
    </ul>
  </div>
</div>
</body>
</html>
  
