<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Случайные цифры</title>
	<script type="text/javascript">
		let arr = [<?php for($i=0;$i<=50; $i++){echo rand(0,10).',';};?>];
		let arr2 = [<?php for($i=0;$i<=50; $i++){echo mt_rand(0,10).',';};?>];
		const bildGraf = (arr, id) => {
			let r = id.getContext('2d');
			for (let i=0, x=0; i<arr.length; i++,x+=20){
				r.fillText(arr[i], x, 130);
			}
			r.beginPath();
			r.strokeStyle = 'black';
			r.lineWidth = 2;
			for (let i=0, x=0; i<arr.length; i++,x+=20){
				r.fillText(arr[i], x, 130);
				r.lineTo(x, arr[i]*10+20);
			}
			r.stroke();
			r.beginPath();
			r.lineWidth = 1;
			r.strokeStyle = 'silver'
			for (let i=0, x=0; i<arr.length; i++,x+=20){
				r.moveTo(x, arr[i]*10+20);
				r.lineTo(x, 125);
			}
			r.stroke();
		}
	</script>
	<style type="text/css">
		body {
			display: flex;
			flex-direction: column;
			align-items: center;
		}
		fieldset {
			padding-right: 0;
			width: 1025px;
		}
	</style>
</head>
<body>
<p>Сравнение двух функций:</p>
<div>
	<fieldset>
		<legend>функция rand</legend>
		<canvas id="rand" width="1013" height="130"></canvas>
		<script type="text/javascript">
				bildGraf(arr,rand);
		</script>
	</fieldset>
</div>
<div>
	<fieldset>
		<legend>функция mt_rand</legend>
		<canvas id="mtrand" width="1013" height="130"></canvas>
		<script type="text/javascript">
				bildGraf(arr2,mtrand);
		</script>
	</fieldset>
</div>
</body>
</html>