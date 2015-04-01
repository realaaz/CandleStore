
<html>

	<head>
		<script src="/js/jquery-2.1.3.js"></script>
		
		<meta charset="UTF-8">
		<title>--- CandleStore ---</title>
		
		<!--  <link rel="stylesheet" href="/css/reset.css">  -->
		<link rel="stylesheet" href="/css/style.css">
		
	</head>
	
	<body>
	
	<div id="container">
	
		<h1><?php echo $title ?></h1>
		
		<div id="body">
		
		<form method="get" action="#"> 
		
			<input class="in0" id="inn0" type="text" name="innn0" size="10">
			<input class="bt0" id="btn0" type="submit" value="фасcc!!!">
		
		</form>
		
		<script>
			$(document).ready(function(){
			    $("#btn0").click(function(){
			        $(this).hide();
			    });
			});
		</script>	