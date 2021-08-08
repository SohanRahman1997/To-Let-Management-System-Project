<?php include('pay.php') ?>
<?php include('new-user.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>

<form method="post" action="payment.php">
    <div class="container">
        <div class="top">
        <h1>Payment</h1>
        </div>
         
        <div class="middle">
        <h3>Pay to Tuition Mangement System</h3>
        </div>

        <div class="bottom">
        <button type="button" class="btn">Pay with BKASH</button>
        <button type="button" class="btn">Pay with Rocket</button>

        <div class="card">
        <p>Pay With Credit/Debit Card</p>
        <div class="card-info-group">
            <label >Card Number</label><br>
            <input type="text" name="card" class="card-info" value="<?php echo $card; ?>" placeholder="xxx-xxx-xxx-xxx" required>
        </div>

        <div class="date-info-group">
            <label>Expiry Date</label><br>
            <input type="text" name="date"  class="date-info" value="<?php echo $date; ?>" placeholder="mm/yyyy" required>
        </div>

        <div class="cvc-info-group">
            <label>CVC</label><br>
            <input type="password" name="cvc"  class="cvc-info" value="<?php echo $cvc; ?>" placeholder="xxx" required>
        </div>

        <div class="name-info-group">
            <label>Card Holder Name</label><br>
            <input type="text" name="name"  class="name-info" value="<?php echo $name; ?>" placeholder="full name" required>
        </div>
        <div class="name-info-group">
            <label>Pay Amount</label><br>
            <input type="text" name="amount"  class="amount-info" value="<?php echo $amount; ?>" placeholder="enter balance" required>
        </div>
        <button type="submit" class="pay-btn" name="pay-btn">Pay Now</button>
        </div>
    </div>
    
    <a href="main.php" style="padding: 10px;font-size: 15px;color: white;background: #5F9EA0;border: none;
	border-radius: 5px;text-decoration: none;">Go to Dashboard</a> 
    </div>
</form>

</body>
</html>