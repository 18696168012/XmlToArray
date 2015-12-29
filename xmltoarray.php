<?php 
//将XML转为array 
    public function xmlToArray($xml){             
        $array_data=json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);      
        return $array_data;
    }