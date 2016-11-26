    <!-- START BREADCRUMB -->
  <!--   <ul class="breadcrumb">
        <li><a href="#">Link</a></li>                    
        <li class="active">Active</li>
    </ul> -->
    <!-- END BREADCRUMB -->                
    <div class="myAlert"></div>
    <div class="page-title">                    
        <h2><span class="fa fa-arrow-circle-o-left"></span> <?php echo $judul; ?> </h2>
    </div>                   
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">

        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">
                    <!-- <div class="panel-heading">
                        <h3 class="panel-title">Panel Title</h3>
                    </div> -->
                    <div class="panel-body">
                       <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">DataTable Export</h3>

                            <button class="btn btn-primary " onclick="add_person()" style="margin-left:660px"><i class="fa fa-table "></i>  Tambah Data</button>
                            <div class="btn-group pull-right"> 

                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                 
                                <ul class="dropdown-menu">
                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'false'});"><img src='<?php echo base_url('component') ?>/img/icons/json.png' width="24"/> JSON</a></li>
                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});"><img src='<?php echo base_url('component') ?>/img/icons/json.png' width="24"/> JSON (ignoreColumn)</a></li>
                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'true'});"><img src='<?php echo base_url('component') ?>/img/icons/json.png' width="24"/> JSON (with Escape)</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'xml',escape:'false'});"><img src='<?php echo base_url('component') ?>/img/icons/xml.png' width="24"/> XML</a></li>
                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'sql'});"><img src='<?php echo base_url('component') ?>/img/icons/sql.png' width="24"/> SQL</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo base_url('component') ?>/img/icons/csv.png' width="24"/> CSV</a></li>
                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo base_url('component') ?>/img/icons/txt.png' width="24"/> TXT</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo base_url('component') ?>/img/icons/xls.png' width="24"/> XLS</a></li>
                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo base_url('component') ?>/img/icons/word.png' width="24"/> Word</a></li>
                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo base_url('component') ?>/img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo base_url('component') ?>/img/icons/png.png' width="24"/> PNG</a></li>
                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo base_url('component') ?>/img/icons/pdf.png' width="24"/> PDF</a></li>
                                </ul>
                            </div>                                    

                        </div>
                        <div class="panel-body">
                            <a href="<?php echo base_url('pegawai') ?>" class="reload"></a>
                            <table id="tabel" class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="tabel-body">


                                </tbody>
                            </table>                                    

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</div>
<!-- END PAGE CONTENT WRAPPER -->                
</div>            
<!-- END PAGE CONTENT -->
<div id="m-update"></div>

<script type="text/javascript">


    function add_person()
    {
        save_method = 'add';
    $('#form1')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Tambah Data'); // Set Title to Bootstrap modal title
}



function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}



window.onload = function(){

    var table;
    function tampil(){

      $.get("<?php echo base_url('posisi/data_foreach') ?>", function(msg){
        $('#tabel-body').html(msg);
        table = $('#tabel').DataTable();
    });
  }

  $(document).ready(function() {
    tampil();
});

// $(document).on("click", "a", function(event) {
//   event.preventDefault();
//   table.destroy();
//   tampil();
// });


$('#form1').submit(function(e) {

    var posisi = $(this).serialize();

    $.ajax({
        method : 'POST',
        url: '<?php echo base_url('posisi/act_save') ?>',
        data: posisi
    })
    .done(function(msg) {
        $('.myAlert').show();
        $('.myAlert').html('<div class="alert alert-success" role="alert">Berhasil</div>').delay( 5000 ).fadeOut( 400 );
        $('#modal_form').modal('hide');
        table.destroy();

        tampil();
        // window.location.reload();
        // 
        
        
    });

    e.preventDefault();
    
});

$('#form2').submit(function(e) {

    alert('tes');

    var pegawaiform = $(this).serialize();

    $.ajax({
        method : 'POST',
        url: '<?php echo base_url('pegawai/act_edit') ?>',
        data: pegawaiform
    })
    .done(function(msg) {
        $('.myAlert').show();
        $('.myAlert').html('<div class="alert alert-success" role="alert">Berhasil</div>').delay( 5000 ).fadeOut( 400 );
        $('#modal_form').modal('hide');
        table.destroy();

        tampil();

        
        
    })

    e.preventDefault();
    
});

$(document).on("click", ".btn-edit", function() {
    var id = $(this).attr('data-id');
    $.get("<?php echo base_url(); ?>posisi/edit/"+id, function(msg){
        // alert(msg);
        $('#m-update').html(msg);
        $('#edit').modal('show');
        
    });
});

$(document).on("submit", "#form2", function(e) {
    var pegawaiform = $(this).serialize();

    $.ajax({
        method : 'POST',
        url: '<?php echo base_url('posisi/act_edit') ?>',
        data: pegawaiform
    })
    .done(function(msg) {
        $('.myAlert').show();
        $('.myAlert').html('<div class="alert alert-success" role="alert">Berhasil</div>').delay( 5000 ).fadeOut( 400 );
        $('#edit').modal('hide');
        table.destroy();
        tampil();   
    })

    e.preventDefault();

});


$(document).on("click", ".btn-delete", function(e) {
    var tes = confirm('Are you sure you want to delete this item?');
    if (tes) {
        var id = $(this).attr('data-id');
        $.get("<?php echo base_url(); ?>posisi/hapus/"+id, function(){
            $('#edit').modal('hide');
            table.destroy();
            tampil();   


        });
        e.preventDefault();
    }
});





}




</script>



<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Tambah Posisi</h3>
            </div>
            <div class="modal-body form">
                <form id="form1" class="form-horizontal" method="POST">
                    <!-- <input type="hidden" value="" name="id"/>  -->
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Posisi</label>
                            <div class="col-md-9">
                                <input name="nama_posisi" placeholder="masukan posisi" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>                         
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="btnSave" class="btn btn-primary" form="form1" >save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
