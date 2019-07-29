<!DOCTYPE html>
<html lang="ar" class="no-js" dir="rtl">

<head>
	<title>taberk</title>
	<meta charset="utf-8">
	<meta name="taberk" content="اكاديمية تبارك التعلمية للتعليم الالكتروني">
	<!-- app icons -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- for ios 7 style, multi-resolution icon of 152x152 -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-barstyle" content="taberk">
	<link rel="apple-touch-icon" href="images/logo.png">
	<!-- for Chrome on Android, multi-resolution icon of 196x196 -->
	<meta name="theme-color" content="#000033">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="application-name" content="taberk">
	<link rel="shortcut icon" type="image/png" sizes="196x196" href="images/logo.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<header>
		<h1 class="center">اختر الصورة</h1>
		<div class="container">
			<div class="row">
				<div class="input-field col s6">
					<label for=" image_crop">اختر الصورة </label>
					<input placeholder="ضع صورتك" name="image_crop" id="image_crop" type="file" class="validate"
						accept="image/*">
				</div>
			</div>
			<!-- Modal Structure -->
			<div class="row">
				<div id="store_image"></div>
			</div>
			<div id="modal1" class="modals">
				<h3>اقطع الجزء المراد </h3>
				<div class="modal-body">
					<div class="row">
						<div class="col s8 text-center">
							<div id="image_demo" style="width:350px; margin-top:30px"></div>
						</div>
						<div class="col s4" style="padding-top:30px;">
							<br />
							<br />
							<br />
							<button class="btn btn-success crop_image">اقطع الصورة وضيفها</button>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default modal-close">اغلاق</button>
				</div>
			</div>
		</div>
		<!--end footer style -->



		<script src="js/jquery-3.4.0.min.js"></script>
		<script src="js/materialize.min.js"></script>
		<script src="js/croppie.js"></script>
		<script src="js/flickity.pkgd.min.js"></script>
		<script src="js/mainjs.js"></script>
</body>

</html>