var contactMe = (function() {

	var init = function() {
		_setUpListners();
	};

	var _setUpListners = function() {
		$("#contact-me").on("submit", _submitForm);
		$(".dlg-close").on("click", _closeSuccess)
	};

	var _closeSuccess = function(e) {
		e.preventDefault();
		var dlg = $("#dlgbox-success");
		dlg.fadeOut(150);
		$(".body-overlay").fadeOut(150);
	}


	var _submitForm = function(ev) {
		var form = $(this);
		if(!validation.validateForm(form)) return false;
		ev.preventDefault();


		$.ajax({
			type: "POST", //Метод отправки
			url: "../contactme.php", //путь до php файла отправителя
			data: form.serialize()
		}).done(function(){

			var dlg = $("#dlgbox-success");
			dlg.fadeIn(150);

			var winWidth = window.innerWidth;
			var winHeight = window.innerHeight;

			var leftstep = (winWidth/2) - 300/2 + "px"; 
			dlg.css("left", leftstep);
			dlg.css("top", "40%");
			$(".body-overlay").remove();
			$(".wrapper").append("<div class='body-overlay'></div>");
			$(".body-overlay").fadeIn(150);
			setTimeout(function() {
				form.trigger("reset");
			}, 500);
			setTimeout(function() {
				dlg.fadeOut(150);
				$(".body-overlay").fadeOut(150);
			}, 2500);


		}).fail(function(){
			alert("На сервере произошла ошибка!");
		});

	};

	return {
		init: init
	};

})();

contactMe.init();