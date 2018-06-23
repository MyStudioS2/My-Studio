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
		if($(this).val().length = 0){ // si la chaîne de caractères est inférieure à 5
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
	   if($(this).val().length > 5 && $('#mdp').val().length > 0) {
		   $('.verif').show();
		}
	});
	$('#mdp').keyup(function(){
	   if($(this).val().length > 0 && $('#pseudo').val().length > 5) {
		   $('.verif').show();
		}
	});

	$('.RAI').hide();
	$('.RAP').hide();
	$('.clicRAP').click(function() {
		$('.RAP').show();
		$('.ALL').hide();
		$('.RAI').hide();
	});
	$('.clicALL').click(function() {
		$('.ALL').show();
		$('.RAP').hide();
		$('.RAI').hide();
	});
		

});

