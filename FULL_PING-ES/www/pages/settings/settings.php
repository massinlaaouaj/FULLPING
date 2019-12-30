<!DOCTYPE html>
<html>
    <head>
        <title>FULL PING</title>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="../../img/icon.ico" type="image/x-icon" borde="0">
        <link rel="stylesheet" href="../../assets/css/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="../../assets/js/ajax.js"></script>
    </head>
        
    <body>
        
        <header class="container div-navegacio">
            <nav class="nav-navegacio navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="../../index.php">FULL PING</a>
            </nav>
        </header>
        
        <div class="div_input">
            <form id="formulari-settings" method="post" action="../../assets/php/set.php">
                <label class="texto-input"><b>Name of petition:</b></label>
                <input id="name" name="name" class="form-control" type="text" title="Name of petition" placeholder="Ex; Host1" autofocus>
                <br>
                <label class="texto-input"><b>IP: *</b></label>
                <input id="ip" name="ip" class="form-control" type="text" minlength="7" maxlength="15" size="15" pattern="^((\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$" title="IP" placeholder="Ex; 192.168.1.1" required>
                <br>
                <input type="submit" class="btn btn-primary text-light" value="Submit">
            </form>
        </div>
        
        <div class="divglobal">
            
            <div class="div_i bg-light">
                <h5 class="text-center card-title mm">NOTES:</h5>
                <p class="text-center"><b>-</b> You can edit and delete your IPs in the file "ip_list.json".</p>
                <p class="text-center"><b>-</b> This version of FULLPING is SPANISH.</p>
            </div>
            <hr>
            <p class="text-center">Creator; <b>Massin Laaouaj</b></p>
        </div>
        
        <footer class="card-footer text-muted footer">
            <p class="text-center">
                
                <a class="link_github" href="https://github.com/massinlaaouaj" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github icon_github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                </a>
            </p>
        </footer>
        
        <script src="../../assets/js/main.js"></script>
        
    </body>
</html>