<?php include("include.php")?>
<?php include ("connection.php") ?>

<br>
<br>
<br>
<br>





<table>
<tr>
<form method =post action="data.php">
<table style ="font-family:arial; font-size:15" width='600' border='1' align=center>
<tr><th>TOTAL AGENT</th></tr>
<tr >
<th>MONTH</th>
<th>PLANNED</th>
<th>ACTUAL</th>
</tr>
<?php 
$sql = "SELECT * from total_agent ;";
$result = mysqli_query($db,$sql);
$j1 = 0;
while($row =mysqli_fetch_array($result)){
    echo '<tbody>';
		echo '<tr>';
        echo '<td>';
        echo '<input type="text" value="'.$row["month"].'" name="name'.$j1.'" readonly/>'; 
        echo '</td>';
        //echo '<td>'.$row["month"].'</td>';


        echo '<td>';
        echo '<input type="text" value="'.$row["planned"].'" name="pln'.$j1.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type="text" value="'.$row["actual"].'" name="act'.$j1.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type = "submit" value= "update" name="address1'.$j1.'" />';
        if (isset($_POST['address1'.$j1.'']))
        {
            if (isset($_POST['check1'.$j1.'']))
            {
                $nam = $_POST['name'.$j1.''];
                $plnd = $_POST['pln'.$j1.''];
                $act = $_POST['act'.$j1.''];

                $update= "update total_agent set month='$nam', planned = '$plnd' , actual = '$act'
                            where month = '$nam'";
                $qry = mysqli_query($db,$update);
                if (!$qry) {echo "updation failed";}
                else{
                    header ("location:data.php");
                    //echo "<script type ='text/javascript'>alert ('updated successfully!')</script>";
                }
                }

            else {echo "plz select checkbox";}
            }
            echo "</td>";

            echo "<td>";
            echo '<input type="submit" value ="delete" name="delete1'.$j1.'"/>';
            
            
            if (isset($_POST['delete1'.$j1.'']))
            {
                if (isset($_POST['check1'.$j1.'']))
                {
                    $nam = $_POST['name'.$j1.''];
                    $delete = "delete from total_agent where month = '$nam'";
                   $qry = mysqli_query($db,$delete);
                if (!$qry) { echo "updation failed";}
                else{
                    header ("location:data.php");
                    echo "<script type ='text/javascript'>alert ('updated successfully!')</script>";
                }
            }
                else {echo "please select checkbox";}
            }
            echo "</td>";


            echo "<td>";
            echo '<input type="checkbox" name = "check1'.$j1.'"/>';
            echo "</td>";
            $j1 = $j1 + 1;
        
                
                

        


        

        
                                            


	echo '</tr>';
									

}
echo '<tr>';
echo '<td>';
echo '<input type="text" name="textmonth1"/>';
echo '</td>';

echo '<td>';
echo '<input type="text" name="textplanned1"/>';
echo '</td>';

echo '<td>';
echo '<input type="text" name="textactual1"/>';
echo '</td>';

echo '<td>';
echo '<input type="submit" value="add" name="add" />';
if(isset($_POST['add']))
{
    $nam = $_POST['textmonth1'];
    $plnd = $_POST['textplanned1'];
    $act = $_POST['textactual1'];

    if(is_null($nam) or is_null($plnd) or is_null($act)){
        echo "fill all fields";
    }
    else{
    
        $add = "insert into total_agent values('$nam','$plnd','$act')";
         $qry = mysqli_query($db,$add);
        if (!$qry) {echo "adding failed";
    				}
        else{
            header("location:data.php");
        }
    }
    
    
    
    
}
echo '</td>';
echo '</tr>';






echo '</tbody>';

?>
</tr>

<tr height = 20px></tr>
<tr height = 20px></tr>
<tr height = 20px></tr>

