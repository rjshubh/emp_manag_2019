<?php include('connection.php') ?>
<?php include('include.php') ?>

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">SALES</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<form method =post action="leads.php">
								<table class="table table-striped custom-table m-b-0 datatable">
									<thead>
										<tr>
											<th>planned</th>
										</tr>	
										<tr>
											
											<th>ticket sale volume</th>
											<th>apr</th>
											<th>may</th>
											<th>jun</th>
											<th>jul</th>
											<th>aug</th>
											<th>sep</th>
											<th>oct</th>
											<th>nov</th>
											<th>dec</th>
											<th>jan</th>
											<th>feb</th>
											<th>mar</th>
											<th>total</th>
										</tr>
									</thead>
									<?php
									$i=0; 
									$query = ("SELECT * FROM sales_section_planned ");
                    				$result1 = mysqli_query($db,$query);
                    				while ($row = mysqli_fetch_array($result1))
                    		{

									

											echo '<tbody>';
											echo '<tr>';
											
											
											echo '<td>';
											
											echo '<input type="text" value="'.$row["ticketsale"].'" name="tkt'.$i.'" readonly />';
											echo '</td>';
											
											echo '<td>';
											echo '<input type="text" value="'.$row["apr"].'" name="apr'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["may"].'" name="may'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["jun"].'" name="jun'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["jul"].'" name="jul'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["aug"].'" name="aug'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["sep"].'" name="sep'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["oct"].'" name="oct'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["nov"].'" name="nov'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["dec2"].'" name="dec'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["jan"].'" name="jan'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["feb"].'" name="feb'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["mar"].'" name="mar'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["total"].'" name="total'.$i.'" />';
											echo '</td>';

											 echo '<td>';
        								echo '<input type = "submit" value= "update" name="address1'.$i.'" />';
        								 if (isset($_POST['address1'.$i.'']))
        								 {
        								 	if (isset($_POST['check1'.$i.'']))
        								 	{
        								 		$first= $_POST['tkt'.$i.''];
        								 		$apr= $_POST['apr'.$i.''];
        								 		$may= $_POST['may'.$i.''];
        								 		$jun= $_POST['jun'.$i.''];
        								 		$jul= $_POST['jul'.$i.''];
        								 		$aug= $_POST['aug'.$i.''];
        								 		$sep= $_POST['sep'.$i.''];
        								 		$oct= $_POST['oct'.$i.''];
        								 		$nov= $_POST['nov'.$i.''];
        								 		$decmbr= $_POST['dec'.$i.''];
        								 		$jan= $_POST['jan'.$i.''];
        								 		$feb= $_POST['feb'.$i.''];
        								 		$mar= $_POST['mar'.$i.''];
        								 		$total= $_POST['total'.$i.''];
        								 		
        								 		$update= "update sales_section_planned set ticketsale='$first', apr='$apr', may='$may', jun='$jun', jul='$jul',
        								 		aug='$aug', sep='$sep', oct='$oct', nov='$nov', dec2='$decmbr' ,jan='$jan', feb='$feb', mar='$mar', total='$total'
        								 		where  ticketsale='$first' ";


        								 		
        								 		$qry = mysqli_query($db,$update);
        								 		if (!$qry) {echo "updation failed";
        								 					echo mysqli_error($db);}
        								 	
        								 	else{
        								 			header("location:leads.php");
        								 			//echo "<script type ='text/javascript'>window.location.reload()</script>";

        								 		}

        								 	}
        								 else {echo "plz select checkbox";}
        								}
        								 
        								echo "</td>";

        								echo "<td>";
        								echo '<input type="submit" value ="delete" name="delete1'.$i.'"/>';
        								if (isset($_POST['delete1'.$i.'']))
        								{
        									 if (isset($_POST['check1'.$i.'']))
        									 {
        									 	$first= $_POST['tkt'.$i.''];
        									 	$delete = "delete from sales_section_planned where ticketsale='$first'";
        									 	$qry = mysqli_query($db,$delete);
        									 	if (!$qry) {echo "deletion failed";}
        									 				//echo mysqli_error($db);
        									 	else{
        									 		header("location:leads.php");
        									 		echo "<script type ='text/javascript'>window.location.reload()</script>";
        									 	}


        									 }

        									 else {echo "plz select checkbox";}
        								}
        								echo "</td>";


        								echo "<td>";
            							echo '<input type="checkbox" name = "check1'.$i.'"/>';
            							echo "</td>";
            							$i = $i + 1;

            							echo '</tr>';



        								} //bracket of while loop
        								echo '<tr>';
										echo '<td>';
										echo '<input type="text" name="textfirst"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="april"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textmay"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textjun"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textjul"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textaug"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textsep"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textoct"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textnov"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textdec"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textjan"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textfeb"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textmar"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="texttotal"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="submit" value="add" name="add1" />';
										if(isset($_POST['add1']))
										{
												$first= $_POST['textfirst'];
        								 		$apr= $_POST['april'];
        								 		$may= $_POST['textmay'];
        								 		$jun= $_POST['textjun'];
        								 		$jul= $_POST['textjul'];
        								 		$aug= $_POST['textaug'];
        								 		$sep= $_POST['textsep'];
        								 		$oct= $_POST['textoct'];
        								 		$nov= $_POST['textnov'];
        								 		$dec= $_POST['textdec'];
        								 		$jan= $_POST['textjan'];
        								 		$feb= $_POST['textfeb'];
        								 		$mar= $_POST['textmar'];
        								 		$total= $_POST['texttotal'];

        								 		if (is_null($first) or is_null($apr) or is_null($may) or is_null($jun) or is_null($jul) or is_null($aug) or is_null($sep) or 
        								 			is_null($oct) or is_null($nov) or is_null($dec) or is_null($jan) or is_null($feb) or is_null($mar) or is_null($total))
        								 		{
        											echo "fill all fields";
        											
        										}
        										else{
        											$add = "insert into sales_section_planned values('$first','$apr','$may','$jun','$jul','$aug',
        												'$sep','$oct','$nov','$dec','$jan','$feb','$mar','$total')";
													$qry = mysqli_query($db,$add);
													if (!$qry) {echo "adding failed";
												echo mysqli_error($db);}
													else{

        									 		///header("location:http://localhost/phpLab/emp_man/leads.php");
        									 		//header( "Refresh: 0;" );
        								
        									 		//echo "<script type ='text/javascript'>window.location.reload()</script>";

        									 	
													}

        										}
										}


        								echo '</tbody>';


        								 	


        								 
							

										
									
								
								?>
							</table>

							




							</div>
						</div>
					</div>


