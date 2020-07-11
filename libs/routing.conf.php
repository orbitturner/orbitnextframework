<?php
/* === WELCOME TO ORBIT NEXT FRAMEWORK  ===
 *                     
 *	  By :
 *
 *     ██████╗ ██████╗ ██████╗ ██╗████████╗    ████████╗██╗   ██╗██████╗ ███╗   ██╗███████╗██████╗ 
 *    ██╔═══██╗██╔══██╗██╔══██╗██║╚══██╔══╝    ╚══██╔══╝██║   ██║██╔══██╗████╗  ██║██╔════╝██╔══██╗
 *    ██║   ██║██████╔╝██████╔╝██║   ██║          ██║   ██║   ██║██████╔╝██╔██╗ ██║█████╗  ██████╔╝
 *    ██║   ██║██╔══██╗██╔══██╗██║   ██║          ██║   ██║   ██║██╔══██╗██║╚██╗██║██╔══╝  ██╔══██╗
 *    ╚██████╔╝██║  ██║██████╔╝██║   ██║          ██║   ╚██████╔╝██║  ██║██║ ╚████║███████╗██║  ██║
 *     ╚═════╝ ╚═╝  ╚═╝╚═════╝ ╚═╝   ╚═╝          ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═══╝╚══════╝╚═╝  ╚═╝
 *          
 *  AUTHOR : MOHAMED GUEYE [Orbit Turner] - Email: orbitturner@gmail.com - Country: Senegal
 */

	function project_url()
    {
        $protocole = "";
        if  (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' ||

          $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&

          $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
          $protocole = 'https';


        } else {
          $protocole = $_SERVER["SERVER_PROTOCOL"];
          $protocole = strtolower(explode("/", $protocole)[0]); 

        }

        $protocole = $protocole . "://";
        /**
         * SERVER
         */
        $server_name = $_SERVER["SERVER_NAME"];
        $server_name = $server_name . ":";
        /**
         * PORT
         */
        $server_port = $_SERVER["SERVER_PORT"];
        if(isset($_SERVER["PHP_SELF"])) {
            /**
             * PATH
             */
            $base_path = $_SERVER["PHP_SELF"];
            $tab = explode("/", $base_path);
            $base_path = "";
            for ($i = 1; $i < count($tab) - 1; $i++) {
                $base_path = $base_path . "/" . $tab[$i];
            }
            $base_path = $base_path . "/";
            $url = $protocole . $server_name . $server_port . $base_path;
            /**
             * V1.9.2
             */
            $files = explode('/', $_SERVER["PHP_SELF"]);
            if(!file_exists($files[count($files)-1]))
            {
                $url = $protocole . $server_name . $server_port . '/';
            }
        }
        return $url;
    }
?>