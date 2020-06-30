<?php

session_start();
if($_SERVER['HTTP_HOST'] == 'localhost')
   {
        $pass = '';
        $db = 'virtualoffice';
        $host = 'localhost:3307';
        $username = 'rooting';
        $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
        //PDO::MYSQL_ATTR_SSL_CA => './BaltimoreCyberTrustRoot.crt.pem'
        //PDO::MYSQL_ATTR_SSL_CA => 'C:/xampp/htdocs/online/BaltimoreCyberTrustRoot.crt.pem'
    ];
   }else {
        $pass = 'Gentle!@#$%';
        $db = 'virtualofficedb';
        $host = 'icsvirtualoffice.mysql.database.azure.com';
        $username = 'icsadmin@icsvirtualoffice';
        $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
        PDO::MYSQL_ATTR_SSL_CA => './BaltimoreCyberTrustRoot.crt.pem'
        //PDO::MYSQL_ATTR_SSL_CA => 'C:/xampp/htdocs/online/BaltimoreCyberTrustRoot.crt.pem'
    ];
   }

    

    
    $charset = 'utf8mb4';


    $ds = "mysql:host=$host;dbname=$db;charset=$charset";
    
    try {
        $pdo = new PDO($ds, $username, $pass, $options);
        //
        //echo "Connected successfully";
    }
    catch(PDOException $e){
        exit ("Error:".$e->getMessage());
    }
  if(isset($_GET['dx']) && !isset($_SESSION['email']))
  {
  	$d = base64_decode($_GET['dx']);
    $uniqueID1 = explode(":",$d)[0];
    $uniqueID2 = explode(":", $d)[1];


  	$stmt = $pdo->prepare("SELECT * FROM managelogin WHERE uniqueID=:uniqueID");
    $stmt->execute(['uniqueID' => $uniqueID1]); 
    $mlog = $stmt->fetch();


    $stmt = $pdo->prepare("SELECT * FROM managelogin WHERE uniqueID=:uniqueID");
    $stmt->execute(['uniqueID' => $uniqueID2]); 
    $userMgt = $stmt->fetch();


    if(isset($mlog['id']))
    {
       $session = json_decode($mlog['session'],true);
       $decrypted = DecryptThis($session['baseX']);
       $dk = explode(":", $decrypted);
       if(count($dk) > 0)
       {
          $d = 'Grupo';
          $_SESSION['email'] = $dk[0];
          $_SESSION['baseX'] = $dk[1];

          //print_r($_SESSION['email']);
          // $_SESSION[$d.'usrdev'] = ip().ip('dev');

          // $GLOBALS["logged"] = 1;
          // $_SESSION[$d.'usrdev'] = ip().ip('dev');
          // $_SESSION[$d.'usrcode'] = md5($session->id);
          
          if(isset($userMgt['id']))
          {
            $session = json_decode($userMgt['session'],true);
            $_SESSION['vouser'] = $session;
            //session_destroy();
            



            //print_r($_SESSION['vouser']);
          }
       }
    }  
    //print_r($_SESSION['email']);  

  }

  function DecryptThis($CipherData) {
    $ENCRYPTION_KEY = "279iodjs e7wouehuaiwsaU6Z22YUIUZ0OPE3018923-24!)(*(/VTKGRKOPEEC[E]";
    $ENCRYPTION_ALGORITHM = 'AES-256-CBC';
    $EncryptionKey = base64_decode($ENCRYPTION_KEY);
    list($Encrypted_Data, $InitializationVector ) = array_pad(explode('::', base64_decode($CipherData), 2), 2, null);
    return openssl_decrypt($Encrypted_Data, $ENCRYPTION_ALGORITHM, $EncryptionKey, 0, $InitializationVector);
  }

  function ip($t = 0) {
    if ($t === 'dev') {
        $dev = $_SERVER ['HTTP_USER_AGENT'];
        $dev = preg_replace("/[^A-Za-z0-9.]/", "", $dev);
        $dev = strtolower($dev);
        return $dev;
    } else {
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR')?:
        getenv('HTTP_X_FORWARDED')?:
        getenv('HTTP_FORWARDED_FOR')?:
        getenv('HTTP_FORWARDED');
        if (empty($ipaddress)) {
            return getenv('REMOTE_ADDR');
        } else {
            return $ipaddress;
        }
    }
  }

  header("Location: grupo");


?>