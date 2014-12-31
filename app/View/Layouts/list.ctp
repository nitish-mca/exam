<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Tables - Ace Admin</title>

        <meta name="description" content="Static &amp; Dynamic Tables" />
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

            <?php echo $this->element('footer'); ?>

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
        <script src="/js/dataTables/jquery.dataTables.js"></script>
        <script src="/js/dataTables/jquery.dataTables.bootstrap.js"></script>
        <script src="/js/dataTables/extensions/TableTools/js/dataTables.tableTools.js"></script>
        <script src="/js/dataTables/extensions/ColVis/js/dataTables.colVis.js"></script>

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

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function ($) {

                /////////////////////////////////
                //table checkboxes
                $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

                var active_class = 'active';
                $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function () {
                    var th_checked = this.checked;//checkbox inside "TH" table header

                    $(this).closest('table').find('tbody > tr').each(function () {
                        var row = this;
                        if (th_checked)
                            $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                        else
                            $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                    });
                });

                //select/deselect a row when the checkbox is checked/unchecked
                $('#simple-table').on('click', 'td input[type=checkbox]', function () {
                    var $row = $(this).closest('tr');
                    if (this.checked)
                        $row.addClass(active_class);
                    else
                        $row.removeClass(active_class);
                });



                /********************************/
                //add tooltip for small view action buttons in dropdown menu
                $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

                //tooltip placement on right or left
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('table')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();

                    var off2 = $source.offset();
                    //var w2 = $source.width();

                    if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                        return 'right';
                    return 'bottom';
                }

            })
        </script>



    </body>
</html>
