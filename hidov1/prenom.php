<?php
  $servername = "207.180.240.117";
  $username = "hidoyatmz";
  $password = "2DKbR3h7tpT3";

  try {
      $bdd = new PDO("mysql:host=$servername;dbname=hidoyat", $username, $password);
      // set the PDO error mode to exception
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
      }
  catch(PDOException $e)
      {
      echo "Connection failed: " . $e->getMessage();
      }
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Prenoms match</title>
	<style>
	* {
		padding: 0;
		margin: 0;
	}

	body {
		background: rgb(94, 154, 249);
	}

	input, button {
		width: 250px;
		margin-top: 20px;
	}

	input {
		padding: 5px 15px;
		background: none;
		border: none;
		outline: none;
		border-bottom: 2px solid rgb(186, 28, 255);
	}

	button {
		padding: 10px 25px;
		background: rgba(204, 95, 252, 0.5);
		outline: none;
		border: 2px solid rgb(186, 28, 255);
		cursor: pointer;
		border-radius: 6px;
	}

	.formmatch {
		margin-top: 150px;
		padding: 10px 25px;
	}

	.names {
		margin-top: 15px;
	}

	.jauge {
		width: 300px;
	}

	.jauge text {
		text-anchor: middle;
		font-weight: 400;
		font-size: 75%;
	}
	</style>
</head>
<body>
	<center>
	<section class="formmatch">
		<div>
			<input id="name1" type="text" name="name1" onkeyup="showMsg()" placeholder="Prénom 1">
		</div>
		<div>
			<input id="name2" type="text" name="name2" onkeyup="showMsg()" placeholder="Prénom 2">
		</div>
		<div>
		</div>
		<div>
			<button id="match" onclick="match()">Match !</button>
		</div>
		<h1 id="h1name1" class="names">Prenoms : <span id="sname1"></span> & <span id="sname2"></span></h1>
		<h1 id="matchpercent">Match:</h1>
		<svg viewBox="0 0 80 40" class="jauge">
			<circle class="donut-ring" cx="40" cy="40" r="31.8309886184" fill="transparent" stroke="#d2d3d4" stroke-width="15"></circle>
			<circle id="jaugelength" class="donut-segment" cx="40" cy="40" r="31.8309886184" fill="transparent" stroke="#b3ffab" stroke-width="15" stroke-dasharray="0 115" stroke-dashoffset="-100">
				<animate attributeType='XML' attributeName='stroke-dashoffset' values='0; 0; -33; -100; -100;' keyTimes='0; 0.4; 0.6; 0.7; 1' dur='2.5s' repeatCount='1'>
			</circle>
			<text id="jaugetext" x="40" y="39.5" class="gauge-text">0%</text>
		</svg>
	</section>
	<div class="footer">
	<h3>Made with 💖 by Mehdi Zaidi</h3>
	</div>
	</center>
	<script type="text/javascript">
			var name1 = document.getElementById("name1").value;
			var name1 = name1.toUpperCase();
			document.getElementById('sname1').innerHTML = name1;

			var name2 = document.getElementById("name2").value;
			var name2 = name2.toUpperCase();
			document.getElementById('sname2').innerHTML = name2;

		function showMsg(){
			var name1 = document.getElementById("name1").value;
			var name1 = name1.toUpperCase();
			document.getElementById('sname1').innerHTML = name1;

			var name2 = document.getElementById("name2").value;
			var name2 = name2.toUpperCase();
			document.getElementById('sname2').innerHTML = name2;
		}

		function match(){
			console.clear();
			var jaugelength = document.getElementById("jaugelength");
			var jaugetext = document.getElementById("jaugetext")

			var name1 = document.getElementById("name1").value;
			var name1 = name1.toUpperCase();

			var name2 = document.getElementById("name2").value;
			var name2 = name2.toUpperCase();

			var percentlength = name1.length + name2.length;
			var percent = (percentlength/3)*10;

			for (let i = 0; i < 20; i++) {
				if(name1[i] == null || name2[i] == null) {
					console.log("THIS i IS NULL");
				}
				else {
					console.log(name1[i]);
					console.log(name2[i]);
				}

				if(name1[i] == name2[i]) {
					if(name1[i] ==  null){
						console.log("NON !")
					}
					else {
						console.log("OUI !");
						var percent = percent + 10;
					}
				}
				else {
					console.log("NON !");
				}

				if(name1[i] != null || name2[i] != null) {
					if(name1.includes(name2[i])) {
						var percent = percent + 5;
					}	
				}
			}

			var percent = Math.ceil(percent);

			if(percent >= 100) {
				var percent = "100";
			}

			if(name1.length <= 2 || name2.length <= 2) {
				var percent = "0";
			}

			if(name1 === "" || name2 === "") {
				jaugelength.style.strokeDasharray = "0 115";
				jaugetext.innerHTML = "0%";
			}
			else {
				jaugelength.style.strokeDasharray = percent + " 115";
				jaugetext.innerHTML = percent + "%";
			}
		}
	</script>
</body>