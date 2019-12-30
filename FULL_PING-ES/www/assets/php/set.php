<?php

    if (isset($_POST['ip'])) {
        
        $ip = $_POST['ip'];
        
        $ip_list = [ "IP" => $ip ];
        
        $JSON_ips = json_encode($ip_list, JSON_PRETTY_PRINT);
        
        //-------------------------REPLACE
        
        $file_content = file_get_contents('ip_list.json');
        
        $replace = str_replace("]", "," . $JSON_ips . "]", $file_content);
        
        $file_json = fopen('ip_list.json', 'w');
        
        fwrite($file_json,$replace);
        
        fclose($file_json);
        
        header('location: ../../pages/settings/settings.php');
        
    }
    else {
        echo "No data.";
    }

?>