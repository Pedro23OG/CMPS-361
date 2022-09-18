<?php
    if(!isset($years)) { $years = '5'; }
    if (!isset($discount_percent)) { $discount_percent = ''; }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>The Best Vroom For Your Buck</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
<body>
    <main>
        <h1>The Best Vroom For Your Buck</h1>
        <?php if (!empty($error_message)) { ?>
            <p> class="error"><?php echo $error_message; ?></p>
        <?php } //end if ?>
        <form action="display_results.php" method="post">
            <div id="data">
                
              <label>Cost of Product:</label>
              <select name="investment">
                <?php for ($v = 60000; $v <=160000; $v += 10000) : ?>
                    <option value="<?php echo $v; ?>" >
                        <?php echo $v; ?>
                    </option>
                <?php endfor; ?>
                </select><br>

                <label>Quantity:</label>
              <select name="quantity">
                <?php for ($v = 1; $v <=5; $v += 1) : ?>
                    <option value="<?php echo $v; ?>" >
                        <?php echo $v; ?>
                    </option>
                <?php endfor; ?>
                </select><br>

                <label>Member Discount:</label>
                <input type="text" name="discount_percent"
                    value="<?php echo htmlspecialchars($discount_percent); ?>">
                <span>%</span><br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="checkbox" name="financially_affordable">Financially Affordable
            <br>
            <label>&nbsp;</label>
            <input type="submit" value="Order"><br>
        </form>
    </main>
</body>
</html>