<html>
	<head>
		<title>PHP</title>
		<!-- Include CSS from css folder -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
						body{
							padding-top:80px;
						}
						.pstyle{
							text-align:justify;
						}
						.modal .modal-header {
			  border-bottom: none;
			  position: relative;
			}
			.modal .modal-header .btn {
			  position: absolute;
			  top: 0;
			  right: 0;
			  margin-top: 0;
			  border-top-left-radius: 0;
			  border-bottom-right-radius: 0;
			}
			.modal .modal-footer {
			  border-top: none;
			  padding: 0;
			}
			.modal .modal-footer .btn-group > .btn:first-child {
			  border-bottom-left-radius: 0;
			}
			.modal .modal-footer .btn-group > .btn:last-child {
			  border-top-right-radius: 0;
			}
		</style>
		<!-- Include Java Script from js folder -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Prathamesh Dastapure</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Project</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blogger <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">789</a></li>
                <li><a href="#">456</a></li>
                <li><a href="#">123</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Internship</a></li>
            <li><a href="../navbar-static-top/">Development</a></li>
            <li><a href="./">Career <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>