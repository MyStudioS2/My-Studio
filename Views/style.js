jQuery(document).ready(function($){

        $('.msg').hide();
        $('.verif').on({
                mouseenter : function(){
                        $('.msg').show();
                },
                mouseleave : function(){
                        $('.msg').hide();
                }
        });

        $('.cache').hide();
        $('.horizontale1').on({
                mouseenter : function(){
                        $('.cache').show();
                },
                mouseleave : function(){
                        $('.cache').hide();
                }
        });

	   
    var $pseudo = $('#pseudo'),
        $mdp = $('#mdp'),
        $champ = $('.champ');

	$champ.keyup(function(){
		if($(this).val().length === 0){ // si la chaîne de caractères est inférieure à 5
		$(this).css({ // on rend le champ rouge
		    borderColor : 'red',
		    color : 'red'
		});
		}else{
		 $(this).css({ // si tout est bon, on le rend vert
		     borderColor : 'green',
		     color : 'green'
		 });
	     }
	});

});

