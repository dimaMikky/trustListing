<!-- Диалоговое окно редактирования -->
  <!--rus modal -->
  <div id="adModal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
           <form enctype="multipart/form-data" name="form" class="form-horizontal" role="form" action="" method="post"> 
           <input type="hidden" name="currid" id="currid" value="0">
            <input type="hidden" name="addeditdel" id="addeditdel" value="0">
            <input type="hidden" name="checkMain" id="checkMain" value="0">
            <input type="hidden" name="delFile" id="delFile" value="0">
            <div class="form-group ">
              <div class="row">
                <div class="col-md-5">
                <div class="file-field md-form">
                      <div class="btn btn-outline-info waves-effect btn-md">
                        <span>Upload image Upload image to TOP:
                          <span class="colortext">(*)</span>
                        </span>
                        <input type="file" name="inputFile" id="inputFile"></input>
                        <p id="fileName"></p>
                      </div>
                    </div>
                    <div class="file-field md-form">
                      <div class="btn btn-outline-info waves-effect btn-md">
                        <span>Upload image Right-Side Top:
                          <span class="colortext">(*)</span>
                        </span>
                        <input type="file" name="inputFile" id="inputFile"></input>
                        <p id="fileName"></p>
                      </div>
                    </div>
                </div>
                <div class="col-md-5 ml-auto">
                <div class="file-field md-form">
                      <div class="btn btn-outline-info waves-effect btn-md">
                        <span>Upload image Right-Side Down:
                          <span class="colortext">(*)</span>
                        </span>
                        <input type="file" name="inputFile" id="inputFile"></input>
                        <p id="fileName"></p>
                      </div>
                    </div>
                    <div class="file-field md-form">
                      <div class="btn btn-outline-info waves-effect btn-md">
                        <span>Upload image Down:
                          <span class="colortext">(*)</span>
                        </span>
                        <input type="file" name="inputFile" id="inputFile"></input>
                        <p id="fileName"></p>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="float-left btn btn-outline-secondary waves-effect" id="btnBack">Back to original</button>
              <button type="button" class="btn btn-outline-success waves-effect btnsave" id="btnsave">Save</button>
              <button type="button" class="btn btn-outline-danger waves-effect" id="btnclose2" data-dismiss="modal" aria-hidden="true">Cancel</button>
            </div>
       
          </div>
        </div>
      </div>
    </div>
  </div>