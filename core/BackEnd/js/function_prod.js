
$(document).ready(function(){

	$('#search_prod').keyup(function(){

		var search_prod = $(this).val();
		search_prod = $.trim(search_prod);
		//$('#resultat').text(search);
		if (search_prod !== "") {

			$.post('postAfficher_prod.php',{search_prod:search_prod},function(data){

				$('#resultat_prod tbody').html(data);
			});
		}
	});
});