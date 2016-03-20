<!doctype html>
<html>
	<head>
		<title>test</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script>
			function run() {
				$.ajax({
					url: 'run.php',
					type: 'post',
					success: function(data) {
						alert(data);
					},
					error: function() {
						console.log('error');
					}
				});
			}
		</script>
	</head>
	
	<body>
		<div>
			<input type="text">
			<input type="button" value="Enter" onclick="run()">
		</div>
	</body>
</html>