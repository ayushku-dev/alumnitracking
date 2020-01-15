<?php
$action = $_GET["action"];
$myText = $_POST["mytext"];

if($action = "save") {
  $targetFolder = "C:\Users\ajeet\Desktop";
  file_put_contents($targetFolder."mytext.rtf", $myText);
}
?>   
<html>
<head>
 <title>myform</title>
</head>
<body>
  <form action="?action=save" name="myform" method="post">
    <input type=text name="mytext">
    <input type="submit" value="save">
  </form>
</body>
</html>