<tr>
<form method =post action="data.php">
<table style ="font-family:arial; font-size:15" width='600' border='1' align=center>
<tr><th>TOTAL EMPLOYEE</th></tr>
<tr >
<th>MONTH</th>
<th>PLANNED</th>
<th>ACTUAL</th>
</tr>
<?php
$sql2 = "SELECT * from total_employee ;"; 
$result2 = mysqli_query($db,$sql2);
$j2 = 0;
while($row =mysqli_fetch_array($result2)){
    echo '<tbody>';
		echo '<tr>';
        echo '<td>';
        echo '<input type="text" value="'.$row["month"].'" name="name'.$j2.'" readonly/>'; 
        echo '</td>';
        //echo '<td>'.$row["month"].'</td>';


        echo '<td>';
        echo '<input type="text" value="'.$row["planned"].'" name="pln'.$j2.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type="text" value="'.$row["actual"].'" name="act'.$j2.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type = "submit" value= "update" name="address2'.$j2.'" />';
        if (isset($_POST['address2'.$j2.'']))
        {
            if (isset($_POST['check2'.$j2.'']))
            {
                $nam = $_POST['name'.$j2.''];
                $plnd = $_POST['pln'.$j2.''];
                $act = $_POST['act'.$j2.''];

                $update= "update total_employee set month='$nam', planned = '$plnd' , actual = '$act'
                            where month = '$nam'";
                $qry = mysqli_query($db,$update);
                if (!$qry) {echo "updation failed";}
                else{
                    header ("location:data.php");
                    //echo "<script type ='text/javascript'>alert ('updated successfully!')</script>";
                }
                }

            else {echo "plz select checkbox";}
            }
            echo "</td>";

            echo "<td>";
            echo '<input type="submit" value ="delete" name="delete2'.$j2.'"/>';
            
            
            if (isset($_POST['delete2'.$j2.'']))
            {
                if (isset($_POST['check2'.$j2.'']))
                {
                    $nam = $_POST['name'.$j2.''];
                    $delete = "delete from total_employee where month = '$nam'";
                   $qry = mysqli_query($db,$delete);
                if (!$qry) { echo "updation failed";}
                else{
                    header ("location:data.php");
                    echo "<script type ='text/javascript'>alert ('updated successfully!')</script>";
                }
            }
                else {echo "please select checkbox";}
            }
            echo "</td>";


            echo "<td>";
            echo '<input type="checkbox" name = "check2'.$j2.'"/>';
            echo "</td>";
            $j2 = $j2 + 1;
        
                
                

        


        

        
                                            


	echo '</tr>';
									

}
echo '<tr>';
echo '<td>';
echo '<input type="text" name="textmonth"/>';
echo '</td>';

echo '<td>';
echo '<input type="text" name="textplanned"/>';
echo '</td>';

echo '<td>';
echo '<input type="text" name="textactual"/>';
echo '</td>';

echo '<td>';
echo '<input type="submit" value="add" name="add2" />';
if(isset($_POST['add2']))
{
    $nam = $_POST['textmonth'];
    $plnd = $_POST['textplanned'];
    $act = $_POST['textactual'];

    if(is_null($nam) or is_null($plnd) or is_null($act)){
        echo "fill all fields";
    }
    else{
    
        $add = "insert into total_employee values('$nam','$plnd','$act')";
         $qry = mysqli_query($db,$add);
        if (!$qry) {echo "adding failed";}
        else{
            header("location:data.php");
        }
    }
    
    
    
    
}
echo '</td>';
echo '</tr>';






echo '</tbody>';

?>
<tr/>




<tr height = 20px></tr>
<tr height = 20px></tr>
<tr height = 20px></tr>

