<?php
   require_once('./BannerAd.php');                                // 1. load file class

   $BannerAd = new BannerAd();                                    // 2. Instantiate class into an object
   $BannerAdGetIP = $BannerAd->getIP();         // getIP method as an object
   print_r($BannerAdGetIP);

   $mercariImage = $BannerAd->showBanner();
   header('Content-Type: application/json');
   echo json_encode($mercariImage);

// $mercariImage = $BannerAd::mercariImage();
// header('Content-Type: application/json');
// echo json_encode($mercariImage);
//
?>