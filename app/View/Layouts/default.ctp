<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Dashboard - Ace Admin</title>

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="/css/bootstrap.css" />
        <link rel="stylesheet" href="/css/font-awesome.css" />

        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="/css/ace-fonts.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
                <link rel="stylesheet" href="/css/ace-part2.css" class="ace-main-stylesheet" />
        <![endif]-->

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="/css/ace-ie.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="/js/ace-extra.js"></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="/js/html5shiv.js"></script>
        <script src="/js/respond.js"></script>
        <![endif]-->
    </head>

    <body class="no-skin">
        <?php echo $this->element('header'); ?>

        <!-- /section:basics/navbar.layout -->
        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.check('main-container', 'fixed')
                } catch (e) {
                }
            </script>
            <?php echo $this->element('sidebar'); ?>


            <!-- /section:basics/sidebar -->
            <div class="main-content">
                <div class="main-content-inner">
                    
                    <?php echo $this->element('breadcrumb'); ?>
                    <!-- /section:basics/content.breadcrumbs -->
                    <div class="page-content">                        

                        <?php echo $this->fetch('content'); ?>
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->
            
            <?php echo $this->element('footer');?>
            
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script type="text/javascript">
            window.jQuery || document.write("<script src='/js/jquery.js'>" + "<" + "/script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
        <script type="text/javascript">
            if ('ontouchstart' in document.documentElement)
                document.write("<script src='/js/jquery.mobile.custom.js'>" + "<" + "/script>");
        </script>
        <script src="/js/bootstrap.js"></script>

        <!-- page specific plugin scripts -->

        <!--[if lte IE 8]>
          <script src="/js/excanvas.js"></script>
        <![endif]-->
        <script src="/js/jquery-ui.custom.js"></script>
        <script src="/js/jquery.ui.touch-punch.js"></script>
        <script src="/js/jquery.easypiechart.js"></script>
        <script src="/js/jquery.sparkline.js"></script>
        <script src="/js/flot/jquery.flot.js"></script>
        <script src="/js/flot/jquery.flot.pie.js"></script>
        <script src="/js/flot/jquery.flot.resize.js"></script>

        <!-- ace scripts -->
        <script src="/js/ace/elements.scroller.js"></script>
        <script src="/js/ace/elements.colorpicker.js"></script>
        <script src="/js/ace/elements.fileinput.js"></script>
        <script src="/js/ace/elements.typeahead.js"></script>
        <script src="/js/ace/elements.wysiwyg.js"></script>
        <script src="/js/ace/elements.spinner.js"></script>
        <script src="/js/ace/elements.treeview.js"></script>
        <script src="/js/ace/elements.wizard.js"></script>
        <script src="/js/ace/elements.aside.js"></script>
        <script src="/js/ace/ace.js"></script>
        <script src="/js/ace/ace.ajax-content.js"></script>
        <script src="/js/ace/ace.touch-drag.js"></script>
        <script src="/js/ace/ace.sidebar.js"></script>
        <script src="/js/ace/ace.sidebar-scroll-1.js"></script>
        <script src="/js/ace/ace.submenu-hover.js"></script>
        <script src="/js/ace/ace.widget-box.js"></script>
        <script src="/js/ace/ace.settings.js"></script>
        <script src="/js/ace/ace.settings-rtl.js"></script>
        <script src="/js/ace/ace.settings-skin.js"></script>
        <script src="/js/ace/ace.widget-on-reload.js"></script>
        <script src="/js/ace/ace.searchbox-autocomplete.js"></script>
    </body>
</html>