<tr>
<form method =post action="data.php">
<table style ="font-family:arial; font-size:15" width='600' border='1' align=center>
<tr><th>TOTAL REVENUE</th></tr>
<tr >
<th>MONTH</th>
<th>PLANNED</th>
<th>ACTUAL</th>
</tr>
<?php
$sql3 = "SELECT * from total_revenue ;"; 
$result3 = mysqli_query($db,$sql3);
$j3 = 0;
while($row =mysqli_fetch_array($result3)){
    echo '<tbody>';
		echo '<tr>';
        echo '<td>';
        echo '<input type="text" value="'.$row["month"].'" name="name'.$j3.'" readonly/>'; 
        echo '</td>';
        //echo '<td>'.$row["month"].'</td>';


        echo '<td>';
        echo '<input type="text" value="'.$row["planned"].'" name="pln'.$j3.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type="text" value="'.$row["actual"].'" name="act'.$j3.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type = "submit" value= "update" name="address3'.$j3.'" />';
        if (isset($_POST['address3'.$j3.'']))
        {
            if (isset($_POST['check3'.$j3.'']))
            {
                $nam = $_POST['name'.$j3.''];
                $plnd = $_POST['pln'.$j3.''];
                $act = $_POST['act'.$j3.''];

                $update= "update total_revenue  set month='$nam', planned = '$plnd' , actual = '$act'
                            where month = '$nam'";
                $qry = mysqli_query($db,$update);
                if (!$qry) {echo "updation failed";}
                else{
                    header ("location:data.php");
                    //echo "<script type ='text/javascript'>alert ('updated successfully!')</script>";
                }
                }

            else {echo "plz select checkbox";}
            }
            echo "</td>";

            echo "<td>";
            echo '<input type="submit" value ="delete" name="delete3'.$j3.'"/>';
            
            
            if (isset($_POST['delete3'.$j3.'']))
            {
                if (isset($_POST['check3'.$j3.'']))
                {
                    $nam = $_POST['name'.$j3.''];
                    $delete = "delete from total_revenue  where month = '$nam'";
                   $qry = mysqli_query($db,$delete);
                if (!$qry) { echo "updation failed";}
                else{
                    header ("location:data.php");
                    echo "<script type ='text/javascript'>alert ('updated successfully!')</script>";
                }
            }
                else {echo "please select checkbox";}
            }
            echo "</td>";


            echo "<td>";
            echo '<input type="checkbox" name = "check3'.$j3.'"/>';
            echo "</td>";
            $j3 = $j3 + 1;
        
                
                

        


        

        
                                            


	echo '</tr>';
									

}
echo '<tr>';
echo '<td>';
echo '<input type="text" name="textmonth3"/>';
echo '</td>';

echo '<td>';
echo '<input type="text" name="textplanned3"/>';
echo '</td>';

echo '<td>';
echo '<input type="text" name="textactual3"/>';
echo '</td>';

echo '<td>';
echo '<input type="submit" value="add" name="add3" />';
if(isset($_POST['add3']))
{
    $nam = $_POST['textmonth3'];
    $plnd = $_POST['textplanned3'];
    $act = $_POST['textactual3'];

    if(is_null($nam) or is_null($plnd) or is_null($act)){
        echo "fill all fields";
    }
    else{
    
        $add = "insert into total_revenue  values('$nam','$plnd','$act')";
         $qry = mysqli_query($db,$add);
        if (!$qry) {echo "adding failed";}
        else{
            header("location:data.php");
        }
    }
    
    
    
    
}
echo '</td>';
echo '</tr>';






echo '</tbody>';

?>
<tr/>

<tr height = 20px></tr>
<tr height = 20px></tr>
<tr height = 20px></tr>
<!-- TABLE NO 4 FOR DOMESTIC TICKET SALES ******************************************************************************************************   -->
<tr>
<form method =post action="data.php">
<table style ="font-family:arial; font-size:15" width='600' border='1' align=center>
<tr><th>DOMESTIC TICKET SALES</th></tr>
<tr >
<th>MONTH</th>
<th>PLANNED</th>
<th>ACTUAL</th>
</tr>
<?php
$sql4 = "SELECT * from dom_sales ;"; 
$result4 = mysqli_query($db,$sql4);
$j4 = 0;
while($row =mysqli_fetch_array($result4)){
    echo '<tbody>';
		echo '<tr>';
        echo '<td>';
        echo '<input type="text" value="'.$row["month"].'" name="name'.$j4.'" readonly/>'; 
        echo '</td>';
        //echo '<td>'.$row["month"].'</td>';


        echo '<td>';
        echo '<input type="text" value="'.$row["planned"].'" name="pln'.$j4.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type="text" value="'.$row["actual"].'" name="act'.$j4.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type = "submit" value= "update" name="address4'.$j4.'" />';
        if (isset($_POST['address4'.$j4.'']))
        {
            if (isset($_POST['check4'.$j4.'']))
            {
                $nam = $_POST['name'.$j4.''];
                $plnd = $_POST['pln'.$j4.''];
                $act = $_POST['act'.$j4.''];

                $update= "update dom_sales  set month='$nam', planned = '$plnd' , actual = '$act'
                            where month = '$nam'";
                $qry = mysqli_query($db,$update);
                if (!$qry) {echo "updation failed";}
                else{
                    header ("location:data.php");
                    //echo "<script type ='text/javascript'>alert ('updated successfully!')</script>";
                }
                }

            else {echo "plz select checkbox";}
            }
            echo "</td>";

            echo "<td>";
            echo '<input type="submit" value ="delete" name="delete4'.$j4.'"/>';
            
            
            if (isset($_POST['delete4'.$j4.'']))
            {
                if (isset($_POST['check4'.$j4.'']))
                {
                    $nam = $_POST['name'.$j4.''];
                    $delete = "delete from dom_sales  where month = '$nam'";
                   $qry = mysqli_query($db,$delete);
                if (!$qry) { echo "updation failed";}
                else{
                    header ("location:data.php");
                    echo "<script type ='text/javascript'>alert ('updated successfully!')</script>";
                }
            }
                else {echo "please select checkbox";}
            }
            echo "</td>";


            echo "<td>";
            echo '<input type="checkbox" name = "check4'.$j4.'"/>';
            echo "</td>";
            $j = $j + 1;
        
                
                

        


        

        
                                            


	echo '</tr>';
									

}
echo '<tr>';
echo '<td>';
echo '<input type="text" name="textmonth4"/>';
echo '</td>';

