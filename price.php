<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการคำนวณ</title>
</head>
<body>
<?php
    $Title = $_POST["Title"];
    $Age = $_POST["Age"];
    $Gender = $_POST["Gender"];
    $Status = $_POST["Status"];
    $Day = $_POST["Day"];
    $Month = $_POST["Month"];
    $Year = $_POST["Year"];?>

<h2>your profile</h2>
    Title = <?php echo $Title; ?></p>
    Age = <?php echo $Age; ?></p>
    Gender = <?php echo $Gender; ?></p>
    Status = <?php echo $Status; ?></p>
    Date of Birth =<?php echo $Day . " " . $Month . " " . $Year; ?>
<hr>

<?php

        $ราคาสินค้าต่อชิ้น = $_POST ["ราคาสินค้าต่อชิ้น"];
        echo "ราคาสินค้าต่อชิ้น = $ราคาสินค้าต่อชิ้น"; ?>
        <br>
        <?php
        $จำนวนชิ้นที่ซื้อ = $_POST ["จำนวนชิ้นที่ซื้อ"];
        echo "จำนวนชิ้นที่ซื้อ = $จำนวนชิ้นที่ซื้อ";?>
        <br>
        <?php
        $ราคารวม = $ราคาสินค้าต่อชิ้น * $จำนวนชิ้นที่ซื้อ;
        echo "ราคารวม = $ราคารวม";?>
        <br>
        <?php
        $vat = $ราคารวม *0.07 ;
        echo "ภาษีมูลค่าเพิ่ม = $vat";?>
        <br>
        <?php
        $ราคาสุทธิ = $ราคารวม + $vat;
        echo "<span style='color: blue;'>ราคาสุทธิ = </span><span style='color: red;'>$ราคาสุทธิ</span>";
    ?>
</body>
</html>