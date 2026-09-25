<?php

$studentName = "Tajmun Nahar Tisha";
$studentID = "23-54386-3";
$foodChoice = 1;      
$quantity = 6;

$foodItem = "";
$price = 0;


switch ($foodChoice) {
    case 1:
        $foodItem = "Coffee";
        $price = 5;
        break;

    case 2:
        $foodItem = "Pizza";
        $price = 8;
        break;

    case 3:
        $foodItem = "Sandwich";
        $price = 4;
        break;

    case 4:
        $foodItem = "Biryani";
        $price = 3;
        break;

   default:
        $foodItem = "Unknown";
        $price = 0;
        break;
}

$subtotal = $price * $quantity;

$discountPercent = 0;

if ($subtotal >= 30) {
    $discountPercent = 20;
} elseif ($subtotal >= 20) {
    $discountPercent = 10;
} else {
    $discountPercent = 0;
}

$discountAmount = ($subtotal * $discountPercent) / 100;
$finalBill = $subtotal - $discountAmount;



echo "      UNIVERSITY CAFETERIA\n";

echo "Student Name : $studentName\n";
echo "Student ID   : $studentID\n";
echo "Food Item    : $foodItem\n";
echo "Price        : $$price\n";
echo "Quantity     : $quantity\n";

echo "\nOrdered Items:\n";

for ($i = 1; $i <= $quantity; $i++) {
    echo "Item $i: $foodItem\n";
}

echo "\nSubtotal      : $$subtotal\n";
echo "Discount      : $discountPercent%\n";
echo "Discount Amt  : $$discountAmount\n";
echo "Final Bill    : $$finalBill\n";

echo "\nThank you for visiting!\n";


?>