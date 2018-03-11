<?php
  include("connect.php");
  $id = (isset($_POST['id'])) ? $_POST['id'] : 0 ;
  $curmenu = (isset($_POST['curmenu'])) ? $_POST['curmenu'] : 0 ;
  $trimmed = trim($id);
  // Подчитка для редактирования
  switch  ($curmenu) {
    case (1) :
    $result = mysql_query("SELECT * FROM mining WHERE id='$trimmed'") or die(mysql_error());
    echo json_encode(mysql_fetch_object($result));
      break ;
    case (2) :
    $result = mysql_query("SELECT * FROM gambling WHERE id='$trimmed'") or die(mysql_error());
    echo json_encode(mysql_fetch_object($result));
    break;
    case (3) :
    $result = mysql_query("SELECT * FROM exchanges WHERE id='$trimmed'") or die(mysql_error());
    echo json_encode(mysql_fetch_object($result));
    break;
    case (4) :
    $result = mysql_query("SELECT * FROM mining_ad WHERE id='$trimmed'") or die(mysql_error());
    echo json_encode(mysql_fetch_object($result));
    break;
    }
?>