echo '<td>';
echo '<input type="text" name="textplanned4"/>';
echo '</td>';

echo '<td>';
echo '<input type="text" name="textactual4"/>';
echo '</td>';

echo '<td>';
echo '<input type="submit" value="add" name="add4" />';
if(isset($_POST['add4']))
{
    $nam = $_POST['textmonth4'];
    $plnd = $_POST['textplanned4'];
    $act = $_POST['textactual4'];

    if(is_null($nam) or is_null($plnd) or is_null($act)){
        echo "fill all fields";
    }
    else{
    
        $add = "insert into dom_sales  values('$nam','$plnd','$act')";
         $qry = mysqli_query($db,$add);
        if (!$qry) {echo "adding failed";}
        else{
            header("location:data.php");
        }
    }
    
    
    
    
}
echo '</td>';
echo '</tr>';






echo '</tbody>';

?>
<tr/>

<!-- TABLE NO 5 FOR INT TICKET SALES ******************************************************************************************************   -->
<tr height = 20px></tr>
<tr height = 20px></tr>
<tr height = 20px></tr>
<tr>
<form method =post action="data.php">
<table style ="font-family:arial; font-size:15" width='600' border='1' align=center>
<tr><th>INTERNATIONAL TICKET SALES</th></tr>
<tr >
<th>MONTH</th>
<th>PLANNED</th>
<th>ACTUAL</th>
</tr>
<?php
$sql5 = "SELECT * from int_sales ;"; 
$result5 = mysqli_query($db,$sql5);
$j5 = 0;
while($row =mysqli_fetch_array($result5)){
    echo '<tbody>';
		echo '<tr>';
        echo '<td>';
        echo '<input type="text" value="'.$row["month"].'" name="name'.$j5.'" readonly/>'; 
        echo '</td>';
        //echo '<td>'.$row["month"].'</td>';


        echo '<td>';
        echo '<input type="text" value="'.$row["planned"].'" name="pln'.$j5.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type="text" value="'.$row["actual"].'" name="act'.$j5.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type = "submit" value= "update" name="address5'.$j5.'" />';
        if (isset($_POST['address5'.$j5.'']))
        {
            if (isset($_POST['check5'.$j5.'']))
            {
                $nam = $_POST['name'.$j5.''];
                $plnd = $_POST['pln'.$j5.''];
                $act = $_POST['act'.$j5.''];

                $update= "update int_sales  set month='$nam', planned = '$plnd' , actual = '$act'
                            where month = '$nam'";
                $qry = mysqli_query($db,$update);
                if (!$qry) {echo "updation failed";}
                else{
                    header ("location:data.php");
                    //echo "<script type ='text/javascript'>alert ('updated successfully!')</script>";
                }
                }

            else {echo "plz select checkbox";}
            }
            echo "</td>";

            echo "<td>";
            echo '<input type="submit" value ="delete" name="delete5'.$j5.'"/>';
            
            
            if (isset($_POST['delete5'.$j5.'']))
            {
                if (isset($_POST['check5'.$j5.'']))
                {
                    $nam = $_POST['name'.$j5.''];
                    $delete = "delete from int_sales  where month = '$nam'";
                   $qry = mysqli_query($db,$delete);
                if (!$qry) { echo "updation failed";}
                else{
                    header ("location:data.php");
                    echo "<script type ='text/javascript'>alert ('updated successfully!')</script>";
                }
            }
                else {echo "please select checkbox";}
            }
            echo "</td>";


            echo "<td>";
            echo '<input type="checkbox" name = "check5'.$j5.'"/>';
            echo "</td>";
            $j5 = $j5 + 1;
        
                
                

        


        

        
                                            


	echo '</tr>';
									

}
echo '<tr>';
echo '<td>';
echo '<input type="text" name="textmonth5"/>';
echo '</td>';

