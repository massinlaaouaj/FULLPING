setInterval(function(){
    
    const ip_value = document.getElementsByClassName('ip_value');
    
    var cont = 0;
    
    for (var i=0; i<ip_value.length; i++) {
        
        var name_id = '#IP'+(i+1);
        
        const IP = $(name_id).attr("value");
        
        $.ajax({
            url: './assets/php/update_data.php', //On s'envia
            type: 'POST', //Metode
            data: { IP }, //Quina/es variable és vol enviar
            dataType: 'json',
            success: function( data ) { //Funció quan hi ha una resposta
                
                var id_image = 'STATE'+(cont+1);
                var id_time = 'TIME'+(cont+1);
                
                document.getElementById(id_image).innerHTML = "<td id='"+id_image+"'> "+data[0]+"</td>";
                document.getElementById(id_time).innerHTML = "<td id='"+id_time+"'> "+data[1]+"ms</td>";
                cont++;
            }
        });
    }
}, 10000);
