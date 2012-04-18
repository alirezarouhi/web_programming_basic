<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nixy Banner</title>
<link type="text/css" rel="stylesheet" href="banner.css" />
<script type="text/javascript" src="banner.js" ></script>
</head>
<body>
<div class="container">
	<div class="banner">
    	<div class="scroll">
			<?php
				$d=dir("./images");
				count=0;
				while($s=$d->read()){	//ta zamani k meqdari dar file bashe bekhoon
					if (substr($s,-4!=.jpg)) continue;
					echo $d->read(),"<br />"	//ax ra chap mikonad 
					count++;
				
				
				}
			?>
			/* (inam code khoobie.harki neveshte dastesh dard nakone)
			$dir = './images';
			$allowed_type = array('jpg','jpeg','png','gif');

			$d = dir($dir);
			while( $f = $d->read() ){
				$ftype = end(explode('.', $f));
				if( !in_array( strtolower($ftype),$allowed_type) ) continue;
				echo "<img src='$dir/$f' />";
			
			}
			*/
        </div>
        <ul class="btn">
        	<?php
			for($i=0;$i<=count;count++){
				echo "<li></li>"
				
			}
		?>
        </ul>
        
    </div>
    <input type="button" value="back" onclick="prvSlide()" />
    <input type="button" value="next" onclick="nextSlide()" />
</div>
</body>
</html>
