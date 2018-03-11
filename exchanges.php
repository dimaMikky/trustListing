<?php
$curmenu = 3;
include("admin/connect.php");
$result = mysql_query("SELECT * FROM exchanges WHERE 1 ORDER BY id DESC") or die(mysql_error());
include('beg.php');
include('inf_top.php');
     ?>
    <section id="main-section" class="main-section">
        <div class="container">
            <div class="row">
                <!--Left-->
                <div class="col-lg-8 content">
                    <!--News-Left-1-->
                    
 <? while ($row=mysql_fetch_object($result)) { 
    // НОВИНА
    echo '<div class="card">';
    echo '<table style="margin:auto; width:100%; height:100%;">';
    echo  '<thead>';
    echo      '<tr>';
    echo           '<th>';
    echo              '<p class="text-center h6 ">'.$row->title.'</p>';
    echo          '</th>';
    echo         '<th>';
    echo              '<p class="text-center h6 text-muted">'.$langData[reputation].'</p>';
    echo          '</th>';
    echo          '<th>';
    echo              '<p class="text-center h6 text-muted">'.$langData[fees].'</p>';
    echo         '</th>';
    echo         '<th>';
    echo             '<p class="text-center h6 text-muted">'.$langData[verification].'</p>';
    echo         '</th>';
    echo          '<th>';
    echo             '<p class="text-center h6 text-muted">'.$langData[countriesAccepted].'</p>';
    echo         '</th>';
    echo         '<th colspan="2">';
    echo              '<p class="text-center h6 text-muted">'.$langData[paymentMethods].'</p>';
    echo           '</th>';
    echo      '</tr>';
    echo  '</thead>';
    echo  '<tbody>';
    echo      '<tr>';
    echo           '<th rowspan="5" width=150px style="background-image: url(\'/img/'.trim($row->file).'\'); background-size: 100% 100%;"></th>';
    echo          '<td>';
    echo              '<p class="text-center h6">';?>
                        <? if($row->reputation_rus == "") {
                            echo  $row->reputation;
                        } else {echo $reputation=($lang=='en') ? $row->reputation:$row->reputation_rus;
                        }?>
  <?echo            '</p>';
    echo            '</td>';
    echo            '<td>';
    echo              '<p class="text-center h6">';?>
                        <? if($row->fees_rus == "") {
                            echo  $row->fees;
                        } else {echo $fees=($lang=='en') ? $row->fees:$row->fees_rus;
                        }?>
  <?echo            '</p>';
    echo            '</td>';
    echo            '<td>';
    echo              '<p class="text-center h6">';?>
                        <? if($row->verification_rus == "") {
                            echo  $row->verification;
                        } else {echo $verification=($lang=='en') ? $row->verification:$row->verification_rus;
                        }?>
  <?echo            '</p>';
    echo            '</td>';
    echo            '<td>';
    echo              '<p class="text-center h6">';?>
                        <? if($row->countracc_rus == "") {
                            echo  $row->countracc;
                        } else {echo $countracc=($lang=='en') ? $row->countracc:$row->countracc_rus;
                        }?>
  <?echo            '</p>';
    echo            '</td>';
    echo            '<td colspan="2">';
    echo                '<p class="text-center h6">'.$row->paymeth.'</p>';
    echo            '</td>';
    echo        '</tr>';
    echo        '<tr class="middle">';
    echo            '<td colspan="5">';
    echo        '<p class="text-center">';?>
                 <? if($row->description_rus == "") {
                    echo  $row->description;
                    } else {echo $description=($lang=='en') ? $row->description:$row->description_rus;
                    }?>
  <?echo            '</p>';
    echo            '<td>';
    echo                '<p class="text-center ">';
    echo                    '<button class="btn btn-success btn-round btn-sm">'.$langData[button1].'</button>';
    echo                        '<a target="_blank" href="http://www.'.$row->url.'">';
    echo                    '<button class="btn btn-primary btn-round btn-sm ">&nbsp;&nbsp;'.$langData[button2].'&nbsp;&nbsp;</button>';
    echo                        '</a>';
    echo                '</p>';
    echo            '</td>';
    echo        '</tr>';
    echo    '</tbody>';
    echo    '</table>';
    echo    '</div>';
  };
?>
                </div>
                <?php include('right_side.php'); ?>
            </div>
        </div>
        </div>
    </section>

    <?php
//include('inf_top.php');
include('footer.php');
?>