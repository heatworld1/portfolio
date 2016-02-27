<html>
	<head>
		<title>Project 4 Starter Kit:Cowpies 1</title>
	</head>
	<body>
		<form method='post' action='cow1.php'>
		<?php
		// Cowpie: Project 4 Starter Kit: DIG 3134 - Fall 2011
		// Moshell

		$Testnumber = 2;

		function logprint($what,$when){
			global $Testnumber;
			if ($when==$Testnumber)
				print "LP:$what <br />";
		}

		// The object of this game is to toss a cowpie (by specifying angle and velocity)
		// So as to come close to an intended target.
		// Angle in degrees 1 to 89; velocity in meters/sec, 1 to 100.

		function drawtrajectory($image, $angle,$velocity,$color){
			global $Imagewidth, $Imageheight;
			$vmax=500;
			if (!$velocity) 
				$velocity=0; // so we can see a zero in the error message
			if (!$angle) 
				$angle=0;		// ditto.
			
			if ($angle<1 || $angle>89){
				print "<h2>Angle $angle won't work for this simulation.</h2>";
				return;
			}
			else if ($velocity<1 || $velocity>$vmax){
				print "<h2>velocity $velocity won't work for this simulation.</h2>";
				return;
			}
			
			$colorGrey=imagecolorallocate($image, 100, 100, 100);
			$colorLightGreen=imagecolorallocate($image, 150, 255, 150);
			$colorBlue=imagecolorallocate($image, 0, 0, 255);
			$colorGold=imagecolorallocate($image, 200, 200, 50);
				
			$fontpath=$Corepath."/fonts";
			$font="$fontpath/Arial.ttf";
			
			$graphwidth=$Imagewidth;
			$Imageheight=$Imageheight;
			
			$xspace=25; // for the grid lines
			$yspace=25;
			
			imagesetthickness($image, 3);

		   //imageline($image, x1, 			y1, 		x2, 			y2, 		  	$colorGrey);
			imageline($image, 1, 			1, 			1, 				$Imageheight, 	$colorGrey); 
			imageline($image, 1, 		$Imageheight, 	$Imagewidth, 	$Imageheight, 	$colorGrey); 
			imageline($image, $Imagewidth,$Imageheight,  $Imagewidth,	1, 				$colorGrey); 
			imageline($image, $Imagewidth, 	  1,		1,				1,			 	$colorGrey);

			imagesetthickness($image, 1);

			// Create grid: ///////////////////
			// vertical lines: constant x
			
			$vlinecount=($graphwidth/$xspace)+1;
			for ($i=0; $i<$vlinecount-1; $i++){
				imageline($image, $i*$xspace+$leftmargin, 0, 
					$i*$xspace+$leftmargin, $Imageheight, $colorGold);
			} # for
				
			///////////////////////////////////
			// horizontal lines: constant y
			
			$hlinecount=($Imageheight/$yspace)+1;
			for ($i=0; $i<=$hlinecount-2; $i++){
				$y=$i*$yspace+$topmargin;
				imageline($image, $leftmargin, $y, $leftmargin+$graphwidth, $y, $colorGold);	
			}
			
			// Now a horizon...
			imagesetthickness($image, 50);	
			imageline($image, 3, 575, 	$graphwidth-2, 575, 	$colorLightGreen); 
			imagesetthickness($image, 2);	
			
			//// AND NOW FOR THE MECHANICS OF IT
			// x ranges from 0 to 800, and y ranges from 0 to 600. We create y=yup-600 so
			// as to have an (x,yup) coordinate axis in lower left corner of the screen.
			// 
			$oldx=$x=0; 
			$oldyup=$yup=50; // let's make our "ground" at 50 units up from bottom of screen.

			// NOW to get the x and y components of the velocity:
			$radians=$angle*pi()/180; // so 90 degrees is pi/2
			$xvel=$velocity*cos($radians);
			$yvel=$velocity*sin($radians);
					
			logprint("xv=$xvel,yvel=$yvel",1);
							
			$yacceleration=-5; // meters per second per second, acceleration downward
								// Real world is -9.8, but this is MY world and I like -5.
								
			while ($x<$graphwidth && $yup>=0){
				$y=$Imageheight-$yup;
				$oldy=$Imageheight-$oldyup;
				
				imageline($image, $oldx, $oldy, $x, $y, $color); 

				$oldx=$x;
				$oldyup=$yup;
				
				$yvel=$yvel+$yacceleration;
				
				$yup+=$yvel;
				$x+=$xvel;
			}
			// Now we want to put a SPLAT at the end. For now we just use a big X.
				$font='Arial';
					$fontpath="fonts";
					$font="$fontpath/Arial.ttf";

				$y=$Imageheight-$oldyup;
				$charwidth=25; // char is about ten pixels wide
				$x=$oldx-$charwidth/2;
				
				logprint("text x=$x,y=$y,font=$font",1);
				
				// Print twice, offset, to achieve Bold effect
				imagettftext ($image , 24 , 0 , $x, $y, $colorGrey , $font , 'X');
				imagettftext ($image , 24 , 0 , $x+2, $y, $colorGrey , $font , 'X');

				return $image;
			
		} #drawtrajectory

		#drawinputs:
		function drawinputs(){
			// Let's get some input, too
			print "<br />
				<input type='text' size=2 name='angle'>Angle, 1 to 89 degrees <br />
				<input type='text' size=2 name='velocity'>Velocity, 1 to 500 meters/sec <br />
				<input type='submit' name='action' value='Launch Cowpie!'>";
				
		} # drawinputs

		///////// MAIN //////////////

		// FIRST we gotta prepare the Image
		// Basic shape of the graph:
			$Imagewidth=800;
			$Imageheight=600;

			$image=imagecreate($Imagewidth+5, $Imageheight+5);
			// we allow 5 extra pixels on bottom and right, to show border cleanly
			
			// The FIRST image color that you allocate will be the background.

			$colorWhite=imagecolorallocate($image, 255, 255, 255);

			$colorGreen=imagecolorallocate($image, 0, 200, 0);
			$colorBlack=imagecolorallocate($image, 0, 0, 0);
			
		// NOW we can do things with it

			$angle=$_POST['angle'];
			$velocity=$_POST['velocity'];
			logprint("a=$angle,v=$velocity",1);
			
			$image=drawtrajectory($image,$angle,$velocity,$colorGreen);
			imagepng($image,'graphout.png');
			imagedestroy($image);
			
			print '<img src="graphout.png?lastmod=1" >';

			drawinputs();
		?>
		</form>
	</body>
</html>