$(document).ready(function(){
	function problema()
	{
		alert('no funciona');
	}
	function cargando()
	{
		alert('cargando');
		$('.opciones').remove();
		$('#searcher').append('<option class="opciones">Cargando</option>');
	}
	function llego(data)
	{
		alert('llego');
		$('.opciones').remove();
		$('#searcher').append(data);
	}
	var busq = $('#searcher'),form = $('#metodisito');
	busq.keyup(function(){
		$.ajax({
			url:form.attr('action'),
			type:"post",
			data:{valor:busq.val()},
			cache:true,
			beforeSend:cargando,
			succes:llego,
			error:problema
		});
	});
})