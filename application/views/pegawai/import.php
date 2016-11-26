 <div class="myAlert"></div>
    <div class="page-title">                    
        <h2><span class="fa fa-arrow-circle-o-left"></span> <?php echo $judul; ?> </h2>
    </div> 


            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Import Xls/Xlsx ke database</div>
                    <div class="panel-body">
                        <form action="<?php echo base_url('pegawai/act_import') ?>" class="form-horizontal" id="formimport" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        
                        <div class="col-md-12" >
                            <label for="x" class="col-md-3 control-label" style="font-size: 14px">Pilih File (xls/xlsx)</label>
                            <div class="col-md-9">
                              <input type="file" class="form-control" id="file" name="file_excel"  placeholder="Pilih File" >
                            </div>
                            
                        </div>                       
                            <div>&nbsp</div>
                         <div class="col-md-12"> 
                         <label for="x" class="col-md-3 control-label"></label>
                            <div class="text-info" class="col-md-9">
                                   <p style="font-size: 14px">&nbsp &nbsp &nbsp Kolom harus sesuai dengan nama field (contoh : nama_ibu,tanggal_lahir), untuk contoh bisa download <a href="http://localhost/phpexcelcodeigniter/data.xlsx" class="btn btn-xs btn-flat btn-info"><i class="glyphicon glyphicon-download"></i> data excel</a></p>
                            </div>
                             <div>&nbsp</div>
                            </div>  
                              
                        <div class="form-group">
                            <label for="x" class="col-sm-3 control-label"></label>
                            <div class="col-sm-8">
                              <button type="submit" id="importbtn" class="btn btn-flat btn-md btn-primary">Import Data</button>
                              <button type="reset" id="resetbtn" class="btn btn-flat btn-md btn-default">Reset Form</button>
                            </div>
                        </div>
                        <div id="respon1"></div>
                        </form>                    </div>
                </div>
            </div>
