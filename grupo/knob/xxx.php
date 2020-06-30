<?php if(!defined('s7V9pz')) {die();}?><?php
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
?>

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
   $('#email-add').val("<?php echo $_SESSION['vouser']['email']?>");
   $('#pass-add').val("<?php echo $_SESSION['xxxxx']?>");
   $('.global').trigger('click');
</script>