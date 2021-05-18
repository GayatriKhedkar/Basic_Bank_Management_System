<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  


  <style>
      table {
  border-collapse: collapse;
  width: 100%;
  
}

th{
    background-color:black;
    text-align: center;
    font-size: 20px;
    color:white;
}
 td {
  text-align: center;
  padding: 5px;
}

tr:nth-child(even) {
    background-color: 	#C0C0C0;
    /* background-color: 		#87CEFA; */

    }
    .nav{
       background: linear-gradient(to top left, #ff0066 25%, #ffcc66 90%);
       height: 100px;
       width: 100%;
      }
      th{
       /* background: linear-gradient(to top left, #ff0066 20%, #ffcc66 80%); */
       background-color: black;
       color: white;
        /* border: black solid 2px; */
        font-size: 20px;
        

      }
      .name{
        font-size: 35px;
        font-weight: 700;
        font-family: 'Times New Roman', Times, serif;
       
      }
      span a{
        display: inline-block;
         /* background-color: transparent; */
         color: black;
         
         padding: 15px;
         font-weight: 500;
         font-size: 20px;
         /* height: 50px;
         width: 70px; */
         /* background-color: black; */
         
      }
      
       
   span a:hover{
     background-color: black;
     color: white;
     text-decoration: none;
   } 
    /* div button{
    background-color: black;
    /* height: 100px;
    width: 100%; */
     /* text-align: center; 
     color: white;
     
   }
   button:hover
   {
     background-color: white;
     color: black;
   } */ 

  </style>
</head>
<body>
<div class="nav">
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./image/Logof.png" alt="" width="200" height="70" class="d-inline-block align-text-top">
          
        </a>
        <br>
        <span class="name"> GOLDEN HORIZON BANK</span>
        <span style="margin-left: 20%;">
          <a href="./index.html">Home</a>
          </span>
        <span>
          <a href="./viewcust.html">Customers</a>
          </span>
        <span>
          <a href="./viewrecord.php"> Transactions</a>
         </span>
        <span>
          <a href="./aboutus.html">About Us</a>
          </span>
        <div style=" margin-left: 120rem;">
          
  
        </div>
        
      </div>
      
    </nav>
   </div>

    <div class="container" style="margin: 2% 10% 0 10% ; background-color:	#ff0066; ">
        <div class="col-lg-12">
            <br><br>
            <!-- <div><button class="btn"><a href="./viewcust.html"></a> Home</button></div> -->

            <h1 class="text-center" style="color:black;">Transaction History</h1>
            <br>
            <table class="table table-striped table hover table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Sender </th>
                    <th>Receiver</th>
                    <th>Amount</th>
                    <th>Time</th>

                    
                </tr>
                <?php
    include 'conn.php';

            

            $q = " select * from history ";

            $query = mysqli_query($con,$q);

            while($res = mysqli_fetch_array( $query )){


           

?>
                <tr>
                    <td><?php echo $res['ID'] ?></td>
                    <td><?php echo $res['semail'] ?></td>
                    <td><?php echo $res['remail'] ?></td>
                    <td><?php echo $res['amount'] ?></td>
                    <td><?php echo $res['time'] ?></td>


                </tr>
<?php
     }
?>

            </table>
        </div>
    </div>
    <br><br>
    <div style="background-color: black;height: 100px;width: 100%; text-align: center; color: white;">
  <br>
  Main Branch : Senapati Bapat, Road Pune - 67.
  <br>
  https://www.instagram.com/goldenhorizonbank | www.goldenhorizonbank.com/support
  <br>
  @copyright : GayatriKhedkar</div>
</body>
</html>