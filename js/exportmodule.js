let message = "keval patel";

  function user(name) {
     console.log(`hello ${name}`);
     document.body.innerHTML = `hello ${name}`;
     return `hello ${name}`;
 }

  class test{
     constructor(){
         document.body.innerHTML= `hello`;
         console.log("hello");
     }
 }

 export {user,test,message}; 

export default function() {
    console.log("hello k p ");
    document.body.innerHTML = `hello k p`
}