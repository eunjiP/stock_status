<?php
    define('URL', 'Localhost');
    define('NAME', 'root');
    define('PW', '506greendg@');
    define('DB_NAME', 'lh');

    function get_conn()
    {
        return mysqli_connect(URL, NAME, PW, DB_NAME);
    }
    
    
    
    
