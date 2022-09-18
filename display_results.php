<?php

    //Capture data from original screen
    $investment = filter_input(INPUT_POST, 'investment', FILTER_VALIDATE_FLOAT);
    $quantity = filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_FLOAT);
    $interest_rate = filter_input(INPUT_POST, 'interest_rate', FILTER_VALIDATE_FLOAT);
    $years = filter_input(INPUT_POST, 'years', FILTER_VALIDATE_FLOAT);
    $discount_percent = filter_input(INPUT_POST, 'discount_percent', FILTER_VALIDATE_INT);

    //validation
    if($investment === FALSE ){
        $error_message = 'Cost of product must be a valid number.';
    } else if ($investment <=0) {
        $error_message = 'Cost of product must be greater than zero.';
    } else {
        $error_message = '';
    }

    if ($discount_percent === FALSE) {
        $error_message .= 'Discount Percent must be a valid whole number.<br>';
    } else if ($discount_percent <= 0) {
        $error_message .= 'Discount Percent must be greater than 0.<br>';
    }

    //if error message
    if($error_message !='') {
        include('index.php');
        exit();
    }

    $investment_f = '$'.number_format($investment, 2);
    $quantity_f = '#'.number_format($quantity, 2);
    $discount = $investment * $discount_percent * .01;
    $discount_price = $investment - $discount;
    $discount_percent_formatted = $discount_percent."%";
    $discount_formatted = "$".number_format($discount, 2);
    $discount_price_formatted = "$".number_format($discount_price, 2);
?>  

<!DOCTYPE html>
<html>
    <head>
    <form>
        <input type="button" value="Go back!" onclick="history.back()">
    </form>
        <title>Order Summary</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <main>
            <h1>Order Summary</h1>

            <label>Cost of Product:</label>
            <span><?php echo $investment_f; ?><span><br>

            <label>Quantity:</label>
            <span><?php echo $quantity_f; ?><span><br>

            <label>Discount Amount:</label>
            <span><?php echo $discount_formatted; ?></span><br>

            <label>Discount Price:</label>
            <span><?php echo $discount_price_formatted; ?></span><br>
        </main>
    </body>
</html>