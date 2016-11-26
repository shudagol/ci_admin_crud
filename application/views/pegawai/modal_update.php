 <!-- Bootstrap modal -->
<div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Update Pegawai</h3>
            </div>
            <div class="modal-body form">
                <form id="form2" class="form-horizontal" method="POST">
                    <input type="hidden" value="<?php echo $data_pegawai->id_pegawai ?>" name="id_pegawai"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-9">
                                <input name="nama_pegawai" placeholder="First Name" class="form-control" type="text" value="<?php echo $data_pegawai->nama_pegawai ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3">Jenis Kelamin</label>
                            <div class="col-md-9">
                            
                                <select name="jk" class="form-control">
                                    <option value="">--Pilih Jenis Kelamin--</option>
                                    <option value="laki-laki" <?php if ($data_pegawai->jk=='laki-laki') {echo 'selected';} ?>>Laki-laki</option>
                                    <option value="perempuan" <?php if ($data_pegawai->jk=='perempuan') {echo 'selected';} ?>>Perempuan</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Alamat</label>
                            <div class="col-md-9">
                                <input name="alamat" placeholder="Masukan Kota" class="form-control" type="text" value="<?php echo $data_pegawai->alamat ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Posisi</label>
                            <div class="col-md-9">
                                <select name="id_posisi" class="form-control">
                                    <option value="">--Masukan Posisi--</option>
                                    <?php foreach ($posisi as $key => $value): ?>
                                        <?php if ($data_pegawai->id_posisi==$value->id_posisi){
                                            $selected = 'selected';
                                            }else{
                                            $selected = '';
                                                } ?>
                                        <option value="<?php echo $value->id_posisi ?>" <?php echo $selected; ?> ><?php echo $value->nama_posisi ?></option>
                                    <?php endforeach ?>
                                </select>
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