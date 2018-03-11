<?php
include('chlog.php');
include("connect.php");
$curmenu = 3;
$userid = $_SESSION['userid'] ;
$addeditdel = (isset($_POST['addeditdel'])) ? $_POST['addeditdel'] : 0 ;
$currid = (isset($_POST['currid'])) ? $_POST['currid'] : 0 ;
$trimmed = trim($currid);
//gather eng form input
$checkMain = (isset($_POST['checkMain'])) ? $_POST['checkMain'] : "0" ;
$inputTitle = (isset($_POST['inputTitle'])) ? $_POST['inputTitle'] : "" ;
$inputDescr = (isset($_POST['inputDescr'])) ? $_POST['inputDescr'] : "" ;
$inputDaysOnline = (isset($_POST['inputDaysOnline'])) ? $_POST['inputDaysOnline'] : "" ;
$inputText = (isset($_POST['inputText'])) ? $_POST['inputText'] : "" ;
$inputText = (isset($_POST['inputText'])) ? $_POST['inputText'] : "" ;
$inputMonSinse = (isset($_POST['inputMonSinse'])) ? $_POST['inputMonSinse'] : "" ;
$pros1 = (isset($_POST['pros1'])) ? $_POST['pros1'] : "" ;
$pros2 = (isset($_POST['pros2'])) ? $_POST['pros2'] : "" ;
$pros3 = (isset($_POST['pros3'])) ? $_POST['pros3'] : "" ;
$cons1 = (isset($_POST['cons1'])) ? $_POST['cons1'] : "" ;
$cons2 = (isset($_POST['cons2'])) ? $_POST['cons2'] : "" ;
$cons3 = (isset($_POST['cons3'])) ? $_POST['cons3'] : "" ;
//gather rus form input
$inputTitle_rus = (isset($_POST['inputTitle_rus'])) ? $_POST['inputTitle_rus'] : "" ;
$inputDescr_rus = (isset($_POST['inputDescr_rus'])) ? $_POST['inputDescr_rus'] : "" ;
$inputText_rus = (isset($_POST['inputText_rus'])) ? $_POST['inputText_rus'] : "" ;
$pros1_rus = (isset($_POST['pros1_rus'])) ? $_POST['pros1_rus'] : "" ;
$pros2_rus = (isset($_POST['pros2_rus'])) ? $_POST['pros2_rus'] : "" ;
$pros3_rus = (isset($_POST['pros3_rus'])) ? $_POST['pros3_rus'] : "" ;
$cons1_rus = (isset($_POST['cons1_rus'])) ? $_POST['cons1_rus'] : "" ;
$cons2_rus = (isset($_POST['cons2_rus'])) ? $_POST['cons2_rus'] : "" ;
$cons3_rus = (isset($_POST['cons3_rus'])) ? $_POST['cons3_rus'] : "" ;
switch  ($addeditdel) {
	case (1) :
		// Insert news
      $resinp = mysql_query("INSERT INTO mining (title, description, daysOnline, review, MonSinse, pros1, pros2, pros3, cons1, cons2, cons3, title_rus, description_rus, review_rus, pros1_rus, pros2_rus, pros3_rus, cons1_rus, cons2_rus, cons3_rus)
       VALUES ('$inputTitle', '$inputDescr','$inputDaysOnline', '$inputText', '$inputMonSinse', '$pros1', '$pros2', '$pros3', '$cons1', '$cons2', '$cons3', '$inputTitle_rus', '$inputDescr_rus', '$inputText_rus', '$pros1_rus', '$pros2_rus', '$pros3_rus', '$cons1_rus', '$cons2_rus', '$cons3_rus')");
      header("Location: mining.php");
		break ;
	case (2) :
    // Edit news
     $resedit = mysql_query("UPDATE `mining` SET `title`='$inputTitle', `description`='$inputDescr', `daysOnline`='$inputDaysOnline', `review`='$inputText', `MonSinse`='$inputMonSinse', `pros1`='$pros1', `pros2`='$pros2', `pros3`='$pros3', `cons1`='$cons1', `cons2`='$cons2', `cons3`='$cons3',
     `title_rus`='$inputTitle_rus', `description_rus`='$inputDescr_rus', `review_rus`='$inputText_rus', `pros1_rus`='$pros1_rus', `pros2_rus`='$pros2_rus', `pros3_rus`='$pros3_rus', `cons1_rus`='$cons1_rus', `cons2_rus`='$cons2_rus', `cons3_rus`='$cons3_rus' WHERE `id`='$trimmed'");
      header("Location: mining.php");
		break ;
	case (3) :
		// Del news full
		  $resdel = mysql_query("DELETE FROM mining WHERE `id`='$trimmed'");
      header("Location: mining.php");
    break ;
}
  $addeditdel = 0;
  $result = mysql_query("SELECT * FROM mining WHERE 1 ORDER BY id DESC") or die(mysql_error());
 include("beg_a.php");
include('left_nav.php'); 
?>
  <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
    <h1>What’s up, Boss?</h1>
    <section class="row placeholders">
    </section>

    <h2>Somethimg else</h2>

    <div class="table-responsive">
      <table class="table table-striped table-sm ">
        <thead>
          <tr>
            <th>id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Text</th>
            <th class="text-center">Manage</th>
            <th class="text-center">Language</th>
          </tr>
        </thead>
        <tbody>
          <? while ($row=mysql_fetch_object($result)) { 
          $title = strip_tags($row->title);
          $titleCut = (strlen($title) > 11) ? substr($title, 0, 11) : $title ;
          $descr = strip_tags($row->description);
          $descrCut = (strlen($descr) > 20) ? substr($descr, 0, 20) : $descr ;
          $rev = strip_tags($row->review);
          $revCut = (strlen($rev) > 40) ? substr($rev, 0, 40) : $rev ;?>
            <tr>
              <td>
                <? echo $row->id; ?>
              </td>
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
                <button type="button" class="btn btn-warning btn-sm edit">Edit</button>
                <button type="button" class="btn btn-danger btn-sm del">Delete</button>
              </td>
              <td class="text-center">
                <button type="button" class="btn btn-info btn-sm btnRus">Rus</button>
              </td>
            </tr>
            <? } ?>
        </tbody>
      </table>
    </div>
    </table>
    </div>
  </main>
  </div>
  </div>
  <!-- Диалоговое окно редактирования -->
  <!-- Large modal -->
  <div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" id="crossclose" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 id="myModalLabel">New story</h4>
        </div>
        <div class="modal-body">
          <form enctype="multipart/form-data" name="form" class="form-horizontal" role="form" action="" id="form" method="post">
            <input type="hidden" name="currid" id="currid" value="0">
            <input type="hidden" name="addeditdel" id="addeditdel" value="0">
            <input type="hidden" name="checkMain" id="checkMain" value="0">
            <input type="hidden" name="delFile" id="delFile" value="0">

            <div class="form-group">
              <label for="inputTitle" class="col-sm-3 form-control-label">Title:</label>
              <div class="col-sm-12">
                <input type="form-control" name="inputTitle" class="form-control inputTitle" id="inputTitle">
              </div>
              <label for="inputDescr" class="col-sm-1 form-control-label">Description:</label>
              <div class="col-sm-12">
                <input type="form-control" name="inputDescr" class="form-control inputDescr" id="inputDescr">
              </div>
            </div>
            <div class="form-group">
              <label for="inputReview" class="form-control-label">Text review:</label>
              <textarea class="form-control inputText" name="inputText" id="inputText"></textarea>
            </div>
            <div class="form-group">
              <label for="inputDaysOnline" class="form-control-label">Days online:</label>
              <textarea class="form-control inputDaysOnline" name="inputDaysOnline" id="inputDaysOnline"></textarea>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-5">Pros:
                  <input type="form-control" name="pros1" class=" form-control pros1" id="pros1" style="width: 100%">
                  <input type="form-control" name="pros2" class=" form-control pros2" id="pros2" style="width: 100%">
                  <input type="form-control" name="pros3" class=" form-control pros3" id="pros3" style="width: 100%">
                </div>

                <div class="col-md-5 ml-auto"> Cons:
                  <input type="form-control" name="cons1" class=" form-control cons1" id="cons1" style="width: 100%">
                  <input type="form-control" name="cons2" class=" form-control cons2" id="cons2" style="width: 100%">
                  <input type="form-control" name="cons3" class=" form-control cons3" id="cons3" style="width: 100%">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="inputMonSinse" class="form-control-label">Monitored since:</label>
              <textarea class="form-control inputMonSinse" name="inputMonSinse" id="inputMonSinse"></textarea>
            </div>
            <div class="modal-footer" id="manFile">
              <button type="button" class="float-left btn btn-danger" id="btnRus">Russian version</button>
              <button type="button" class="btn btn-success btnsave" id="btnsave">Save</button>
              <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal"
                aria-hidden="true">Cancel</button>
            </div>
            <!--</form>-->
        </div>
      </div>
    </div>
  </div>
  <!-- Диалоговое окно редактирования -->
  <!--rus modal -->
  <div id="rusModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" id="crossclose" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 id="myModalLabel">Новая запись</h4>
        </div>
        <div class="modal-body">
          <!-- <form enctype="multipart/form-data" name="form" class="form-horizontal" role="form" action="" method="post"> -->
          <div class="form-group">
            <label for="inputTitle" class="col-sm-3 form-control-label">Title/Заголовок:</label>
            <div class="col-sm-12">
              <input type="form-control" name="inputTitle_rus" class="form-control inputTitle_rus" id="inputTitle_rus">
            </div>
            <label for="inputDescr" class="col-sm-1 form-control-label">Description/Описание:</label>
            <div class="col-sm-12">
              <input type="form-control" name="inputDescr_rus" class="form-control inputDescr_rus" id="inputDescr_rus">
            </div>
          </div>
          <div class="form-group">
            <label for="inputReview" class="form-control-label">Text review/Основной текст:</label>
            <textarea class="form-control inputText_rus" name="inputText_rus" id="inputText_rus"></textarea>
          </div>
          <!-- <div class="form-group">
          <label for="inputDaysOnline" class="form-control-label">Days online/чето там:</label>
          <textarea class="form-control inputDaysOnline_rus" name="inputDaysOnline" id="inputDaysOnline"></textarea>
        </div>-->

          <div class="form-group">
            <div class="row">
              <div class="col-md-5">Pros/Плюсы:
                <input type="form-control" name="pros1_rus" class=" form-control pros1_rus" id="pros1_rus" style="width: 100%">
                <input type="form-control" name="pros2_rus" class=" form-control pros2_rus" id="pros2_rus" style="width: 100%">
                <input type="form-control" name="pros3_rus" class=" form-control pros3_rus" id="pros3_rus" style="width: 100%">
              </div>

              <div class="col-md-5 ml-auto"> Cons/Минусы:
                <input type="form-control" name="cons1_rus" class=" form-control cons1_rus" id="cons1_rus" style="width: 100%">
                <input type="form-control" name="cons2_rus" class=" form-control cons2_rus" id="cons2_rus" style="width: 100%">
                <input type="form-control" name="cons3_rus" class=" form-control cons3_rus" id="cons3_rus" style="width: 100%">
              </div>
            </div>
          </div>
          <!--<div class="form-group">
        <label for="inputMonSinse" class="form-control-label">Monitored since/еще чето там:</label>
        <textarea class="form-control inputMonSinse_rus" name="inputMonSinse" id="inputMonSinse"></textarea>
      </div>-->
          <div class="modal-footer">
            <button type="button" class="float-left btn btn-danger" id="btnBack">Back to original</button>
            <button type="button" class="btn btn-success btnsave" id="btnsave">Save</button>
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
        $('#inputTitle_rus').val("");
          $('#inputDescr_rus').val("");
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
          $('#inputDaysOnline').val("");
          $('#inputMonSinse').val("");
          $('#pros1').val("");
          $('#pros2').val("");
          $('#pros3').val("");
          $('#cons1').val("");
          $('#cons2').val("");
          $('#cons3').val("");
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
        $('#btnRus').show();
        $('.btnsave').html('Save');
        $('#myModal').modal("show");
      });

      //switch to russian
      $('#btnRus').on("click", function () {
        $('#btnBack').show();
        $('.btnsave').hide();
        $('#rusModal').modal("show");
      });
      $('#btnBack').on("click", function () {
        $('.btnsave').show();
        $('#rusModal').modal("hide");
      });
      });

    //Form Save
    $('.btnsave').on('click', function () {
      console.log($('#addeditdel').val())
      document.getElementById("form").submit()
      $('#myModal').modal("hide");
      $('#rusModal').modal("hide");
    })
    

    //Form Edit eng
    $('.edit').on("click", function () {
      $('#addeditdel').val(2);
      var id =  $(this).parent().prev().prev().prev().prev().html();
      $('#currid').val(id);
      console.log($('#currid').val());
      console.log($('#addeditdel').val())
      //
      $.post("getdata.php", {
          id: id
        },
        function (data, status) {
          //alert("Data: " + data + "\nStatus: " + status);
          var obj = JSON.parse(data);
          console.log(obj);
          $('#inputTitle_rus').val(obj.title_rus);
          $('#inputDescr_rus').val(obj.description_rus);
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
          $('#inputDaysOnline').val(obj.daysOnline);
          $('#inputMonSinse').val(obj.MonSinse);
          $('#pros1').val(obj.pros1);
          $('#pros2').val(obj.pros2);
          $('#pros3').val(obj.pros3);
          $('#cons1').val(obj.cons1);
          $('#cons2').val(obj.cons2);
          $('#cons3').val(obj.cons3);
          $('#inputText').val(obj.text);
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
      $('#btnRus').hide();
      $('.btnsave').html('Update');
      $('#myModal').modal("show");
    });
    //Form Edit rus
    $('.btnRus').on("click", function () {
      $('#addeditdel').val(2);
      var id =  $(this).parent().prev().prev().prev().prev().prev().html();
      $('#currid').val(id);
      console.log($('#currid').val());
      console.log($('#addeditdel').val())
      //
      $.post("getdata.php", {
          id: id
        },
        function (data, status) {
          //alert("Data: " + data + "\nStatus: " + status);
          var obj = JSON.parse(data);
          console.log(obj);
          $('#inputTitle').val(obj.title);
          $('#inputDescr').val(obj.description);
          $('#inputDaysOnline').val(obj.daysOnline);
          $('#inputMonSinse').val(obj.MonSinse);
          $('#pros1').val(obj.pros1);
          $('#pros2').val(obj.pros2);
          $('#pros3').val(obj.pros3);
          $('#cons1').val(obj.cons1);
          $('#cons2').val(obj.cons2);
          $('#cons3').val(obj.cons3);
          $('#inputText').val(obj.text);
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
          $('#inputTitle_rus').val(obj.title_rus);
          $('#inputDescr_rus').val(obj.description_rus);
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
      $('.btnsave').html('Update');
      $('#rusModal').modal("show");
    });

      //Form Del
	$('.del').on("click",function(){
    $('#addeditdel').val(3);
    var id =  $(this).parent().prev().prev().prev().prev().html();
    $('#currid').val(id);
    console.log($('#currid').val());
    console.log($('#addeditdel').val())
      document.form.submit();
	});

    	//Close	modal
	$('#btnclose').on("click",function(){
		document.form.addeditdel.value = 0;
		});
	$('#crossclose').on("click",function(){
		document.form.addeditdel.value = 0;
		});
  </script>

  <?include('end.php'); ?>