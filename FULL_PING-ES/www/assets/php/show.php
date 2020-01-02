<?php
    
    function table() {
        $dir = $_SERVER['DOCUMENT_ROOT'];
        
        $file_content = file_get_contents($dir . '\www\ip_list.json');
        $file_decode = json_decode($file_content,true);
        
        if (isset($file_decode[1])) {
            
        ?>
            
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">UP/DOWN</th>
                        <th scope="col">Name</th>
                        <th scope="col">IP</th>
                        <th scope="col">Time (ms)</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                        foreach ($file_decode as $ip_mostra) {
                            
                            if ($ip_mostra['IP'] != "") {
                                
                                $up_down = doping($ip_mostra['IP']);
                                
                                print_r ("
                                <tr>
                                    <td>".$up_down[0]."</td>
                                    <td><button type='button' class='btn btn-light'>".$ip_mostra['NAME']."</button></td>
                                    <td>".$ip_mostra['IP']."</td>
                                    <td>".$up_down[1]."ms</td>
                                </tr>
                                ");
                            }
                        }
                    ?>
                </tbody>
            </table>
            
        <?php  
        } else if (!isset($file_decode[1])) {
        ?>
            
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hi! </strong>You should go to settings and put some of your IPs.
            </div>

        <?php
        } else {
            
            echo "ERROR! <br>";
            echo "Watch if 'ip_list.json' have the syntax correctly.";
            
        }
    }

  function doping ($ip) {
    
    $result = shell_exec("ping " . $ip . ' -n 1 -w 100 | find "Respuesta"');
    
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
        
        
        return "UP";
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