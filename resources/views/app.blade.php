<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
@yield('aimeos_header')
	<title>Marcsauto</title>

	<link type="text/css" rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,300'>
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@yield('aimeos_styles')
</head>
<body>
	<nav class="navbar navbar-default">
	<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">MarcsAuto</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/list">Главная</a></li>
					<li><a href="/list">О нас</a></li>
					<li><a href="/list">Свяжитесь с нами</a></li>
					<li><a href="/list">Авто из США</a></li>
				</ul>

				<div class="nav navbar-nav navbar-right">
@yield('aimeos_head')
				</div>
			</div>
		</div>
	</nav>
    <div class="col-xs-12">
@yield('aimeos_nav')
@yield('aimeos_stage')
@yield('aimeos_body')
@yield('aimeos_aside')
@yield('content')
	</div>

	<!-- Scripts -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@yield('aimeos_scripts')

<div class="mailerlite-container">
        <div class="mailerlite-vertical-align-center">
          <div class="mailerlite-popup">
            <a href="javascript:close()" class="close-popup glyphicon glyphicon-remove"></a>
            <div class="row row-form">
              <div class="col-sm-10 col-sm-offset-1 ml-subscribe-form" id="mlb2-488777">
                <form action="https://app.mailerlite.com/webforms/submit/h8c5e6" data-code="h8c5e6" method="POST" target="_blank">
                  <style type="text/css">
  .ml_message_wrapper {
    position: absolute !important;
    left: -9999px !important;
  }
</style>

<div aria-label="Please leave the following field empty" class="ml_message_wrapper">
  <input type="text" name="ml_message" tabindex="-1" value="" placeholder="Message" autocomplete="off" title="message">
  <input type="text" name="ml_email" tabindex="-1" value="" placeholder="Email" autocomplete="off" title="email">
  <input type="text" name="ml_name" tabindex="-1" value="" placeholder="Name" autocomplete="off" title="name">
</div>


                  <div class="row mb30 popup-content">
                    <div class="col-sm-12">
                      
                        <div class="row mb15">
                          <div class="col-sm-12">
                            <h3>
                              Даруємо знижку 5%
                            </h3>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="description">
                              <p style="text-align: center;"><span style="font-size: 20px;">на послуги з оформлення на&nbsp;мовні курси за кордоном для дітей та дорослих</span></p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">Підпишіться на листи від Karandash.</p>
<p style="text-align: center;">Обіцяємо писати тільки про важливе!</p>
                            </div>
                          </div>
                        </div>
                        
                      
                    </div>
                  </div>
                  
	</body>
</html>
