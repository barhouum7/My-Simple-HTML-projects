<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My work of simple Gallery with JavaScript !</title>
		<style type="text/css">
			body
			{
				background-color: #222;
			}

			.thambnail img
			{
				width: 100px;
				height: 80px;
				margin: 5px;
				border: 2px solid #DDD;

			}

			.thambnail img:hover
			{
				border: 2px solid #888;
				cursor: pointer;
			}

			.preview img
			{
				width: 800px;
				height: 500px;
				border: 2px solid #fff;
			}

		</style>


	</head>
	<body>
		<div class="gallery">
			
			<div class="thambnail">
				<img onmouseouver="preview.src = img1.src" src="img1.jpg" name="img1" />
				<img onmouseouver="preview.src = img2.src" src="img2.jpg" name="img2" />
				<img onmouseouver="preview.src = img3.src" src="img3.jpg" name="img3" />
				<img onmouseouver="preview.src = img4.src" src="img4.jpg" name="img4" />
				<img onmouseouver="preview.src = img5.src" src="img5.jpg" name="img5" />
			</div>

			<div class="preview">
				<img src="img2.jpg" name="preview" />
			</div>

		</div>

	</body>
</html>