
<!--- tab first -->
<div class="theme_link">
    <h3><?php _e('Setup Home Page','almaira-shop'); ?></h3>
    <p><?php _e('Click button to set theme default home page','almaira-shop'); ?></p>
     <p>
        <?php
        if($this->_check_homepage_setup()){
            $class = "activated";
            $btn_text = __("Home Page Activated",'almaira-shop');
            $Bstyle = "display:none;";
            $style = "display:inline-block;";
        }else{
            $class = "default-home";
             $btn_text = __("Set Home Page",'almaira-shop');
             $Bstyle = "display:inline-block;";
            $style = "display:none;";


        }
        ?>
		
		<button style="<?php echo $Bstyle; ?>"; class="button activate-now <?PHP echo $class; ?>"><?php _e($btn_text,'almaira-shop'); ?></button>
        <a style="<?php echo $style; ?>";  target="_blank" href="<?php echo get_home_url(); ?>" class="button alink button-primary"><?php _e('View Home Page','almaira-shop'); ?></a>
		
         </p>
    <p>
        <a target="_blank" href="https://themehunk.com/docs/almaira-shop-theme/#homepage-setting"><?php _e('Manually Setup','almaira-shop'); ?></a>
    </p>


    

</div> 

<!--- tab second -->
<div class="theme_link">

    <h3><?php _e("Documentation","almaira-shop"); ?><!-- <php echo $theme_config['plugin_title']; ?> --></h3>
    <p><?php _e("Our WordPress Theme is well documented, you can go with our documentation and learn to customize Almaira Shop.","almaira-shop"); ?></p>
    <p><a target="_blank" href="https://themehunk.com/docs/almaira-shop-theme/"><?php _e("Go to docs","almaira-shop"); ?></a></p>

    
    
</div>
<!--- tab third -->



<!--- tab second -->
<div class="theme_link">
    <h3><?php _e("Customize Your Website","almaira-shop"); ?><!-- <php echo $theme_config['plugin_title']; ?> --></h3>
    <p><?php _e("Almaira Shop theme support live customizer for home page set up. Everything visible at home page can be changed through customize panel","almaira-shop"); ?></p>
    <p>
    <a href="<?php echo admin_url('customize.php'); ?>" class="button button-primary"><?php _e("Start Customize","almaira-shop"); ?></a>
    </p>
</div>
<!--- tab third -->

  <div class="theme_link">
    <h3><?php _e('Customizer Links','almaira-shop'); ?></h3>
    <div class="card-content">
        <div class="columns">
                <div class="col">
                    <a href="<?php echo admin_url('customize.php?autofocus[control]=custom_logo'); ?>" class="components-button is-link"><?php _e("Upload Logo","almaira-shop"); ?></a>
                    <hr>
                    <a href="<?php echo admin_url('customize.php?autofocus[panel]=almaira-shop-panel-layout'); ?>" class="components-button is-link"><?php _e("Layout","almaira-shop"); ?></a>
                    <hr>
                    <a href="<?php echo admin_url('customize.php?autofocus[section]=almaira-shop-global-color'); ?>" class="components-button is-link"><?php _e("Global Color","almaira-shop"); ?></a><hr>

                </div>


            <div class="col">
                <a href="<?php echo admin_url('customize.php?autofocus[section]=almaira-shop-main-header'); ?>" class="components-button is-link"><?php _e("Header Options","almaira-shop"); ?></a>
                <hr>

                <a href="<?php echo admin_url('customize.php?autofocus[panel]=woocommerce'); ?>" class="components-button is-link"><?php _e("Woocommerce Section","almaira-shop"); ?></a><hr>


                 <a href="<?php echo admin_url('customize.php?autofocus[panel]=almaira-shop-panel-frontpage'); ?>" class="components-button is-link"><?php _e("Frontpage Section","almaira-shop"); ?></a><hr>
            </div>


        </div>
    </div>

</div>
<!--- tab fourth -->

 