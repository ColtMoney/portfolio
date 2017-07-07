<?php
	require "../includes/config.php"; 
	include "../includes/head.php" 
?>

<body>

	<div class="wrapper">
		
		<?php include "../includes/header.php" ?>

		<div class="content-wrap">
			
			<?php
				$page = "two";
				include "../includes/sidebar.php" 
			?>

			

			<div class="pjax-container">
				<div class="info-right-box">
					<article class="box-info">
						<div class="about-caption">
							<h2>Мои работы</h2>
						</div>
						<div class="work-items">
							
							<?php 

								$work = R::findAll( "mywork" );

								foreach($work as $wk)
								{
									?>
										<div class="work-item">
											<a href="http://<?php echo $wk["link"]; ?>" target="blank" class="work-item-img">
												<div class="hover-box"><span><?php echo $wk["title"]; ?></span></div>
												<img class="responsive-img" src="/img/<?php echo $wk["img"]; ?>" alt="">
											</a>
											<a href="http://<?php echo $wk["link"]; ?>" target="blank"><?php echo $wk["link"]; ?></a>
											<p>
												<?php echo $wk["description"]; ?>
											</p>
										</div>
									<?php
								}

							?>
							
							
							<?php if(isset($_SESSION["logged_user"])) : ?>
								<a href="" class="work-item add-project-box" id="add-new-item">
									<i class="fa fa-picture-o" aria-hidden="true"></i>
									<p>Добавить проект</p>
								</a>
							<?php endif; ?>
						</div>
					</article>
				</div>
			</div>
			
			<?php include "../includes/social.php" ?>

		</div>
	</div>
	
	<?php include "../includes/footer.php" ?>

	<div id="project-add-pop-up">
		<h3>Добавление проекта</h3>
		<button class="b-close" id="pop-up-close"><i class="fa fa-times" aria-hidden="true"></i></button>
		<form  id="add-new-project" class="form" enctype="multipart/form-data">
			<div class="fild-pop-up-box">
				<div class="server-mes error-mes"></div>
				<label>
					Название проекта
					<input type="text" qtip-position="left" qtip-content="Введите название" name="projectname" placeholder="Введите название">
				</label>
				<label class="fileupload-label">Картинка проекта</label>
				<div class="fileupload-wrapper">
					<label for="fileurl" class="file-upload">
						<span class="button"><i class="fa fa-cloud-download" aria-hidden="true"></i></span>
					</label>
					<span class="upload-box">
						<input id="fileurl" class="hidden" type="file" name="image">
						<input type="text" id="seetext" qtip-position="left" qtip-content="Изображение" placeholder="Загрузите изображение" disabled>
					</span>	
				</div>
				<label>
					URL проекта
					<input type="text" qtip-position="left" qtip-content="Ссылка на проект" name="urlproject" placeholder="Добавьте ссылку">
				</label>
				<label>
					Описание
					<textarea name="descr" qtip-position="left" qtip-content="Описание проекта" placeholder="Пара слов о вашем проекте" cols="5" rows="3"></textarea>
				</label>
				<div class="add-project-btn">
					<button type="submit" class="main-btn">Добавить</button>
				</div>
			</div>
		</form>
		<div id="dlgbox">
			<div id="dlg_body">
				<a class="dlg-close" href="">
					<i class="fa fa-times" aria-hidden="true"></i>
				</a>
				<span>Ура!</span>
				<p>
					Проект успешно добавлен.
				</p>
			</div>
		</div>
	</div>

	
	<!-- Optimized loading JS Start -->
	<script>var scr = {"scripts":[
		{"src" : "../js/libs.min.js", "async" : false},
		{"src" : "../js/validation.js", "async" : false},
		{"src" : "../js/common.js", "async" : false}
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>
	<!-- Optimized loading JS End -->

</body>
</html>
