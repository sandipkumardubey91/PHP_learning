
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <style>
        *{
          margin:0;
          padding:0;

        }
        .table{
            margin: auto;
            margin-top: 100px;
        }
        th, td{
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background-color: coral;
            cursor:pointer;
        }
        .heading{
            display:flex;
            align-items:center;
            justify-content:center;
            background-color: coral;
        }
 
    </style>
</head>
<body>
<?php
    $roll1 = 1400430;
    $roll2 = 1400431;
    if($roll1){
        $dbms1 = 60;
        $cn1 = 70;
        $os1 = 70;
        $python1 = 80;
        $c1 = 90;

        $total1 = $dbms1 + $cn1 + $os1 + $python1 + $c1;
        $percentage1 = ($total1 * 100)/500;

        if($percentage1 >= 60){
            $division1 = "Fisrt";
        }
        else if($percentage1 >= 45 && $percentage1 < 60){
            $division1 = "Second";
        }else if($percentage1 >= 30 && $percentage1 < 45){
            $division1 = "Third";
        }else{
            $division1 = "Failed";
        }

    }if($roll2){
        $dbms2 = 80;
        $cn2 = 79;
        $os2 = 60;
        $python2 = 50;
        $c2 = 90;

        $total2 = $dbms2 + $cn2 + $os2 + $python2 + $c2;
        $percentage2 = ($total2 * 100)/500;

        $division2;
        if($percentage2 >= 60){
            $division2 = "Fisrt";
        }
        else if($percentage2 >= 45 && $percentage2 < 60){
            $division2 = "Second";
        }else if($percentage2 >= 30 && $percentage2 < 45){
            $division2 = "Third";
        }else{
            $division2 = "Failed";
        }
    }
?>
    <div class="heading"><h1 >Result</h1></div>
    
    <table class="table">
        <tr>
            <th>Roll No.</th>
            <th>Total Marks</th>
            <th>Percentage</th>
            <th>Division</th>
        </tr>
        <tr>
            <td><?php
                echo "$roll1";
            ?></td>
            <td><?php
                    echo "$total1";
                
            ?></td>
            <td><?php
                    echo "$percentage1";

            ?></td>
            <td><?php
                    echo "$division1";

            ?></td>
        </tr>
        <tr>
            <td><?php
                echo "$roll2";
            ?></td>
            <td><?php
                    echo "$total2";
                
            ?></td>
            <td><?php
                    echo "$percentage2";

            ?></td>
            <td><?php
                    echo "$division2";

            ?></td>
        </tr>
        
    </table>
</body>
</html>