echo '<td>';
echo '<input type="text" name="textplanned5"/>';
echo '</td>';

echo '<td>';
echo '<input type="text" name="textactual5"/>';
echo '</td>';

echo '<td>';
echo '<input type="submit" value="add" name="add5" />';
if(isset($_POST['add5']))
{
    $nam = $_POST['textmonth5'];
    $plnd = $_POST['textplanned5'];
    $act = $_POST['textactual5'];

    if(is_null($nam) or is_null($plnd) or is_null($act)){
        echo "fill all fields";
    }
    else{
    
        $add = "insert into int_sales  values('$nam','$plnd','$act')";
         $qry = mysqli_query($db,$add);
        if (!$qry) {echo "adding failed";}
        else{
            header("location:data.php");
        }
    }
    
    
    
    
}
echo '</td>';
echo '</tr>';






echo '</tbody>';

?>
<tr/>
<tr height = 20px></tr>
<tr height = 20px></tr>
<tr height = 20px></tr>
<!-- TABLE NO 6 FOR total expense ******************************************************************************************************   -->
<tr>
<form method =post action="data.php">
<table style ="font-family:arial; font-size:15" width='600' border='1' align=center>
<tr><th>TOTAL EXPENSE</th></tr>
<tr >
<th>MONTH</th>
<th>PLANNED</th>
<th>ACTUAL</th>
</tr>
<?php
$sql6 = "SELECT * from total_expenditure ;"; 
$result6 = mysqli_query($db,$sql6);
$j6 = 0;
while($row =mysqli_fetch_array($result6)){
    echo '<tbody>';
		echo '<tr>';
        echo '<td>';
        echo '<input type="text" value="'.$row["month"].'" name="name'.$j6.'" readonly/>'; 
        echo '</td>';
        //echo '<td>'.$row["month"].'</td>';


        echo '<td>';
        echo '<input type="text" value="'.$row["planned"].'" name="pln'.$j6.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type="text" value="'.$row["actual"].'" name="act'.$j6.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type = "submit" value= "update" name="address6'.$j6.'" />';
        if (isset($_POST['address6'.$j6.'']))
        {
            if (isset($_POST['check6'.$j6.'']))
            {
                $nam = $_POST['name'.$j6.''];
                $plnd = $_POST['pln'.$j6.''];
                $act = $_POST['act'.$j6.''];

                $update= "update total_expenditure set month='$nam', planned = '$plnd' , actual = '$act'
                            where month = '$nam'";
                $qry = mysqli_query($db,$update);
                if (!$qry) {echo "updation failed";}
                else{
                    header ("location:data.php");
                    //echo "<script type ='text/javascript'>alert ('updated successfully!')</script>";
                }
                }

            else {echo "plz select checkbox";}
            }
            echo "</td>";

            echo "<td>";
            echo '<input type="submit" value ="delete" name="delete6'.$j6.'"/>';
            
            
            if (isset($_POST['delete6'.$j6.'']))
            {
                if (isset($_POST['check6'.$j6.'']))
                {
                    $nam = $_POST['name'.$j6.''];
                    $delete = "delete from total_expenditure  where month = '$nam'";
                   $qry = mysqli_query($db,$delete);
                if (!$qry) { echo "updation failed";}
                else{
                    header ("location:data.php");
                    echo "<script type ='text/javascript'>alert ('updated successfully!')</script>";
                }
            }
                else {echo "please select checkbox";}
            }
            echo "</td>";


            echo "<td>";
            echo '<input type="checkbox" name = "check6'.$j6.'"/>';
            echo "</td>";
            $j6 = $j6 + 1;
        
                
                

        


        

        
                                            


	echo '</tr>';
									

}
echo '<tr>';
echo '<td>';
echo '<input type="text" name="textmonth6"/>';
echo '</td>';

