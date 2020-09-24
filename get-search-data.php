<?php
    require_once "./include/connection.php";
    $date1 = $_POST['dt1'];
    $date2 = $_POST['dt2'];
    $sql = "SELECT * FROM `reports` WHERE dt BETWEEN '$date1' AND '$date2' ORDER BY dt";
    $output = "";
    $exp = 0;
    $in = 0;
    $res = 0;
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0){
        $output = '<div class="container"><table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>INCOME</th>
                <th>EXPENCE</th>
                <th>DATE</th>
            </tr>';
        while($row = mysqli_fetch_assoc($result)){
            $output.=" <tr><td><input type='text' class='form-control' value='{$row["id"]}'></td> <td><input type='text' class='form-control' value='{$row["income"]}'></td> <td><input type='text' class='form-control' value='{$row["expence"]}'></td> <td><input type='text' class='form-control' value='{$row["dt"]}'></td></tr>";
            $exp =  $exp + (int)$row['income'];
            $in = $in + (int)$row['expence'];
            $res = $in-$exp;
        }
        $res = $in - $exp;
        $output .=" <tr>
                    <td colspan='2' style='text-align:right;'>Amount balace</td>
                    <td colspan='2' style='text-align:center; font-weight: bold'>{$res}</td>
                    </tr>
                </table>";
        mysqli_close($con);
        echo $output;
    }else{
        echo $output .="<h6 style='color: red'>no data found or wrong date...</h6>";
    }












?>