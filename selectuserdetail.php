<?php
include('config.php');


if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='transactionhistory.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>
 
<?php
  include 'nav.php';
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Odibee+Sans&family=Suez+One&display=swap');

@media (min-width: 992px){
    .navbar li {
        margin-left : 1em;
        margin-right : 1em;
    }
}

.bg{
    background-image: url('img/cover.jpg');
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
    color: black;
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
    color:maroon;
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

</style>


	<div class="container">
        <h1>Transaction</h1>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['name'] ?></td>
                    <td class="py-2"><?php echo $rows['email'] ?></td>
                    <td class="py-2"><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
        <br>
        <label>Transfer To:</label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label>Amount:</label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button class="btn btn-primary" name="submit" type="submit" id="btn">Transfer</button>
            </div>
        </form>
    </div>
</body>
</html>