echo '<td>';
echo '<input type="text" name="textplanned6"/>';
echo '</td>';

echo '<td>';
echo '<input type="text" name="textactual6"/>';
echo '</td>';

echo '<td>';
echo '<input type="submit" value="add" name="add6" />';
if(isset($_POST['add6']))
{
    $nam = $_POST['textmonth6'];
    $plnd = $_POST['textplanned6'];
    $act = $_POST['textactual6'];

    if(is_null($nam) or is_null($plnd) or is_null($act)){
        echo "fill all fields";
    }
    else{
    
        $add = "insert into total_expenditure  values('$nam','$plnd','$act')";
         $qry = mysqli_query($db,$add);
        if (!$qry) {echo "adding failed";}
        else{
            header("location:data.php");
        }
    }
    
    
    
    
}
echo '</td>';
echo '</tr>';






echo '</tbody>';

?>
<tr/>

<tr height = 20px></tr>
<tr height = 20px></tr>
<tr height = 20px></tr>
<!-- TABLE NO 7 FOR total profit ******************************************************************************************************   -->
<tr>
<form method =post action="data.php">
<table style ="font-family:arial; font-size:15" width='600' border='1' align=center>
<tr><th>TOTAL PROFIT</th></tr>
<tr >
<th>MONTH</th>
<th>PLANNED</th>
<th>ACTUAL</th>
</tr>
<?php
$sql7 = "SELECT * from total_profit ;"; 
$result7 = mysqli_query($db,$sql7);
$j7 = 0;
while($row =mysqli_fetch_array($result7)){
    echo '<tbody>';
		echo '<tr>';
        echo '<td>';
        echo '<input type="text" value="'.$row["month"].'" name="name'.$j7.'" readonly/>'; 
        echo '</td>';
        //echo '<td>'.$row["month"].'</td>';


        echo '<td>';
        echo '<input type="text" value="'.$row["planned"].'" name="pln'.$j7.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type="text" value="'.$row["actual"].'" name="act'.$j7.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type = "submit" value= "update" name="address7'.$j7.'" />';
        if (isset($_POST['address7'.$j7.'']))
        {
            if (isset($_POST['check7'.$j7.'']))
            {
                $nam = $_POST['name'.$j7.''];
                $plnd = $_POST['pln'.$j7.''];
                $act = $_POST['act'.$j7.''];

                $update= "update total_profit set month='$nam', planned = '$plnd' , actual = '$act'
                            where month = '$nam'";
                $qry = mysqli_query($db,$update);
                if (!$qry) {echo "updation failed";}
                else{
                    header ("location:data.php");
                    //echo "<script type ='text/javascript'>alert ('updated successfully!')</script>";
                }
                }

            else {echo "plz select checkbox";}
            }
            echo "</td>";

            echo "<td>";
            echo '<input type="submit" value ="delete" name="delete7'.$j7.'"/>';
            
            
            if (isset($_POST['delete7'.$j7.'']))
            {
                if (isset($_POST['check7'.$j7.'']))
                {
                    $nam = $_POST['name'.$j7.''];
                    $delete = "delete from total_profit  where month = '$nam'";
                   $qry = mysqli_query($db,$delete);
                if (!$qry) { echo "updation failed";}
                else{
                    header ("location:data.php");
                    echo "<script type ='text/javascript'>alert ('updated successfully!')</script>";
                }
            }
                else {echo "please select checkbox";}
            }
            echo "</td>";


            echo "<td>";
            echo '<input type="checkbox" name = "check7'.$j7.'"/>';
            echo "</td>";
            $j7 = $j7 + 1;
        
                
                

        


        

        
                                            


	echo '</tr>';
									

}
echo '<tr>';
echo '<td>';
echo '<input type="text" name="textmonth7"/>';
echo '</td>';

