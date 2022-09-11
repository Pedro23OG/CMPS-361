<?php
 // set the default values
 if (!isset($product_description)) { $product_description = ''; }
 if (!isset($list_price)) { $list_price = ''; }
 if (!isset($state_tax)) { $state_tax = ''; }
 if (!isset($local_tax)) { $local_tax = ''; }
 if (!isset($discount_percent)) { $discount_percent = ''; }
?>
<html>
    <head>
        <title>My Supercar Discounts</title>
        <link rel="stylesheet"  type="text/css" href="main.css">
    </head>
<body>
    <main>
        <h1>Supercar Discounts</h1>
        <?php if (!empty($error_message)) { ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php } // end if statement ?>

        <form action="supercardiscounts.php" method="post">
            <div id="data">
                <!-- Product Description -->
                <label>Product Description:</label>
                <input type="text" name="product_description"
                    value="<?php echo htmlspecialchars($product_description); ?>"><br>
                <!-- List Price -->
                <label>List Price:</label>
                <input type="text" name="list_price"
                    value="<?php echo htmlspecialchars($list_price); ?>"><br>
                <!-- State Tax -->
                <label>State Tax:</label>
                <input type="text" name="state_tax"
                    value="<?php echo htmlspecialchars($state_tax); ?>"><br>
                <!-- Local Tax -->
                <label>Local Tax:</label>
                <input type="text" name="local_tax"
                    value="<?php echo htmlspecialchars($local_tax); ?>"><br>
                <!-- Discount Percentage -->
                <label>Discount:</label>
                <input type="text" name="discount_percent"
                    value="<?php echo htmlspecialchars($discount_percent); ?>"><br>
                <span>%</span><br>
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate"><br>
        </form>
    </main>
</body>
</html>