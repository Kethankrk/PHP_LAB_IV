<?php
    if($_POST){
        $name = $_POST['name'];
        $bs = $_POST['bs'];
        $des = $_POST['des'];


        switch ($des) {
            case 'manager':
                $ca = 1000;
                $ea = 500;
                break;
            case 'supervisor':
                $ca = 750;
                $ea = 200;
                break;
            case 'clerk':
                $ca = 500;
                $ea = 100;
                break;
            case 'peon':
                $ca = 250;
                $ea = 0;
                break;
            }
            $hra = $bs * .25;

            $gross = $bs + $hra + $ea + $ca;

            if(!($gross > 2500)){
                $it = 0;
            }
            elseif(!($gross > 4000)){
                $it = $gross * 0.03;
            }
            elseif(!($gross > 5000)){
                $it = $gross * 0.05;
            }
            elseif($gross > 5000){
                $it = $gross * 0.08;
            }

            $net = $gross - $it;
            echo "
    <div style='border: 1px solid black; width: 500px; padding: 20px;'>
    <h2 style='text-align: center'>Pay Slip</h2>
    <b>Employee Name: </b> <u>$name</u><br>
    <b>Designation: </b> <u>$des</u><br><br>
    <table border='1px' style='border-collapse: collapse; text-align: left; width: 100%;'>
        <tr>
            <td>Basic Salary</td>
            <td>$bs</td>
        </tr>
        <tr>
            <td>Conveyance allowance</td>
            <td>$ca</td>
        </tr>
        <tr>
            <td>Extra allowance</td>
            <td>$ea</td>
        </tr>
        <tr>
            <td>HRA</td>
            <td>$hra</td>
        </tr>
        <tr>
            <td>Incom Tax</td>
            <td>$it</td>
        </tr>
        <tr>
            <th>Net Salary</th>
            <th>$net</th>
        </tr>
    </table>
    </div>
            ";
        }

?>


