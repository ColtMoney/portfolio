var myModule = (function() {

	// Инициализирует наш модуль 
	var init = function() {
		_setUpListners();
	};

	// Прослушивает события
	var _setUpListners = function() {

		$(".hamburger").click(function(){   
			$(this).toggleClass("is-active");
			$(".hamburg-inner .angle-up").slideToggle();
			$(".main-menu").slideToggle();
		});

		$(".dlg-close").on("click", _closeSuccess)
		$("#fileurl").on("change", _showFile);
		$("#add-new-item").on("click", _showModal); // Вызов модального окна
		$(document).ready(function(){
			$("#add-new-project").on("submit", _addProject);
		});
		$("#pop-up-close").on("click", _closeModal); //  Закрытие модального окна
	};

	var _closeSuccess = function(e) {
		e.preventDefault();
		var dlg = document.getElementById("dlgbox");
		dlg.style.display = "none";
	}

	var _showFile = function() {
		var filename = $(this).val().replace("C:\\fakepath\\", '' );
		var file = $("#seetext");
		file.val(filename);
		file.trigger("hideTooltip");
		file.removeClass("has-error");
	}

	var _closeModal = function() {
		var form = $(this).parent().find(".form");
		form.trigger("reset");
	}

	// Работает с модальным окном
	var _showModal = function(e){
		e.preventDefault();

		var divPopup = $("#project-add-pop-up"),
		form = divPopup.find(".form");

		divPopup.bPopup({
			modalClose: false,
			positionStyle: "fixed",
			speed: 500,
			transition: "slideDown",
			onClose: function(){
				form.find(".server-mes").text("").hide();
			}
		});
	};

	// Добавляет проект
	var _addProject = function(e){
		var form = $(this);
		if(!validation.validateForm(form)) return false;
		e.preventDefault();


		$.ajax({
			url: "../includes/add-project.php",
			type: "POST",
			data: new FormData(this),
			dataType: "json",
			contentType: false,
			cache: false,
			processData: false
		}).done(function(ans){

			if(ans.status === "error"){
				$(".error-mes").text(ans.text).show();
			}
			if(ans.status === "success")
			{
				var dlg = document.getElementById("dlgbox");
				dlg.style.display = "block";

				var winWidth = window.innerWidth;
				var winHeight = window.innerHeight;

				dlg.style.left = (winWidth/2) - 360/2 + "px";
				dlg.style.top = "150px";
			}

		}).fail( function(){
			$(".error-mes").text("На сервере произошла ошибка!").show();
		});

	};
	
	// Возвращаем обьект или публичные методы
	return {
		init: init
	};

})();

myModule.init();