<?php
  $upload_data=$_POST['upload_data'];
  $imgid = $_POST['imgid'];
  $new_file_name='img/tok' . $imgid . '.png';
  $fp = fopen($new_file_name,'w');
  fwrite($fp,base64_decode($upload_data));
  fclose($fp);