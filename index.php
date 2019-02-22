<?php include("include.php")?>
<?php include("connection.php") ?>

<?php 
$sql = "SELECT * from total_agent where month <> 'total';";
$result = mysqli_query($db,$sql);
$json = [];
$json2 = [];
$json3 = [];
if (mysqli_num_rows($result)>0)
{
    while($row =  mysqli_fetch_array($result)){
        $json[] = $row['month'];
        $json2[]= (int)$row['planned'];
        $json3[]= (int)$row['actual'];
    }
    //echo json_encode($json);
    //echo json_encode($json2);
}
?>
<?php 
$sql = "SELECT * from total_revenue where month <> 'total';";
$result = mysqli_query($db,$sql);
$json4 = [];
$json5 = [];
$json6 = [];
if (mysqli_num_rows($result)>0)
{
    while($row =  mysqli_fetch_array($result)){
        $json4[] = $row['month'];
        $json5[]= (int)$row['planned'];
        $json6[]= (int)$row['actual'];
    }
    //echo json_encode($json);
    //echo json_encode($json2);
}
?>

<?php 
$sql = "SELECT * from total_employee where month <> 'total';";
$result = mysqli_query($db,$sql);
$json7 = [];
$json8 = [];
$json9 = [];
if (mysqli_num_rows($result)>0)
{
    while($row =  mysqli_fetch_array($result)){
        $json7[] = $row['month'];
        $json8[]= (int)$row['planned'];
        $json9[]= (int)$row['actual'];
    }
    //echo json_encode($json);
    //echo json_encode($json2);
}
?>
<?php 
$sql = "SELECT * from total_profit where month <> 'total';";
$result = mysqli_query($db,$sql);
$json10 = [];
$json11 = [];
$json12 = [];
if (mysqli_num_rows($result)>0)
{
    while($row =  mysqli_fetch_array($result)){
        $json10[] = $row['month'];
        $json11[]= (int)$row['planned'];
        $json12[]= (int)$row['actual'];
    }
    //echo json_encode($json);
    //echo json_encode($json2);
}
?>


<?php 
$sql = "SELECT * from total_expenditure where month <> 'total';";
$result = mysqli_query($db,$sql);
$json13 = [];
$json14 = [];
$json15 = [];
if (mysqli_num_rows($result)>0)
{
    while($row =  mysqli_fetch_array($result)){
        $json13[] = $row['month'];
        $json14[]= (int)$row['planned'];
        $json15[]= (int)$row['actual'];
    }
    //echo json_encode($json);
    //echo json_encode($json2);
}
?>

<?php 
$sql = "SELECT * from dom_sales where month <> 'total';";
$result =mysqli_query($db,$sql);
$m = [];
$p = [];
$a = [];
if (mysqli_num_rows($result)>0)
{
    while($row =  mysqli_fetch_array($result)){
        $m[] = $row['month'];
        $p[]= (int)$row['planned'];
        $a[]= (int)$row['actual'];
    }
    //echo json_encode($json);
    //echo json_encode($json2);
}
?>

<?php 
$sql = "SELECT * from int_sales where month <> 'total';";
$result = mysqli_query($db,$sql);
$m1 = [];
$p1 = [];
$a1 = [];
if (mysqli_num_rows($result)>0)
{
    while($row =  mysqli_fetch_array($result)){
        $m1[] = $row['month'];
        $p1[]= (int)$row['planned'];
        $a1[]= (int)$row['actual'];
    }
    //echo json_encode($json);
    //echo json_encode($json2);
}
?>

<?php 
$sql = "SELECT * from package_sales where month <> 'total';";
$result = mysqli_query($db,$sql);
$m2 = [];
$p2 = [];
$a2 = [];
if (mysqli_num_rows($result)>0)
{
    while($row =  mysqli_fetch_array($result)){
        $m2[] = $row['month'];
        $p2[]= (int)$row['planned'];
        $a2[]= (int)$row['actual'];
    }
    //echo json_encode($json);
    //echo json_encode($json2);
}
?>






                    <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-cubes" aria-hidden="true"></i></span>
								<div class="dash-widget-info">
									<h3>112</h3>
									<span>Projects</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-usd" aria-hidden="true"></i></span>
								<div class="dash-widget-info">
									<h3>$44</h3>
									<span>Clients</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
								<div class="dash-widget-info">
									<h3>37</h3>
									<span>Tasks</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
								<div class="dash-widget-info">
									<h3>218</h3>
									<span>Employees</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6 text-center">
									<div class="card-box">
										<h3 class="card-title">Total Agent</h3>
										<div id="bar-charts">
  <canvas id="densityChart" width="600" height="400"></canvas>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js'></script>
        <script>
