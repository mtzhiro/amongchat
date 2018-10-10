<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
</head>
<body>
文字を入れる場所をクリック／タップします<br />
<canvas id="cv1" width="200" height="200" style="border: solid 1px;"></canvas>
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
  //  var png = canvas.toDataURL();
  //  document.getElementById("newImg").src = png;
  img_url = canvas.toDataURL("image/png").replace(new RegExp("data:image/png;base64,"),"");
  len = 8;
  str = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
  strLen = str.length;
  tiid = '';
  for (var i = 0; i < len; i++) {
    tiid += str[Math.floor(Math.random() * strLen)];
  }
  $.post("amachais.php",{"upload_data":img_url, "imgid":tiid},function(data){
      //      alert("DONE");
      //  document.getElementById('newImg').innerHtml = '<img src="tokimg.png" />';
      //   publicMethod.close();
     var ktext = parent.acpost.kikiin2.value;
      parent.acpost.kikiin2.value = ktext + ' ' + '{emojitok' + tiid + '}';
      parent.jQuery.colorbox.close();
    },"html");
}

</script>

<form>
<input type="text" name="intext" id="ttext" />
<input type="button" value="テキスト入力" onclick="chgCol()">
<input type="button" value="完成" onclick="chgImg()">
</form>

<div><img id="newImg"></div>

</body>
</html>
