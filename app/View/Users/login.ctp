<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="login-container">
            <div class="center">
                <h1>
                    <i class="ace-icon fa fa-leaf green"></i>
                    <span class="red">Online</span>
                    <span class="white" id="id-text2">Exams</span>
                </h1>
                <h4 class="blue" id="id-company-text">&copy; CareerChuno.com</h4>
            </div>

            <div class="space-12"></div>

            <div class="position-relative">
                <div id="login-box" class="login-box visible widget-box no-border">
                    <div class="widget-body">
                        <div class="widget-main">
                            <h4 class="header blue lighter bigger">
                                <i class="ace-icon fa fa-coffee green"></i>
                                Please Enter Your Information
                            </h4>

                            <div class="space-6"></div>

                            <?php echo $this->Session->flash('auth'); ?>
                            <?php echo $this->Form->create('User'); ?>
                            <fieldset>
                                <label class="block clearfix">
                                    <span class="block input-icon input-icon-right">
                                        <?php echo $this->Form->input('username', array("class" => "form-control", "placeholder" => "Username", 'div'=>false, 'label' => false)); ?>
                                        <i class="ace-icon fa fa-user"></i>
                                    </span>
                                </label>

                                <label class="block clearfix">
                                    <span class="block input-icon input-icon-right">
                                        <?php echo $this->Form->input('password', array("class" => "form-control", "placeholder" => "Password", 'div'=>false, 'label' => false)); ?>                                            
                                        <i class="ace-icon fa fa-lock"></i>
                                    </span>
                                </label>

                                <div class="space"></div>

                                <div class="clearfix">
                                    <label class="inline">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"> Remember Me</span>
                                    </label>
                                    <?php 
                                        $buttonText = '<i class="ace-icon fa fa-key"></i><span class="bigger-110">Login</span>';
                                        echo $this->Form->button($buttonText, array('type' => 'submit', 'div' => false, 'class' => "width-35 pull-right btn btn-sm btn-primary"));
                                    ?>
                                </div>
                                <div class="space-4"></div>
                            </fieldset>
                        <?php echo $this->Form->end(); ?>

                        </div><!-- /.widget-main -->

                        <div class="toolbar clearfix">
                            <div>
                                <a href="#" data-target="#forgot-box" class="forgot-password-link">
                                    <i class="ace-icon fa fa-arrow-left"></i>
                                    I forgot my password
                                </a>
                            </div>
                        </div>
                    </div><!-- /.widget-body -->
                </div><!-- /.login-box -->

                <div id="forgot-box" class="forgot-box widget-box no-border">
                    <div class="widget-body">
                        <div class="widget-main">
                            <h4 class="header red lighter bigger">
                                <i class="ace-icon fa fa-key"></i>
                                Retrieve Password
                            </h4>

                            <div class="space-6"></div>
                            <p>
                                Enter your email and to receive instructions
                            </p>

                            <form>
                                <fieldset>
                                    <label class="block clearfix">
                                        <span class="block input-icon input-icon-right">
                                            <input type="email" class="form-control" placeholder="Email" />
                                            <i class="ace-icon fa fa-envelope"></i>
                                        </span>
                                    </label>

                                    <div class="clearfix">
                                        <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                                            <i class="ace-icon fa fa-lightbulb-o"></i>
                                            <span class="bigger-110">Send Me!</span>
                                        </button>
                                    </div>
                                </fieldset>
                            </form>
                        </div><!-- /.widget-main -->

                        <div class="toolbar center">
                            <a href="#" data-target="#login-box" class="back-to-login-link">
                                Back to login
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- /.widget-body -->
                </div><!-- /.forgot-box -->
            </div><!-- /.position-relative -->

        </div>
    </div><!-- /.col -->
</div><!-- /.row -->