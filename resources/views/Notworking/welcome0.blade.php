

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
	<title>HOME</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="loginuserandmin/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginuserandmin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginuserandmin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginuserandmin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginuserandmin/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginuserandmin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginuserandmin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginuserandmin/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginuserandmin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginuserandmin/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginuserandmin/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #AAAAAA;">
	<!-- สีพื้นหลัง -->
	<style>
	    html,
	    .container {
	        /* color: #000000; */
	          background:#FFFFFF;
	    }

	</style>
	<div class="limiter col-md-10">
		<div class="progress">
			<div class="progress-bar bg-success" role="progressbar" style="width: 59%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
			 <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
		 </div>
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span  class="login100-form-title p-b-5">
							****
						 ระบบเก็บข้อมูลบุคลากรศูนย์สารสนเทศ Data Personnel information
						 ****
					</span>
					<div class="flex-center position-ref full-height">
	            @if (Route::has('login'))
	                <div class="top-right links">
										<hr><br>
	                    @auth
	                        <a href="{{ url('/home') }}"><h1>หน้าหลัก</h1></a>
	                    @else
													<br><br><br>
											<div class="container-login100-form-btn">
												<!-- <button class="login100-form-btn"> -->
												<a href="{{ route('login') }}"><h3>ล็อกอิน</h3></a>
												<!-- </button> -->
											</div>
													<div class="progress">
															<div class="progress-bar bg-success" role="progressbar" style="width: 59%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
													 </div>
													 <br><br>
                      @if (Route::has('register'))
													<div class="container-login100-form-btn">
														<!-- <button class="login100-form-btn"> -->
														<a href="{{ route('register') }}">	<h3>สมัครสมาชิก</h3></a>

														<!-- </button> -->
													</div>
													<div class="progress">
														<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>

															<div class="progress-bar bg-success" role="progressbar" style="width: 59%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
													 </div>
                      @endif
	                    @endauth
	                </div>
	            @endif
							<br><br>
							<hr>
							<h1  align="center"><marquee  direction="alternate">ยินดีต้อนรับทุกท่าน</marquee></h1>
							<!-- ข้อความขยับ -->
							<hr>
	        </div>
				</form>

				 <img align="center" style="background-image"  src="loginuserandmin/images/moph.jpg" width="670"  height="670">
			</div>
		</div>
	</div>

		<div class="progress">
  		<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
		</div>

	<footer class="footer">
		<div class="container-fluid">
			<nav class="pull-left">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="#">

							<h4>ติดต่อศูนย์สารสนเทศ</h4>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							 ที่อยู่: 88/21 ถนนติวานนท์ ตำบลตลาดขวัญ จังหวัดนนทบุรี 11000 (อาคาร 2 ชั้น 3 )
							 <br>
							 E-mail: atsadang.c@ddc.mail.go.th
							 <br>
							 02-5903000 (กรมควบคุมโรค)
							 <br>
							 02-590-3093 (ศูนย์สารสนเทศ กรมควบคุมโรค)
						</a>
					</li>

				</ul>
			</nav>
			<hr>
			<div class="copyright ">
				Working House:
						 IN Day: 8.00-16.30
					 Over Time: 16.30-20.30 </a>
			</div>
		</div>
	</footer>
	<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<!--===============================================================================================-->
	<script src="loginuserandmin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="loginuserandmin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="loginuserandmin/vendor/bootstrap/js/popper.js"></script>
	<script src="loginuserandmin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="loginuserandmin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="loginuserandmin/vendor/daterangepicker/moment.min.js"></script>
	<script src="loginuserandmin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="loginuserandmin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="loginuserandmin/js/main.js"></script>

</body>
</html>
