<html lang="en">
<!-- /* === WELCOME TO ORBIT NEXT FRAMEWORK  ===
 *                     
 *	  By :
 *
 *     ██████╗ ██████╗ ██████╗ ██╗████████╗    ████████╗██╗   ██╗██████╗ ███╗   ██╗███████╗██████╗ 
 *    ██╔═══██╗██╔══██╗██╔══██╗██║╚══██╔══╝    ╚══██╔══╝██║   ██║██╔══██╗████╗  ██║██╔════╝██╔══██╗
 *    ██║   ██║██████╔╝██████╔╝██║   ██║          ██║   ██║   ██║██████╔╝██╔██╗ ██║█████╗  ██████╔╝
 *    ██║   ██║██╔══██╗██╔══██╗██║   ██║          ██║   ██║   ██║██╔══██╗██║╚██╗██║██╔══╝  ██╔══██╗
 *    ╚██████╔╝██║  ██║██████╔╝██║   ██║          ██║   ╚██████╔╝██║  ██║██║ ╚████║███████╗██║  ██║
 *     ╚═════╝ ╚═╝  ╚═╝╚═════╝ ╚═╝   ╚═╝          ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═══╝╚══════╝╚═╝  ╚═╝
 */ -->

<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- HERE YOU GOT THE TITLE VARIABLE -->
  <title>BDP | <?=$pageTitle;?></title>
  <!--===============================================================================================-->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/homeviewassets/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/homeviewassets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/homeviewassets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/homeviewassets/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/homeviewassets/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/css/util.css">
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
<!--===============================================================================================-->

</head>

<body>
  <!-- STARTING : CONTAINER GENERAL -->
    <!-- HERE IS YOUR PAGE CONTENT -->
    <?= $pageContent?>

  <!-- ENDING CONTAINER GENERAL -->
      
      
      <?php
      // HERE YOU CAN LOAD AN JS DEPENDING ON THE ACTUAL VIEW
        if ($viewPath == 'home') {

          echo '
            <!--===============================================================================================-->	
              <script src="public/homeviewassets/jquery/jquery-3.2.1.min.js"></script>
            <!--===============================================================================================-->
              <script src="public/homeviewassets/bootstrap/js/popper.js"></script>
              <script src="public/homeviewassets/bootstrap/js/bootstrap.min.js"></script>
            <!--===============================================================================================-->
              <script src="public/homeviewassets/select2/select2.min.js"></script>
            <!--===============================================================================================-->
              <script src="public/homeviewassets/countdowntime/moment.min.js"></script>
              <script src="public/homeviewassets/countdowntime/moment-timezone.min.js"></script>
              <script src="public/homeviewassets/countdowntime/moment-timezone-with-data.min.js"></script>
              <script src="public/homeviewassets/countdowntime/countdowntime.js"></script>
              <script>
                $(\'.cd100\').countdown100({
                  /*Set Endtime here*/
                  /*Endtime must be > current time*/
                  endtimeYear: 0,
                  endtimeMonth: 0,
                  endtimeDate: 35,
                  endtimeHours: 19,
                  endtimeMinutes: 0,
                  endtimeSeconds: 0,
                  timeZone: "" 
                  // ex:  timeZone: "Africa/Dakar"
                  //go to " http://momentjs.com/timezone/ " to get timezone
                });
              </script>
            <!--===============================================================================================-->
              <script src="public/homeviewassets/tilt/tilt.jquery.min.js"></script>
              <script >
                $(\'.js-tilt\').tilt({
                  scale: 1.1
                })
              </script>
            <!--===============================================================================================-->
              <script src="public/js/main.js"></script>';
          
        }elseif ($viewPath == 'somethingElse') {
          
        }
      ?>
    <!-- GLOBAL JS -->
    <script src="public/js/global.js"></script>


    
</body>

</html>