<br>
<br>
<br>
<br>


					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<form method =post action="leads.php">
								<table class="table table-striped custom-table m-b-0 datatable">
									<thead>
										<tr>
											<th>actual</th>
										</tr>	
										<tr>
											
											<th>ticket sale volume</th>
											<th>apr</th>
											<th>may</th>
											<th>jun</th>
											<th>jul</th>
											<th>aug</th>
											<th>sep</th>
											<th>oct</th>
											<th>nov</th>
											<th>dec</th>
											<th>jan</th>
											<th>feb</th>
											<th>mar</th>
											<th>total</th>
										</tr>
									</thead>
									<?php
									$i=0; 
									$query = ("SELECT * FROM sales_section_actual ");
                    				$result= mysqli_query($db,$query);
                    				while ($row = mysqli_fetch_array($result))
                    		{

									

											echo '<tbody>';
											echo '<tr>';
											
											
											echo '<td>';
											
											echo '<input type="text" value="'.$row["ticketsale"].'" name="tkt'.$i.'" readonly />';
											echo '</td>';
											
											echo '<td>';
											echo '<input type="text" value="'.$row["apr"].'" name="apr'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["may"].'" name="may'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["jun"].'" name="jun'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["jul"].'" name="jul'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["aug"].'" name="aug'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["sep"].'" name="sep'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["oct"].'" name="oct'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["nov"].'" name="nov'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["dec2"].'" name="dec'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["jan"].'" name="jan'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["feb"].'" name="feb'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["mar"].'" name="mar'.$i.'" />';
											echo '</td>';

											echo '<td>';
											echo '<input type="text" value="'.$row["total"].'" name="total'.$i.'" />';
											echo '</td>';

											 echo '<td>';
        								echo '<input type = "submit" value= "update" name="address'.$i.'" />';
        								 if (isset($_POST['address'.$i.'']))
        								 {
        								 	if (isset($_POST['check'.$i.'']))
        								 	{
        								 		$first= $_POST['tkt'.$i.''];
        								 		$apr= $_POST['apr'.$i.''];
        								 		$may= $_POST['may'.$i.''];
        								 		$jun= $_POST['jun'.$i.''];
        								 		$jul= $_POST['jul'.$i.''];
        								 		$aug= $_POST['aug'.$i.''];
        								 		$sep= $_POST['sep'.$i.''];
        								 		$oct= $_POST['oct'.$i.''];
        								 		$nov= $_POST['nov'.$i.''];
        								 		$decmbr= $_POST['dec'.$i.''];
        								 		$jan= $_POST['jan'.$i.''];
        								 		$feb= $_POST['feb'.$i.''];
        								 		$mar= $_POST['mar'.$i.''];
        								 		$total= $_POST['total'.$i.''];
        								 		
        								 		$update= "update sales_section_actual set ticketsale='$first', apr='$apr', may='$may', jun='$jun', jul='$jul',
        								 		aug='$aug', sep='$sep', oct='$oct', nov='$nov', dec2='$decmbr' ,jan='$jan', feb='$feb', mar='$mar', total='$total'
        								 		where  ticketsale='$first' ";


        								 		
        								 		$qry = mysqli_query($db,$update);
        								 		if (!$qry) {echo "updation failed";
        								 					echo mysqli_error($db);}
        								 	
        								 	else{
        								 			header("location:leads.php");
        								 			//echo "<script type ='text/javascript'>window.location.reload()</script>";

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
        									 	$first= $_POST['tkt'.$i.''];
        									 	$delete = "delete from sales_section_actual where ticketsale='$first'";
        									 	$qry = mysqli_query($db,$delete);
        									 	if (!$qry) {echo "deletion failed";}
        									 				//echo mysqli_error($db);
        									 	else{
        									 		header("location:leads.php");
        									 		echo "<script type ='text/javascript'>window.location.reload()</script>";
        									 	}


        									 }

        									 else {echo "plz select checkbox";}
        								}
        								echo "</td>";


        								echo "<td>";
            							echo '<input type="checkbox" name = "check'.$i.'"/>';
            							echo "</td>";
            							$i = $i + 1;

            							echo '</tr>';



        								} //bracket of while loop
        								echo '<tr>';
										echo '<td>';
										echo '<input type="text" name="textfirst"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="april"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textmay"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textjun"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textjul"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textaug"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textsep"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textoct"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textnov"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textdec"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textjan"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textfeb"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="textmar"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="text" name="texttotal"/>';
										echo '</td>';

										echo '<td>';
										echo '<input type="submit" value="add" name="add2" />';
										if(isset($_POST['add2']))
										{
												$first= $_POST['textfirst'];
        								 		$apr= $_POST['april'];
        								 		$may= $_POST['textmay'];
        								 		$jun= $_POST['textjun'];
        								 		$jul= $_POST['textjul'];
        								 		$aug= $_POST['textaug'];
        								 		$sep= $_POST['textsep'];
        								 		$oct= $_POST['textoct'];
        								 		$nov= $_POST['textnov'];
        								 		$dec= $_POST['textdec'];
        								 		$jan= $_POST['textjan'];
        								 		$feb= $_POST['textfeb'];
        								 		$mar= $_POST['textmar'];
        								 		$total= $_POST['texttotal'];

        								 		if (is_null($first) or is_null($apr) or is_null($may) or is_null($jun) or is_null($jul) or is_null($aug) or is_null($sep) or 
        								 			is_null($oct) or is_null($nov) or is_null($dec) or is_null($jan) or is_null($feb) or is_null($mar) or is_null($total))
        								 		{
        											echo "fill all fields";
        											
        										}
        										else{
        											$add = "insert into sales_section_actual values('$first','$apr','$may','$jun','$jul','$aug',
        												'$sep','$oct','$nov','$dec','$jan','$feb','$mar','$total')";
													$qry = mysqli_query($db,$add);
													if (!$qry) {echo "adding failed";
												echo mysqli_error($db);}
													else{

        									 		///header("location:http://localhost/phpLab/emp_man/leads.php");
        									 		//header( "Refresh: 0;" );
        								
        									 		//echo "<script type ='text/javascript'>window.location.reload()</script>";

        									 	
													}

        										}
										}


        								echo '</tbody>';


        								 	


        								 
							

										
									
								
								?>
							</table>

							




							</div>
						</div>
					</div>


                </div>



				
            </div>
