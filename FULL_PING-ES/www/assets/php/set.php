<?php

    if (isset($_POST['ip'])) {
        
        $dir = $_SERVER['DOCUMENT_ROOT'];
        
        $ip = $_POST['ip'];
        $name = $_POST['name'];
        
        $ip_list = [ "NAME" => $name,"IP" => $ip ];
        
        $JSON_ips = json_encode($ip_list, JSON_PRETTY_PRINT);
        
        //-------------------------REPLACE
        
        $file_content = file_get_contents($dir . '/ip_list.json');
        
        $replace = str_replace("]", "," . $JSON_ips . "]", $file_content);
        
        $file_json = fopen($dir . '/ip_list.json', 'w');
        
        fwrite($file_json,$replace);
        
        fclose($file_json);
        
        header('location: ' . $dir . '/pages/settings/settings.php');
        
    }
    else {
        echo "No data.";
    }

?>