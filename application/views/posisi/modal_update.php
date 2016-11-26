 <!-- Bootstrap modal -->
<div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Update posisi</h3>
            </div>
            <div class="modal-body form">
                <form id="form2" class="form-horizontal" method="POST">
                    <input type="hidden" value="<?php echo $posisi->id_posisi ?>" name="id_posisi"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-9">
                                <input name="nama_posisi" placeholder="First Name" class="form-control" type="text" value="<?php echo $posisi->nama_posisi ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
 
                        <input type="submit" value="save">                      
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="btnSave" class="btn btn-primary btn-update" form="form2" >save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->