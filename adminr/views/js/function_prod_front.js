
$(document).ready(function(){

	$('#search_prod_front').keyup(function(){

		var search_prod_front = $(this).val();
		search_prod_front = $.trim(search_prod_front);
		//$('#resultat').text(search);
		if (search_prod_front != "") {

			$.post('postAfficher_prod_front.php',{search_prod_front:search_prod_front},function(data){

				$('#resultat_prod_front tbody').html(data);
			});
		}
	});
});