var densityCanvas = document.getElementById("densityChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
  label: 'planned',
  data: <?php echo json_encode($json2);?>,
  backgroundColor: 'rgba(0, 99, 132, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-density"
};

var gravityData = {
  label: 'actual',
  data: <?php echo json_encode($json3);?>,
  backgroundColor: 'rgba(99, 132, 0, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-gravity"
};

var planetData = {
  labels: <?php echo json_encode($json);?>,
  datasets: [densityData, gravityData]
};

var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6
    }],
    yAxes: [{
      id: "y-axis-density"
    }, {
      id: "y-axis-gravity"
    }]
  }
};

var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: planetData,
  options: chartOptions
});

        
        </script>
											

										</div>
									</div>
								</div>
								<div class="col-md-6 text-center">
									<div class="card-box">
										<h3 class="card-title">Total Revenue</h3>
										<div id="bar-charts">
											<canvas id="densityChart2" width="600" height="400"></canvas>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js'></script>
											<script>
											var densityCanvas = document.getElementById("densityChart2");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
  label: 'planned',
  data: <?php echo json_encode($json5);?>,
  backgroundColor: 'rgba(0, 99, 132, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-density"
};

var gravityData = {
  label: 'actual',
  data: <?php echo json_encode($json6);?>,
  backgroundColor: 'rgba(99, 132, 0, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-gravity"
};

var planetData = {
  labels: <?php echo json_encode($json4);?>,
  datasets: [densityData, gravityData]
};

var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6
    }],
    yAxes: [{
      id: "y-axis-density"
    }, {
      id: "y-axis-gravity"
    }]
  }
};

var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: planetData,
  options: chartOptions
});

        
        </script> 


										</div>

									</div>
								</div>
								<div class="col-md-6 text-center">
									<div class="card-box">
										<h3 class="card-title">Total Employees</h3>
										<div id="bar-charts">
											  <canvas id="densityChart3" width="600" height="400"></canvas>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js'></script>
											<script>
											var densityCanvas = document.getElementById("densityChart3");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
  label: 'planned',
  data: <?php echo json_encode($json8);?>,
  backgroundColor: 'rgba(0, 99, 132, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-density"
};

var gravityData = {
  label: 'actual',
  data: <?php echo json_encode($json9);?>,
  backgroundColor: 'rgba(99, 132, 0, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-gravity"
};

var planetData = {
  labels: <?php echo json_encode($json7);?>,
  datasets: [densityData, gravityData]
};

var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6
    }],
    yAxes: [{
      id: "y-axis-density"
    }, {
      id: "y-axis-gravity"
    }]
  }
};

var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: planetData,
  options: chartOptions
});

        
        </script>



										</div>
									</div>
								</div>
								<div class="col-md-6 text-center">
									<div class="card-box">
										<h3 class="card-title">Total Profit</h3>
										<div id="line-charts"></div>
										<canvas id="ProfitChart" width="600" height="400"></canvas>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js'></script>
        <script>
var densityCanvas = document.getElementById("ProfitChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
  label: 'planned',
  data: <?php echo json_encode($json11);?>,
  borderColor: 'blue',
  backgroundColor: 'transparent',
  pointBorderColor: 'blue',
  borderWidth: 0,
  yAxisID: "y-axis-density"
};

var gravityData = {
  label: 'actual',
  data: <?php echo json_encode($json12);?>,
  borderColor: 'green',
  backgroundColor: 'transparent',
  pointBorderColor: 'green',
  borderWidth: 0,
  yAxisID: "y-axis-gravity"
};

var planetData = {
  labels: <?php echo json_encode($json10);?>,
  datasets: [densityData, gravityData]
};

var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6
    }],
    yAxes: [{
      id: "y-axis-density"
    }, {
      id: "y-axis-gravity"
    }]
  }
};

var barChart = new Chart(densityCanvas, {
  type: 'line',
  data: planetData,
  options: chartOptions
});

        
        </script>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-table">
								<div class="panel-heading">
									<h3 class="panel-title">Total Expenditure</h3>
								</div>
<canvas id="expChart" width="600" height="400"></canvas>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js'></script>
        <script>
var densityCanvas = document.getElementById("expChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
  label: 'planned',
  data: <?php echo json_encode($json14);?>,
  backgroundColor: 'rgba(0, 99, 132, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-density"
};

var gravityData = {
  label: 'actual',
  data: <?php echo json_encode($json15);?>,
  backgroundColor: 'rgba(99, 132, 0, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-gravity"
};

var planetData = {
  labels: <?php echo json_encode($json13);?>,
  datasets: [densityData, gravityData]
};

var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6
    }],
    yAxes: [{
      id: "y-axis-density"
    }, {
      id: "y-axis-gravity"
    }]
  }
};

