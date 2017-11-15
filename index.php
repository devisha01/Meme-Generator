<?php

if(isset($_GET["n"])){
      $n = $_GET["n"];

header("Content-type: image/png");
    $imgPath = 'inputImage.png';
    $image = imagecreatefrompng($imgPath);
    $color = imagecolorallocate($image, 255, 30, 50);
    
    $fontSize = 26;
    $x = 230;
    $y = 430;
    imagestring($image, $fontSize, $x, $y, $n, $color);
    imagepng($image);
    imagedestroy($image);
}

else{
	echo "WELCOME TO MEME GENERATOR  "."<br>";
echo "<br>"."Enter a text in the url in format (?n=text)";
    }

?>