<!DOCTYPE html>
<html>
<head>
	<title>Приклад роботи з AJAX</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$("#load-data").click(function() {
				$.ajax({
					url: "data.php",
					type: "GET",
					dataType: "json",
					success: function(data) {
						$("#result").html("<p>Нік: " + data.name + "</p>" +
										  "<p>Рівень: " + data.lvl + "</p>");
					}
				});
			});
		});
		$(document).ready(function() {
			$("#load-data").click(function() {
				$.ajax({
					url: "dataa.php",
					type: "GET",
					dataType: "json",
					success: function(data) {
						$("#result1").html("<p>Нік: " + data.name + "</p>" +
										  "<p>Рівень: " + data.lvl + "</p>");
					}
				});
			});
		});
		$(document).ready(function() {
			$("#load-data").click(function() {
				$.ajax({
					url: "dataaa.php",
					type: "GET",
					dataType: "json",
					success: function(data) {
						$("#result2").html("<p>Нік: " + data.name + "</p>" +
										  "<p>Рівень: " + data.lvl + "</p>");
					}
				});
			});
		});
	</script>
</head>
<body>
	<center><h1>Приклад роботи з AJAX</h1></center>
	<button id="load-data">Завантажити дані</button>
	<div id="result"></div>
	<div id="result1"></div>
	<div id="result2"></div>
</body>
</html>