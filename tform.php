
<?php
include 'conn.php';
if(isset($_POST['send'])){
    $semail = $_POST['semail'];
    $remail = $_POST['remail'];
    $amount = $_POST['amount'];

    $q = "INSERT INTO `history`(`semail`, `remail`, `amount`) VALUES ('$semail','$remail','$amount') ";

    $query = mysqli_query($con,$q);
    
   

} 

?>

<html>
 <head>
  <title>Transaction</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
  <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
  <style>
      *{
    box-sizing: border-box;
   
}
.ft{
    font-size : 150%;
    
}
h4{
    background-color:#ff0066;
    padding: 7px;
    color:white;
}
/* a{
    
} */
  </style> 
  
 </head>
 <body>

  <div class="container">
   <br />
   <br />
   

   
   <!-- w<a href="viewcust.html" onclick="window.history.back();return true;">Previous Page</a> -->
  
   <h4 class="text-center mb-2 text-black"> <i>

       Verification Completed !
       </i>
    </h4><br />
    
   <h3 class="text-center">TRANSACTION GATEWAY</h3>
   <br />
   <form method="post" id="add_details">

        <div class="row">
            <div class="col-lg-4"> </div>

            <div class="col-lg-4 p-3 mb-2 text-white" style="background-color:rgba(255,0,0,0.5);">
                    <br><br>    
                    <div class="form-group">
                        <label style="font-size: 150%;font-family: 'sans serif'; margin-bottom: 10px;">Enter Your Email Here:</label>
                        <input type="text" name="semail" class="form-control" placeholder="abc@gmail.com" />
                    </div>
                    <div class="form-group">
                        <label style="font-size: 150%;font-family: 'sans serif';margin-bottom: 10px;">Enter the recepeint's email:</label>
                        <input type="text" name="remail" class="form-control" placeholder="xyz@gmail.com" />
                    </div>
                    <div class="form-group">
                        <label style="font-size: 150%;font-family: 'sans serif';margin-bottom: 10px;">Enter Amount to Transfer:</label>
                        <input type="number" name="amount" class="form-control" placeholder="INR" />
                    </div>
                    <div>
                        <!-- <input type="submit"  /> -->
                        <br><br>
                        <button type="submit" name="cancel" id="add" class="btn" style="background-color:black; color:white; margin-left: 180px;" value="Cancel">Cancel</button>
                        
                        <button type="submit" name="send" id="add" class="btn third" style="background-color:black; color:white;" value="Transfer" onclick="fun()"> Transfer</button>
                    </div>
                    <script>
                        function fun(){
                            
                            alert('Tansferred Successfully !!');
                        }
                    </script>
                    <br />   
                    
            </div>

            <div></div>
            
        </div>
    </form>
    
</div>

<br><br>
<div style="text-align: center;font-size:25px;">
    Don't Refresh your Browser until you get confirmation after transfer...
</div>
 </body>
</html>