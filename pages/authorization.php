<?php
	require "../includes/config.php"; 
	include "../includes/head.php" 
?>

<body>

	
	<div class="authorization-wrap">
		<div class="authorization-inner">
			<div class="authorization-box">
				<div class="authorization-head-caption">
					<h2>Авторизируйтесь</h2>
				</div>
				<form id="signin">
					<div class="server-mes error-mes"></div>
					<label>
						<span>Логин</span>
						<input qtip-position="left" qtip-content="Вы не ввели логин" type="text" name="login" placeholder="Введите логин">
					</label>
					<label>
						<span>Пароль</span>
						<input qtip-position="top" qtip-content="Вы не ввели пароль" type="password" name="password" placeholder="Введите пароль">
					</label>
					<button type="submit" name="do-login" class="main-btn">Войти</button>
				</form>
			</div>
		</div>
	</div>	
	<div class="wrapper"></div>
	
	<?php include "../includes/footer.php" ?>
	
	<!-- Optimized loading JS Start -->
	<script>var scr = {"scripts":[
		{"src" : "../js/libs.min.js", "async" : false},
		{"src" : "../js/validation.js", "async" : false},
		{"src" : "../js/login.js", "async" : false},
		{"src" : "../js/common.js", "async" : false}
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>
	<!-- Optimized loading JS End -->

</body>
</html>
