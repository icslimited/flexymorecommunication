<?php
  
  if($_SERVER['HTTP_HOST'] == 'localhost')
  {
      $siteUrlChat = 'http://localhost/communication';
      $siteUrlmktplace = 'http://localhost/marketplaceapp';
      $siteUrlteamWork = 'http://localhost/teamworkapp';
      $siteUrlUserMgt = 'http://localhost/online/virtualoffice/dashboard.php';
      $baseurl = 'http://localhost/online';
  }
  else 
  {
      $siteUrlChat = 'https://flexychat.azurewebsites.net';
      $siteUrlmktplace = 'https://sellerplaceapp.azurewebsites.net';
      $siteUrlteamWork = 'https://teamworkapp.flexymore.com';
      $siteUrlUserMgt = 'http://flexymore.com';
      $baseurl = 'http://flexymore.com';
  }
?>