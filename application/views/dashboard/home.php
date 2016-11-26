 <script src="<?php echo base_url('component/js/Chart.js') ?>"></script>
 <?php echo  $this->session->flashdata('alert_msg'); ?>             
    
    <div class="page-title">                    
        <h2><span class="fa fa-arrow-circle-o-left"></span> Selamat Datang</h2>
    </div>                   
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
    
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">
                   
                    <div class="panel-body">
                    <div style="width : 40%; height:40%;">
                       <canvas id="myChart" width="100" height="100"></canvas>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    
    </div>
    <!-- END PAGE CONTENT WRAPPER -->                
</div>            
<!-- END PAGE CONTENT -->

<script>
var ctx = document.getElementById("myChart");

var data = {
    labels: [
        <?php 
            foreach ($data as $key => $value) {
                echo "'".$value->nama_posisi."',";
            }
         ?>
    ],
    datasets: [
        {
            data: [
            <?php 
                foreach ($data as $key => $value) {
                    echo $value->jumlah_pegawai.",";
                }
             ?>

            ],
            backgroundColor: [
                "#FF6384",
                "#36A2EB",
                "#FFCE56"
            ],
            hoverBackgroundColor: [
                "#FF6384",
                "#36A2EB",
                "#FFCE56"
            ]
        }]
};

var myRadarChart = new Chart(ctx, {
    type: 'doughnut',
    data: data,
    options: {
            scale: {
                reverse: true,
                ticks: {
                    beginAtZero: true
                }
            }
    }
});
</script>






