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

 
// ==================================================================================
// --- 🔆 GLOBALS 🔆 ---
// ==================================================================================
// STARTING MAIN: ACCOUNT Script Timer
var scriptStartTime = new Date();
console.log("WELCOME TO ORBIT NEXT FRAMEWORK GALAXY");
console.log("GLOBAL Script Started at : " + scriptStartTime.getHours() + "h : " + scriptStartTime.getMinutes() + "m : " + scriptStartTime.getSeconds() + "s");
var formOk = false;




// ==================================================================================
// --- 🔆 END 🔆 ---
// ==================================================================================
// ENDING MAIN: ACCOUNT Script Timer 
var scriptEndTime = new Date();
scriptTimingMs = parseFloat(scriptEndTime.getTime() - scriptStartTime.getTime());
console.log("GLOBAL Script ENDED at : " + scriptEndTime.getHours() + "h : " + scriptEndTime.getMinutes() + "m : " + scriptEndTime.getSeconds() + "s");
console.log("Le script a mis " + scriptTimingMs / 1000 + " secondes.");