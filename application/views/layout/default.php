<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta charset="ISO-8859-15">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="cache-control" content="no-store" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
        <meta http-equiv="pragma" content="no-cache" />
        <meta http-equiv="pragma" content="no-store" />
        

        <title><?php echo $title_for_layout; ?></title>
        <?php if($this->global_setting->favicon_icon){ ?>
            <link rel="icon" href="<?php echo UPLOAD_PATH; ?>/logo/<?php echo $this->global_setting->favicon_icon; ?>" type="image/x-icon" />             
        <?php }else{ ?>
            <link rel="icon" href="<?php echo IMG_URL; ?>favicon.ico" type="image/x-icon" />
        <?php } ?>
        
        
        <!-- Bootstrap -->
        <link href="<?php echo CSS_URL; ?>bootstrap.min.css" rel="stylesheet">
        
        <!-- Font Awesome -->
        <link href="<?php echo VENDOR_URL; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
        <!-- Custom Theme Style -->
        <?php if($this->school_setting->enable_rtl){ ?>
            <link href="<?php echo CSS_URL; ?>rtl/custom-rtl.css" rel="stylesheet">             
        <?php }elseif($this->global_setting->enable_rtl){ ?>
            <link href="<?php echo CSS_URL; ?>rtl/custom-rtl.css" rel="stylesheet">             
        <?php }else{ ?>
       
          <!-- notifications css -->
            <link rel="stylesheet" href="<?php echo VENDOR_URL; ?>notifications/css/lobibox.min.css"/>
            <!-- Vector CSS -->
            <link href="<?php echo VENDOR_URL; ?>vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
            <!-- simplebar CSS-->
            <link href="<?php echo VENDOR_URL; ?>simplebar/css/simplebar.css" rel="stylesheet"/>
            <!-- Bootstrap core CSS-->
            <link href="<?php echo CSS_URL; ?>bootstrap.min.css" rel="stylesheet"/>
            <!-- animate CSS-->
            <link href="<?php echo CSS_URL; ?>animate.css" rel="stylesheet" type="text/css"/>
            <!-- Icons CSS-->
            <link href="<?php echo CSS_URL; ?>icons.css" rel="stylesheet" type="text/css"/>
            <!-- Sidebar CSS-->
            <link href="<?php echo CSS_URL; ?>sidebar-menu.css" rel="stylesheet"/>
            <!-- Custom Style-->
            <link href="<?php echo CSS_URL; ?>app-style.css" rel="stylesheet"/>

             <link href="<?php echo VENDOR_URL; ?>select2/css/select2.min.css" rel="stylesheet" />
             <link href='<?php echo VENDOR_URL; ?>fullcalendar/css/fullcalendar.css' rel='stylesheet'/>
           
        <?php } ?>
        
        <?php //if($this->session->userdata('theme')){ ?>
            <!-- <link href="<?php// echo CSS_URL; ?>theme/<?php// echo $this->session->userdata('theme'); ?>.css" rel="stylesheet"> -->
        <?php //}else{ ?>
            <!-- <link href="<?php// echo CSS_URL; ?>theme/jazzberry-jam.css" rel="stylesheet"> -->
        <?php// } ?>
        
        <!-- jQuery -->
        <script src="<?php echo JS_URL; ?>jquery-1.11.2.min.js"></script>
        <script src="<?php echo JS_URL; ?>jquery.validate.js"></script>
        
         <script type="text/javascript" src="<?php echo VENDOR_URL; ?>toastr/toastr.min.js"></script>
        
        <?php if($this->global_setting->google_analytics){ ?>         
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $this->global_setting->google_analytics; ?>"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());
              gtag('config', '<?php echo $this->global_setting->google_analytics; ?>');
            </script>
        <?php } ?>
        
    </head>

    <body class="nav-md">
        <div id="preloader"></div>    
        <div class="container body">
            <div class="main_container">
                 <?php $this->load->view('layout/left-side'); ?>   
                <!-- top navigation -->
                 <?php $this->load->view('layout/header'); ?>   
                <!-- /top navigation -->
                
                <div class="<?php echo $this->enable_rtl ? 'left_col' : 'right_col'; ?>" role="main" >                  
                    <?php $this->load->view('layout/message'); ?>
                    <!-- page content -->
                    <?php echo $content_for_layout; ?>
                    <!-- /page content -->
                </div>
                <!-- footer content -->
               
                <!-- /footer content -->
            </div>
            <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        </div>
        
          
        <!-- Bootstrap -->
        <script src="<?php echo JS_URL; ?>bootstrap.min.js"></script>    
        
        <!--   Start   -->   
        <link href="<?php echo VENDOR_URL; ?>datatables/rowReorder/rowReorder.dataTables.min.css" rel="stylesheet">
        <link href="<?php echo VENDOR_URL; ?>datatables/rowReorder/responsive.dataTables.min.css" rel="stylesheet">
        
        <link href="<?php echo VENDOR_URL; ?>datatables/buttons.dataTables.min.css" rel="stylesheet"> 
        <link href="<?php echo VENDOR_URL; ?>datatables/dataTables.bootstrap.css" rel="stylesheet"> 
        <script src="<?php echo VENDOR_URL; ?>bootstrap-datatable/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo VENDOR_URL; ?>bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo VENDOR_URL; ?>bootstrap-datatable/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo VENDOR_URL; ?>bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo VENDOR_URL; ?>bootstrap-datatable/js/jszip.min.js"></script>
        <script src="<?php echo VENDOR_URL; ?>bootstrap-datatable/js/pdfmake.min.js"></script>
        <script src="<?php echo VENDOR_URL; ?>bootstrap-datatable/js/vfs_fonts.js"></script>
        <script src="<?php echo VENDOR_URL; ?>bootstrap-datatable/js/buttons.html5.min.js"></script>
        <script src="<?php echo VENDOR_URL; ?>bootstrap-datatable/js/buttons.print.min.js"></script>
        <script src="<?php echo VENDOR_URL; ?>bootstrap-datatable/js/buttons.colVis.min.js"></script> 
        <script src="<?php echo VENDOR_URL; ?>datatables/rowReorder/dataTables.rowReorder.min.js"></script> 
        <script src="<?php echo VENDOR_URL; ?>datatables/rowReorder/dataTables.responsive.min.js"></script> 
         <script src='<?php echo VENDOR_URL; ?>fullcalendar/js/jquery-ui.custom.min.js'></script>
         <script src='<?php echo VENDOR_URL; ?>fullcalendar/js/fullcalendar.js'></script>
         <script src="<?php echo VENDOR_URL; ?>fullcalendar/js/fullcalendar-custom-script.js"></script>
       <!-- dataTable with buttons end -->       
        <link href="<?php echo VENDOR_URL; ?>toastr/toastr.min.css" rel="stylesheet">
       <!-- Custom Theme Scripts -->       
           
       <script src="<?php echo JS_URL; ?>custom.js"></script>  
       <script src="<?php echo JS_URL; ?>jquery.min.js"></script>
        <script src="<?php echo JS_URL; ?>popper.min.js"></script>
        <script src="<?php echo JS_URL; ?>bootstrap.min.js"></script>
            
        <!-- simplebar js -->
        <script src="<?php echo VENDOR_URL; ?>simplebar/js/simplebar.js"></script>
        <!-- waves effect js -->
        <script src="<?php echo JS_URL; ?>waves.js"></script>
        <!-- sidebar-menu js -->
        <script src="<?php echo JS_URL; ?>sidebar-menu.js"></script>
        <!-- Custom scripts -->
        <script src="<?php echo JS_URL; ?>app-script.js"></script>
        
        <!-- Vector map JavaScript -->
        <script src="<?php echo VENDOR_URL; ?>vectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="<?php echo VENDOR_URL; ?>vectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- Sparkline JS -->
        <script src="<?php echo VENDOR_URL; ?>sparkline-charts/jquery.sparkline.min.js"></script>
        <!-- Chart js -->
        <script src="<?php echo VENDOR_URL; ?>Chart.js/Chart.min.js"></script>
        <script src="<?php echo VENDOR_URL; ?>Chart.js/chartjs-script.js"></script>
        <!--notification js -->
        <script src="<?php echo VENDOR_URL; ?>notifications/js/lobibox.min.js"></script>
        <script src="<?php echo VENDOR_URL; ?>notifications/js/notifications.min.js"></script>
        <!-- Index js -->
        <script src="<?php echo JS_URL; ?>index.js"></script>
       <script src="<?php echo JS_URL; ?>custom.js"></script>  
           <!--Select Plugins Js-->
    <script src="<?php echo VENDOR_URL; ?>select2/js/select2.min.js"></script>
     

</body>
</html>