<?php 
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);


?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<input type="checkbox" id="nav-toggle"> 

<div class="sidebar">
 	<div class="sidebar-brand">
 		 	<h2><span class="lab la-accusoft"></span><span id="kleenpulse">Admin</span></h2>
 	</div>
	 <div class="sidebar-menu">
	 	<ul>
	 		<li>
	 			<a href="#" class="active"><span class="las la-igloo"></span>
	 				<span>Dashboard</span>
	 			</a>
	 		</li>
			<li>
	 			<a href="messages.html"><span><i class="fas fa-users"></i></span>
	 				<span>messages </span>
	 			</a>
	 		</li>
			<li>
	 			<a href="report.html"><span class="las la-clipboard-list"></span>
	 				<span>report</span>
	 			</a>
	 		</li>
		
			<li>
	 			<a href="calendar.html"><span class="las la-receipt"></span>
	 				<span>Calendar</span>
	 			</a>
	 		</li>
		
			 <li>
				<a href="login.php"><span class="las la-shopping-bag"></span>
					<span>Log out</span>
				</a>
			</li>
	 	</ul>
	 </div>
 </div>

<div class="main-content">
	<header>
		<h2 class="heading" id="dashboard">
			<label for="nav-toggle">
				<span class="las la-bars"></span>
			</label>
			Dashboard
		</h2>
		<div class="search">
           
         
        </div>
		
	</header>
	<main>

		
	
				<div class="cards">
				
					<div class="card-single">
						<div>
							<h1 id="project"></h1>
							<span>Number of Students</span>
							</div>
						<div>
							<span class="las la-clipboard"></span>
						</div>
					</div>
					<div class="card-single">
						<div>
							<h1 id="order"></h1>
							<span>Male</span>
							</div>
						<div>
							<span class="las la-shopping-bag"></span>
						</div>
					</div>
					<div class="card-single">
						<div>
							<h1><p id="income"></p></h1>
							<span>Female</span>
							</div>
						<div>
							<span class="lab la-google-wallet"></span>
						</div>
					</div>
				</div>
				<div class="recent-grid">
					<div class="projects">
						<div class="card">
							<div class="card-header">
								<h3 class="heading">List of Students</h3>
								<a href="seeall.html"><button>See all<span class="las la-arrow-right"></span></button></a>
							
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table width="100%">
									<thead>
										<tr>
											<td>First Name</td>
											<td>Last Name</td>
											<td>Status</td>
											
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Sunny Rose</td>
											<td>Kasil</td>
											<td>
												<span class="status purple"></span>
											</td>
										</tr>
										<tr>
											<td>Trixy Rose</td>
											<td>Lofranco</td>
											<td>
												<span class="status pink"></span></td>
										</tr>
										<tr>
											<td>Lyra Gleenith</td>
											<td>Nakila</td>
											<td>
												<span class="status pink"></span>
											</td>
										</tr>
										<tr>
						
							
									</tbody>

								</table>
								</div>
							</div>
						</div>
					</div>
					<div class="customers">
						<div class="card">
							<div class="card-header">
								<h3 class="heading">SUBJECTS</h3>
								
							</div>
							
							<div class="card-body">
								<div class="customer">
									<div class="info">
										<img src="https://assets.codepen.io/3853433/internal/avatars/users/default.png?format=auto&version=1617122449&width=40&height=40" alt=""> 
										<div>
											<h4 class="heading">ICT 383 System Analysis</h4>
										</div>
									</div>
									<div class="contact">
										<span class="las la-user-circle"></span>
										<span class="las la-comment"></span>
										<span class="las la-phone"></span>
									</div>
								</div>
								
								<div class="customer">
									<div class="info">
										<img src="https://assets.codepen.io/3853433/internal/avatars/users/default.png?format=auto&version=1617122449&width=40&height=40" alt="">
										<div>
											<h4 class="heading">IT 380 Fundamentals of Database System</h4>
										</div>
									</div>
									<div class="contact">
										<span class="las la-user-circle"></span>
										<span class="las la-comment"></span>
										<span class="las la-phone"></span>
									</div>
								</div>
								
								<div class="customer">
									<div class="info">
										<img src="https://assets.codepen.io/3853433/internal/avatars/users/default.png?format=auto&version=1617122449&width=40&height=40" alt="">
										<div>
											<h4 class="heading">IT 384 Web and Tech</h4>
										</div>
									</div>
									<div class="contact">
										<span class="las la-user-circle"></span>
										<span class="las la-comment"></span>
										<span class="las la-phone"></span>
								</div>
								
								
								
								
								
								
								
								
							</div>
						</div>
					</div>
				</div>
		
	</main>

</div>
</body>
</html>