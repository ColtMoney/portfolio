<?php
	require "../includes/config.php"; 
	include "../includes/head.php" 
?>

<body>

	<div class="wrapper">
		
		<?php include "../includes/header.php" ?>

		<div class="content-wrap">
			
			<?php
				$page = "three";
				include "../includes/sidebar.php" 
			?>

			<div class="pjax-container">
				<div class="info-right-box">
					<div class="contact-main-wrap">
						<div class="contact-head-caption">
							<h2>У вас интересный проект? Напишите мне</h2>
						</div>
						<div class="contact-form-wrap">
							<form id="contact-me">
								<label class="pull-left">
									Имя
									<input type="text" qtip-position="left" qtip-content="Вы не ввели имя" name="contactName" placeholder="Как к Вам обращаться">
								</label>
								<label class="pull-right">
									Email
									<input type="text" qtip-position="right" qtip-content="Вы не ввели email" name="contactEmail" placeholder="Куда мне писать">
								</label>
								<div class="clearfix"></div>
								<div class="contact-message-box">
									<label>
										Сообщение
										<textarea name="contactMessage" qtip-position="left" qtip-content="Что вы от меня хотите?" placeholder="Кратко в чем суть" rows="6"></textarea>
									</label>
								</div>
								<div class="contact-btn">
									<div class="btn-submit pull-left">
										<button type="submit" class="main-btn">Отправить</button>
									</div>
									<div class="btn-clear pull-right">
										<button type="reset" class="main-btn">Очистить</button>
									</div>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<?php include "../includes/social.php" ?>

		</div>
	</div>
	
	<?php include "../includes/footer.php" ?>

	<div id="dlgbox-success">
		<div id="dlg_body">
			<a class="dlg-close" href="">
				<i class="fa fa-times" aria-hidden="true"></i>
			</a>
			<span>Ура!</span>
			<p>
				Сообщение успешно доставлено.
			</p>
		</div>
	</div>
	
	<!-- Optimized loading JS Start -->
	<script>var scr = {"scripts":[
		{"src" : "../js/libs.min.js", "async" : false},
		{"src" : "../js/validation.js", "async" : false},
		{"src" : "../js/contact_me.js", "async" : false},
		{"src" : "../js/common.js", "async" : false}
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>
	<!-- Optimized loading JS End -->

</body>
</html>
