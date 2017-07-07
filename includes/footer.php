<footer class="clearfix">
	<div class="footer-wrap clearfix">
		<?php if(isset($_SESSION["logged_user"])) : ?>
			<div class="lock" style="background-image: url(../img/unlock.png)">
				<a href="/includes/logout.php">Выйти</a>
			</div>
		<?php else : ?>
			<div class="lock" style="background-image: url(../img/lock.png)">
				<a href="/pages/authorization.php">Войти</a>
			</div>
		<?php endif; ?>
		<div class="copiright">
			© 2017. Это мой сайт, пожалуйста, не копируйте и не воруйте его
		</div>
	</div>
</footer>