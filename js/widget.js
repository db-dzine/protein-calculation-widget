(function($){

	// USE STRICT
	"use strict";

	var proteinCalculatorWidget = {
		init: function () {
			var typ = $('#protein-calculation-widget-typ');
			var gewicht = $('#protein-calculation-widget-gewicht');
			var kfa = $('#protein-calculation-widget-kfa');
			var kfaContainer = $('#kfa-container');
			var inputs = $('#protein-calculation-widget-typ, #protein-calculation-widget-gewicht, #protein-calculation-widget-kfa');
			var kfaImages = $('.image-popup');
			var ergebnis = $('#protein-calculation-widget-ergebnis');

			inputs.bind("keyup change", function(){
				var typVal = typ.val();
				var gewichtVal = gewicht.val().replace(/\D/g,'');
				var kfaVal = kfa.val().replace(/\D/g,'');
				var ergebnisBerechnung;
				var faktor;

				if(typVal == "aufbau" || typVal == "diaet"){
					kfaContainer.show();
					if(kfaVal == ""){
						ergebnis.html("Bitte Körperfettanteil angeben!");
						return true;
					}
					gewichtVal = ((100 - kfaVal)/100) * gewichtVal;
				} else {
					kfaContainer.hide();
				}

				if(typVal == "nicht-sportler"){
					faktor = 0.8;
				}

				if(typVal == "sportler"){
					faktor = 1.5;
				}

				if(typVal == "aufbau"){
					faktor = 2;
				}

				if(typVal == "diaet"){
					faktor = 2.5;
				}
				console.log(faktor);
				console.log(gewichtVal);
				ergebnisBerechnung = faktor * gewichtVal;
				ergebnisBerechnung = ergebnisBerechnung.toFixed(2);
				console.log(ergebnisBerechnung);

				ergebnis.html(ergebnisBerechnung);
			});

			kfaImages.magnificPopup({
          		type: 'image',
          		closeOnContentClick: true,
          		mainClass: 'mfp-img-mobile',
          		image: {
            		verticalFit: true
          		}
        	});
		}
	};

	$(document).ready(proteinCalculatorWidget.init);

})(jQuery);