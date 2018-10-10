<?php
//62
//       0123456789012345678921234567893123456789412345678951234567896123456789
$seed = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$rnda = array();
$imax = 8;
$rs = '';
for ($i = 0; $i < $imax; $i++) {
  $rs = $rs . substr($seed, mt_rand(0,61), 1);
}
  //http://babystamp.jp/public/assets/img/sp/sp_mainvisual2.png
  //https://img0.etsystatic.com/232/0/7763973/il_570xN.1619599062_ikhc.jpg 570x604
//$imgadr = 'https://img0.etsystatic.com/232/0/7763973/il_570xN.1619599062_ikhc.jpg';
 $imgadr = 'http://babystamp.jp/public/assets/img/sp/sp_mainvisual2.png';
if (isset($_POST['imgadr']) ) {
  $imgadr = $_POST['imgadr'];
  $imgid = $_POST['imgid'];
  //  echo "imgadr:$imgadr\n";
  exec('/usr/bin/wget --no-check-certificate -q -O img/tok' . 'tmp' . $imgid . ' ' . $imgadr . ' ');
       $a = exec('/usr/bin/identify ' . 'img/tok' . 'tmp' . $imgid);
       $aa = array();
       $aa = explode(' ', $a);
       exec('/usr/bin/convert -resize 200x ' . $aa[1] . ':img/tok' . 'tmp' . $imgid . ' img/tok'  . $imgid . '.png');
       echo 'http://amongchat.com/amacha8/img/tok' . $imgid . '.png' . "\n";
       exec('/bin/rm img/tok' . 'tmp' . $imgid . ' ');
}
?>
