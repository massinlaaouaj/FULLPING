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
        
        //-------------------------APPEND
        /*
        $file_json = fopen('ip_list.json', 'a');
        //$file_json = "ip_list.json";
        
        //file_put_contents($file_json, $JSON_ips);
        fwrite($file_json, "," . $JSON_ips);
        
        fclose($file_json);
        */
        //-------------------------DECODE
        
        /* ESTO ES PARA DESCODIFICAR EL JSON
        $ftemp = file_get_contents('ip_list.json');
        $valor = json_decode($ftemp,true);
        
        print_r($valor[1]);
        
        foreach ($valor as $ip_mostra) {
            print_r(", IP> " . $ip_mostra['IP']);
        }
        */
        
        header('location: ../../pages/settings/settings.php');
        
    } //Temporal quitar luego
    else {
        echo "NO";
    }

?>