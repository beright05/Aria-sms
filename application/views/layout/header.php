<header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top gradient-ibiza">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
           <li class="nav-item">
                        <h4 class="text-info" style="width:100%;">
                            <?php  if($this->session->userdata('role_id') != SUPER_ADMIN){ ?>
                            <?php echo $this->session->userdata('school_name'); ?>
                            <?php }else{ ?>
                            <?php echo $this->global_setting->brand_title ? $this->global_setting->brand_title : SMS; ?>
                            <?php } ?>
                        </h4>
                    </li>

                </ul>
             <ul class="navbar-nav align-items-center right-nav-link">
                    <?php if($this->global_setting->enable_frontend){ ?>
                    <li class="nav-item dropdown-lg">
                        <?php if($this->session->userdata('role_id') != SUPER_ADMIN){ ?>
                        <?php if($this->school_setting->enable_frontend){ ?>
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect"
                            href="<?php echo site_url(); ?>"><i class="fa fa-globe"></i>
                            <?php echo $this->lang->line('web'); ?></a>
                        <?php } ?>
                        <?php }else{ ?>
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect"
                            href="<?php echo site_url(); ?>"><i class="fa fa-globe"></i>
                            <?php echo $this->lang->line('web'); ?></a>

                        <?php } ?>
                    </li>
                    <?php } ?>
           <?php $messages = get_inbox_message(); ?>
                    <?php if(isset($messages) && !empty($messages)){ ?>
                        <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
	                      <i class="icon-bell"></i><span class="badge badge-primary badge-up"><?php echo count($messages); ?></span></a>
                 <div style="width:30%" class="dropdown-menu dropdown-menu-right animated fadeIn">
                        <ul id="menu1" class="list-group list-group-flush" role="menu">
                            
                           <?php foreach($messages as $obj){ ?> 
                           <li class="list-group-item">
                               
                                <?php $user = get_user_by_id($obj->sender_id); ?>
                                <div class="media">
                                     <div class="col-sm-3  col-xs-3"><img  src="<?php echo IMG_URL; ?>default-user.png" width="50" height="50" alt="Profile Image" /></span>
                                             </div>
                                   <div class="media-body">
                                <a href="<?php echo site_url('message/view/'.$obj->id); ?>">
                                  
                                        <span><?php echo @$user->name; ?></span>
                                        <span class="time"><?php echo get_nice_time($obj->created_at); ?></span>
                                    </span>
                                    <span class="message">
                                        <?php echo $obj->subject; ?>
                                    </span>
                                </a>
                           </div>
                           </div>
                           
                            </li>                    
                            <?php } ?>
                            <li>
                                <div class="text-center">
                                    <a href="<?php echo site_url('message/inbox'); ?>">
                                        <strong><?php echo $this->lang->line('view_all'); ?></strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <?php } ?>                     
            
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"
                            href="javascript:;">
                            <?php
                                $photo = $this->session->userdata('photo');
                                $role_id = $this->session->userdata('role_id');
                                $path = '';
                                if($role_id == STUDENT){ $path = 'student'; }
                                elseif($role_id == GUARDIAN){ $path = 'guardian'; }
                                elseif($role_id == TEACHER){ $path = 'teacher'; }
                                else{ $path = 'employee'; }
                            ?>
                            <?php if ($photo != '') { ?>
                            <span class="user-profile">
                                <img src="<?php echo UPLOAD_PATH; ?>/<?php echo $path; ?>-photo/<?php echo $photo; ?>"
                                    class="img-circle" alt="user avatar" width="60" />
                            </span>
                            <?php } else { ?>
                            <span class="user-profile">
                                <img src="<?php echo IMG_URL; ?>/default-user.png" class="img-circle" alt="user avatar"
                                    width="60" />
                            </span>
                            <?php } ?>
                            <?php echo $this->session->userdata('name'); ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
                            <li class="dropdown-item"><a href="<?php echo site_url('profile/index'); ?>">
                                    <?php echo $this->lang->line('profile'); ?></a></li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><a
                                    href="<?php echo site_url('profile/password'); ?>"><?php echo $this->lang->line('reset_password'); ?></a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><a href="<?php echo site_url('auth/logout'); ?>"><i
                                        class="fa fa-sign-out pull-right"></i>
                                    <?php echo $this->lang->line('logout'); ?></a></li>                                    
                 
                </ul>
                
            </div>
        </nav>
    </div>
</div>
 <div class="clearfix"></div>
