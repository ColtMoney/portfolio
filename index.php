<?php
	require "includes/config.php"; 
	include "includes/head.php" 
?>

<body>

	<div class="wrapper">

		<?php include "includes/header.php" ?>

		<div class="content-wrap">

			<?php
				$page = "one";
				include "includes/sidebar.php" 
			?>

			<div class="pjax-container">
				<div class="info-right-box">
					<article class="box-info clearfix">
						<div class="about-caption">
							<h2>Основная информация</h2>
						</div>
						<div class="img-wrap">
							<div class="avatar-box">
								<img src="img/bart.png" alt="">
							</div>
						</div>
						<div class="about-box">
							<div class="worksheet-item">
								<div class="worksheet-what">Меня зовут:</div>
								<div class="worksheet-info">Николай Красиков</div>
							</div>
							<div class="worksheet-item">
								<div class="worksheet-what">Мой возраст:</div>
								<div class="worksheet-info">27 лет</div>
							</div>
							<div class="worksheet-item">
								<div class="worksheet-what">Мой город:</div>
								<div class="worksheet-info">Киев, Украина</div>
							</div>
							<div class="worksheet-item">
								<div class="worksheet-what">Моя специализация:</div>
								<div class="worksheet-info">FRONTEND разработчик</div>
							</div>
							<div class="worksheet-item">
								<div class="worksheet-what">Ключевые навыки:</div>
								<div class="worksheet-info">
									<ul>
										<li class="skells-item">html</li>
										<li class="skells-item">css</li>
										<li class="skells-item">javascript</li>
										<li class="skells-item">jquery</li>
										<li class="skells-item">bootstrap</li>
										<li class="skells-item">gulp</li>
										<li class="skells-item">sass</li>	
										<li class="skells-item">sсss</li>	
										<li class="skells-item">bower</li>	
										<li class="skells-item">photoshop</li>	
										<li class="skells-item">mysql</li>	
										<li class="skells-item">wordpress</li>	
									</ul>
								</div>
							</div>
						</div>
					</article>
					<article class="box-info clearfix">
						<div class="about-caption">
							<h2>Опыт работы</h2>
						</div>
						<ul class="about-box-list">
							<li class="about-list-item icon-work">
								<div class="work">"Softermii" - HTML верстальщик</div>
								<div class="period">Сентябрь 2013 - Август 2014</div>
							</li>
							<li class="about-list-item icon-work">
								<div class="work">"Consulting & Service company" - Front-end разработчик</div>
								<div class="period">Октябрь 2014 - Июль 2016</div>
							</li>
						</ul>
					</article>
					<article class="box-info clearfix">
						<div class="about-caption">
							<h2>Образование</h2>
						</div>
						<ul class="about-box-list">
							<li class="about-list-item icon-study">
								<div class="work">Законченное высшее. КПИ ФИОТ</div>
								<div class="period">Сентябрь 2007 - Июль 2012</div>
							</li>
							<li class="about-list-item icon-curses">
								<div class="work">Курсы Interlink-ua.com</div>
								<div class="period">Ноябрь 2012 - Январь 2013</div>
							</li>
						</ul>
					</article>
				</div>
			</div>
			
			<?php include "includes/social.php" ?>

		</div>
	</div>
	
	<?php include "includes/footer.php" ?>
	
	<!-- Optimized loading JS Start -->
	<script>var scr = {"scripts":[
		{"src" : "js/libs.min.js", "async" : false},
		{"src" : "js/common.js", "async" : false}
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>
	<!-- Optimized loading JS End -->

</body>
</html>
