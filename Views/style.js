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

        $('.txt').hide();
        $('.horizontale1').on({
                mouseenter : function(){
                        $('.txt').show();
                },
                mouseleave : function(){
                        $('.txt').hide();
                }
        });

	   
    var $pseudo = $('#pseudo'),
        $mdp = $('#mdp'),
        $champ = $('.champ');

	$('#pseudo').keyup(function(){
		if($(this).val().length < 5){ // si la chaîne de caractères est inférieure à 5
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

	$('#mdp').keyup(function(){
		if($(this).val().length > 0 && $(this).val().length > 10 ){ // si la chaîne de caractères est inférieure à 5
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

	$('.verif').hide();
	
	$('#pseudo').keyup(function(){
	   if($(this).val().length > 5 && $('#mdp').val().length > 0 && $('#mdp').val().length < 10) {
		   $('.verif').show();
		}
	});
	$('#mdp').keyup(function(){
	   if($(this).val().length > 0 && $(this).val().length < 10 && $('#pseudo').val().length > 5) {
		   $('.verif').show();
		}
	});
/*
	function verifier(champ){
		if(champ.val() != ""){ // champ pas  vide
			$('.verif').show();
		}
	}
	verifier($pseudo);
        //verifier($mdp);

	$('.verif').hide();
	function verifier(pseudo, mdp){
		if(pseudo.val() != "" && mdp.val() != ""){ // champ pas  vide
			$('.verif').show();
		}
	}
*/
});