<div class="content-wrapper">
<div class="container-fluid">
<?php if(has_permission(VIEW, 'setting', 'globalsearch') || has_permission(VIEW, 'setting', 'sessionchange')){ ?> 

    <div class="<?php echo $this->enable_rtl ? 'left_col' : 'right_col'; ?> fn_header_global no-print">  
    <div class="x_panel" style="padding-bottom: 2px;margin: 0px; ">             
        <div class="x_content"> 
            <div class="row">               
               <?php if(has_permission(VIEW, 'setting', 'globalsearch')){ ?> 
                <div class="col-md-5 col-sm-5 col-xs-12">        
                        <?php if ($this->session->userdata('role_id') == SUPER_ADMIN) { ?>                
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item form-group">        
                                    <select  class="form-control single-select" name="search_school_id" id="search_school_id" required="required">
                                        <option value="">--<?php echo $this->lang->line('select_school'); ?>--</option>
                                        <?php foreach ($this->schools as $obj) { ?>
                                            <option value="<?php echo $obj->id; ?>" ><?php echo $obj->school_name; ?></option>
                                        <?php } ?>
                                    </select>       
                                </div>
                            </div>
                        
                        <?php } else { ?>  
                           <div class="form-row">
                               <label class="text-right" style="padding-top: 5px;"><?php echo $this->lang->line('global_search'); ?></label>
                                <input type="hidden" class="" name="search_school_id" id="search_school_id" value="<?php echo $this->session->userdata('school_id'); ?>" >
                           
                        <?php } ?>

                        
                            <span class="form-group col-md-6" style="float:right; margin-top:-55px;">                                
                                <input type="text"  class="form-control"  name="global_search"  id="global_search" onkeyup="get_search(this.value);" placeholder="<?php echo $this->lang->line('global_search'); ?>" required="required">
                            
                        </span>
                    </div>                       
               
               <?php } ?>
                                
                <?php if(has_permission(VIEW, 'setting', 'sessionchange')){ ?> 
                 <div class="col-md-1 col-sm-1 col-xs-1 header-form-sep"> |</div>
                
                 <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="row">
                        <?php if ($this->session->userdata('role_id') == SUPER_ADMIN) { ?>                
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="item form-group">        
                                    <select  class="form-control single-select" name="ay_school_id" id="ay_school_id" required="required" onchange="get_academic_year_by_school(this.value, '');">
                                        <option value="">--<?php echo $this->lang->line('select_school'); ?>--</option>
                                        <?php foreach ($this->schools as $obj) { ?>
                                            <option value="<?php echo $obj->id; ?>" ><?php echo $obj->school_name; ?></option>
                                        <?php } ?>
                                    </select>       
                                </div>
                            </div>
                        <?php } else { ?>                           
                            <input type="hidden" class="" name="ay_school_id" id="ay_school_id" value="<?php echo $this->session->userdata('school_id'); ?>" />
                        <?php } ?>

                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="item form-group"> 
                                <select  class="form-control single-select"  name="ay_academic_year_id"  id="ay_academic_year_id" required="required">
                                    <option value="">--<?php echo $this->lang->line('session_year'); ?>--</option>                                                                   
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="form-group">
                                <button  type="submit" class="btn btn-success shadow-success m-1" onclick="update_academic_year();"><?php echo $this->lang->line('update'); ?></button>
                            </div>
                        </div>

                    </div>          
                </div> 
                <?php } ?>
                
            </div>
            
            
            <!-- ====================START ======================= -->
            <div class="search_result_container"  style="position: absolute; padding-top: 1px; z-index: 999; background: #000;width: 100%; display: none;">
                <div class="row search_result" style="background: #fff; margin:0px 25px 10px  25px;">                    
                </div>
            </div>
            <!-- ====================END ======================= -->
            
        </div>
    </div>
</div>
<script>
        $(document).ready(function() {
            $('.single-select').select2();
           
        });
        </script>
<script type="text/javascript">
    
    //================ SEARCH ======================================================
      function get_search(keyword){        
         
        var school_id = $('#search_school_id').val(); 
        if(!school_id){
           toastr.error('<?php echo $this->lang->line('select_school'); ?>');           
           return false;
        }
        
        if(!keyword){
            $('.search_result').html(''); 
            $('.search_result_container').hide(); 
            return false;
        }
        
        $('.search_result_container').show();  
        $('.search_result').html('<p style="padding: 20px;text-align:center;"><img src="<?php echo IMG_URL; ?>loading.gif" style="width: 40px;" /></p>');
        
        $.ajax({       
            type   : "POST",
            url    : "<?php echo site_url('dashboard/get_search'); ?>",
            data   : { school_id : school_id, keyword : keyword},               
            async  : false,
            success: function(response){                                                   
               if(response)
               {                                                      
                   $('.search_result_container').show();                                     
                   $('.search_result').html(response);                                     
               }else{
                   $('.search_result_container').hide(); 
               }
            }
        }); 
    }
    
    
    
    //======================== ACADEMIC YEAR ==================================
    <?php if ($this->session->userdata('role_id') != SUPER_ADMIN && has_permission(VIEW, 'setting', 'sessionchange')) { ?> 
         get_academic_year_by_school($('#ay_school_id').val(), '');
    <?php } ?>    
        
    function get_academic_year_by_school(ay_school_id, ay_academic_year_id){        
         
        if(!ay_school_id){
           toastr.error('<?php echo $this->lang->line('select_school'); ?>');
            $('#ay_academic_year_id').prop('selectedIndex',0);
           return false;
        }
         
        $.ajax({       
            type   : "POST",
            url    : "<?php echo site_url('ajax/get_academic_year_by_school'); ?>",
            data   : { school_id : ay_school_id, academic_year_id : ay_academic_year_id},               
            async  : false,
            success: function(response){                                                   
               if(response)
               {
                   $('#ay_academic_year_id').html(response);                                     
               }
            }
        }); 
    }
    
    function update_academic_year(){
    
       var ay_school_id = $('#ay_school_id').val();
       var ay_academic_year_id = $('#ay_academic_year_id').val();
       
       if(!ay_school_id){
           toastr.error('<?php echo $this->lang->line('select_school'); ?>');
            $('#ay_academic_year_id').prop('selectedIndex',0);
           return false;
        }
        
       if(!ay_academic_year_id){
           toastr.error('<?php echo $this->lang->line('session_year'); ?>');           
           return false;
        }
        
        $.ajax({       
            type   : "POST",
            url    : "<?php echo site_url('administrator/year/update_academic_year'); ?>",
            data   : { school_id : ay_school_id, academic_year_id : ay_academic_year_id},               
            async  : false,
            success: function(response){                                                   
               if(response)
               {
                   toastr.success('<?php echo $this->lang->line('update_success') ?>');                   
                   location.reload();
               }else{
                   toastr.error('<?php echo $this->lang->line('update_failed') ?>'); 
               }
            }
        });        
    }

 
</script>

 <?php } ?>
 