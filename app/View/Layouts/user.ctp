<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <?php echo $this->Html->charset(); ?>
        <title><?php echo $description ?>:
            <?php echo $this->fetch('title'); ?>
        </title>

        <meta name="description" content="User login page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <?php 
        echo $this->Html->meta('icon');
        
        echo $this->fetch('meta');
        

        echo $this->Html->css('bootstrap');
        echo $this->Html->css('font-awesome');
        echo $this->Html->css('ace-fonts');
        echo $this->Html->css('ace');
        echo $this->Html->css('bootstrap');        
        echo $this->Html->css('ace-rtl');
        
        echo $this->fetch('css'); 
        
        echo $this->fetch('script');
        ?>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        
        <!--[if lte IE 9]>
                <link rel="stylesheet" href="../assets/css/ace-part2.css" />
        <![endif]-->
        <!--[if lte IE 9]>
          <link rel="stylesheet" href="../assets/css/ace-ie.css" />
        <![endif]-->
        <!--[if lt IE 9]>
        <script src="../assets/js/html5shiv.js"></script>
        <script src="../assets/js/respond.js"></script>
        <![endif]-->
        <?php
        
        //echo $this->Html->meta('icon');

        //echo $this->Html->css('cake.generic');

        
        
        
        ?>

    </head>
    <body>
        <div id="container">
            <div id="header">
                <h1><?php echo $description; ?></h1>
            </div>
            <div id="content">

                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>
            </div>
            <div id="footer">
                <?php
                echo $this->Html->link(
                        $this->Html->image('cake.power.gif', array('alt' => $description, 'border' => '0')), 'http://www.cakephp.org/', array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
                );
                ?>

            </div>
        </div>
        <?php //echo $this->element('sql_dump');  ?>
        
        
        <script type="text/javascript">
			window.jQuery || document.write("<script src='../assets/js/jquery.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
    </body>
</html>
