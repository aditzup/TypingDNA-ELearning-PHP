<?php
    
    class CheckUser
    {
        public $enrollment="No";
        public $desktopcount=0;
        public $mobilecount=0;
        private $name;

        function __construct($name) 
        {
            include 'credentials.php';
            $this->name = $name;
            $base_url = 'https://api.typingdna.com/%s/%s';
            $id = hash('ripemd160', $name);
            $ch = curl_init(sprintf($base_url, 'user', $id));
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
            curl_setopt($ch, CURLOPT_USERPWD, $apiKey . ":" . $apiSecret);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

            $response = curl_exec($ch);
            curl_close($ch);
            //var_dump($response);
            $obj = json_decode($response);
            $this->desktopcount = intval($obj->{"count"});
            $this->mobilecount = intval($obj->{"mobilecount"});
            if(($this->desktopcount >= 3) or ($this->mobilecount >= 3))
            {
                $this->enrollment = "Yes";
            }
        }

        function get_enrollment()
        {
            return $this->enrollment;
        }

        function get_desktop_count()
        {
            return $this->desktopcount;
        }

        function get_mobile_count()
        {
            return $this->mobilecount;
        }
    }
?>