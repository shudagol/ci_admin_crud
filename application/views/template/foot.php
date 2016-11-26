</div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo site_url('login/act_logout') ?>" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                 
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url('component') ?>/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('component') ?>/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('component') ?>/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->

        <!-- END PAGE PLUGINS -->         

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo base_url('component') ?>/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url('component') ?>/js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->    

     <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='<?php echo base_url('component') ?>/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url('component') ?>/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url('component') ?>/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('component') ?>/js/plugins/tableexport/tableExport.js"></script>
    <script type="text/javascript" src="<?php echo base_url('component') ?>/js/plugins/tableexport/jquery.base64.js"></script>
    <script type="text/javascript" src="<?php echo base_url('component') ?>/js/plugins/tableexport/html2canvas.js"></script>
    <script type="text/javascript" src="<?php echo base_url('component') ?>/js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
    <script type="text/javascript" src="<?php echo base_url('component') ?>/js/plugins/tableexport/jspdf/jspdf.js"></script>
    <script type="text/javascript" src="<?php echo base_url('component') ?>/js/plugins/tableexport/jspdf/libs/base64.js"></script>        
        <!-- END THIS PAGE PLUGINS-->       
    </body>
</html>