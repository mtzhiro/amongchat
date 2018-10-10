<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
</head>
<body>
ダウンロードしたい画像のURLを入れます。<br />
   (画像をアップロードすることもできます)<br />
<script>
   var canvas = document.getElementById("cv1");
var ctx = canvas.getContext("2d");

      var img = new Image();
      img.src = "/image/ietest.png";
      img.onload = function() {
      ctx.drawImage(img, 0, 0);
      }

//マウスを操作する
var mouse = {x:0,y:0,x1:0,y1:0,color:"black"};
var draw = false;

//マウスの座標を取得する
canvas.addEventListener("mousemove",function(e) {
    var rect = e.target.getBoundingClientRect();
    ctx.lineWidth = 1; // document.getElementById("lineWidth").value;
    ctx.globalAlpha = 100; //document.getElementById("alpha").value/100;

    mouseX = e.clientX - rect.left;
    mouseY = e.clientY - rect.top;


    //クリック状態なら描画をする
    if(draw === true) {
      //      ctx.beginPath();
      //      ctx.moveTo(mouseX1,mouseY1);
      //      ctx.lineTo(mouseX,mouseY);
      //      ctx.lineCap = "round";
      //      ctx.stroke();
      mouseX1 = mouseX;
      mouseY1 = mouseY;
    }
  });

//クリックしたら描画をOKの状態にする
canvas.addEventListener("mousedown",function(e) {
    draw = true;
    mouseX1 = mouseX;
    mouseY1 = mouseY;
    undoImage = ctx.getImageData(0, 0,canvas.width,canvas.height);
  });

//クリックを離したら、描画を終了する
canvas.addEventListener("mouseup", function(e){
    draw = false;
      ctx.beginPath();
      ctx.arc(mouseX1, mouseY1, 6, 0, Math.PI*2, false);
      ctx.stroke();
  });


function drawagain()
{
var canvas = document.getElementById("cv1");
var ctx = canvas.getContext("2d");

      var img = new Image();
      img.src = "img/tokimggJTWOC7n.png";
      img.onload = function() {
      ctx.drawImage(img, 0, 0);
      }
}
function chgCol()
{
      ttext = document.getElementById('ttext').value;

	ctx.drawImage(img, 0, 0);
	ctx.font = "20px sans-serif";
	ctx.fillText(ttext, mouseX1, mouseY1);
}

function chgImg()
{
  len = 8;
  str = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
  strLen = str.length;
  tiid = '';
  for (var i = 0; i < len; i++) {
    tiid += str[Math.floor(Math.random() * strLen)];
  }
  iastr = document.amadif.imgadr.value;
  $.post("amachadg.php",{"imgadr":iastr, "imgid":tiid},function(data){
      document.amadif2.imid.value = tiid;
  },"html");
}

function clsFrm()
{
     ttiid = document.amadif2.imid.value;
     var ktext = parent.acpost.kikiin2.value;
      parent.acpost.kikiin2.value = ktext + ' ' + '{emojitok' + ttiid + '}';
      parent.jQuery.colorbox.close();
}


</script>

<form name="amadif" method="post" action="amachadi.php" >
<input type="text" name="imgadr" id="iimgadr" value="http://babystamp.jp/public/assets/img/sp/sp_mainvisual2.png" />
<input type="button" value="ダウンロード" onclick="chgImg()">
</form>
ダウンロードして、文字列が以下↓に入ったら「取得終了」を押して、生成した文字列を含めて投稿してください。
<form name="amadif2" method="post" action="amachadi.php" >
<input type="text" name="imid" id="iimid"  />
<input type="button" value="取得終了" onclick="clsFrm()">
</form>

<br />
<hr />画像アップロードはこちらから<br />
<form method="post" action="amachadi.php" enctype="multipart/form-data">
ファイル:<input type="file" name="up_file"><br>
<input type="submit" value="upload">
</form>

<?php
  require_once('amacha.cfg');
    //一字ファイルができているか（アップロードされているか）チェック
    if(is_uploaded_file($_FILES['up_file']['tmp_name'])){
        //一字ファイルを保存ファイルにコピーできたか
      $upfile = move_uploaded_file($_FILES['up_file']['tmp_name'],"./".$_FILES['up_file']['name']);
      
        if($upfile ){
	  //	             echo "uploaded: " . $_FILES['up_file']['tmp_name'],"./".$_FILES['up_file']['name'] . "<br>";
	  $upfilename = $_FILES['up_file']['name'];
	  $seed = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	  $rnda = array();
	  $imax = 8;
	  $imgid = '';
	  for ($i = 0; $i < $imax; $i++) {
	    $imgid = $imgid . substr($seed, mt_rand(0,61), 1);
	  }
          $basedir = '/some/where';
	  exec('/bin/mv ' . $basedir . '/' . $crn . '/' . $upfilename . ' ' . 'img/tok' . 'tmp' . $imgid);
       $a = exec('/usr/bin/identify ' . 'img/tok' . 'tmp' . $imgid);
       $aa = array();
       $aa = explode(' ', $a);
       exec('/usr/bin/convert -resize 200x ' . $aa[1] . ':img/tok' . 'tmp' . $imgid . ' img/tok'  . $imgid . '.png');
       echo 'アップロードされました！ http://amongchat.com/' . $crn . '/img/tok' . $imgid . '.png' . "\n";
       exec('/bin/rm img/tok' . 'tmp' . $imgid . ' ');

        }else{
	      echo "error while saving.";
        }
    }else{
      //        echo "file not uploaded.";
    }
?>

<div><img id="newImg"></div>

</body>
</html>
