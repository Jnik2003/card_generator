<?php
// Будем генерировать изображение визитки


// -------------Вывод из csv файла 
$imagePath = __DIR__.'./images/blank.png';
$fontPath = __DIR__.'./9605.ttf';
$imgCatPath = __DIR__.'./cat.png';
$arr = [];


if(($file = fopen('files/base.csv', 'r')) !== false){
	while(($data = fgetcsv($file, 1000, ";")) !== false){	

		$arr[] = $data;		
	}	
	fclose($file);	
}


for($i = 0; $i <count($arr); $i++){
	
	
	$image = imagecreatefrompng($imagePath);

	$color = imagecolorallocate($image, 90, 130, 30);

	$text = $arr[$i][0];
	imagettftext($image, 50, 0, 500, 250, $color, $fontPath, $text);

	$text = $arr[$i][1];
	imagettftext($image, 50, 0, 500, 350, $color, $fontPath, $text);

	$cat = imagecreatefrompng($imgCatPath);
	imagecopy($image, $cat, 30, 50, 0, 0, 512, 512);

	imagepng($image, __DIR__.'./res/result'.$i.'.png');
	imagedestroy($image);
	imagedestroy($cat);

	

	echo "
		<div class = 'visit'>
		<img src = ./res/result$i.png>
		</div>";

}


	


?>