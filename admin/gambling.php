<?php
include('chlog.php');
include("connect.php");
$curmenu = 2;
$userid = $_SESSION['userid'] ;
$addeditdel = (isset($_POST['addeditdel'])) ? $_POST['addeditdel'] : 0 ;
$currid = (isset($_POST['currid'])) ? $_POST['currid'] : 0 ;
$trimmed = trim($currid);
$delFile = (isset($_POST['delFile'])) ? $_POST['delFile'] : "" ;
// Gather eng form input
$checkMain = (isset($_POST['checkMain'])) ? $_POST['checkMain'] : "0" ;
//
$inputTitle = (isset($_POST['inputTitle'])) ? $_POST['inputTitle'] : "" ;
$inputDescr = (isset($_POST['inputDescr'])) ? $_POST['inputDescr'] : "" ;
$inputText = (isset($_POST['inputText'])) ? $_POST['inputText'] : "" ;
$inputGames = (isset($_POST['inputGames'])) ? $_POST['inputGames'] : "" ;
$inputFair = (isset($_POST['inputFair'])) ? $_POST['inputFair'] : "" ;
$inputBonus = (isset($_POST['inputBonus'])) ? $_POST['inputBonus'] : "" ;
$inputLocation = (isset($_POST['inputLocation'])) ? $_POST['inputLocation'] : "" ;
$inputWithdrawals = (isset($_POST['inputWithdrawals'])) ? $_POST['inputWithdrawals'] : "" ;
$inputUsaplayer = (isset($_POST['inputUsaplayer'])) ? $_POST['inputUsaplayer'] : "" ;
$inputPaymeth = (isset($_POST['inputPaymeth'])) ? $_POST['inputPaymeth'] : "" ;
$inputUrl = (isset($_POST['inputUrl'])) ? $_POST['inputUrl'] : "" ;
$inputMetaTitle = (isset($_POST['inputMetaTitle'])) ? $_POST['inputMetaTitle'] : "" ;
$inputMetaDescription = (isset($_POST['inputMetaDescription'])) ? $_POST['inputMetaDescription'] : "" ;
//
$pros1 = (isset($_POST['pros1'])) ? $_POST['pros1'] : "" ;
$pros2 = (isset($_POST['pros2'])) ? $_POST['pros2'] : "" ;
$pros3 = (isset($_POST['pros3'])) ? $_POST['pros3'] : "" ;
$cons1 = (isset($_POST['cons1'])) ? $_POST['cons1'] : "" ;
$cons2 = (isset($_POST['cons2'])) ? $_POST['cons2'] : "" ;
$cons3 = (isset($_POST['cons3'])) ? $_POST['cons3'] : "" ;
// Gather rus form input
$inputDescr_rus = (isset($_POST['inputDescr_rus'])) ? $_POST['inputDescr_rus'] : "" ;
$inputText_rus = (isset($_POST['inputText_rus'])) ? $_POST['inputText_rus'] : "" ;
$inputGames_rus = (isset($_POST['inputGames_rus'])) ? $_POST['inputGames_rus'] : "" ;
$inputFair_rus = (isset($_POST['inputFair_rus'])) ? $_POST['inputFair_rus'] : "" ;
$inputBonus_rus = (isset($_POST['inputBonus_rus'])) ? $_POST['inputBonus_rus'] : "" ;
$inputLocation_rus = (isset($_POST['inputLocation_rus'])) ? $_POST['inputLocation_rus'] : "" ;
$inputWithdrawals_rus = (isset($_POST['inputWithdrawals_rus'])) ? $_POST['inputWithdrawals_rus'] : "" ;
$inputUsaplayer_rus = (isset($_POST['inputUsaplayer_rus'])) ? $_POST['inputUsaplayer_rus'] : "" ;
//
$pros1_rus = (isset($_POST['pros1_rus'])) ? $_POST['pros1_rus'] : "" ;
$pros2_rus = (isset($_POST['pros2_rus'])) ? $_POST['pros2_rus'] : "" ;
$pros3_rus = (isset($_POST['pros3_rus'])) ? $_POST['pros3_rus'] : "" ;
$cons1_rus = (isset($_POST['cons1_rus'])) ? $_POST['cons1_rus'] : "" ;
$cons2_rus = (isset($_POST['cons2_rus'])) ? $_POST['cons2_rus'] : "" ;
$cons3_rus = (isset($_POST['cons3_rus'])) ? $_POST['cons3_rus'] : "" ;
switch  ($addeditdel) {
  case (1) :
  if (!empty($inputTitle) AND !empty($inputDescr)) {
  $inputFile = $_FILES["inputFile"]["name"];
  $inputFile = ( !empty($inputFile) AND move_uploaded_file($_FILES["inputFile"]["tmp_name"], '../img/'.$inputFile) ) ? $inputFile : "";
  $resinp = mysql_query("INSERT INTO gambling (title, description, review, games, fair, bonus, location, withdrawals, usaplayer, paymeth, pros1, pros2, pros3, cons1, cons2, cons3, description_rus, review_rus, games_rus, fair_rus, bonus_rus, location_rus, withdrawals_rus, usaplayer_rus, pros1_rus, pros2_rus, pros3_rus, cons1_rus, cons2_rus, cons3_rus, file, url, metaTitle, metaDescription)
  VALUES ('$inputTitle', '$inputDescr','$inputText', '$inputGames', '$inputFair', '$inputBonus', '$inputLocation', '$inputWithdrawals', '$inputUsaplayer', '$inputPaymeth', '$pros1', '$pros2', '$pros3', '$cons1', '$cons2', '$cons3', '$inputDescr_rus', '$inputText_rus', '$inputGames_rus', '$inputFair_rus', '$inputBonus_rus', '$inputLocation_rus', '$inputWithdrawals_rus', '$inputUsaplayer_rus', '$pros1_rus', '$pros2_rus', '$pros3_rus', '$cons1_rus', '$cons2_rus', '$cons3_rus', ' $inputFile', '$inputUrl', '$inputMetaTitle', '$inputMetaDescription')");
 }
 else { echo 'Error - empty value :'.$inpDate.'+'.$inpDescr."<br>";}
 header("Location: gambling.php");
  break ;
	case (2) :
    // Edit news
    $inputFile = -1;
    if ( !empty($_FILES["inputFile"]["name"]) ) {
      $inputFile = $_FILES["inputFile"]["name"];
      $inputFile = ( !empty($inputFile) AND move_uploaded_file($_FILES["inputFile"]["tmp_name"], '../img/'.$inputFile) ) ? $inputFile : -1;
    } 
    if ($inputFile == -1) {$resedit = mysql_query("UPDATE `gambling` SET `title`='$inputTitle', `description`='$inputDescr', `review`='$inputText', `games`='$inputGames', `fair`='$inputFair', `bonus`='$inputBonus', `location`='$inputLocation',  `withdrawals`='$inputWithdrawals', `usaplayer`='$inputUsaplayer', `paymeth`='$inputPaymeth', `pros1`='$pros1', `pros2`='$pros2', `pros3`='$pros3', `cons1`='$cons1', `cons2`='$cons2', `cons3`='$cons3', `description_rus`='$inputDescr_rus', `review_rus`='$inputText_rus', `games_rus`='$inputGames_rus',
      `fair_rus`='$inputFair_rus', `bonus_rus`='$inputBonus_rus', `location_rus`='$inputLocation_rus', `withdrawals_rus`='$inputWithdrawals_rus', `usaplayer_rus`='$inputUsaplayer_rus', `pros1_rus`='$pros1_rus', `pros2_rus`='$pros2_rus', `pros3_rus`='$pros3_rus', `cons1_rus`='$cons1_rus', `cons2_rus`='$cons2_rus', `cons3_rus`='$cons3_rus', `url`='$inputUrl', `metaTitle`='$inputMetaTitle', `metaDescription`='$inputMetaDescription' WHERE `id`='$trimmed'");}
       else {$resedit = mysql_query("UPDATE `gambling` SET `title`='$inputTitle', `description`='$inputDescr', `review`='$inputText', `games`='$inputGames', `fair`='$inputFair', `bonus`='$inputBonus', `location`='$inputLocation',  `withdrawals`='$inputWithdrawals', `usaplayer`='$inputUsaplayer', `paymeth`='$inputPaymeth', `pros1`='$pros1', `pros2`='$pros2', `pros3`='$pros3', `cons1`='$cons1', `cons2`='$cons2', `cons3`='$cons3', `description_rus`='$inputDescr_rus', `review_rus`='$inputText_rus', `games_rus`='$inputGames_rus',
        `fair_rus`='$inputFair_rus', `bonus_rus`='$inputBonus_rus', `location_rus`='$inputLocation_rus', `withdrawals_rus`='$inputWithdrawals_rus', `usaplayer_rus`='$inputUsaplayer_rus', `pros1_rus`='$pros1_rus', `pros2_rus`='$pros2_rus', `pros3_rus`='$pros3_rus', `cons1_rus`='$cons1_rus', `cons2_rus`='$cons2_rus', `cons3_rus`='$cons3_rus', `file`='$inputFile', `url`='$inputUrl', `metaTitle`='$inputMetaTitle', `metaDescription`='$inputMetaDescription' WHERE `id`='$trimmed'");}
      header("Location: gambling.php");
    break ;
	case (3) :
    // Del news full
    $resDel = mysql_query("SELECT file FROM gambling WHERE `id`='$trimmed'");
    if ($resDel) {
        $rowDel = mysql_fetch_object($resDel);
        if (trim($rowDel->file) !== '') {
          $filePath = trim($rowDel->file);
          $fileName = '../img/'.$filePath;
          if (file_exists($fileName)) unlink($fileName); 
        }
      }  
      $resdel = mysql_query("DELETE FROM gambling WHERE `id`='$trimmed'");
      header("Location: gambling.php");
		break ;
	}

  $addeditdel = 0;

 include("beg_a.php");
?>
    <div class="t-size">
        <div class=" card card-cascade narrower mt-5">
            <!--Card image-->
            <div class="view gradient-card-header purple-gradient narrower py-4 mx-4 mb-3 d-flex justify-content-center align-items-center">
                <h4 class="white-text font-bold font-up mb-0">Table name</h4>
            </div>
            <!--/Card image-->
            <div class="px-4">
                <!--Table-->
                <table class="table table-hover table-responsive-md mb-0">
                    <!--Table head-->
                    <thead>
                        <tr>
                            <th scope="row">
                                <a href="">ID
                                    <i class="fa fa-hashtag" aria-hidden="true"></i>
                                </a>
                            </th>
                            <th class="th-lg">
                                <a href="">Title
                                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                </a>
                            </th>
                            <th class="th-lg">
                                <a href="">Description
                                    <i class="fa fa-sticky-note-o" aria-hidden="true"></i>
                                </a>
                            </th>
                            <th class="th-lg">
                                <a href="">Review text
                                    <i class="fa fa-comments" aria-hidden="true"></i>
                                </a>
                            </th>
                            <th class="th-lg text-center">
                                <a href="">Manage
                                    <i class="fa fa-cogs" aria-hidden="true"></i>
                                </a>
                            </th>
                            <th class="th-lg text-center">
                                <a href="">Language
                                    <i class="fa fa-language" aria-hidden="true"></i>
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php			
						$page = @$_GET['page'];			
						if($page == 0 || $page == 1){
							$page1 = 0;	
						}
						else {
							$page1 = ($page * 6) - 6;	
						}
            $result = mysql_query("SELECT * FROM gambling WHERE 1 ORDER BY id DESC LIMIT $page1, 6") or die(mysql_error());
            while ($row=mysql_fetch_object($result)) { 
              //Обрезаем html теги вокруг текста и формируем админ табл. 
            $title = strip_tags($row->title);
            $titleCut = (strlen($title) > 11) ? substr($title, 0, 11) : $title ;
            $descr = strip_tags($row->description);
            $descrCut = (strlen($descr) > 20) ? substr($descr, 0, 20) : $descr ;
            $rev = strip_tags($row->review);
            $revCut = (strlen($rev) > 40) ? substr($rev, 0, 40) : $rev ;?>
                            <tr>
                                <th scope="row">
                                    <? echo $row->id; ?>
                                </th>
                                <td>
                                    <? echo $titleCut; ?>
                                </td>
                                <td>
                                    <? echo $descrCut; ?>
                                </td>
                                <td>
                                    <? echo $revCut; ?>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-outline-warning waves-effect btn-sm edit">Edit</button>
                                    <button type="button" class="btn btn-outline-danger waves-effect btn-sm  del">Delete</button>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-outline-info waves-effect btn-sm  btnRus">Russian</button>
                                </td>
                            </tr>
                            <? } ?>
                    </tbody>
                    <!--Table body-->
                </table>
            </div>
            <hr class="my-0">
            <!--Bottom Table UI-->
            <div class="d-flex justify-content-center">
                <!--Pagination -->
                <nav class="my-4 pt-2">
                    <ul class="pagination pagination-circle pg-purple mb-0">
                        <?php
					$q = mysql_query("SELECT * FROM exchanges");
					$count = mysql_num_rows($q);
					$a = $count / 6;
					$a = ceil($a);
				?>
                            <!--Numbers-->
                            <?php for ($i = 1; $i <= $a; $i++) {?>
                            <li class="page-item active">
                                <a class="page-link" href="mining.php?page=<?php echo $i; ?>">
                                    <?php echo $i; ?>
                                </a>
                            </li>
                            <?php } ?>
                    </ul>
                </nav>
                <!--/Pagination -->
            </div>
            <!--Bottom Table UI-->
        </div>
    </div>
    </div>
    <!-- Диалоговое окно редактирования -->
    <!-- Large modal -->
    <div id="myModal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header light-blue darken-3 white-text">
                    <h4 class="title">
                        <i class="fa fa-pencil"></i> Add review</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" name="form" class="form-horizontal" role="form" action="" id="form" method="post">
                        <input type="hidden" name="currid" id="currid" value="0">
                        <input type="hidden" name="addeditdel" id="addeditdel" value="0">
                        <input type="hidden" name="checkMain" id="checkMain" value="0">
                        <input type="hidden" name="delFile" id="delFile" value="0">

                        <div class="form-group md-form">

                            <input placeholder=" " name="inputTitle" type="text" id="inputTitle" class="form-control">
                            <label for="inputTitle">Title:
                                <span class="colortext">(*)</span>
                            </label>

                        </div>
                        <div class="form-group md-form">

                            <input placeholder=" " name="inputDescr" type="text" id="inputDescr" class="form-control">
                            <label for="inputDescr">Description:
                                <span class="colortext">(*)</span>
                            </label>

                        </div>
                        <div class="form-group">
                            <label for="inputReview" class="form-control-label">Text review:</label>
                            <textarea class="form-control inputText" name="inputText" id="inputText"></textarea>
                            <div class="form-group md-form">
                                <div class="row">
                                    <div class="col-md-5">Pros:
                                        <input placeholder=" " name="pros1" type="text" id="pros1" class="form-control" style="width: 100%">
                                        <input placeholder=" " name="pros2" type="text" id="pros2" class="form-control" style="width: 100%">
                                        <input placeholder=" " name="pros3" type="text" id="pros3" class="form-control" style="width: 100%">
                                    </div>

                                    <div class="col-md-5 ml-auto"> Cons:
                                        <input placeholder=" " name="cons1" type="text" id="cons1" class="form-control" style="width: 100%">
                                        <input placeholder=" " name="cons2" type="text" id="cons2" class="form-control" style="width: 100%">
                                        <input placeholder=" " name="cons3" type="text" id="cons3" class="form-control" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="md-form">
                                            <input placeholder=" " class="form-control inputGames" name="inputGames" id="inputGames" type="text">
                                            <label for="inputGames">Games:
                                                <span class="colortext">(*)</span>
                                            </label>
                                        </div>
                                        <div class="md-form">
                                            <input placeholder=" " class="form-control inputFair" name="inputFair" id="inputFair" type="text">
                                            <label for="inputFair">Provably fair:
                                                <span class="colortext">(*)</span>
                                            </label>
                                        </div>
                                        <div class="md-form">
                                            <input placeholder=" " class="form-control inputBonus" name="inputBonus" id="inputBonus" type="text">
                                            <label for="inputBonus">Bonus:
                                                <span class="colortext">(*)</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-5 ml-auto">
                                        <div class="md-form">
                                            <input placeholder=" " class="form-control inputLocation" name="inputLocation" id="inputLocation" type="text">
                                            <label for="inputLocation">Location:</label>
                                        </div>
                                        <div class="md-form">
                                            <input placeholder=" " class="form-control inputWithdrawals" name="inputWithdrawals" id="inputWithdrawals" type="text">
                                            <label for="inputWithdrawals">Withdrawals:</label>
                                        </div>
                                        <div class="md-form">
                                            <input placeholder=" " class="form-control inputUsaplayer" name="inputUsaplayer" id="inputUsaplayer" type="text">
                                            <label for="inputUsaplayer">USA Players:</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group md-form">
                                <input placeholder=" " name="inputPaymeth" type="text" id="inputPaymeth" class="form-control">
                                <label for="inputPaymeth">Payment methods:
                                    <span class="colortext">(*)</span>
                                </label>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="md-form">
                                            <input placeholder=" " name="inputUrl" type="text" id="inputUrl" class="form-control">
                                            <label for="inputUrl">URL:
                                                <span class="colortext">(*)</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-5 ml-auto">
                                        <div class="file-field md-form">
                                            <div class="btn btn-outline-info waves-effect btn-md">
                                                <span>Upload image:
                                                    <span class="colortext">(*)</span>
                                                </span>
                                                <input type="file" name="inputFile" id="inputFile"></input>
                                                <p id="fileName"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="md-form">
                                            <input placeholder=" " name="inputMetaTitle" type="text" id="inputMetaTitle" class="form-control">
                                            <label for="inputMetaTitle">Meta Title:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5 ml-auto">
                                        <div class="md-form">
                                            <input placeholder=" " name="inputMetaDescription" type="text" id="inputMetaDescription" class="form-control">
                                            <label for="inputMetaDescription">Meta Description:</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer" id="manFile">
                                <button type="button" class="float-left btn btn-outline-secondary waves-effect btnRus2" id="btnRus2">Russian version</button>
                                <button type="button" class="btn btn-outline-success waves-effect btnsave" id="btnsave">Save</button>
                                <button type="button" class="btn btn-outline-danger waves-effect" id="btnclose" data-dismiss="modal" aria-hidden="true">Cancel</button>
                            </div>
                            <!--</form>-->
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Диалоговое окно редактирования -->
    <!--rus modal -->
    <div id="rusModal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header light-blue darken-3 white-text">
                    <h4 class="title">
                        <i class="fa fa-pencil"></i> Добавить запись</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group md-form">

                        <input placeholder=" " name="inputDescr_rus" type="text" id="inputDescr_rus" class="form-control">
                        <label for="inputDescr_rus">Описание:
                            <span class="colortext">(*)</span>
                        </label>

                    </div>
                    <div class="form-group">
                        <label for="inputText_rus" class="form-control-label">Основной текст:</label>
                        <textarea class="form-control inputText_rus" name="inputText_rus" id="inputText_rus"></textarea>
                        <div class="form-group md-form">
                            <div class="row">
                                <div class="col-md-5">Плюсы:
                                    <input placeholder=" " name="pros1_rus" type="text" id="pros1_rus" class="form-control" style="width: 100%">
                                    <input placeholder=" " name="pros2_rus" type="text" id="pros2_rus" class="form-control" style="width: 100%">
                                    <input placeholder=" " name="pros3_rus" type="text" id="pros3_rus" class="form-control" style="width: 100%">
                                </div>

                                <div class="col-md-5 ml-auto">Минусы:
                                    <input placeholder=" " name="cons1_rus" type="text" id="cons1_rus" class="form-control" style="width: 100%">
                                    <input placeholder=" " name="cons2_rus" type="text" id="cons2_rus" class="form-control" style="width: 100%">
                                    <input placeholder=" " name="cons3_rus" type="text" id="cons3_rus" class="form-control" style="width: 100%">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="md-form">
                                        <input placeholder=" " class="form-control inputGames_rus" name="inputGames_rus" id="inputGames_rus" type="text">
                                        <label for="inputGames_rus">Игры:
                                            <span class="colortext">(*)</span>
                                        </label>
                                    </div>
                                    <div class="md-form">
                                        <input placeholder=" " class="form-control inputFair_rus" name="inputFair_rus" id="inputFair_rus" type="text">
                                        <label for="inputFair_rus">Надежный?:
                                            <span class="colortext">(*)</span>
                                        </label>
                                    </div>
                                    <div class="md-form">
                                        <input placeholder=" " class="form-control inputBonus_rus" name="inputBonus_rus" id="inputBonus_rus" type="text">
                                        <label for="inputBonus_rus">Бонус:
                                            <span class="colortext">(*)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-5 ml-auto">
                                    <div class="md-form">
                                        <input placeholder=" " class="form-control inputLocation_rus" name="inputLocation_rus" id="inputLocation_rus" type="text">
                                        <label for="inputLocation_rus">Расположение:</label>
                                    </div>
                                    <div class="md-form">
                                        <input placeholder=" " class="form-control inputWithdrawals_rus" name="inputWithdrawals_rus" id="inputWithdrawals_rus" type="text">
                                        <label for="inputWithdrawals_rus">Выводы:</label>
                                    </div>
                                    <div class="md-form">
                                        <input placeholder=" " class="form-control inputUsaplayer_rus" name="inputUsaplayer_rus" id="inputUsaplayer_rus" type="text">
                                        <label for="inputUsaplayer_rus">Игроки из США:</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="float-left btn btn-outline-secondary waves-effect" id="btnBack">Back to original</button>
                            <button type="button" class="btn btn-outline-success waves-effect btnsave" id="btnsave">Save</button>
                            <button type="button" class="btn btn-outline-danger waves-effect" id="btnclose2" data-dismiss="modal" aria-hidden="true">Cancel</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
        <script>
            $(document).ready(function () {
                //english editor
                CKEDITOR.editorConfig = function (config) {
                    CKEDITOR.config.startupMode = 'source'; // не работает !!!
                };
                CKEDITOR.config.allowedContent = true; // Сохраняем
                CKEDITOR.config.extraAllowedContent = 'span{class}'; // дополнительный HTML код
                CKEDITOR.replace('inputText');
                //russian editor  
                CKEDITOR.editorConfig = function (config) {
                    CKEDITOR.config.startupMode = 'source'; // не работает !!!
                };
                CKEDITOR.config.allowedContent = true; // Сохраняем
                CKEDITOR.config.extraAllowedContent = 'span{class}'; // дополнительный HTML код
                CKEDITOR.replace('inputText_rus');

                //Form Add
                $('#add').on("click", function () {
                    $('#addeditdel').val(1);
                    // clear input form
                    $('#inputGames_rus').val("");
                    $('#inputDescr_rus').val("");
                    $('#inputFair_rus').val("");
                    $('#inputBonus_rus').val("");
                    $('#inputLocation_rus').val("");
                    $('#inputWithdrawals_rus').val("");
                    $('#inputUsaplayer_rus').val("");
                    $('#pros1_rus').val("");
                    $('#pros2_rus').val("");
                    $('#pros3_rus').val("");
                    $('#cons1_rus').val("");
                    $('#cons2_rus').val("");
                    $('#cons3_rus').val("");
                    CKEDITOR.instances['inputText_rus'].setData("");
                    // Check the active editing mode.
                    if (CKEDITOR.instances['inputText_rus'].mode == 'wysiwyg') {
                        CKEDITOR.instances['inputText_rus'].insertHtml("");
                    } else {
                        CKEDITOR.instances['inputText_rus'].setMode('wysiwyg', function () {
                            CKEDITOR.instances['inputText_rus'].insertHtml(value);
                            CKEDITOR.instances['inputText_rus'].setMode('source');
                        });
                    }
                    $('#inputTitle').val("");
                    $('#inputDescr').val("");
                    $('#inputGames').val("");
                    $('#inputFair').val("");
                    $('#inputBonus').val("");
                    $('#inputLocation').val("");
                    $('#inputWithdrawals').val("");
                    $('#inputUsaplayer').val("");
                    $('#inputPaymeth').val("");
                    $('#pros1').val("");
                    $('#pros2').val("");
                    $('#pros3').val("");
                    $('#cons1').val("");
                    $('#cons2').val("");
                    $('#cons3').val("");
                    $('#inputUrl').val("");
                    $('#inputMetaTitle').val("");
                    $('#inputMetaDescription').val("");
                    CKEDITOR.instances['inputText'].setData("");
                    // Check the active editing mode.
                    if (CKEDITOR.instances['inputText'].mode == 'wysiwyg') {
                        CKEDITOR.instances['inputText'].insertHtml("");
                    } else {
                        CKEDITOR.instances['inputText'].setMode('wysiwyg', function () {
                            CKEDITOR.instances['inputText'].insertHtml(value);
                            CKEDITOR.instances['inputText'].setMode('source');
                        });
                    }
                    $('#currid').val(0);
                    $('#btnRus2').show();
                    $('#myModal').modal("show");
                    $('#btnclose').show();
                });

                //switch to russian
                $('#btnRus2').on("click", function () {
                    $('#btnBack').show();
                    $('#rusModal').modal("show");
                });
                $('#btnBack').on("click", function () {
                    $('.btnsave').show();
                    $('.btnsave').html('Save');
                    $('#btnclose').show();
                    $('#rusModal').modal("hide");
                });
            });

            //Form Save
            $('.btnsave').on('click', function () {
                console.log($('#addeditdel').val())
                document.form.delFile.value = 1;
                var fileAdd = "";
                if ((document.form.inputFile != undefined) && (document.form.inputFile.files.length != 0)) {
                    var fileAdd = document.form.inputFile.files[0].name;
                }
                if (fileAdd == "") {
                    document.form.submit();
                } else {
                    $.ajax({
                        type: "POST",
                        url: 'getdata.php',
                        data: "name=ExistFile&file=" + fileAdd,
                        async: false,
                        success: function (data) {
                            if (data == '1') {
                                alert('Файл з ім`ям ' + fileAdd + ' вже існує в базі новин !');
                            } else {
                                document.form.submit();
                            }
                        }
                    });
                }
                $('#myModal').modal("hide");
                $('#rusModal').modal("hide");
                $('#btnRus2').show();
            })



            //Form Edit eng
            $('.edit').on("click", function () {
                $('#addeditdel').val(2);
                var curmenu = 2;
                var id = $(this).parent().prev().prev().prev().prev().html();
                $('#currid').val(id);
                console.log($('#currid').val());
                console.log($('#addeditdel').val())
                //
                $.post("getdata.php", {
                        id: id,
                        curmenu: curmenu
                    },
                    function (data, status) {
                        //alert("Data: " + data + "\nStatus: " + status);
                        var obj = JSON.parse(data);
                        console.log(obj);
                        $('#inputGames_rus').val(obj.games_rus);
                        $('#inputDescr_rus').val(obj.description_rus);
                        $('#inputFair_rus').val(obj.fair_rus);
                        $('#inputBonus_rus').val(obj.bonus_rus);
                        $('#inputLocation_rus').val(obj.location_rus);
                        $('#inputWithdrawals_rus').val(obj.withdrawals_rus);
                        $('#inputUsaplayer_rus').val(obj.usaplayer_rus);
                        $('#pros1_rus').val(obj.pros1_rus);
                        $('#pros2_rus').val(obj.pros2_rus);
                        $('#pros3_rus').val(obj.pros3_rus);
                        $('#cons1_rus').val(obj.cons1_rus);
                        $('#cons2_rus').val(obj.cons2_rus);
                        $('#cons3_rus').val(obj.cons3_rus);
                        $('#inputText_rus').val(obj.review_rus);
                        CKEDITOR.instances['inputText_rus'].setData(obj.review_rus);
                        // Check the active editing mode.
                        if (CKEDITOR.instances['inputText_rus'].mode == 'wysiwyg') {
                            CKEDITOR.instances['inputText_rus'].insertHtml(obj.review_rus);
                        } else {
                            CKEDITOR.instances['inputText_rus'].setMode('wysiwyg', function () {
                                CKEDITOR.instances['inputText_rus'].insertHtml(value);
                                CKEDITOR.instances['inputText_rus'].setMode('source');
                            });
                        }
                        $('#inputTitle').val(obj.title);
                        $('#inputDescr').val(obj.description);
                        $('#inputGames').val(obj.games);
                        $('#inputFair').val(obj.fair);
                        $('#inputBonus').val(obj.bonus);
                        $('#inputLocation').val(obj.location);
                        $('#inputWithdrawals').val(obj.withdrawals);
                        $('#inputUsaplayer').val(obj.usaplayer);
                        $('#inputPaymeth').val(obj.paymeth);
                        $('#pros1').val(obj.pros1);
                        $('#pros2').val(obj.pros2);
                        $('#pros3').val(obj.pros3);
                        $('#cons1').val(obj.cons1);
                        $('#cons2').val(obj.cons2);
                        $('#cons3').val(obj.cons3);
                        $('#inputText').val(obj.text);
                        $('#fileName').html(obj.file);
                        $('#inputUrl').val(obj.url);
                        $('#inputMetaTitle').val(obj.metaTitle);
                        $('#inputMetaDescription').val(obj.metaDescription);
                        CKEDITOR.instances['inputText'].setData(obj.review);
                        // Check the active editing mode.
                        if (CKEDITOR.instances['inputText'].mode == 'wysiwyg') {
                            CKEDITOR.instances['inputText'].insertHtml(obj.review);
                        } else {
                            CKEDITOR.instances['inputText'].setMode('wysiwyg', function () {
                                CKEDITOR.instances['inputText'].insertHtml(value);
                                CKEDITOR.instances['inputText'].setMode('source');
                            });
                        }
                    }
                );
                $('#btnRus2').hide();
                $('#myModal').modal("show");
            });

            //Form Edit rus
            $('.btnRus').on("click", function () {
                $('#addeditdel').val(2);
                var curmenu = 2;
                var id = $(this).parent().prev().prev().prev().prev().prev().html();
                $('#currid').val(id);
                console.log($('#currid').val());
                console.log($('#addeditdel').val())
                //
                $.post("getdata.php", {
                        id: id,
                        curmenu: curmenu
                    },
                    function (data, status) {
                        //alert("Data: " + data + "\nStatus: " + status);
                        var obj = JSON.parse(data);
                        console.log(obj);
                        $('#inputTitle').val(obj.title);
                        $('#inputDescr').val(obj.description);
                        $('#inputGames').val(obj.games);
                        $('#inputFair').val(obj.fair);
                        $('#inputBonus').val(obj.bonus);
                        $('#inputLocation').val(obj.location);
                        $('#inputWithdrawals').val(obj.withdrawals);
                        $('#inputUsaplayer').val(obj.usaplayer);
                        $('#inputPaymeth').val(obj.paymeth);
                        $('#pros1').val(obj.pros1);
                        $('#pros2').val(obj.pros2);
                        $('#pros3').val(obj.pros3);
                        $('#cons1').val(obj.cons1);
                        $('#cons2').val(obj.cons2);
                        $('#cons3').val(obj.cons3);
                        $('#inputText').val(obj.text);
                        $('#fileName').html(obj.file);
                        $('#inputUrl').val(obj.url);
                        $('#inputMetaTitle').val(obj.metaTitle);
                        $('#inputMetaDescription').val(obj.metaDescription);
                        CKEDITOR.instances['inputText'].setData(obj.review);
                        // Check the active editing mode.
                        if (CKEDITOR.instances['inputText'].mode == 'wysiwyg') {
                            CKEDITOR.instances['inputText'].insertHtml(obj.review);
                        } else {
                            CKEDITOR.instances['inputText'].setMode('wysiwyg', function () {
                                CKEDITOR.instances['inputText'].insertHtml(value);
                                CKEDITOR.instances['inputText'].setMode('source');
                            });
                        }
                        $('#inputGames_rus').val(obj.games_rus);
                        $('#inputDescr_rus').val(obj.description_rus);
                        $('#inputFair_rus').val(obj.fair_rus);
                        $('#inputBonus_rus').val(obj.bonus_rus);
                        $('#inputLocation_rus').val(obj.location_rus);
                        $('#inputWithdrawals_rus').val(obj.withdrawals_rus);
                        $('#inputUsaplayer_rus').val(obj.usaplayer_rus);
                        $('#pros1_rus').val(obj.pros1_rus);
                        $('#pros2_rus').val(obj.pros2_rus);
                        $('#pros3_rus').val(obj.pros3_rus);
                        $('#cons1_rus').val(obj.cons1_rus);
                        $('#cons2_rus').val(obj.cons2_rus);
                        $('#cons3_rus').val(obj.cons3_rus);
                        $('#inputText_rus').val(obj.review_rus);
                        CKEDITOR.instances['inputText_rus'].setData(obj.review_rus);
                        // Check the active editing mode.
                        if (CKEDITOR.instances['inputText_rus'].mode == 'wysiwyg') {
                            CKEDITOR.instances['inputText_rus'].insertHtml(obj.review_rus);
                        } else {
                            CKEDITOR.instances['inputText_rus'].setMode('wysiwyg', function () {
                                CKEDITOR.instances['inputText_rus'].insertHtml(value);
                                CKEDITOR.instances['inputText_rus'].setMode('source');
                            });
                        }
                    }
                );
                $('#btnBack').hide();
                $('.btnsave').show();
                $('#btnclose').show();
                $('#rusModal').modal("show");
            });

            //Form Del
            $('.del').on("click", function () {
                var conf = confirm('Do you really want to delete this review?');
                if (conf) {
                    $('#addeditdel').val(3);
                    var id = $(this).parent().prev().prev().prev().prev().html();
                    $('#currid').val(id);
                    console.log($('#currid').val());
                    console.log($('#addeditdel').val())
                    document.form.submit();
                }

            });

            //Close	modal
            $('#btnclose').on("click", function () {
                document.form.addeditdel.value = 0;
            });
            $('#crossclose').on("click", function () {
                document.form.addeditdel.value = 0;
            });
        </script>

        <?include('end.php'); ?>