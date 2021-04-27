<?php

use Endroid\QrCode\QrCode;

//studenten kaart generate
function Generate($anaam, $vnaam, $datum, $email,$imgname)
{
  
  $image = imagecreate(500, 200);
  $background_color = imagecolorallocate($image, 255, 253, 208);
  $text_color = imagecolorallocate($image, 0, 0, 0);
  $image2 = imagecreatefrompng("../../uploads/qrcodes/" . $imgname . ".png");
  $image3 = imagecreatefrompng("../../uploads/studentenkaart/natin4.png");
  imagestring($image, 10, 200, 10, "NATIN-MBO", $text_color);
  imagestring($image, 5, 13, 80, "Naam: $vnaam $anaam", $text_color);
  imagestring($image, 5, 13, 100, "Leeftijd: $datum", $text_color);
  imagestring($image, 5, 13, 120, "Email: $email", $text_color);
  imagecopymerge($image, $image3, 0, 0, 0, 0, 75,75, 100);
  imagecopymerge($image, $image2, 360, 40, 0, 0, 120, 120, 100);

  $name = $vnaam . "_" . $anaam . "_" . rand(1000, 1000000);
  $save = "../../uploads/studentenkaart/" . $name . ".png";
  
  if (imagepng($image, $save)) {
    if (unlink("../../uploads/qrcodes/" . $imgname . ".png")) {
      return $name;
    } else {
      echo 'ImageError';
    }
  } else {
    return 'errorImageGeneration';
  }
}

// qr code generate
function generateQrcode($anaam, $vnaam, $email)
{
  $qrCode = new QrCode("|$email|");
  $qrCode->setSize(100);
  $qrCode->setMargin(10);
  $qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0.9]);
  $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);
  $qrCode->setRoundBlockSize(true, QrCode::ROUND_BLOCK_SIZE_MODE_ENLARGE);
  $name = $anaam . "_" . $vnaam . "_" . rand(1000, 1000000);
  $qrCode->writeFile("../../uploads/qrcodes/" . $name . ".png");
  return $name;
}
