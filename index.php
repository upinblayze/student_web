<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="frontstyle.css">
	</head>
	<body>
		<h1>
			KELLEN CHENG'S FRONTPAGE
		</h1>
			<img src="Bar_RtAngle_RGB.png" width="200" height="7">
		<h2>
			"I am the stone that the buider refused" -Asheru
		</h2>	
			<?php
				$dir='fpSections';
				$redirect=$_GET["page"];
				if($redirect===null){
					$redirect="About";
				}
				$files=scandir($dir);
				$file=fopen("fpSections/".$redirect.".txt","r");
			?>
			<div class="section">
				<div class="SecTitle">
				<?php
					print fgets($file);
				?>
				</div>
			
		<?php
				while(!feof($file)){
					print fgets($file)."<br>";
				}
				fclose($file);
		?>

			</div>

			<div id="links">
			<ul>
				<?php
					for($i=2;$i<count($files);$i++){
						$f=explode(".",$files[$i]);
						?>
						<a href="index.php?page=<?=$f[0]?>"><li><?=$f[0]?></li></a>
						<?php
					}
				?>
			</ul>
			<div id="design">
				Styles abide by <a href="UW-BRANDSTYLEGUIDE_092514.pdf">UW Brand Guide</a> specification.
			<img src="Signature_Left_Purple_Hex.png" width="500" height="40">
		</div>
		</div>

		
	</body>
</html>
<?php

?>