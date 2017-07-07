var login = (function() {

	var init = function() {
		_setUpListners();
	};

	var _setUpListners = function() {
		$("#signin").on("submit", _loginForm);
	};

	var _loginForm = function(ev) {
		ev.preventDefault();

		var form = $(this),
			url = "../includes/login.php",
			defObj = _ajaxForm(form, url);

		if(defObj){
			defObj.done(function(ans) {

				errorBox = form.find(".error-mes");

				if(ans.status === "error"){
					errorBox.text(ans.text).show();
				}
			});
		}
	};

	var _ajaxForm = function(form, url) {
		if(!validation.validateForm(form)) return false;
		// если false то код ниже не произойдет никогда

		data = form.serialize();

		var result = $.ajax({
			url: url,
			type: "POST",
			dataType: "json",
			data: data,
			success: function(respond) {
				if(respond.status === "success"){
					window.location.href = "/pages/work.php";
				}
			}
		}).fail( function(){
			form.find(".error-mes").text("На сервере произошла ошибка!").show();
		});

		return result;
	};

	return {
		init: init
	};

})();

login.init();