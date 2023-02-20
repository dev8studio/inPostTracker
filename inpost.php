<?php 
    class inPost{
        public static function getTrackingDetails($trackingNumber){
            $url = "https://api-shipx-pl.easypack24.net/v1/tracking/";
            $inPostChannel = curl_init();
            // Set the url
            curl_setopt($inPostChannel, CURLOPT_URL,$url.$trackingNumber);
            $result = curl_exec($inPostChannel);
            curl_close($inPostChannel);
            return json_encode($result);
        }
    }
?>