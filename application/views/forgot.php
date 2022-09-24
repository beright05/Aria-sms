<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $this->lang->line('lost_your_password'). ' | ' . SMS;  ?></title>
        
         <?php if($this->global_setting->favicon_icon){ ?>
            <link rel="icon" href="<?php echo UPLOAD_PATH; ?>/logo/<?php echo $this->global_setting->favicon_icon; ?>" type="image/x-icon" />             
        <?php }else{ ?>
            <link rel="icon" href="<?php echo IMG_URL; ?>favicon.ico" type="image/x-icon" />
        <?php } ?>
        <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet" />
        
        <?php  // $this->load->view('layout/login-css'); ?>  
        
    </head>

    <body>     
 
         <div id="wrapper">
        <div class="card card-primary card-authentication1 mx-auto my-5 animated bounceInDown">
            <div class="card-body">
                <div class="card-content p-2">
                    <div class="card-title text-uppercase text-center pb-2"><?php echo $this->lang->line('reset_password'); ?>
                    </div>
            
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <p class="red" style="color:#fff;"><?php echo $this->session->flashdata('error'); ?></p>
                        <p class="green" style="color:#fff;"><?php echo $this->session->flashdata('success'); ?></p>
                    </div>
                    <?php echo form_open(site_url('auth/forgotpass'), array('name' => 'login', 'id' => 'login'), ''); ?>
                     <div class="form-group">
                            <div class="position-relative has-icon-right">
                                <label for="exampleInputUsername" class="sr-only">Username</label>
                        <input type="text" name="username" id="exampleInputUsername"
                                    class="form-control form-control-rounded" placeholder="<?php echo $this->lang->line('username'); ?>" autocomplete="off">
                        
                          <div class="form-control-position">            <i class="icon-user"></i>
                                </div>
                            </div>
                        </div>
                   
                   
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input  class="btn btn-primary shadow-primary btn-block waves-effect waves-light" type="submit" name="submit" value="<?php echo $this->lang->line('submit'); ?>"/>
                    </div>
                   <hr>

                     <p class="text-muted">  <a  href="<?php echo site_url('login') ?>"><?php echo $this->lang->line('back_to_login'); ?></a>
        </p>
                    <div class="clearfix"></div>                        
                    <?php echo form_close(); ?>
                </section>
            </div>
        </div>
    </body>
</html>