echo '<td>';
echo '<input type="text" name="textplanned7"/>';
echo '</td>';

echo '<td>';
echo '<input type="text" name="textactual7"/>';
echo '</td>';

echo '<td>';
echo '<input type="submit" value="add" name="add7" />';
if(isset($_POST['add7']))
{
    $nam = $_POST['textmonth7'];
    $plnd = $_POST['textplanned7'];
    $act = $_POST['textactual7'];

    if(is_null($nam) or is_null($plnd) or is_null($act)){
        echo "fill all fields";
    }
    else{
    
        $add = "insert into total_profit  values('$nam','$plnd','$act')";
         $qry = mysqli_query($db,$add);
        if (!$qry) {echo "adding failed";}
        else{
            header("location:data.php");
        }
    }
    
    
    
    
}
echo '</td>';
echo '</tr>';
echo '</tbody>';

?>
<tr/>

<tr height = 20px></tr>
<tr height = 20px></tr>
<tr height = 20px></tr>
<!-- TABLE NO 8 FOR pkg sales ******************************************************************************************************   -->
<tr>
<form method =post action="data.php">
<table style ="font-family:arial; font-size:15" width='600' border='1' align=center>
<tr><th>PACKAGE SALES</th></tr>
<tr >
<th>MONTH</th>
<th>PLANNED</th>
<th>ACTUAL</th>
</tr>
<?php
$sql8 = "SELECT * from package_sales ;"; 
$result8 = mysqli_query($db,$sql8);
$j8 = 0;
while($row =mysqli_fetch_array($result8)){
    echo '<tbody>';
		echo '<tr>';
        echo '<td>';
        echo '<input type="text" value="'.$row["month"].'" name="name'.$j8.'" readonly/>'; 
        echo '</td>';
        //echo '<td>'.$row["month"].'</td>';


        echo '<td>';
        echo '<input type="text" value="'.$row["planned"].'" name="pln'.$j8.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type="text" value="'.$row["actual"].'" name="act'.$j8.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type = "submit" value= "update" name="address8'.$j8.'" />';
        if (isset($_POST['address8'.$j8.'']))
        {
            if (isset($_POST['check8'.$j8.'']))
            {
                $nam = $_POST['name'.$j8.''];
                $plnd = $_POST['pln'.$j8.''];
                $act = $_POST['act'.$j8.''];

                $update= "update package_sales set month='$nam', planned = '$plnd' , actual = '$act'
                            where month = '$nam'";
                $qry = mysqli_query($db,$update);
                if (!$qry) {echo "updation failed";}
                else{
                    header ("location:data.php");
                    //echo "<script type ='text/javascript'>alert ('updated successfully!')</script>";
                }
                }

            else {echo "plz select checkbox";}
            }
            echo "</td>";

            echo "<td>";
            echo '<input type="submit" value ="delete" name="delete8'.$j8.'"/>';
            
            
            if (isset($_POST['delete8'.$j8.'']))
            {
                if (isset($_POST['check8'.$j8.'']))
                {
                    $nam = $_POST['name'.$j8.''];
                    $delete = "delete from package_sales  where month = '$nam'";
                   $qry = mysqli_query($db,$delete);
                if (!$qry) { echo "updation failed";}
                else{
                    header ("location:data.php");
                    echo "<script type ='text/javascript'>alert ('updated successfully!')</script>";
                }
            }
                else {echo "please select checkbox";}
            }
            echo "</td>";


            echo "<td>";
            echo '<input type="checkbox" name = "check8'.$j8.'"/>';
            echo "</td>";
            $j8 = $j8 + 1;
        
                
                

        


        

        
                                            


	echo '</tr>';
									

}
echo '<tr>';
echo '<td>';
echo '<input type="text" name="textmonth8"/>';
echo '</td>';

echo '<td>';
echo '<input type="text" name="textplanned8"/>';
echo '</td>';

echo '<td>';
echo '<input type="text" name="textactual8"/>';
echo '</td>';

