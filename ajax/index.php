<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax</title>
	<script src="jquery-3.2.1.min.js"></script>
</head>
	<body>
		<button>Generate</button>
		<p></p>
	</body>
	<script>
		$("button").on('click', function(event) {
			$.ajax({
				url: 'ajax.php',
				type: 'POST',
				data: {length: 10},
			})
			.done(function(response) {
				//console.log(response);
				$("p").html(response);
			});
		});		
	</script>
</html>