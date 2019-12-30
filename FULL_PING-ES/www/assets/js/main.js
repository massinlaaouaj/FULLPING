var ruta = document.getElementById("path").value;

$.ajax ({
    url: './assets/php/readfile.php',
    method: 'POST',
    data: { ruta },
    success: function (response) {
        
        console.log(response);
        
    }
    
});