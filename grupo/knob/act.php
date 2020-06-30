<?php if(!defined('s7V9pz')) {die();}?><?php
fc('grupo');
$usr = usr('Grupo');
$main = pg('act');
$act = explode('/', $main);
if ($act[0] === 'cronjob') {
    gr_prnt('<style>div{font-family: sans-serif; font-size: 26px; color: darkgrey;height: 100%;display: flex; align-items: center; justify-content: center; text-align: center;}</style>');
    gr_prnt('<body><div>Cron Job Executed Successfully</div></body>');
    gr_cronjob();
    exit;
}
if ($act[0] === 'reset' && gr_role('access', 'sys', '1')) {
    fc('grsys');
    gr_globalreset($act);
    exit;
}
if ($GLOBALS["logged"]) {
    if ($act[0] === 'join') {
        if (gr_role('access', 'groups', '4') && isset($act[1]) && isset($act[2])) {
            $uid = $usr['id'];
            $gid = $act[1];
            $access = $act[2];
            $cr = gr_group('valid', $gid);
            if ($cr[0] && $cr['access'] == $access) {
                $cu = gr_group('user', $gid, $uid)[0];
                if (!$cu) {
                    gr_data('i', 'gruser', $gid, $uid, 0);
                    $dt = array();
                    $dt['id'] = $gid;
                    $dt['msg'] = 'joined_group_invitelink';
                    gr_group('sendmsg', $dt, 1, 1, $uid);
                    $_SESSION['grviewgroup'] = $gid;
                }
            }
        }
    } else if ($act[0] === 'viewgroup') {
        $_SESSION['grviewgroup'] = $act[1];
    }
    rt('');
} else {
    $_SESSION['actredirect'] = $main;
    rt('signin');
}
?>