<?php if(!defined('s7V9pz')) {die();}?>
<?php
function cnf($v = "cnf") {
    $cnf["cnf"] = array(
        "mode" => 1,
        "name" => "Grupo - Baevox",
        "tag" => "BaeVox Framework Powered",
        "poet" => "Baevox",
        "url" => "http://localhost/virtualOffice/chat/grupo/",
        "region" => "Asia/Kolkata",
        "knob" => "knob",
        "door" => "door",
        "gem" => "gem",
        "bit" => "s7V9pz",
        "chief" => "admin",
        "codeword" => "pass",
        "ext" => "css,js,xml",
        "global" => "1",
        "appversion" => 1,
    );

if($_SERVER['HTTP_HOST'] == 'localhost')
{
    $cnf["Grupo"] = array(
                'host' => 'localhost:3307',
                'db' => 'virtualoffice',
                'user' => 'root',
                'pass' => '',
                'prefix' => 'gr_'
                );
}else {
     $cnf["Grupo"] = array(
                'host' => 'icsvirtualoffice.mysql.database.azure.com',
                'db' => 'virtualofficedb',
                'user' => 'icsadmin@icsvirtualoffice',
                'pass' => 'Gentle!@#$%',
                'prefix' => 'gr_'
                );
}    

if ($v == "all") {
        return $cnf;
    } else if (isset($cnf[$v])) {
        return $cnf[$v];
    }
}

 // 'host' => 'icsvirtualoffice.mysql.database.azure.com',
 //                'db' => 'virtualofficedb',
 //                'user' => 'icsadmin@icsvirtualoffice',
 //                'pass' => 'Gentle!@#$%',
 //                'prefix' => 'gr_'
?>


