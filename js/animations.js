if ($("#mobile-indicator").css("display") == "none") {

	var is_mobile = true;

} else {

	var is_mobile = true;

}



function animateAll() {

	var controller2 = new ScrollMagic.Controller();

	// Growing numbers

	$(".num-grow").each(function (index, element) {

		var counter = { var: 0 };

		var numTween = TweenMax.to(counter, $(element).data("time"), {
			var: $(element).data("num"),
			onUpdate: function () {
				$(element).html(Math.ceil(counter.var));
			},
			ease: Linear.easeNone
		});

		var numScene = new ScrollMagic.Scene({
			triggerElement: element.closest(".section"),
			offset: 0,
			reverse:false
		})
			.setTween(numTween)
			.addTo(controller2);

	});

	// Growing numbers END

	if ($("#mobile-indicator").css("display") == "none" && !$("body").hasClass("animated")) {

		$("body").addClass("animated");

		var controller = new ScrollMagic.Controller();



		// Order button

		var btnOrderTween = TweenMax.to($(".btn-order"), .5, {
			y: 0,
			ease: Power2.easeInOut,
			overwrite: "none",
			delay: 1
		});

		var btnOrderScene = new ScrollMagic.Scene({
			triggerElement: "header",
			offset: 0
		})
			.setTween(btnOrderTween)
			.addTo(controller);

		// Order button END

		// Section top descr

		var sectionTopDescrTween = TweenMax.to($(".section-top-descr-top"), 1, {
			x: 0,
			opacity: 1,
			ease: Power2.easeInOut,
			overwrite: "none",
			delay: 1
		});

		var sectionTopDescrScene = new ScrollMagic.Scene({
			triggerElement: "header",
			offset: 0
		})
			.setTween(sectionTopDescrTween)
			.addTo(controller);

		// Section top descr END

	} else if ($("#mobile-indicator").css("display") == "block") {

		$("body").removeClass("animated");

		//controller = controller.enabled(false);
		//controller = controller.destroy(true);

	}

}

$(window).on("resize", function () {

	animateAll();

});

$(document).ready(function () {

	animateAll();

});


$(window).on("resize scroll load", function () {







});

(function( $ ) {
	$.fn.prlx = function(pTrigger, yStart, yFinish, fromTop) {

		if (!is_mobile && $(this).length) {

			var obj = $(this);

			var yPos;

			if (fromTop == false && $(window).scrollTop() < pTrigger.offset().top - $(window).height()) {

				yPos = yStart;

			} else if (fromTop == false && $(window).scrollTop() > pTrigger.offset().top + $(window).height()) {

				yPos = yFinish;


			} else {

				if (fromTop) {

					if (pTrigger.offset().top <= $(window).scrollTop()) {

						var percentOffset = (pTrigger.offset().top - $(window).scrollTop()) / ($(window).height() * 2);

					} else {

						percentOffset = 0;

					}

				} else {

					var percentOffset = (pTrigger.offset().top + $(window).height() - $(window).scrollTop()) / ($(window).height() * 2);

				}

				var yRange = yStart - yFinish,
					posInRange = yRange * percentOffset,
					yPos = posInRange + yFinish;

				obj.attr("percentOffset", percentOffset);

			}

			TweenMax.to(obj, .5, {y: yPos, ease:Linear.ease});

		}

	};
})( jQuery );
