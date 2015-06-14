<body id="fullbkg">

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<header role="banner" class="navbar navbar-fixed-top<?php echo $html->navbarclass ?>">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="<?php echo $CFG->wwwroot;?>"><?php echo
                format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID)));
                ?></a>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <?php echo $OUTPUT->user_menu(); ?>
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<?php require_once(dirname(__FILE__).'/alerts.php'); ?>

<div id="page-content" class="row-fluid">
<section>

    <div class="wrap">
		<div class="avatarlogin">
        <img src="<?php echo $OUTPUT->pix_url('avatar', 'theme'); ?>" alt="Login" />
	   </div>
        <form action="<?php echo new moodle_url('/login/index.php'); ?>" method="post" id="login"  >
		<input type="text" name="username" placeholder="username" required>
		<div class="bar">
			<i></i>
	   </div>
		<input type="password" name="password" placeholder="password" required>
        <a href="<?php echo new moodle_url('/login/forgot_password.php'); ?>" class="forgot_link">forgot ?</a>
		<button>Log In</button>
        </form>
    </div>

</section>

<hidden style="display:none;">
        <?php
        echo $OUTPUT->course_content_header();
        echo $OUTPUT->main_content();
        echo $OUTPUT->course_content_footer();
        ?>
        <?php echo $OUTPUT->blocks('side-pre', 'span3'); ?>
        <?php echo $OUTPUT->blocks('side-post', 'span3 pull-right'); ?>
</hidden>
</div>