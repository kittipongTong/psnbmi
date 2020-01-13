<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>ADMIN</title>
  @section('title')
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">
	<link href="assets/styles.css" rel="stylesheet" />
	<link href="assets/prism.css" rel="stylesheet" />
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header" data-background-color="light-blue2">

				<a href="index.html" class="logo">
					<!-- <img src="../assets/img/logo.svg" alt="ศูนย์สารสนเทศ" class="navbar-brand"> -->
					<!-- <img src="../assets/img/moph.jpg" alt="ศูนย์สารสนเทศ" class="navbar-brand"  height=50  width="50" align = 'center'> -->
				</a>

				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="light-blue2">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item">
							<a href="#" class="nav-link">
								<!-- <h1>ระบบเก็บข้อมูลบุคลากรศูนย์สารสนเทศ Data Personnel information</h1> -->


                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>

		<div class="sidebar sidebar-style-2">
			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-info">
						<li class="nav-item active">
							<img src="../assets/img/moph.jpg" alt="ศูนย์สารสนเทศ" class="navbar-brand"  height="70" align="center">
							<br><br>
							<a href="dashboard">
								<i class="fas fa-home"></i>
								<p>Admin</p>
							</a>
						</li>

						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4  class="text-section"> ข้อมูลสมาชิก</h4>
						</li>

						<li class="nav-item">
							<a href="role-register">
								<!-- <i class="fa fa-plus-square" style="font-size:20px;color:Blue"></i> -->
									<i class="fa fa-cog fa-spin" style="font-size:24px;color:Blue"></i>
								<p data-toggle="tooltip" title="จัดการข้อมูลสมาชิกสามารถแก้ไขข้อมูลและลบสมาชิกออกได้ กำหนดสิทธิ์ได้">จัดการข้อมูลสมาชิก</p>
								</span>
							</a>
						</li>


						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">จัดการข้อมูล</h4>
						</li>
						<li class="nav-item">
							<a href="PersonnelBackyard">
								<!-- <i class="fa fa-cog fa-spin" style="font-size:24px"></i> -->
									<i class="fa fa-plus-square" style="font-size:20px;color:Blue"></i>
								<p data-toggle="tooltip" title="เพิ่มข้อมูลบุคลากรและ ข้อมูล BMI Admin สามารถเพิ่มลมแก้ไขข้อมูลได้">รายการข้อมูล BMI</p>
							</a>
						</li>

						<!-- <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">จัดการแก้ไขข้อมูล</h4>
						</li>
						<li class="nav-item">
							<a href="Personnelbmi">
								<i class="fa fa-align-justify" style="font-size:20px;color:Blue"></i>
								<p>รายการข้อมูล BMI</p>
							</a>
						</li> -->

					</ul>
				</div>
			</div>
		</div>

		<div class="main-panel">
			<div class="content content-documentation">
				<div class="container-fluid">
					<div class="card card-documentation">
						<div class="card-header bg-info-gradient text-white bubble-shadow">
							<h4>ระบบเก็บข้อมูลบุคลากรศูนย์สารสนเทศ (Admin)</h4>
							<!-- <p class="mb-0 op-7">โปรแกรม เก็บข้อมูลบุคลากรศูนย์สารสนเทศ</p> -->
						</div>
						<div class="card-body">
							<div class="table-content">
                  @yield('content')
			</div>
		</div>
	</div>

</div>
</div>
</div>
</body>
<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugin/chart.js/chart.min.js"></script>
<script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script type="text/javascript" src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script type="text/javascript" src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js" charset="utf-8"></script>
<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="../assets/js/atlantis.min.js"></script>
<script src="assets/prism.js"></script>
<script src="assets/prism-normalize-whitespace.min.js"></script>
<script type="text/javascript">
	// Optional
	Prism.plugins.NormalizeWhitespace.setDefaults({
		'remove-trailing': true,
		'remove-indent': true,
		'left-trim': true,
		'right-trim': true,
	});

	// handle links with @href started with '#' only
	$(document).on('click', 'a[href^="#"]', function(e) {
		// target element id
		var id = $(this).attr('href');

		// target element
		var $id = $(id);
		if ($id.length === 0) {
			return;
		}

		// prevent standard hash navigation (avoid blinking in IE)
		e.preventDefault();

		// top position relative to the document
		var pos = $id.offset().top - 80;

		// animated top scrolling
		$('body, html').animate({scrollTop: pos});
	});
</script>
@yield('scripts')
</html>
