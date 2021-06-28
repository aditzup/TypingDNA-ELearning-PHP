<?php
    
    class Auto
    {
        public $result="null";
        public $message="null";
        private $name;

        function __construct($name, $typingPattern) 
        {
            include 'credentials.php';    
            $this->name = $name;
            $base_url = 'https://api.typingdna.com/%s/%s';
            $tp = $typingPattern;
            $quality = '2';
            $id = hash('ripemd160', $name);
            $ch = curl_init(sprintf($base_url, 'auto', $id));
            $data = array('tp' => $tp, 'quality' => $quality);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_USERPWD, $apiKey . ":" . $apiSecret);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data) . "\n");

            $response = curl_exec($ch);
            curl_close($ch);
            
            //var_dump($response);
            //echo $number;

            $obj = json_decode($response);
            try
            {
                $this->result = intval($obj->{"result"});
                $this->message = strval($obj->{"message"});
            }
            catch(Exception $e)
            {
            }
        }

        function get_result()
        {
            return $this->result;
        }

        function get_message()
        {
            return $this->message;
        }
    }
    
?>