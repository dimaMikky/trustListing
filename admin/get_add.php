<?php
  include("connect.php");
  $addeditdel = (isset($_POST['addeditdel_ad'])) ? $_POST['addeditdel_ad'] : 0 ;
  $id = (isset($_POST['currid_ad'])) ? $_POST['currid_ad'] : 0 ;
  $curmenu = (isset($_POST['curmenu_ad'])) ? $_POST['curmenu_ad'] : 0 ;
  $trimmed = trim($id);
  $inputUrl1 = (isset($_POST['inputUrl1'])) ? $_POST['inputUrl1'] : 0 ;
  $inputUrl2 = (isset($_POST['inputUrl2'])) ? $_POST['inputUrl2'] : 0 ;
  $inputUrl3 = (isset($_POST['inputUrl3'])) ? $_POST['inputUrl3'] : 0 ;
  $inputUrl4 = (isset($_POST['inputUrl4'])) ? $_POST['inputUrl4'] : 0 ;

    switch  ($addeditdel) {
      case (4) :
        // Insert ad
          $inputFile1 = $_FILES["inputFile1"]["name"];
          $inputFile1 = ( !empty($inputFile1) AND move_uploaded_file($_FILES["inputFile1"]["tmp_name"], '../ad/'.$inputFile1) ) ? $inputFile1 : "";
          $inputFile2 = $_FILES["inputFile2"]["name"];
          $inputFile2 = ( !empty($inputFile2) AND move_uploaded_file($_FILES["inputFile2"]["tmp_name"], '../ad/'.$inputFile2) ) ? $inputFile2 : "";
          $inputFile3 = $_FILES["inputFile3"]["name"];
          $inputFile3 = ( !empty($inputFile3) AND move_uploaded_file($_FILES["inputFile3"]["tmp_name"], '../ad/'.$inputFile3) ) ? $inputFile3 : "";
          $inputFile4 = $_FILES["inputFile4"]["name"];
          $inputFile4 = ( !empty($inputFile4) AND move_uploaded_file($_FILES["inputFile4"]["tmp_name"], '../ad/'.$inputFile4) ) ? $inputFile4 : "";
          $resinp = mysql_query("INSERT INTO mining_ad (id, file1, file2, file3, file4, url1, url2, url3, url4)
           VALUES ('$trimmed', '$inputFile1','$inputFile2', '$inputFile3', '$inputFile4', '$inputUrl1', '$inputUrl2', '$inputUrl3', '$inputUrl4')");
           header("Location: mining.php");
        break ;
      case (5) :
        // Edit news    
        $inputFile1 = -1;
        $inputFile2 = -1;
        $inputFile3 = -1;
        $inputFile4 = -1;
        if ( !empty($_FILES["inputFile1"]["name"]) ) {
          $inputFile1 = $_FILES["inputFile1"]["name"];
          $inputFile1 = ( !empty($inputFile1) AND move_uploaded_file($_FILES["inputFile1"]["tmp_name"], '../ad/'.$inputFile1) ) ? $inputFile1 : -1;
        } 
        if ( !empty($_FILES["inputFile2"]["name"]) ) {
          $inputFile2 = $_FILES["inputFile2"]["name"];
          $inputFile2 = ( !empty($inputFile2) AND move_uploaded_file($_FILES["inputFile2"]["tmp_name"], '../ad/'.$inputFile2) ) ? $inputFile2 : -1;
        }
        if ( !empty($_FILES["inputFile3"]["name"]) ) {
          $inputFile3 = $_FILES["inputFile3"]["name"];
          $inputFile3 = ( !empty($inputFile3) AND move_uploaded_file($_FILES["inputFile3"]["tmp_name"], '../ad/'.$inputFile3) ) ? $inputFile3 : -1;
        }
        if ( !empty($_FILES["inputFile4"]["name"]) ) {
          $inputFile4 = $_FILES["inputFile4"]["name"];
          $inputFile4 = ( !empty($inputFile4) AND move_uploaded_file($_FILES["inputFile4"]["tmp_name"], '../ad/'.$inputFile4) ) ? $inputFile4 : -1;
        }
        if ($inputFile1 == -1) { $resedit = mysql_query("UPDATE `mining_ad` SET `id`='$trimmed', `url1`='$inputUrl1', `url2`='$inputUrl2',  `url3`='$inputUrl3', `url4`='$inputUrl4' WHERE `id`='$trimmed'");}
          else {$resedit = mysql_query("UPDATE `mining_ad` SET `id`='$trimmed', `file1`='$inputFile1', `url1`='$inputUrl1', `url2`='$inputUrl2',  `url3`='$inputUrl3', `url4`='$inputUrl4' WHERE `id`='$trimmed'");}
              header("Location: mining.php");
        if ($inputFile2 == -1) { $resedit = mysql_query("UPDATE `mining_ad` SET `id`='$trimmed', `url1`='$inputUrl1', `url2`='$inputUrl2',  `url3`='$inputUrl3', `url4`='$inputUrl4' WHERE `id`='$trimmed'");}
          else {$resedit = mysql_query("UPDATE `mining_ad` SET `id`='$trimmed',  `file2`='$inputFile2',  `url1`='$inputUrl1', `url2`='$inputUrl2',  `url3`='$inputUrl3', `url4`='$inputUrl4' WHERE `id`='$trimmed'");}
              header("Location: mining.php");
        if ($inputFile3 == -1) { $resedit = mysql_query("UPDATE `mining_ad` SET `id`='$trimmed', `url1`='$inputUrl1', `url2`='$inputUrl2',  `url3`='$inputUrl3', `url4`='$inputUrl4' WHERE `id`='$trimmed'");}
          else {$resedit = mysql_query("UPDATE `mining_ad` SET `id`='$trimmed', `file3`='$inputFile3',  `url1`='$inputUrl1', `url2`='$inputUrl2',  `url3`='$inputUrl3', `url4`='$inputUrl4' WHERE `id`='$trimmed'");}
               header("Location: mining.php");
        if ($inputFile4 == -1) { $resedit = mysql_query("UPDATE `mining_ad` SET `id`='$trimmed', `url1`='$inputUrl1', `url2`='$inputUrl2',  `url3`='$inputUrl3', `url4`='$inputUrl4' WHERE `id`='$trimmed'");}
          else {$resedit = mysql_query("UPDATE `mining_ad` SET `id`='$trimmed', `file4`='$inputFile4',  `url1`='$inputUrl1', `url2`='$inputUrl2',  `url3`='$inputUrl3', `url4`='$inputUrl4' WHERE `id`='$trimmed'");}
                header("Location: mining.php");               
        break ;
      case (6) :
        // Del news full
        $resDel = mysql_query("SELECT * FROM mining_ad WHERE `id`='$trimmed'");
        if ($resDel) {
          $rowDel = mysql_fetch_object($resDel);
          if (trim($rowDel->file1) !== '') {
            $filePath1 = trim($rowDel->file1);
            $fileName1 = '../ad/'.$filePath1;
          }
          if (trim($rowDel->file2) !== '') {
            $filePath2 = trim($rowDel->file2);
            $fileName2 = '../ad/'.$filePath2;
          }
          if (trim($rowDel->file3) !== '') {
            $filePath3 = trim($rowDel->file3);
            $fileName3 = '../ad/'.$filePath3;
          }
          if (trim($rowDel->file4) !== '') {
            $filePath4 = trim($rowDel->file4);
            $fileName4 = '../ad/'.$filePath4;
          }
            if (file_exists($fileName1)) unlink($fileName1); 
            if (file_exists($fileName2)) unlink($fileName2); 
            if (file_exists($fileName3)) unlink($fileName3); 
            if (file_exists($fileName4)) unlink($fileName4); 
        }  
          $resdel = mysql_query("DELETE FROM mining_ad WHERE `id`='$trimmed'");
          header("Location: mining.php");
        break ;
      }
?>
