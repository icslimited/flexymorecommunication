<?php if(!defined('s7V9pz')) {die();}?><?php
require_once("../env.php");
session_start();


//print_r($_SESSION['email']);
if(!isset($_SESSION['email']) || !isset($_SESSION['baseX']))
{
   header("Location: $baseurl");
   exit();
}

fc('grupo');
//echo $GLOBALS["lang"]['email_username'];
if ($GLOBALS["logged"]) {
    if (isset($_POST["do"])) {
        //echo "<script>alert('dddddnnnn')</script>";
        gec('location.reload();');
    } else {
        //echo "<script>alert('dddddkdjkldkdnnnn')</script>";
        rt('');
    }
}
grupofns();
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no shrink-to-fit=no">
    <title><?php gec($GLOBALS["default"]['sitename'].' - '.$GLOBALS["default"]['siteslogan']); ?></title>
    <meta name="description" content="<?php gec($GLOBALS["default"]['sitedesc']); ?>">
    <meta name="author" content="BaeVox">
    <meta name="generator" content="Grupo - Powered by BaeVox">
    <link rel="shortcut icon" type="image/png" href="<?php gec(mf("grupo/global/favicon.png")); ?>" />
    <?php
    css("riches/kit/bootstrap/bootstrap.min");
    css("riches/fonts/montserrat/font");
    css("riches/fonts/grupo/css/icons");
    css("ajx");
    css("gr-sign");
    ?>
    <style type="text/css">
        .hide {
            display: none;
        }
    </style>
</head>
<body class="sign two bgone hide">
    <?php gr_core('hf', 'header'); ?>
    <div class="gr-lselect">
        <?php pr(gr_lang('list', 2)) ?>
    </div>
    <section>
        <div>
            <div>
                <div class='box<?php gec(' '.$GLOBALS["lang"]['core_align']) ?>'>
                    <div class="logo">
                        <img src="<?php gec(mf("grupo/global/logo.png")); ?>" />
                    </div>
                    <div class="swithlogin">
                        <ul>
                            <li class="active"><?php gec($GLOBALS["lang"]['login']); ?></li>
                            <?php if ($GLOBALS["default"]['guest_login'] == 'enable') {
                                ?>
                                <li class="lag"><?php gec($GLOBALS["lang"]['login_as_guest']); ?></li>
                                <?php
                            } ?>
                        </ul>
                    </div>
                    <form autocomplete='off' class='gr_sign'>
                        <div class="elements">
                            <input type="hidden" name="act" value=1 />
                            <input type="hidden" name="do" class='doz' value='login' />
                            <div class='register d-none'>
                                <label><i class="gi-user"></i>
                                    <input type="text" autocomplete='grautocmp' name="fname" placeholder="<?php gec($GLOBALS["lang"]['full_name']) ?>" />
                                </label>
                                <label><i class="gi-mail"></i>
                                    <input type="email" autocomplete='grautocmp' name="email" placeholder="<?php gec($GLOBALS["lang"]['email_address']) ?>" />
                                </label>
                                <label><i class="gi-globe"></i>
                                    <input type="text" autocomplete='grautocmp' name="name" placeholder="<?php gec($GLOBALS["lang"]['username']) ?>" />
                                </label>
                            </div>

                            <div class='loginasguest d-none'>
                                <label><i class="gi-user"></i>
                                    <input type="text" autocomplete='grnickname' class="nickname" name="nickname" placeholder="<?php gec($GLOBALS["lang"]['nickname']) ?>" />
                                </label>
                            </div>
                            <div class='login'>
                                <label><i class="gi-user"></i>
                                    <input type="text" autocomplete='grautocmp' id="email-add" name="sign" placeholder="<?php gec($GLOBALS["lang"]['email_username']) ?>" />
                                </label>
                            </div>
                            <div class='global'>
                                <label><i class="gi-lock"></i>
                                    <input type="text" class='gstdep' id="pass-add" autocomplete='grautocmp' name="pass" placeholder="<?php gec($GLOBALS["lang"]['password']) ?>" />
                                </label>
                            </div>
                        </div>
                        <div class="regsep d-none"></div>
                        <div class="sub">
                            <span class='rmbr'><i><b></b><input type="hidden" name="rmbr" /></i> <?php gec($GLOBALS["lang"]['remember_me']) ?></span>
                            <span class="doer" data-do="forgot"><?php gec($GLOBALS["lang"]['forgot_password']) ?></span>
                        </div>
                        <?php if ($GLOBALS["default"]['recaptcha'] == 'enable') {
                            ?>
                            <div class='recaptcha'>
                                <div class="g-recaptcha" data-theme='light' data-sitekey="<?php gec($GLOBALS["default"]['rsitekey']) ?>"></div>
                            </div>
                            <?php
                        } ?>
                        <div class="submitbtns">
                            <span class="submit global" form='.gr_sign' do='login' btn='<?php gec($GLOBALS["lang"]['register']); ?>' em='<?php gec($GLOBALS["lang"]['invalid_value']); ?>' gst=0>
                                <?php gec($GLOBALS["lang"]['login']); ?>
                            </span>
                            <span class="submit ajx reset d-none" form='.gr_sign'><?php gec($GLOBALS["lang"]['reset']); ?></span>
                        </div>
                        <?php if ($GLOBALS["default"]['userreg'] == 'enable') {
                            ?>
                            <div class="switch" qn='<?php gec($GLOBALS["lang"]['already_have_account']); ?>' btn='<?php gec($GLOBALS["lang"]['login']); ?>'>
                                <i><?php gec($GLOBALS["lang"]['dont_have_account']); ?></i>
                                <span><?php gec($GLOBALS["lang"]['create']); ?></span>
                            </div>
                            <?php
                        } ?>
                    </form>
                    <div class='tos'>
                        <h4><span><?php gec($GLOBALS["lang"]['tos']); ?></span><i class="gi-cancel-circled"></i></h4>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class='gr-consent<?php gec(' '.$GLOBALS["lang"]['core_align']) ?>'>
        <span>
            <span><?php gec($GLOBALS["lang"]['cookie_constent']); ?> <i><?php gec($GLOBALS["lang"]['tos']); ?></i></span>
            <i><?php gec($GLOBALS["lang"]['got_it']); ?></i>
        </span>
    </div>
    <div class="dumb d-none">
        <span class='unsplash'><?php gec($GLOBALS["default"]['unsplash_enable']); ?></span>
        <span class='unsplashid'><?php gec($GLOBALS["default"]['unsplash_load']); ?></span>
        <span class='loading'><?php gec($GLOBALS["lang"]['loading']) ?></span>
        <span class='pleasewait'><?php gec($GLOBALS["lang"]['please_wait']) ?></span>
    </div>
    <div class="signbg"></div>
    <?php gr_core('hf', 'footer'); ?>
</body>
<?php
css("custom");
js("riches/kit/jquery/jquery-3.4.1.min");
js("riches/kit/jquery/jquery-migrate-1.4.1.min");
js("riches/kit/popper/umd/popper.min");
js("riches/kit/bootstrap/bootstrap.min");
js("riches/kit/nicescroll/jquery.nicescroll.min");
js("riches/kit/jscookie/js.cookie");
gr_google();
js("ajx", "gr-sign");
if (pg('signin') == 'unverified/') {
    gr_prnt("<script> alert('".$GLOBALS["lang"]['check_inbox']."'); </script>");
}
?>
<script type="text/javascript">
   $('#email-add').val("<?php echo $_SESSION['email']?>");
   $('#pass-add').val("<?php echo $_SESSION['baseX']?>");
   $('.global').trigger('click');
</script>
</html>