window.onload = function() {
	var year = <?php echo json_encode($year) ?>;
	var make = <?php echo json_encode($make) ?>;
	var model = <?php echo json_encode($model) ?>;

	for(var x=0; x<year.length; x++){
		console.log(year[x]);
	});
}