var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: planetData,
  options: chartOptions
});


        
        </script>
								<div class="panel-footer">
									<a href="invoices.html" class="text-primary">View all invoices</a>
								</div>
							</div>
						</div>
					</div>









					<div class="row">
						<div class="col-sm-4">
							<div class="panel panel-table">
								<div class="panel-heading">
									<h3 class="panel-title">Domestic ticket sales</h3>
								</div>
								
								<canvas id="domChart" width="600" height="400"></canvas>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js'></script>
        <script>
var densityCanvas = document.getElementById("domChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
  label: 'planned',
  data: <?php echo json_encode($p);?>,
  backgroundColor: 'rgba(0, 99, 132, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-density"
};

var gravityData = {
  label: 'actual',
  data: <?php echo json_encode($a);?>,
  backgroundColor: 'rgba(99, 132, 0, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-gravity"
};

var planetData = {
  labels: <?php echo json_encode($m);?>,
  datasets: [densityData, gravityData]
};

var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6
    }],
    yAxes: [{
      id: "y-axis-density"
    }, {
      id: "y-axis-gravity"
    }]
  }
};

var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: planetData,
  options: chartOptions
});


        
        </script>



								<div class="panel-footer">
									<a href="clients.html" class="text-primary">View all clients</a>
								</div>
							</div>
						</div>
							<div class="col-sm-4">
							<div class="panel panel-table">
								<div class="panel-heading">
									<h3 class="panel-title">Int ticket sales</h3>
								</div>
								<canvas id="intChart" width="600" height="400"></canvas>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js'></script>
        <script>
var densityCanvas = document.getElementById("intChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
  label: 'planned',
  data: <?php echo json_encode($p1);?>,
  backgroundColor: 'rgba(0, 99, 132, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-density"
};

var gravityData = {
  label: 'actual',
  data: <?php echo json_encode($a1);?>,
  backgroundColor: 'rgba(99, 132, 0, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-gravity"
};

var planetData = {
  labels: <?php echo json_encode($m1);?>,
  datasets: [densityData, gravityData]
};

var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6
    }],
    yAxes: [{
      id: "y-axis-density"
    }, {
      id: "y-axis-gravity"
    }]
  }
};

var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: planetData,
  options: chartOptions
});


        
        </script>



								<div class="panel-footer">
									<a href="clients.html" class="text-primary">View all clients</a>
								</div>
							</div>
						</div>
						

						<div class="col-sm-4">
							<div class="panel panel-table">
								<div class="panel-heading">
									<h3 class="panel-title">Package sales</h3>
								</div>
							<canvas id="pkgChart" width="600" height="400"></canvas>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js'></script>
        <script>
var densityCanvas = document.getElementById("pkgChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
  label: 'planned',
  data: <?php echo json_encode($p2);?>,
  backgroundColor: 'rgba(0, 99, 132, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-density"
};

var gravityData = {
  label: 'actual',
  data: <?php echo json_encode($a2);?>,
  backgroundColor: 'rgba(99, 132, 0, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-gravity"
};

var planetData = {
  labels: <?php echo json_encode($m2);?>,
  datasets: [densityData, gravityData]
};

var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6
    }],
    yAxes: [{
      id: "y-axis-density"
    }, {
      id: "y-axis-gravity"
    }]
  }
};

var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: planetData,
  options: chartOptions
});


        
        </script>



								<div class="panel-footer">
									<a href="projects.html" class="text-primary">View all projects</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="notification-box">
					<div class="msg-sidebar notifications msg-noti">
						<div class="topnav-dropdown-header">
							<span>Messages</span>
						</div>
						<div class="drop-scroll msg-list-scroll">
							<ul class="list-box">
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">R</span>
											</div>
											<div class="list-body">
												<span class="message-author">Richard Miles </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item new-message">
											<div class="list-left">
												<span class="avatar">J</span>
											</div>
											<div class="list-body">
												<span class="message-author">John Doe</span>
												<span class="message-time">1 Aug</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">T</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Tarah Shropshire </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">M</span>
											</div>
											<div class="list-body">
												<span class="message-author">Mike Litorus</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">C</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Catherine Manseau </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">D</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Domenic Houston </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">B</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Buster Wigton </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">R</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Rolland Webber </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">C</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Claire Mapes </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">M</span>
											</div>
											<div class="list-body">
												<span class="message-author">Melita Faucher</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">J</span>
											</div>
											<div class="list-body">
												<span class="message-author">Jeffery Lalor</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">L</span>
											</div>
											<div class="list-body">
												<span class="message-author">Loren Gatlin</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">T</span>
											</div>
											<div class="list-body">
												<span class="message-author">Tarah Shropshire</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="chat.html">See all messages</a>
						</div>
					</div>
				</div>			
			</div>
      
		
