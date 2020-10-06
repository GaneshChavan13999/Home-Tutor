<?php
session_start();
?>
<html>
<head>
<title>Transaction</title>
<link rel="stylesheet" type="text/css" href="submit.css"/>;
</head>

<body>
<?php

//check whether stripe token is not empty

    //get token, card and user info from the form
    //$token  = $_POST['stripeToken'];
    $name = $_POST['sname'];
    $email = $_POST['email'];
    $card_num = $_POST['card_num'];
    $card_cvc = $_POST['cvc'];
    $card_exp_month = $_POST['exp_month'];
    $card_exp_year = $_POST['exp_year'];  
    $status="succeeded";	
	$date=date("Y-m-d H:i:s");
    
    
    //item information
    $itemName = $_POST["tname"];
    $itemNumber =$_POST["tusername"];
    $itemPrice =$_POST["tfees"];
	$paid_amount = $itemPrice;
    $currency = "INR";
    $orderID = "SKA92712382139";
    
    
        //include database config file
        include_once 'dbConfig.php';
        
        //insert tansaction data into the database
        $sql =  
"INSERT INTO orders(`name`,`email`,`card_num`,`card_cvc`,`card_exp_month`,`card_exp_year`,
`tname`,`tusername`,`tfees`,`currency`,`paid_amount`,
`paid_amount_currency`,`payment_status`,`created`,`modified`,`s_username`) VALUES
('".$name."','".$email."','".$card_num."','".$card_cvc."','".$card_exp_month."',
'".$card_exp_year."','".$itemName."','".$itemNumber."','".$itemPrice."','".$currency."',
'".$paid_amount."','".$currency."'
,'".$status."','".$date."','".$date."','".$_SESSION["username"]."')";
        $insert = $db->query($sql);
        $last_insert_id = $db->insert_id;
        
        //if order inserted successfullys
		echo"<div class='container'>";
		
        if($last_insert_id && $status == 'succeeded'){
			
            echo"<h2> ".$_SESSION["name"]."    Your  transaction was successful.</h2>
<h3>Order ID: ".$last_insert_id."<br><br>
            Do you want to print receipt? </h3>";
		
		echo '<div>'; 
        echo'<a  href="http://localhost/HOME/STUDENT/reciept.php?id='.$last_insert_id.'"><input type="button" class="btn" value="YES" ></a>';
		//echo '</div>';
		//echo '<div class="btn1">'; 
        echo'<a  href="http://localhost/HOME/STUDENT/homepagelogin.php"><input type="button" class="btn1" value="NO"></a>';
		echo '</div>';
		
		
		}
		
		
		else{
            echo" ".$_SESSION["name"]." YOUR Transaction has been failed try after some time";
        }
  
   
  echo '</div>'; 
//echo $statusMsg;
?>
</body>
</html>