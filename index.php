<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางข้อมูล</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>ห้อง</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $number = 22;
        $name = "สิปปกร";
        $lastname = "จันทร์พุ่ม";
        $class = "6/10";

        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$name</td>";
            echo "<td>$lastname</td>";
            echo "<td>$class</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<?php

    $a = [1,2,3,4,5,6,7,8,9,10,
    11,12,13,14,15,16,17,18,19,20,
    21,22,23,24,25,26,27,28,29,30,
    31,32,33,34,35,36,37,38,39,40]; 

    // print_r($a);
    echo "มีจำนวน".count($a);
?>

</body>
</html>
