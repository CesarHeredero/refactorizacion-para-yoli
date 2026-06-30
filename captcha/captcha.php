<?php
/*
session_start();
function randomText($length) {
    $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
    for($i=0;$i<$length;$i++) {
      $key .= $pattern{rand(0,35)};
    }
    return $key;
}

$_SESSION['tmptxt'] = randomText(8);
$captcha = imagecreatefromgif("bgcaptcha.gif");
$colText = imagecolorallocate($captcha, 60, 0, 0);
imagestring($captcha, 5, 16, 7, $_SESSION['tmptxt'], $colText);

header("Content-type: image/gif");
imagegif($captcha);
*/

?>
<?php
	
session_start();

function getRandomWord($len = 5) {
    $word = array_merge(range('0', '9'), range('a', 'z'));
    shuffle($word);
    return substr(implode($word), 0, $len);
}

$ranStr = getRandomWord();
$_SESSION['tmptxt'] = $ranStr;


$height = 35; //CAPTCHA image height
$width = 120; //CAPTCHA image width
$font_size = 24; 

$image_p = imagecreate($width, $height);
$graybg = imagecolorallocate($image_p, 255, 255, 255);
$textcolor = imagecolorallocate($image_p, 0, 0, 0);

imagefttext($image_p, $font_size, -2, 15, 26, $textcolor, 'fonts/arial.ttf', $ranStr);
//imagestring($image_p, $font_size, 5, 3, $ranStr, $textcolor);
//imagepng($image_p);
header("Content-type: image/gif");
imagegif($image_p);
	
?>
