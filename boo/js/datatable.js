$(document).ready(function() {
	$('#example').DataTable({
		"columnDefs": [{
			"targets": 0
		}],
		language: {
			"sProcessing": "Procesando...",
			"sLengthMenu": "Mostrar lOS _MENU_ resultados",
			"sZeroRecords": "No se encontraron resultados",
			"sEmptyTable": "Ningún dato disponible en esta tabla",
			"sInfo": "Mostrando Resultados (_START_-_END_) de  _TOTAL_",
			"sInfoEmpty": "Mostrando Resultados del 0 al 0 de un total de 0 registros",
			"sInfoFiltered": "(Filtrado de un total de _MAX_ registros)",
			"sSearch": "Buscar:",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
				"sFirst": "Primero",
				"sLast": "Último",
				"sNext": "Siguiente",
				"sPrevious": "Anterior"
			},
		}
	});
});
