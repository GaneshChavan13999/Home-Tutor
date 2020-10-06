<html>
<head>
<title>Payment</title>
<link rel="stylesheet" type="text/css" href="pay.css">
<link rel="stylesheet" type="text/css" href="global.css">

</head>
<body>
<header>
<div class="main">
</div>
<a href="homepagelogin.php"><div class="header">&nbsp;&nbsp;HOME TUTOR's </a></div>
<br>

<body>
<div class="loginbox">
<h1 align="center">PAYMENT</h1>
    <!-- Stripe JavaScript library -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<!-- jQuery is used only for this example; it isn't required to use Stripe -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!-- display errors returned by createToken -->
<span class="payment-errors"></span>

<!-- stripe payment form -->
<form action="submit.php" method="POST" id="paymentFrm">

<?php
    $con=mysqli_connect("localhost","root","","tutor");
    $sql="select * from tutor_details where id='".$_GET["id"]."'";
    $result=$con->query($sql);
    while($row=$result->fetch_assoc())
    { ?><?php echo '
    <p><p>
        <label><b>Tutor Name</b></label>
	<br>
        <input type="text" name="tname" id="tname" value="'.$row["name"].'" readonly/>';
        echo '</p><p>
        <label><b>Tutor Username</b></label><br>
        <input type="text" name="tusername" id="tusername" value="'.$row["username"].'" readonly/>';
        echo '</p><p><br>
        <label><b>Tutor Fees</b></label>&nbsp;&nbsp;
        <input type="number" name="tfees" id="tfees" value="'.$row["fees"].'" readonly/></p></p>';
     } ?>
	 <br>
    <p>
        <label><b>Name</b></label>
        <input type="text" name="name" size="50" />
    </p>
    <p>
        <label><b>Email</b></label>
        <input type="text" name="email" size="50" />
    </p>
    <p>
        <label><b>Card Number</b></label>
        <input type="text" name="card_num" size="20" autocomplete="off" 
class="card-number" />
    </p>
    <p>
        <label><b>CVC</b></label>
        <input type="text" name="cvc" size="4" autocomplete="off" class="card-cvc" />
    </p>
    <p>
        <label><b>Expiration (MM/YYYY)</b></label>
        <input type="text" name="exp_month" size="2" class="card-expiry-month"/>
        /
        <input type="text" name="exp_year" size="4" class="card-expiry-year"/>
    </p>
<br>
    <button type="submit" id="payBtn">Submit Payment</button>
</form>
<script type="text/javascript">
    //set your publishable key
    Stripe.setPublishableKey('pk_test_vAXewLVJ2TvJ0NI8cWjuRvFL00LYh13dqX');
    
    //callback to handle the response from stripe
    function stripeResponseHandler(status, response) {
        if (response.error) {
            //enable the submit button
            $('#payBtn').removeAttr("disabled");
            //display the errors on the form
            $(".payment-errors").html(response.error.message);
        } else {
            var form$ = $("#paymentFrm");
            //get token id
            var token = response['id'];
            //insert the token into the form
            form$.append("<input type='hidden' name='stripeToken' value='" 
    + token + "' />");
            //submit form to the server
            form$.get(0).submit();
        }
    }
    $(document).ready(function() {
        //on form submit
        $("#paymentFrm").submit(function(event) {
            //disable the submit button to prevent repeated clicks
            $('#payBtn').attr("disabled", "disabled");
            
            //create single-use token to charge the user
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
            
            //submit from callback
            return false;
        });
    });
    </script>
</header>
</body>
</html>
