<?php

    class BannerAd
    {

        public function getIP()
        {

            $client = @$_SERVER['HTTP_CLIENT_IP'];
            $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
            $remote = @$_SERVER['REMOTE_ADDR'];

            if (filter_var($client, FILTER_VALIDATE_IP)) {
                $ip = $client;
            } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
                $ip = $forward;
            } else {
                $ip = $remote;
            }
            return $ip;
        }
// Concerns here that I would add if going live in regards to session data
// Create a file for the ip in session data to be stored.
// Also would want to create a function that prevented any injecting code during
//page load either via a curl statement after basing a temp user based on their ip
//or requiring cookie to ensure ip not malicious labeled.

        public function getDuration()
        {

            $currentDate = strtotime(date("Y-m-d H:i:s"));
            $startDate = strtotime('2014-08-10T12:00:00+0900');
            $endDate = strtotime('2014-08-10T12:00:00+0902');

            if ($startDate == $currentDate) {
                $getSeconds = ($endDate - $startDate) * 1000;
            } else {
                $getSeconds = 0;
            }
            return $getSeconds;
        }


        public function showBanner()
        {

            $client_ip = self::getIP();
            $timeBannerRuns = self::getDuration();


            $allowedIsAdded0 = '::1';
            $allowedIsAdded1 = '::1';
            //            $allowedIsAdded0 = '10.0.0.4';
            //            $allowedIsAdded1 = '10.4.4.4';

            if ($client_ip == $allowedIsAdded0 || $client_ip == $allowedIsAdded1) {
                //$data['image'] = "<img src='./images/banner.jpg' class='img'>";
                $data['image']="./images/banner.jpg";
            } else {
                if ($timeBannerRuns != 0) {
                    $data['timeBannerRuns'] = $timeBannerRuns;
                    $data['image']="./images/banner.jpg";
                    //$data['image'] = "<img src='./images/banner.jpg' id='bannerImg' class='img'>";
                } else {
                    $data['image'] = '<h3>Invalid IP Address</h3>';
                }
            }
            echo(json_encode($data));
        }
    }

?>