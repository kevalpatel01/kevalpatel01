 import  * as keval from  "./exportmodule.js" ;

 console.log(keval.message);
 document.body.innerHTML = keval.message;
 keval.user("keval patel");
 let a = new keval.test();

// // let a = new student();
// // let a = new teacher();
// // let a = new test();
import {default as kp} from "./exportmodule.js";
kp();  

import {user} from "./bridgexmodule.js";
console.log(user("keval patel"));
// document.body.innerHTML = user("keval patel");