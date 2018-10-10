<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta name="content-language" content="ja">
<link rel="shortcut icon" href="http://amongchat.com/wp-content/uploads/2018/09/cropped-amongchat1-1.png" />
<link rel="apple-touch-icon" href="http://amongchat.com/wp-content/uploads/2018/09/cropped-amongchat1-1.png" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="content-language" content="ja">
<meta name="robots"  content="index,follow">
<!--meta http-equiv="refresh" content="0;url=http://" /-->
<meta name="keyword" content="">
<meta name="description" content="">
<meta name="author" copyright="" content="">
<meta name="reply-to" content="">
<link rev="made" href="mailto:">
<link rel="next" href="http://">
<link rel="shortcut icon" href="http://amongchat.com/wp-content/uploads/2018/09/cropped-amongchat1-1.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="http://amongchat.com/wp-content/uploads/2018/09/cropped-amongchat1-1.png" />
<style type="text/css">
  h1 { width: 90%; font-size: 20pt; color: black; background-color: #bbbbbb; border: 1px #000000 solid; padding: 20px 15px 15px 15px; filter: alpha(finishOpacity=100, finishX=0, finishY=50, opacity=10, startX=0, startY=0, style=1); }

  h2 { width: 90%; font-size: 17pt; color: black; background-color: #bbbbbb; border: 1px #000000 solid; padding: 18px 15px 12px 15px; filter: alpha(finishOpacity=100, finishX=0, finishY=50, opacity=10, startX=0, startY=0, style=1); }

  h3 { width: 90%; font-size: 14pt; color: black; background-color: #bbbbbb; border: 1px #000000 solid; padding: 15px 15px 10px 15px; filter: alpha(finishOpacity=100, finishX=0, finishY=50, opacity=10, startX=0, startY=0, style=1); }

  h4  { width: 90%; font-size: 12pt; color: black; background-color: #bbbbbb; border: 1px #000000 solid; padding: 15px 15px 10px 15px; filter: alpha(finishOpacity=100, finishX=0, finishY=50, opacity=10, startX=0, startY=0, style=1); }

    table, tr, th, td { border: 1px #b0b0b0 solid; padding: 10px; border-collapse: collapse; }

</style>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script type="text/javascript" src="js/md5-min.js"></script>
<link rel="stylesheet" href="css/colorbox.css" />
<script src="js/colorbox.js"></script>
<script>
	$(document).ready(function(){
	    $(".iframe").colorbox({iframe:true, width:"90%", height:"90%"});
	  });
</script>
<script type="" text="" javascript="">
<!--
function submitAction(url, str) {
	key = document.amachaf1.amachauser.value + document.amachaf1.amachakey.value + document.amachaf1.amachaemail.value + str;
	skey = hex_md5(key);
	$('form').attr('action', url + '/' + skey.substr(0, 5) + '#latest' );
	$('form').submit();
}

function emojistamp(code)
{
  var ktext = document.acpost.kikiin2.value;
  document.acpost.kikiin2.value = ktext + ' ' + '{emoji' + '' + code + '} ';
}
function dispiconstamp(page) {
  var hstr = '';
  element = document.getElementById('iconstamparea');
  if (page == 1) {
    hstr = hstr + "<img src=\"img/s01.png\" onclick=\"emojistamp('s01')\" />";
    hstr = hstr + "<img src=\"img/s02.png\" onclick=\"emojistamp('s02')\" />";
    hstr = hstr + "<img src=\"img/s03.png\" onclick=\"emojistamp('s03')\" />";
    hstr = hstr + "<img src=\"img/s04.png\" onclick=\"emojistamp('s04')\" /><br />";
    hstr = hstr + "<img src=\"img/s05.png\" onclick=\"emojistamp('s05')\" />";
    hstr = hstr + "<img src=\"img/s06.png\" onclick=\"emojistamp('s06')\" />";
    hstr = hstr + "<img src=\"img/s07.png\" onclick=\"emojistamp('s07')\" />";
    hstr = hstr + "<img src=\"img/s08.png\" onclick=\"emojistamp('n08')\" /><br />";
    hstr = hstr + "<img src=\"img/s09.png\" onclick=\"emojistamp('s09')\" />";
    hstr = hstr + "<img src=\"img/s10.png\" onclick=\"emojistamp('s10')\" />";
    hstr = hstr + "<img src=\"img/s11.png\" onclick=\"emojistamp('s11')\" />";
    hstr = hstr + "<img src=\"img/s12.png\" onclick=\"emojistamp('s12')\" /><br />";
    hstr = hstr + "<img src=\"img/s13.png\" onclick=\"emojistamp('s13')\" />";
    hstr = hstr + "<img src=\"img/s14.png\" onclick=\"emojistamp('s14')\" />";
    hstr = hstr + "<img src=\"img/s15.png\" onclick=\"emojistamp('s15')\" />";
    hstr = hstr + "<img src=\"img/s16.png\" onclick=\"emojistamp('s16')\" /><br />";
    hstr = hstr + "\n";
  } else if (page == 2) {
//    hstr = hstr + "<img src=\"img/a01.png\" onclick=\"emojistamp('a01')\" />";
<?php
    echo 'hstr = hstr + "<img src=\"img/a01.png\" onclick=\"emojistamp(' . "'" . 'a01' . "'" . ')\" />"' . "\n";
    foreach(glob('img/tok*.png',GLOB_BRACE) as $file){
      if (is_file($file)){
         $fistr = htmlspecialchars($file);
         preg_match("/tok(.*?)\.png/", $fistr, $ma);
	 //         echo 'hstr = hstr + "<img src=\"img/' . $ma[0] . '\" width="64" height="64" onclick=\"emojistamp(' . "'" . 'tok' . $ma[1]  . "'" . ')\" />"' . "\n";
	          echo 'hstr = hstr + "<img src=\"img/' . $ma[0] . '\" width=\"64\" height=\"64\" onclick=\"emojistamp(' . "'" . 'tok' . $ma[1]  . "'" . ')\" />"' . "\n";
        }
       }
?>
    hstr = hstr + "\n";
  }
  element.innerHTML = hstr;
}

//-->
</script>
<style type="text/css">
<!--
    #largeImg img{
   display: none;
}
    #back-curtain{
    //background: rgba(0, 0, 0, 0.5); //
    background: rgba(0, 0, 0, 0); //
display: none;
position: absolute;
left: 0;
top: 0;
}
-->
</style>
<title>among chat</title>
</head>
<body onload="dispiconstamp(1); ">
<div><!-- main wrapper -->



<?php
//init amacha
ini_set( 'error_reporting', E_ERROR );

//load config file 
require_once('amacha.cfg');

$mkflg = 0;
  $turl = '';
$tua = array();
    $mk = '';
  preg_match("/\/(.*)\/*/", $_SERVER['REQUEST_URI'], $ai);
  if (isset($ai[1])) {
    $turl = $ai[1];
    $tua = explode('/', $turl);
    $mk = $tua[1];
    echo $mk;
  }

      $amachauser = '';
      $amachaemail = '';
  $basedir = '/some/where';
  $mkfile = $basedir . '/mklist.txt';
  if ($mk != '') {
    $fpsm = fopen($mkfile, 'r');
    while( ! feof( $fpsm ) ){
      $l = fgets( $fpsm, 9182);
      $la = explode(',', $l);
      if ($la[1] == $mk) {
	$amachauser = $la[2];
	$amachakey = $la[3];
	$amachaemail = $la[4];
	$mkflg = 0;
	break;
      } else {
	$mkflg = 1;
      }
    } 
  }

    echo $_POST["amachakey"];
  if (isset($_POST["amachakey"]) ) {
    if ($mk == '' || $mk == 'index.php' || $mkflg == 1) {
      $ok = $_POST["amachauser"] . $_POST["amachakey"] . $_POST["amachaemail"] . $amachaseed;      $mk = substr(md5($ok), 0, 5);
      echo "mk4:$mk";
      if ($amachauser == '') {
	$dnd0 = date("Y-m-d G:i:s");
	$fpmk = fopen($mkfile, 'a');
	fwrite($fpmk, $crn . ',' . $mk . ',' . $_POST["amachauser"] . ',' . $_POST["amachakey"] . ',' . $_POST["amachaemail"] . ",$dnd0\n");
	fclose($fpmk);
	$amachauser = $_POST["amachauser"];
	$amachakey = $_POST["amachakey"];
	$amachaemail = $_POST["amachaemail"];
      }
    }
  }

echo '<div>' . "\n";
echo '<form name="amachaf1" method="post" action="/' . $crn . '/' . $mk . '#latest"  style="font-size: 8pt;" >' . "\n";
echo '  &nbsp; key <input type="text" style="font-size: 8pt;" name="amachakey" value="' . $amachakey . '" size="12" />' . "\n";
echo '  &nbsp; &nbsp; |&nbsp; &nbsp; user <input type="text" style="font-size: 8pt;" name="amachauser" value="' . $amachauser . '" size="4" />' . "\n";
echo '  &nbsp; email <input type="text" style="font-size: 8pt;" name="amachaemail" value="' . $amachaemail . '" size="4" />' . "\n";
//echo '  &nbsp; <input type="submit" style="font-size: 8pt;" name="af1sub" value="go" /><br />' . "\n";
echo '  &nbsp; <button type="button" style="font-size: 8pt;" name="af1sub" onclick="submitAction(' . "'/$crn'" . ', ' . "'" .  $amachaseed . "'" . ')">go</button>' . "\n";
echo '</form><!-- end form name amachaf1-->' . "\n";
echo '</div><!-- end amachaf1 div-->' . "\n";


if ( $amachauser != '' && $amachakey != '' && $amachakey == $lbpas  ) { //islogin1
?>










<?php
     echo'<a href="/' . $crn . '/' . $mk. '#latest">reload</a><br />' . "\n";
?>











<?php
    echo '<div class="gallery"><a href="img/qrcodeapi.png"><img src="img/qrcodeapi.png" width="20" /></a></div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Welcome ' . $amachauser . '/'  . substr(md5($amachaemail), 0, 5) . '' . '' . "\n";
?>
<div id="back-curtain"></div>
<div id="largeImg"><img src="img/qrcodeapi.png"></div>
<script type="text/javascript">
 
var img_width;
var img_height;
var img_ratio;
 
// ウィンドウオープン時
jQuery.event.add(window, "load", function(){
    // 元の画像サイズを調べる
    var el = $('#largeImg img');
    var img = new Image();
    img.src = el.attr('src');
    img_width = img.width;          // 幅
    img_height = img.height;        // 高さ
    img_ratio = img_height/img_width;   // 画像の幅高比
  });
 
$('.gallery img').click(function(e) {
    e.preventDefault();         // 規定のイベントを無効（リンク等）
    disp();                 // 拡大画像表示
    $('#largeImg img').fadeIn();        // フェードイン
  });
 
// ウィンドウサイズ変更時
jQuery.event.add(window, "resize", function(){disp();});    // 拡大画像表示
 
// 暗幕と拡大画像を非表示
$('#back-curtain, #largeImg').click(function() {
    $('#largeImg img').fadeOut('slow', function() {$('#back-curtain').hide();});
  });

 
// 拡大画像表示サブルーチン
function disp(){
  //  console.log($('#largeImg'));
  $('#back-curtain')
    .css({
	'width' : $(window).width(),    // ウィンドウ幅
	  'height': $(window).height()    // 同 高さ
	  })
    .show();
 
  var win_ratio = $(window).height() / $(window).width(); // ウィンドウの幅高比
  var w;  var h;      // 幅、高さ
  const margin=50;    // 上下左右の最低マージン
 
  if(img_ratio > win_ratio ){      // 画像の方がウィンドウより縦長
    h = $(window).height()-2*margin; // 画像の高さ　ウィンドウに合わせる
    if( h < $(window).height() ) h=$(window).height()-2*margin;
    w=h/img_ratio;
  }else{                  //  ウィンドウの方が縦長
    w=$(window).width()-2*margin;   // 画像幅　元の画像に合わせる
    if( w < $(window).width() ) w=$(window).width()-2*margin;
    h=w * img_ratio;
  }
 
  $('#largeImg img').css({
      'position': 'absolute',
        'left': ($(window).width()-w)/2+'px',
        'top' : ($(window).height()-h)/2+'px',
        'width' :w+'px',
        'height':h+'px'
	});
     
}
</script>

<h1>amongchat</h1>
<br />

<?php
   $cwd = getcwd();
   $dpaa = array();
   $dpaa = explode('/', $cwd);
   $dir = $dpaa[count($dpaa)-1];
   $file = 'file1.txt';
//   print('<a href="http://rck.jp/kiki/' . $dir . '">http://rck.jp/kiki/' . $dir . '</a><br />' . "\n");
?>
<div>
<?php
   $cwd2 = getcwd();
   $dpaa2 = array();
   $dpaa2 = explode('/', $cwd2);
   $dir2 = $dpaa2[count($dpaa2)-1];
?>
<?php
     $dnd2 = date("Y/m/d G:i:s");
?>
<?php
   $masf = 0;
   $strl2 = '';
   $file2 = 'file2.txt';
   if (isset($_POST['kikiin2']) && $_POST['kikiin2'] != '' ) {
     $fpa2 = fopen($file2, 'a');
     $nl2 = mb_ereg_replace("\n", "__", $_POST['kikiin2']);
     if (mb_ereg_match("ーqー", $nl2)) {
       $nl2 = mb_ereg_replace("ーqー", "", $nl2);
       $masf = 1;
     }
     $nd2 = date("G:i:s(d)");
     if ($masf == 1) {
       fwrite($fpa2, "<span style=\"background-color: #ddffef; \"><b>" . $nl2 . "</b></span>");
       fwrite($fpa2, '[' . $amachauser . '(' . substr(md5($amachaemail) ,0, 5) . ')]' . "," . $nd2 . "\n");
     } else {
       fwrite($fpa2, $nl2 );
       fwrite($fpa2,  '[' . $amachauser . '(' . substr(md5($amachaemail) ,0, 5) .  ')]' . "," . $nd2 . "\n");
     }
     fclose($fpa2);
   }
   if (isset($_POST['kikiedendsub2']) ) {
     $fpw2 = fopen($file2, 'w');
     fwrite($fpw2, $_POST['kikiint2']);
     fclose($fpw2);
   }
   if (isset($_POST['kikiedsub2']) ) {
     $fped2 = fopen($file2, 'r');
     while( ! feof( $fped2 ) ){
       $l2 = fgets( $fped2, 9182);
       $l2 = str_replace(array("\r\n", "\r", "\n", ), '', $l2);
       $l2 = str_replace('{emojis01}', '<img src="img/s01.png" />', $l2);
       $l2 = str_replace('{emojis02}', '<img src="img/s02.png" />', $l2);
       $l2 = str_replace('{emojis03}', '<img src="img/s03.png" />', $l2);
       $l2 = str_replace('{emojis04}', '<img src="img/s04.png" />', $l2);
       $l2 = str_replace('{emojis05}', '<img src="img/s05.png" />', $l2);
       $l2 = str_replace('{emojis06}', '<img src="img/s06.png" />', $l2);
       $l2 = str_replace('{emojis07}', '<img src="img/s07.png" />', $l2);
       $l2 = str_replace('{emojis08}', '<img src="img/s08.png" />', $l2);
       $l2 = str_replace('{emojis09}', '<img src="img/s09.png" />', $l2);
       $l2 = str_replace('{emojis10}', '<img src="img/s10.png" />', $l2);
       $l2 = str_replace('{emojis11}', '<img src="img/s11.png" />', $l2);
       $l2 = str_replace('{emojis12}', '<img src="img/s12.png" />', $l2);
       $l2 = str_replace('{emojis13}', '<img src="img/s13.png" />', $l2);
       $l2 = str_replace('{emojis14}', '<img src="img/s14.png" />', $l2);
       $l2 = str_replace('{emojis15}', '<img src="img/s15.png" />', $l2);
       $l2 = str_replace('{emojis16}', '<img src="img/s16.png" />', $l2);
       $l2 = str_replace('{emojia01}', '<img src="img/a01.png" />', $l2);
       foreach(glob('img/tok*.png',GLOB_BRACE) as $file){
         if (is_file($file)){
           $fistr = htmlspecialchars($file);
           preg_match("/tok(.*?)\.png/", $fistr, $ma);
           $l2 = str_replace('{emojitok' . $ma[1] . '}', '<img src="img/' . $ma[0] . '" width="200" />', $l2);
        }
       }
       if ($l2 != '') {
         $strl2 .= $l2 . "\n";
       }
     }
     print('' . "\n");
     print('<form method="post" name="kikif2" action="/' . $crn . '/' . $mk . '#latest" >' . "\n");
  if (isset($_POST["amachakey"])) {
    echo '<input type="hidden" name="amachakey" value="' . $_POST['amachakey'] . '" />';
  } else { // else if or _POST
    echo '<input type="text" name="amachakey" />';
  } // end if _POST
  if (isset($_POST["amachauser"])) {
    echo '<input type="hidden" name="amachauser" value="' . $_POST['amachauser'] . '" />';
  } else { // else if or _POST
    echo '<input type="text" name="amachauser" />';
  } // end if _POST
  if (isset($_POST["amachaemail"])) {
    echo '<input type="hidden" name="amachaemail" value="' . $_POST['amachaemail'] . '" />';
  } else { // else if  _POST
    echo '<input type="text" name="amachaemail" />';
  } // end if  _POST
     print('  <textarea name="kikiint2" id="kikiintf2texta" rows="10" cols="40">');
     print($strl2);
     print('</textarea><br />' . "\n");
     print('  <input type="submit" name="kikiedendsub2" id="kikiedendsubf2" value="edit end" />' . "\n");
     print('</form>' . "\n");
     print("\n");
     fclose($fped2);
   } else {
     $fp12 = fopen($file2, 'r');
     while( ! feof( $fp12 ) ){
       $l2 .= fgets( $fp12, 9182);
       $l2 = str_replace('{emojis01}', '<img src="img/s01.png" />', $l2);
       $l2 = str_replace('{emojis02}', '<img src="img/s02.png" />', $l2);
       $l2 = str_replace('{emojis03}', '<img src="img/s03.png" />', $l2);
       $l2 = str_replace('{emojis04}', '<img src="img/s04.png" />', $l2);
       $l2 = str_replace('{emojis05}', '<img src="img/s05.png" />', $l2);
       $l2 = str_replace('{emojis06}', '<img src="img/s06.png" />', $l2);
       $l2 = str_replace('{emojis07}', '<img src="img/s07.png" />', $l2);
       $l2 = str_replace('{emojis08}', '<img src="img/s08.png" />', $l2);
       $l2 = str_replace('{emojis09}', '<img src="img/s09.png" />', $l2);
       $l2 = str_replace('{emojis10}', '<img src="img/s10.png" />', $l2);
       $l2 = str_replace('{emojis11}', '<img src="img/s11.png" />', $l2);
       $l2 = str_replace('{emojis12}', '<img src="img/s12.png" />', $l2);
       $l2 = str_replace('{emojis13}', '<img src="img/s13.png" />', $l2);
       $l2 = str_replace('{emojis14}', '<img src="img/s14.png" />', $l2);
       $l2 = str_replace('{emojis15}', '<img src="img/s15.png" />', $l2);
       $l2 = str_replace('{emojis16}', '<img src="img/s16.png" />', $l2);
       $l2 = str_replace('{emojia01}', '<img src="img/a01.png" />', $l2);
       foreach(glob('img/tok*.png',GLOB_BRACE) as $file){
         if (is_file($file)){
           $fistr = htmlspecialchars($file);
           preg_match("/tok(.*?)\.png/", $fistr, $ma);
           $l2 = str_replace('{emojitok' . $ma[1] . '}', '<img src="img/' . $ma[0] . '"  width="200" />', $l2);
        }
       }
     }
     fclose($fp12);
   }
?>
<?php
$a2 = array();
$la2 = array();
$ta2 = array();
$la2 = explode("\n", $l2);
//$a2 = array_reverse($la2);
$a2 = $la2;
$dnum2 = 18;
$pnum2 = count($a2);
$inum2 = 0;
if ($pnum2 > $dnum2) {
  $inum2 = $pnum2 - $dnum2;
}


print("<table style=\"text-align: left; border: none;  \">\n");
for ($ca2 = $inum2; $ca2 < $pnum2; $ca2++) {
  $ta2 = explode(",", $a2[$ca2]);
  if ($ta2[1] != '') {
    if ($ca2 == $pnum2-3) {
      print("<tr style=\" border: none; \"><td style=\"text-align: left; width: 750px; border: none; \"><a name=\"latest\">" . $ta2[0] . "<span style=\"font-size: 8pt; \">    -    " . $ta2[1] . "</span></a></td></tr>\n");
    } else {
      print("<tr style=\" border: none; \"><td style=\"text-align: left; width: 750px; border: none; \">" . $ta2[0] . "<span style=\"font-size: 8pt; \">    -    " . $ta2[1] . "</span></td></tr>\n");
    }
  }
}
print("</table>\n");

?>
<form method="post" action="<?php echo '/' . $crn . '/' . $mk; ?>#latest" name="acpost">
<a name="emoji">--</a><br />
  <textarea name="kikiin2" id="kikiinf2" cols="26" rows="3" ></textarea><!--input type="checkbox" name="kikicheck21" id="kikicheckf21" value="1" /--><input type="submit" name="kikisub2" id="kikisubf2" value="post" />
<?php
     echo'<a href="/' . $crn . '/' . $mk. '#latest">reload</a><br />' . "\n";
?>
</form>
		     <br /><!--(with check no email | <br /> &nbsp; &nbsp; チェック＞管理者にメールがいきません)<br /-->
</div><!-- end bbs -->
Stamp <a class='iframe' href="amachaie.php">吹き出し機能</a>　<a class='iframe' href="amachadi.php">画像取得機能</a><br />
<div id="floatwrap" style="width: 400px; ">
<div style="float: left; width: 20px;">
  <img src="img/la.png" onclick="dispiconstamp(1); " />
</div>
<div id="iconstamparea" style="float: left; width: 280px;">
</div>
<div style="float: left; width: 20px;">
  <img src="img/ra.png" onclick="dispiconstamp(2); " />
</div>
<div style="clear: both;"></div>
</div><!--float wrap-->


<br />
<br />
<br />
   <h2>you can invite your friend, share this! </h2><br />
<pre>
New chat room among us! | チャットルームを作ったよ！
URL: <a href="http://amongchat.com/<?php echo '/' . $crn; ?>">http://amongchat.com/<?php echo '/' . $crn; ?></a>
username: (any)
key: <?php echo $amachakey; ?>

</pre>


<h3>Notice</h3>
You can auto-login next time just access this URL | 次からはこのURLにアクセスするだけで、自動ログインできます<br />
Please bookmark this URL | このURLをぜひ、ブックマークしてください<br />
<!--form method="post" action="<?php echo '/' . $crn . '/' . $mk; ?>" >
  <input type="text" name="kikiin" id="kikiinf" value="" />
  <input type="submit" name="kikisub" id="kikisubf" value="add" />
</form-->


<div style="text-align: left; height: 200px;">
</div>


<hr />
<hr />

supports are welcome --> <a href="http://amongchat.com/posts">See Blog</a>.<br />
|協力依頼について<br />
サポート、協力、資金提供などなんでもいいです、協力歓迎します。 --> <a href="http://amongchat.com/posts">たぶん、ブログに書いていきます</a>。または、直接、<a href="http://amongchat.com/s/contactc">#contactchat</a> か contact@amongchat.com まで！<br />
<br />
<br />

</div><!-- main wrapper -->


<a href="http://amongchat.com">amongchat.com</a><br />










<?php
    echo 'string after http://amongchat.com/' . $crn . '/ is your key. please make memo of your amongchat key or bookmark this URL:<a href="http://amongchat.com/' . $crn . '/' . $mk . '">http://amongchat.com/' . $crn . '/' . $mk . '</a><br />' . "\n";
  } else { //islogin1
//     echo "not login 1<br />\n";
     echo "You can enter chat input (1)'key' (2)user(any) (3)email | 別で手に入れたkeyと、user(任意)、emailを入力すると、チャットに入れます<br />\n";
  } //islogin1
//islogin
?>



</body>
</html>
