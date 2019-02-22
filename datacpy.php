<?php include("include.php")?>
<?php include ("connection.php") ?>
<?php
$sql = "SELECT * from total_agent ;";
$result = mysqli_query($db,$sql);
?>



<div class="page-wrapper">
                <div class="content container-fluid">
                    <div class="row">
                        <div class="col-sm-8">
                            <h4 class="page-title">Data</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div >
                            <div class="table-responsive">

<form method =post action="data.php">
<table style ="font-family:arial; font-size:15" width='600' border='1' align=center>
<tr><th>SALES</th></tr>
<tr >
<th>MONTH</th>
<th>PLANNED</th>
<th>ACTUAL</th>
</tr>
<?php 
$i = 0;
while($row =  mysqli_fetch_array($result)){
    echo '<tbody>';
        echo '<tr>';
        echo '<td>';
        echo '<input type="text" value="'.$row["month"].'" name="name'.$i.'" readonly/>'; 
        echo '</td>';
        //echo '<td>'.$row["month"].'</td>';


        echo '<td>';
        echo '<input type="text" value="'.$row["planned"].'" name="pln'.$i.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type="text" value="'.$row["actual"].'" name="act'.$i.'" />'; 
        echo '</td>';

        echo '<td>';
        echo '<input type = "submit" value= "update" name="address'.$i.'" />';
        if (isset($_POST['address'.$i.'']))
        {
            if (isset($_POST['check'.$i.'']))
            {
                $nam = $_POST['name'.$i.''];
                $plnd = $_POST['pln'.$i.''];
                $act = $_POST['act'.$i.''];

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
            echo '<input type="submit" value ="delete" name="delete'.$i.'"/>';
            
            
            if (isset($_POST['delete'.$i.'']))
            {
                if (isset($_POST['check'.$i.'']))
                {
                    $nam = $_POST['name'.$i.''];
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
            echo '<input type="checkbox" name = "check'.$i.'"/>';
            echo "</td>";
            $i = $i + 1;
        
                
                

        


        

        
                                            


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
echo '<input type="submit" value="add" name="add" />';
if(isset($_POST['add']))
{
    $nam = $_POST['textmonth'];
    $plnd = $_POST['textplanned'];
    $act = $_POST['textactual'];

    if(is_null($nam) or is_null($plnd) or is_null($act)){
        echo "fill all fields";
    }
    else{
    
        $add = "insert into total_agent values('$nam','$plnd','$act')";
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
</div>
</div>
</div>

<div clas="row">
    <p> this is a new section </p>
</div>

</div>
</div>








