<?php
$curmenu = 1;
include("admin/connect.php");
$toTop = mysql_query("SELECT * FROM mining WHERE checkTop = 'true'") or die(mysql_error());
$result = mysql_query("SELECT * FROM mining WHERE checkTop = 'false' ORDER BY id DESC") or die(mysql_error());
include('beg.php');
include('inf_top.php');
     ?>
    <section id="main-section" class="main-section">
        <div class="container">
            <div class="row">
                <!--Left-->
                <div class="col-lg-8 content">
                    <!--News-Left-1-->

                    <? while ($row=mysql_fetch_object($toTop)) { 
    // НОВИНА
    echo '<div class="card">';
    echo '<table style="margin:auto; width:100%; height:100%;">';
    echo  '<thead>';
    echo      '<tr>';
    echo           '<th style="cursor: pointer" onclick="javascript:window.open(\''.$row->url.'\');">';
    echo              '<p class="text-center h6 ">'.$row->title.'</p>';
    echo          '</th>';
    echo         '<th>';
    echo              '<p class="text-center h6 text-muted">'.$langData[daysOnline].'</p>';
    echo          '</th>';
    echo          '<th>';
    echo              '<p class="text-center h6 text-muted">'.$langData[price].'</p>';
    echo         '</th>';
    echo         '<th>';
    echo             '<p class="text-center h6 text-muted">'.$langData[contractTime].'</p>';
    echo         '</th>';
    echo          '<th>';
    echo             '<p class="text-center h6 text-muted">'.$langData[roi].'</p>';
    echo         '</th>';
    echo         '<th>';
    echo              '<p class="text-center h6 text-muted">'.$langData[payouts].'</p>';
    echo           '</th>';
    echo           '<th colspan="2">';
    echo              '<p class="text-center h6 text-muted">'.$langData[paymentMethods].'</p>';
    echo          '</th>';
    echo      '</tr>';
    echo  '</thead>';
    echo  '<tbody>';
    echo      '<tr>';
    echo           '<th rowspan="5" width=150px style="background-image: url(\'/img/'.trim($row->file).'\'); background-size: 100% 100%; cursor: pointer" onclick="javascript:window.open(\''.$row->url.'\');"></th>';
    echo          '<td>';
    echo              '<p class="text-center h6">'.$row->daysOnline.'</p>';
    echo            '</td>';
    echo            '<td>';
    echo              '<p class="text-center h6">';?>
                        <? if($row->hashpower_rus == "") {
                            echo  $row->hashpower;
                        } else {echo $hashpower=($lang=='en') ? $row->hashpower:$row->hashpower_rus;
                        }?>
  <?echo            '</p>';
    echo            '</td>';
    echo            '<td>';
    echo              '<p class="text-center h6">';?>
                        <? if($row->contracts_rus == "") {
                            echo  $row->contracts;
                        } else {echo $contracts=($lang=='en') ? $row->contracts:$row->contracts_rus;
                        }?>
  <?echo            '</p>';
    echo            '</td>';
    echo            '<td>';
    echo                '<p class="text-center h6">'.$row->roi.'</p>';
    echo            '</td>';
    echo            '<td>';
    echo              '<p class="text-center h6">';?>
                         <? if($row->payouts_rus == "") {
                             echo  $row->payouts;
                        } else {echo $payouts=($lang=='en') ? $row->payouts:$row->payouts_rus;
                        }?>
  <?echo            '</p>';
    echo            '</td>';
    echo            '<td colspan="2">';
    echo                '<p class="text-center h6">'.$row->paymeth.'</p>';
    echo            '</td>';
    echo        '</tr>';
    echo        '<tr class="middle">';
    echo        '<td colspan="6">';
    echo        '<p class="text-center">';?>
                <? if($row->description_rus == "") {
                echo  $row->description;
                } else {echo $description=($lang=='en') ? $row->description:$row->description_rus;
                }?>
  <?echo            '</p>';
    echo            '</td>';
    echo            '<td>';
    echo                '<p class="text-center ">';
    echo                        '<a target="_blank" href="rev_mining.php?id=\''.$row->id.'\'">';
    echo                    '<button class="btn btn-success btn-round btn-sm">'.$langData[button1].'</button>';
    echo                        '</a>';
    echo                        '<a target="_blank" href="'.$row->url.'">';
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

<? while ($row=mysql_fetch_object($result)) { 
    // НОВИНА
    echo '<div class="card">';
    echo '<table style="margin:auto; width:100%; height:100%;">';
    echo  '<thead>';
    echo      '<tr>';
    echo           '<th style="cursor: pointer" onclick="javascript:window.open(\''.$row->url.'\');">';
    echo              '<p class="text-center h6 ">'.$row->title.'</p>';
    echo          '</th>';
    echo         '<th>';
    echo              '<p class="text-center h6 text-muted">'.$langData[daysOnline].'</p>';
    echo          '</th>';
    echo          '<th>';
    echo              '<p class="text-center h6 text-muted">'.$langData[price].'</p>';
    echo         '</th>';
    echo         '<th>';
    echo             '<p class="text-center h6 text-muted">'.$langData[contractTime].'</p>';
    echo         '</th>';
    echo          '<th>';
    echo             '<p class="text-center h6 text-muted">'.$langData[roi].'</p>';
    echo         '</th>';
    echo         '<th>';
    echo              '<p class="text-center h6 text-muted">'.$langData[payouts].'</p>';
    echo           '</th>';
    echo           '<th colspan="2">';
    echo              '<p class="text-center h6 text-muted">'.$langData[paymentMethods].'</p>';
    echo          '</th>';
    echo      '</tr>';
    echo  '</thead>';
    echo  '<tbody>';
    echo      '<tr>';
    echo           '<th rowspan="5" width=150px style="background-image: url(\'/img/'.trim($row->file).'\'); background-size: 100% 100%; cursor: pointer" onclick="javascript:window.open(\''.$row->url.'\');"></th>';
    echo          '<td>';
    echo              '<p class="text-center h6">'.$row->daysOnline.'</p>';
    echo            '</td>';
    echo            '<td>';
    echo              '<p class="text-center h6">';?>
                        <? if($row->hashpower_rus == "") {
                            echo  $row->hashpower;
                        } else {echo $hashpower=($lang=='en') ? $row->hashpower:$row->hashpower_rus;
                        }?>
  <?echo            '</p>';
    echo            '</td>';
    echo            '<td>';
    echo              '<p class="text-center h6">';?>
                        <? if($row->contracts_rus == "") {
                            echo  $row->contracts;
                        } else {echo $contracts=($lang=='en') ? $row->contracts:$row->contracts_rus;
                        }?>
  <?echo            '</p>';
    echo            '</td>';
    echo            '<td>';
    echo                '<p class="text-center h6">'.$row->roi.'</p>';
    echo            '</td>';
    echo            '<td>';
    echo              '<p class="text-center h6">';?>
                         <? if($row->payouts_rus == "") {
                             echo  $row->payouts;
                        } else {echo $payouts=($lang=='en') ? $row->payouts:$row->payouts_rus;
                        }?>
  <?echo            '</p>';
    echo            '</td>';
    echo            '<td colspan="2">';
    echo                '<p class="text-center h6">'.$row->paymeth.'</p>';
    echo            '</td>';
    echo        '</tr>';
    echo        '<tr class="middle">';
    echo        '<td colspan="6">';
    echo        '<p class="text-center">';?>
                <? if($row->description_rus == "") {
                echo  $row->description;
                } else {echo $description=($lang=='en') ? $row->description:$row->description_rus;
                }?>
  <?echo            '</p>';
    echo            '</td>';
    echo            '<td>';
    echo                '<p class="text-center ">';?>
                                <? if($row->review !== '') { ?>
  <?echo                        '<a target="_blank" href="rev_mining.php?id=\''.$row->id.'\'">';
    echo                    '<button class="btn btn-success btn-round btn-sm">'.$langData[button1].'</button>';
    echo                        '</a>';?>
                                <?}?>
  <?echo                        '<a target="_blank" href="http://www.'.$row->url.'">';
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
include('footer.php');
?>