<?php

    if (isset($_POST['IP'])) {
        
        $IP = $_POST['IP'];
        
        $data = update_data($IP);
        
        echo json_encode($data);
        
    }

    function update_data ($IP) {
        
        $result = shell_exec("ping " . $IP . ' -n 1 -w 100 | find "Respuesta"');
        
        if (isset($result)) {

            $svg = "<svg class='svg_up' height='33' width='33'>
                      <circle cx='20' cy='20' r='10' stroke='#65BB6D' stroke-width='3' fill='#7AC281' />
                    </svg>";

            $text = string_between_two_string($result,'tiempo=', 'ms ');

            if ($text == "") {
                $text = "<1";
            }

            $array = [$svg,$text];

            return $array;
        } else if (!isset($result)) {
            $svg = "<svg class='svg_up' height='33' width='33'>
                      <circle cx='20' cy='20' r='10' stroke='#DD3153' stroke-width='3' fill='#DC5771' />
                    </svg>";
            $text = "0";

            $array = [$svg,$text];

            return $array;
        } 
    }


  function string_between_two_string($str, $starting_word, $ending_word){ 
      
      $arr = explode($starting_word, $str);
      
        if (isset($arr[1])){ 
            $arr = explode($ending_word, $arr[1]); 
            return $arr[0]; 
        }
        return '';
    }

?>