echo '<td>';
echo '<input type="submit" value="add" name="add8" />';
if(isset($_POST['add8']))
{
    $nam = $_POST['textmonth8'];
    $plnd = $_POST['textplanned8'];
    $act = $_POST['textactual8'];

    if(is_null($nam) or is_null($plnd) or is_null($act)){
        echo "fill all fields";
    }
    else{
    
        $add = "insert into package_sales  values('$nam','$plnd','$act')";
         $qry = mysqli_query($db,$add);
        if (!$qry) {echo "adding failed";}
        else{
            header("location:data.php");
        }
    }
    
    
    
    
}
echo '</td>';
echo '</tr>';
echo '</tbody>';

?>
<tr/>


<tr height = 20px></tr>
<tr height = 20px></tr>
<tr height = 20px></tr>
<!-- TABLE NO 9 FOR umrah sales ******************************************************************************************************   -->
<tr>
<form method =post action="data.php">
<table style ="font-family:arial; font-size:15" width='600' border='1' align=center>
<tr><th>UMRAH SALES</th></tr>
<tr >
<th>MONTH</th>
<th>PLANNED</th>
<th>ACTUAL</th>
</tr>
<?php
$sql9 = "SELECT * from umrah_sales ;"; 
$result9 = mysqli_query($db,$sql9);
$j9 = 0;
while($row =mysqli_fetch_array($result9)){
    echo '<tbody>';
		echo '<tr>';
        echo '<td>';
        echo '<input type="text" value="'.$row["month"].'" name="name'.$j9.'" readonly/>'; 
        echo '</td>';
        //echo '<td>'.$row["month"].'</td>';


        echo '<td>';
        echo '<input type="text" value="'.$row["planned"].'" name="pln'.$j9.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type="text" value="'.$row["actual"].'" name="act'.$j9.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type = "submit" value= "update" name="address9'.$j9.'" />';
        if (isset($_POST['address9'.$j9.'']))
        {
            if (isset($_POST['check9'.$j9.'']))
            {
                $nam = $_POST['name'.$j9.''];
                $plnd = $_POST['pln'.$j9.''];
                $act = $_POST['act'.$j9.''];

                $update= "update umrah_sales set month='$nam', planned = '$plnd' , actual = '$act'
                            where month = '$nam'";
                $qry = mysqli_query($db,$update);
                if (!$qry) {echo "updation failed";}
                else{
                    header ("location:data.php");
                    //echo "<script type ='text/javascript'>alert ('updated successfully!')</script>";
                }
                }

            else {echo "plz select checkbox";}
            }
            echo "</td>";

            echo "<td>";
            echo '<input type="submit" value ="delete" name="delete9'.$j9.'"/>';
            
            
            if (isset($_POST['delete9'.$j9.'']))
            {
                if (isset($_POST['check9'.$j9.'']))
                {
                    $nam = $_POST['name'.$j9.''];
                    $delete = "delete from umrah_sales  where month = '$nam'";
                   $qry = mysqli_query($db,$delete);
                if (!$qry) { echo "updation failed";}
                else{
                    header ("location:data.php");
                    echo "<script type ='text/javascript'>alert ('updated successfully!')</script>";
                }
            }
                else {echo "please select checkbox";}
            }
            echo "</td>";


            echo "<td>";
            echo '<input type="checkbox" name = "check9'.$j9.'"/>';
            echo "</td>";
            $j9 = $j9 + 1;
        
                
                

        


        

        
                                            


	echo '</tr>';
									

}
echo '<tr>';
echo '<td>';
echo '<input type="text" name="textmonth9"/>';
echo '</td>';

echo '<td>';
echo '<input type="text" name="textplanned9"/>';
echo '</td>';

echo '<td>';
echo '<input type="text" name="textactual9"/>';
echo '</td>';

echo '<td>';
echo '<input type="submit" value="add" name="add9" />';
if(isset($_POST['add9']))
{
    $nam = $_POST['textmonth9'];
    $plnd = $_POST['textplanned9'];
    $act = $_POST['textactual9'];

    if(is_null($nam) or is_null($plnd) or is_null($act)){
        echo "fill all fields";
    }
    else{
    
        $add = "insert into umrah_sales  values('$nam','$plnd','$act')";
         $qry = mysqli_query($db,$add);
        if (!$qry) {echo "adding failed";}
        else{
            header("location:data.php");
        }
    }
    
    
    
    
}
echo '</td>';
echo '</tr>';
echo '</tbody>';

?>
<tr/>


<table/>










