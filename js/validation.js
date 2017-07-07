var validation = (function() {

	var init = function() {
		_setUpListners();
	};

	var _setUpListners = function() {
		$("form").on("keydown", ".has-error", _removeError);
		$("form").on("reset", _clearForm);
	};

	var _removeError = function() {
		$(this).removeClass("has-error");
	};

	var _clearForm = function() {
		var form = $(this);
		form.find("input, textarea").trigger("hideTooltip");
		form.find(".has-error").removeClass("has-error");
	};

	// создает тултипы 
	var _createQtip = function(element, position) {

		// позиция тултипа
		if(position === "right"){
			position = {
				my: "left center",
				at: "right center"
			}
		}
		else{
			position = {
				my: "right center",
				at: "left center",
				adjust: {
					method: "shift none"
				}
			}
		}

		element.qtip({
			content: {
				text: function() {
					return $(this).attr("qtip-content");
				}
			},
			show: {
				event: "show"
			},
			hide: {
				event: "keydown hideTooltip"
			},
			position: position,
			style: {
				classes: "qtip-mystyle qtip-rounded qtip-red",
				tip: {
					height: 10,
					width: 16
				}
			}
		}).trigger("show");

	};

	var  validateForm = function(form) {

		var elements = form.find("input, textarea"),
			valid = true;

		$.each(elements, function (index, val){
			var element = $(val),
				val = element.val(),
				pos = element.attr("qtip-position");

			if(val.length === 0){
				element.addClass("has-error");
				_createQtip(element, pos);
				valid = false;
			}
		});

		return valid;
	};

	return {
		init: init,
		validateForm: validateForm
	};

})();

validation.init();