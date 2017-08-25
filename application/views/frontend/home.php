<!DOCTYPE html>
<html>
<head>
	<title>Coffee</title>
	<link href="https://fonts.googleapis.com/css?family=Exo:700" rel="stylesheet">
	<style type="text/css">
	body {
		background-image: url('./asset/frontend/bg3.png');
	}
	section {
		margin: 20px 0;
		padding: 10px;
	}

	.center {
		width: 300px;
		margin: 50px auto;
		padding: 20px;
	}
	.hexagon {
		z-index: 3;
		position: absolute;
		width: 300px;
	}
	.coffee{
		position: absolute;
		width: 300px; 
	}
	.rotate {
		z-index: -2;
		position: absolute;
		width: 300px;
		animation: 9s rotateleft infinite linear; 
	}

	@keyframes rotateleft {
	to { transform: rotate(-360deg); }
	}
	@keyframes rotateright {
	to { transform: rotate(360deg); }
	}
	.enter {
		position: absolute;
		width: 300px;
		height: 200px;

		bottom: 100px; 
		background: url('./asset/frontend/enter.png') center;
		background-size: 100px;
    	background-repeat: no-repeat;
	}
	.enter .shake-text {
		text-align: center;
		padding-top: 90px;
		font-family: 'Exo', sans-serif;
		font-size: 20px;
		color: #FFFFFF;
	}

	.shake:hover {
	  animation-name: shake-base;
	  animation-duration: 100ms;
	  animation-iteration-count: infinite;
	  animation-timing-function: ease-in-out;
	}
	@keyframes shake-base {
	  0% {
	    transform: translate(0px, 0px) rotate(0deg);
	  }
	  2% {
	    transform: translate(2.5px, -0.5px) rotate(1.5deg);
	  }
	  4% {
	    transform: translate(0.5px, 1.5px) rotate(-0.5deg);
	  }
	  6% {
	    transform: translate(-1.5px, -0.5px) rotate(0.5deg);
	  }
	  8% {
	    transform: translate(1.5px, -0.5px) rotate(1.5deg);
	  }
	  10% {
	    transform: translate(-0.5px, 0.5px) rotate(0.5deg);
	  }
	  12% {
	    transform: translate(1.5px, -1.5px) rotate(0.5deg);
	  }
	  14% {
	    transform: translate(1.5px, 2.5px) rotate(1.5deg);
	  }
	  16% {
	    transform: translate(-0.5px, -1.5px) rotate(0.5deg);
	  }
	  18% {
	    transform: translate(-0.5px, 2.5px) rotate(0.5deg);
	  }
	  20% {
	    transform: translate(2.5px, 2.5px) rotate(1.5deg);
	  }
	  22% {
	    transform: translate(1.5px, 1.5px) rotate(0.5deg);
	  }
	  24% {
	    transform: translate(0.5px, 2.5px) rotate(0.5deg);
	  }
	  26% {
	    transform: translate(0.5px, 1.5px) rotate(1.5deg);
	  }
	  28% {
	    transform: translate(1.5px, -1.5px) rotate(-0.5deg);
	  }
	  30% {
	    transform: translate(1.5px, -0.5px) rotate(1.5deg);
	  }
	  32% {
	    transform: translate(-1.5px, -0.5px) rotate(1.5deg);
	  }
	  34% {
	    transform: translate(-1.5px, 0.5px) rotate(0.5deg);
	  }
	  36% {
	    transform: translate(1.5px, -0.5px) rotate(1.5deg);
	  }
	  38% {
	    transform: translate(-1.5px, -0.5px) rotate(-0.5deg);
	  }
	  40% {
	    transform: translate(1.5px, -0.5px) rotate(0.5deg);
	  }
	  42% {
	    transform: translate(2.5px, 0.5px) rotate(-0.5deg);
	  }
	  44% {
	    transform: translate(0.5px, -1.5px) rotate(-0.5deg);
	  }
	  46% {
	    transform: translate(-1.5px, 2.5px) rotate(-0.5deg);
	  }
	  48% {
	    transform: translate(-0.5px, -1.5px) rotate(0.5deg);
	  }
	  50% {
	    transform: translate(0.5px, 1.5px) rotate(-0.5deg);
	  }
	  52% {
	    transform: translate(-1.5px, -1.5px) rotate(0.5deg);
	  }
	  54% {
	    transform: translate(-1.5px, 1.5px) rotate(1.5deg);
	  }
	  56% {
	    transform: translate(-1.5px, 2.5px) rotate(-0.5deg);
	  }
	  58% {
	    transform: translate(2.5px, 1.5px) rotate(-0.5deg);
	  }
	  60% {
	    transform: translate(2.5px, -0.5px) rotate(0.5deg);
	  }
	  62% {
	    transform: translate(-0.5px, -0.5px) rotate(-0.5deg);
	  }
	  64% {
	    transform: translate(-0.5px, -0.5px) rotate(1.5deg);
	  }
	  66% {
	    transform: translate(0.5px, 0.5px) rotate(1.5deg);
	  }
	  68% {
	    transform: translate(-1.5px, -1.5px) rotate(-0.5deg);
	  }
	  70% {
	    transform: translate(0.5px, -0.5px) rotate(1.5deg);
	  }
	  72% {
	    transform: translate(1.5px, 0.5px) rotate(-0.5deg);
	  }
	  74% {
	    transform: translate(1.5px, -1.5px) rotate(0.5deg);
	  }
	  76% {
	    transform: translate(-0.5px, -1.5px) rotate(1.5deg);
	  }
	  78% {
	    transform: translate(1.5px, 0.5px) rotate(1.5deg);
	  }
	  80% {
	    transform: translate(-1.5px, -1.5px) rotate(1.5deg);
	  }
	  82% {
	    transform: translate(0.5px, -0.5px) rotate(0.5deg);
	  }
	  84% {
	    transform: translate(0.5px, 1.5px) rotate(0.5deg);
	  }
	  86% {
	    transform: translate(-0.5px, 2.5px) rotate(0.5deg);
	  }
	  88% {
	    transform: translate(2.5px, 0.5px) rotate(-0.5deg);
	  }
	  90% {
	    transform: translate(1.5px, 0.5px) rotate(-0.5deg);
	  }
	  92% {
	    transform: translate(-0.5px, 1.5px) rotate(-0.5deg);
	  }
	  94% {
	    transform: translate(0.5px, -1.5px) rotate(-0.5deg);
	  }
	  96% {
	    transform: translate(2.5px, 0.5px) rotate(-0.5deg);
	  }
	  98% {
	    transform: translate(-1.5px, 2.5px) rotate(0.5deg);
	  }
	}
	</style>
</head>
<body>
<div class="center">
	<div class="rotate">
		<img width="300px" src="<?php echo asset_url() ?>frontend/metalcangkir-front.png">
	</div>
	<div class="coffee">
		<img width="300px" src="<?php echo asset_url() ?>frontend/metalcangkir.png">
	</div>
	<div class="hexagon">
		<img width="300px" src="<?php echo asset_url() ?>frontend/metalcangkir-front.png">
	</div>
	<a href="<?php echo backend_url()?>">
	<div class="enter">
		<div class="shake-text">
			<div class="shake">ENTER</div>
		</div>
	</div>
	</a>
</div>
</body>
</html>