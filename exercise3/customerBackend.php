<?php
    echo "<link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\">";
    echo "<h1>Order Receipt</h1>";

    $CQ = $_POST['course'];
    $EQ = $_POST['exam'];
    $AQ = $_POST['assignment'];
    $shipping = $_POST['ship'];
    $pass = $_POST['password'];
    $user = $_POST['email'];
    $CP = $CQ * 1000;
    $EP = $EQ * 100;
    $AP = $AQ * 10;
    $SP = 0;

    echo "<h3>Welcome $user!</h3>";
    echo "<div>Your current password is: $pass</div>";
    echo "<h3>Your items: </h3>";
    echo "<div>Courese - Quantity: $CQ, Item total: \$$CP.00</div>";
    echo "<div>Exam - Quantity: $EQ, Item total: \$$EP.00</div>";
    echo "<div>Assignment - Quantity: $AQ, Item total: \$$AP.00</div>";
    if($shipping == "f") {echo "<h4>Shipping selected: FREE SHIPPING</h4>";}
    if($shipping == "o") {echo "<h4>Shipping selected: OVERNIGHT SHIPPING - \$50.00</h4>"; $SP = 50;}
    if($shipping == "t") {echo "<h4>Shipping selected: THREE DAY SHIPPING - \$5.00</h4>"; $SP = 5;}
    $total = $CP + $EP + $AP + $SP;
    echo "<h2>ORDER TOTAL: \$$total.00</h2>";
?>