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
 */

// COMMING SOON ! FOR ORM TRIGGERING
// DON'T DELETE THIS FILE OTHERWISE ONF ISN'T GOING TO WORK  -->
<?php require_once '../../routes/dir.php'; ?>
<!DOCTYPE html>
<html lang="fr" >

<head>
  <meta charset="UTF-8">
  <title>BANQUE DU PEUPLE | 403 [1045] DB ERROR</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
		<link href="<?= getProjectRoot() ?>favicon.ico" rel="shortcut icon"/>
  
</head>
<style>
    ::-webkit-scrollbar-track
{
	box-shadow: inset 0 0 6px rgba(0,0,0,0.9);
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.9);
	border-radius: 10px;
	background-color: #CCCCCC;
}

::-webkit-scrollbar
{
	width: 12px;
	background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	background-color: #29c2d6;
	background-image: -webkit-linear-gradient(90deg,
											  transparent,
											  rgba(0, 0, 0, 0.4) 50%,
											  transparent,
											  transparent)
}

/*SELECTION SET*/
::selection{
    background: #1b4f72;
    color: #29c2d6;
}

html {
  background-color: #000121;
  font-family: 'Roboto', sans-serif;

}

.maincontainer {
  position: relative;
  top: -50px;
  transform: scale(0.8);
  background: url("https://www.blissfullemon.com/wp-content/uploads/2018/09/HauntedHouseBackground.png");
  background-repeat: no-repeat;
  background-position: center;
  background-size: 700px 600px;
  width: 800px;
  height: 600px;
  margin: 0px auto;
  display: grid;
}

.foregroundimg {
  position: relative;
  width: 100%;
  top: -230px;
  z-index: 5;
}

.errorcode {
  position: relative;
  top: -200px;
  font-family: 'Creepster', cursive;
  color: white;
  text-align: center;
  font-size: 6em;
  letter-spacing: 0.1em;
}

.errortext {
  position: relative;
  top:-135px;
  color: #FBD130;
  text-align: center;
  text-transform: uppercase;
  font-size: 1.8em;
}

.bat {
  opacity: 0;
  position: relative;
  transform-origin: center;
  z-index: 3;
}

.bat:nth-child(1) {
  top: 380px;
  left: 120px;
  transform: scale(0.5);
  animation: 13s 1s flyBat1 infinite linear;
}

.bat:nth-child(2) {
  top: 280px;
  left: 80px;
  transform: scale(0.3);
  animation: 8s 4s flyBat2 infinite linear;
}

.bat:nth-child(3) {
  top: 200px;
  left: 150px;
  transform: scale(0.4);
  animation: 12s 2s flyBat3 infinite linear;
}

.body {
  position: relative;
  width: 50px;
  top: 12px;
}

.wing {
  width: 150px;
  position: relative;
  transform-origin: right center;
}

.leftwing {
  left: 30px;
  animation: 0.8s flapLeft infinite ease-in-out;
}

.rightwing {
  left: -180px;
  transform: scaleX(-1);
  animation: 0.8s flapRight infinite ease-in-out;
}

@keyframes flapLeft {
  0% { transform: rotateZ(0); }
  50% { transform: rotateZ(10deg) rotateY(40deg); }
  100% { transform: rotateZ(0); }
}

@keyframes flapRight {
  0% { transform: scaleX(-1) rotateZ(0); }
  50% { transform: scaleX(-1) rotateZ(10deg) rotateY(40deg); }
  100% { transform: scaleX(-1) rotateZ(0); }
}

@keyframes flyBat1 {
  0% { opacity: 1; transform: scale(0.5)}
  25% { opacity: 1; transform: scale(0.5) translate(-400px, -330px) }
  50% { opacity: 1; transform: scale(0.5) translate(400px, -800px) }
  75% { opacity: 1; transform: scale(0.5) translate(600px, 100px) }
  100% { opacity: 1; transform: scale(0.5) translate(100px, 300px) }
}

@keyframes flyBat2 {
  0% { opacity: 1; transform: scale(0.3)}
  25% { opacity: 1; transform: scale(0.3) translate(200px, -330px) }
  50% { opacity: 1; transform: scale(0.3) translate(-300px, -800px) }
  75% { opacity: 1; transform: scale(0.3) translate(-400px, 100px) }
  100% { opacity: 1; transform: scale(0.3) translate(100px, 300px) }
}

@keyframes flyBat3 {
  0% { opacity: 1; transform: scale(0.4)}
  25% { opacity: 1; transform: scale(0.4) translate(-350px, -330px) }
  50% { opacity: 1; transform: scale(0.4) translate(400px, -800px) }
  75% { opacity: 1; transform: scale(0.4) translate(-600px, 100px) }
  100% { opacity: 1; transform: scale(0.4) translate(100px, 300px) }
}

/*@media only screen and (max-width: 850px) {
  .maincontainer {
    transform: scale(0.6);
    width: 600px;
    height: 400px;
    background-size: 600px 400px;
  }
  
  .errortext {
    font-size: 1em;
  }
}*/
</style>
<div class="maincontainer">
  <div class="bat">
    <img class="wing leftwing" 
         src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-wing.png">
    <img class="body"
         src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-body.png" alt="bat">
    <img class="wing rightwing"
         src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-wing.png">
  </div>
  <div class="bat">
    <img class="wing leftwing" 
         src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-wing.png">
    <img class="body"
         src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-body.png" alt="bat">
    <img class="wing rightwing"
         src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-wing.png">
  </div>
  <div class="bat">
    <img class="wing leftwing" 
         src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-wing.png">
    <img class="body"
         src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-body.png" alt="bat">
    <img class="wing rightwing"
         src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-wing.png">
  </div>
  <img class="foregroundimg" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/HauntedHouseForeground.png" alt="haunted house">
  
</div>
<h1 class="errorcode">ERROR BD : <?=$_GET["error"]?></h1>
<div class="errortext">Base de Donnée Injoignable. Contactez l'équipe IT !</div>


</body>
</html>