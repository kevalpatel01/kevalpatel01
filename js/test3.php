<!-- <!-- <?php
    /*$cars = [
    "Cars"=>[
        "Kia"=>[
            "Sonet"=>[
                "color"=>["red","blue","black"]
            ],
            "seltos"=>[
                "color"=>["red","blue","black"]
            ]
        ],
        "MG"=>[
            "hector"=>[
                "color"=>["red","blue","black"]
            ]
        ]

        
    ]
            ];
/*for($row = 0;$row<3;$row++) {
    for($col=0;$col<3;$col++) {
        echo $cars[$row][$col];
    }
}
echo "<pre>";
print_r($cars);*/
    /*echo $cars[0][0].": model: ".$cars[0][1].", color: ".$cars[0][2].".<br>";
echo $cars[1][0].":  model: ".$cars[1][1].", color: ".$cars[1][2].".<br>";
echo $cars[2][0].":  model: ".$cars[2][1].", color: ".$cars[2][2].".<br>";
echo $cars[3][0].":  model: ".$cars[3][1].",color: ".$cars[3][2].".<br>";*/



    ?>-->
<html>

<body>
    <!--<p>the lowest number is <span id="demo"></span>.</p>-->
    <!--<input id="age" value="18" />-->
    <!--<input id="demo" type="text">-->
    <p id="demo"></p>
    <button type="button" id="btn" onclick="myFunction()">try</button>
    <p id="demo1"></p>
    <p id="demo2"></p>
    <script>
        /*const points = [40,20,121,35,23,442];
            points.sort(function(a,b){return a-b});
            document.getElementById("demo").innerHTML=points[0];*/
        /*const points = [40,20,121,35,23,442];
        document.getElementById("demo").innerHTML=myArrayMax(points);
        function myArrayMax(arr) {
            return Math.max.apply(null,arr);
        }*/
        /* const cars = [{
                 type: "volvo",
                 year: 2016
             },
             {
                 type: "citron",
                 year: 2001
             },
             {
                 type: "bmw",
                 year: 2010
             }
         ];

         displaycars();

         function myFunction() {
             cars.sort(function(a, b) {

                 let x = a.type.toLowerCase();
                 let y = b.type.toLowerCase();
                 if (x < y) {
                     return -1;
                 }
                 if (x > y) {
                     return 1;
                 }
                 return 0;
                
             });
             displaycars();
         }

         function displaycars() {
             document.getElementById("demo").innerHTML =
                 cars[0].type + " " + cars[0].year + "<br>" +
                 cars[1].type + " " + cars[1].year + "<br>" +
                 cars[2].type + " " + cars[2].year;
         }*/
        /*const numbers = [45,123,56,78,98,34];
        let txt="";
        numbers.forEach(myFunction);
        document.getElementById("demo").innerHTML = txt;

        function myFunction(value) {
            txt +=value+"<br>";
        }
        const numbers1 = [45,123,56,78,98,34];
        //const numbers2 = numbers1.map(myFunction);
        const numbers2 = numbers1.filter(myFunction);
        document.getElementById("demo").innerHTML = numbers2;
        function myFunction(value) {
                return value * 2;   
        }
        function myFunction(value,index,array) {
                return value > 50;   
        }
        var user = "keval patel";
        var name = `hello ${user}`;
        document.write(name);*/
        /*let fname = "keval";
        let lname = "patel";

        /*function fullname(fname,lname) {
            return `${fname} ${lname}`
        }
        let hello = `hello ${fullname(fname,lname)}`;
        let hello = () =>  console.log(`${fname} ${lname}`);
        //document.write(hello);
        hello();*/
        /*let fullname = (fname,lname) =>
            `hello ${fname} ${lname}`;
      
        console.log(fullname("keval","patel"));
    console.log(typeof fullname);*/
        /* function sum(name,...arguments){
             //console.log(arguments)
             let sum = 0;
             for(let i in arguments) {
                 sum += arguments[i];
             }
             document.write  (sum + "<br>");
             document.write(name);
             //console.log(name);
         }
         sum("keval patel",20,30,40);
        // sum(20,30);*/
        /*const fruits = ["banana","orange","apple","mango"];
        document.getElementById("demo").innerHTML= fruits;   
        fruits.pop();
        document.getElementById("demo").innerHTML=fruits;
         fruits.push("banana");
         document.getElementById("demo").innerHTML=fruits;*/

        /*const fruits = ["banana","orange","apple","mango"];
   document.getElementById("demo").innerHTML= fruits;
   document.getElementById("demo1").innerHTML= fruits.shift();   
   //fruits.shift();
   document.getElementById("demo2").innerHTML=fruits;*/

        /*const fruits = ["banana","orange","apple","mango"];
        document.getElementById("demo").innerHTML= fruits;   
        fruits.unshift("lemon");
        document.getElementById("demo").innerHTML=fruits;*/

        /* const fruits = ["banana","orange","apple","mango"];
         document.getElementById("demo").innerHTML= fruits;   
         //fruits.unshift("lemon");
         //fruits[0]="kiwi";    
         //document.getElementById("demo").innerHTML=fruits;

          delete fruits[0];

         function myFunction(){
             fruits[fruits.length] = "kiwi";
             document.getElementById("demo").innerHTML=fruits;

         }*/

        /*const fruits = ["banana","orange","apple","mango"];
        document.getElementById("demo").innerHTML= fruits;
        delete fruits[0];
        document.getElementById("demo").innerHTML= fruits;*/
        /*const fruits = ["banana","orange","apple","mango"];
        document.getElementById("demo").innerHTML= fruits;

        function myFunction(){
            fruits.splice(2,0,"lemon","kiwi");
            document.getElementById("demo").innerHTML=fruits;

        }*/

        /*const fruits = ["banana","orange","apple","mango"];
        document.getElementById("demo").innerHTML= fruits;

        function myFunction(){
            fruits.splice(0,1);
            document.getElementById("demo").innerHTML=fruits;

        }*/

        /*const fruits = ["banana","orange","apple","mango"];
        //const names = ["keval","shivam"];
        const join = fruits.concat("grapes");
        document.getElementById("demo").innerHTML= join;*/

        /*const fruits = ["banana","orange","apple","mango"];
        //const names = ["keval","shivam"];
        const join = fruits.slice(1);
        document.getElementById("demo").innerHTML= fruits + "<br><br>" + join;*/

        /*const fruits = ["banana","orange","apple","mango"];
        document.getElementById("demo").innerHTML= fruits.toString();*/

        /*const fruits = ["banana","orange","apple","mango"];
        document.getElementById("demo").innerHTML= fruits;
        
        function myFunction(){
            fruits.sort();
            fruits.reverse();    
            document.getElementById("demo1").innerHTML= fruits;
        }*/

        /*const num = [24,56,34,688,48];
        let txt = "";    
        num.forEach(myFunction);
        document.getElementById("demo").innerHTML = txt;
         
        function myFunction(value) {
            txt += value + "<br>";
        };*/

        /*const num = [24,56,34,688,48];
   
    const num1 = num.map(myFunction);

    document.getElementById("demo").innerHTML = num1;

    function myFunction(value) {
        return value * 2;
    }*/

        /*const num = [24, 56, 34, 688, 48];

        const num1 = num.filter(myFunction);

        document.getElementById("demo").innerHTML = num1;

        function myFunction(value) {
            return value > 50;
        }*/

        /*const num = [24, 56, 34, 688, 48];

        const num1 = num.reduce(myFunction);

        document.getElementById("demo").innerHTML = num1;

        function myFunction(total,value) {
            return total + value;
        }*/

        /*const num = [24, 56, 34, 688, 48];

        const num1 = num.reduce(myFunction,100);

        document.getElementById("demo").innerHTML = num1;

        function myFunction(total,value) {
            return total + value;
        }*/

        /*const num = [24, 56, 34, 688, 48];

        const num1 = num.reduceRight(myFunction);

        document.getElementById("demo").innerHTML = num1;

        function myFunction(total,value) {
            return total + value;
        }*/

        /*const num = [24, 56, 34, 688, 48];

        const num1 = num.every(myFunction);

        document.getElementById("demo").innerHTML = num1;

        function myFunction(total,value) {
            return  value > 50;
        }*/

        //const num = [24, 56, 34, 688, 48];

        /*const fruits = ["banana","orange","apple","mango"];

        let position = fruits.indexOf("orange") + 1;


        document.getElementById("demo").innerHTML = position;*/

        /*const num = [24, 56, 34, 688, 48];

        const num1 = num.some(myFunction);

        document.getElementById("demo").innerHTML = num1;

        function myFunction(total,value) {
            return  value > 50;
        }*/

        /*const num = [24, 56, 34, 688, 48];

        const fruits = ["banana","orange","apple","mango"];

        let position = fruits.indexOf("orange") + 1;


        document.getElementById("demo").innerHTML = position;*/

        /*const fruits = ["banana","orange","apple","mango"];
        document.getElementById("demo").innerHTML = fruits.includes("mango");*/

        /*const num = [24, 56, 34, 688, 48];

        let num1 = num.find(myFunction);

        document.getElementById("demo").innerHTML = num1;

        function myFunction(value, index, array) {
            return value > 50;
        }*/

        /*const num = [24, 56, 34, 688, 48];

        let num1 = num.findIndex(myFunction);

        document.getElementById("demo").innerHTML = num1;

        function myFunction(value, index, array) {
            return value > 50;
        }*/

        /*const myarr = Array.from("lkjhgfdsa");
        document.getElementById("demo").innerHTML = myarr;*/

        /*const fruits = ["banana","orange","apple","mango"];
        const keys = fruits.keys();

        let text = "";

        for(let x of keys){
            text += x + "<br>";
        }
        document.getElementById("demo").innerHTML = text;*/


        /*function sum(name,...arguments){
             //console.log(arguments)
             let sum = 0;
             for(let i in arguments) {
                 sum += arguments[i];
             }
             document.write  (sum + "<br>");
             document.write(name);
             //console.log(name);
             
         }
         var arr = [20,30,40];
         sum("keval patel", ...arr);
        // sum(20,30);*/

        /*const num = [24, 56, 34, 688, 48];

        let num1 = num.findIndex(myFunction);

        document.getElementById("demo").innerHTML = num1;

        function myFunction(value, index, array) {
            return value > 50;
        }*/

        /*const fruits = ["banana","orange","apple","mango"];

        let position = fruits.lastIndexOf("orange") + 1;


        document.getElementById("demo").innerHTML = position;*/

        /*const fruits = ["banana","orange","apple","mango"];

        document.getElementById("demo").innerHTML = fruits.includes("man");*/

        /*const num = [24, 56, 34, 688, 48];

        let num1 = num.find(myFunction);

        document.getElementById("demo").innerHTML = num1;

        function myFunction(value, index, array) {
            return value > 50;
        }*/

        /*const num = [24, 56, 34, 688, 48];

        let num1 = num.findIndex(myFunction);

        document.getElementById("demo").innerHTML = num1;

        function myFunction(value, index, array) {
            return value > 50;
        }*/

        /*const fruits = ["banana","orange","apple","mango"];
        fruits[0] = "kiwi"; 
        fruits.push("grapes");
        document.getElementById("demo").innerHTML = fruits;*/

        /*const d = new Date();
        document.getElementById("demo").innerHTML= d;*/

        /*const d = new Date(2021,0,1,10,44);
        document.getElementById("demo").innerHTML= d;*/

        /*const d = new Date("january 1,1999,06:15:00");
        document.getElementById("demo").innerHTML= d;*/

        /*const d = new Date();
        document.getElementById("demo").innerHTML= d.toString();*/

        /*const d = new Date();
        document.getElementById("demo").innerHTML= d.toUTCString();*/

        /*const d = new Date();
        document.getElementById("demo").innerHTML= d.toDateString();*/

        /*function sum(name,...arguments){
              //console.log(arguments)
              document.write(`${name} :`)
              let sum = 0;
              for(let i in arguments) {
                  sum += arguments[i];
              }
              document.write  (sum + "<br>");
              document.write(name);
              console.log(name);
              
          }
          var arr = [20,30,40];
          sum("keval patel", arr);*/


        //   function sum(name,...arguments){
        //       //console.log(arguments)
        //       document.write(`${name} :`)
        //       let sum = 0;
        //       for(let i in arguments) {
        //           sum += arguments[i];
        //       }
        //       document.write  (sum + "<br>");
        //       document.write(sum + "<br>");
        //       console.log(name);
              
        //   }
        //   var arr = [20,30,40];
        //   sum("keval patel", ...arr);


        /* let n = "keval";
         let age = "22";

         var obj = {
            [n + "name"] : "hiteshbhai patel",
            from : "ahmedabad",
            'detail show'() {
                return `${this.kevalname} is leaving in ${this.from}`
            }
         };

         console.log(obj);
         console.log(obj['detail show']());*/

        /*let fname = "keval";
        let lname = "patel";
        let age = "22";

        function student(fname, lname, age) {
            let fullname = fname + " " + lname;
           return {fullname, age};
        }

        console.log(student(fname, lname, age));*/

        /*let user = ["keval patel",22,"ahmedabad",["male",25000]];

        let [name, age, city,[gender,salary]] = user;

        console.log(name);
        console.log(age);
        console.log(city);
        console.log(gender);
        console.log(salary);*/

        /*let user = ["keval patel",22,"ahmedabad"];

        let [name,...args] = user;

        console.log(name);
        console.log(args);*/

        /*function user([name, age, city]) {
            console.log(name);
            console.log(age);
            console.log(city);
        }

        user(["keval patel", 22,"ahmedabad"]);*/

        /* function user() {
             return ["keval patel", 22,"ahmedabad"];
         }

         let [name, age, city] = user();

         console.log(name);*/

        /*function myFunction() {
            let age = document.getElementById("age").value;
            let votable = (age < 18) ? "too young":"old enough";
            document.getElementById("demo").innerHTML= votable;
        }*/

        /* function myFunction() {
             let voteable;
             let age = Number(document.getElementById("age").value);
             if(isNaN(age)) {
                 voteable = "input value is not number";
             } else {
                 voteable = (age < 18) ? "too young" : "old enough"; 
             }
             document.getElementById("demo").innerHTML = voteable ;
         }*/


        /*if(new Date().getHours()< 18) { 
            document.getElementById("demo").innerHTML = "good day!"; 
        }*/

        /*const hour = new Date().getHours();
        let greeting;

        if(hour < 18) {
            greeting = "good day!!";
        } else {
            greeting = "good evening";
        }

        document.getElementById("demo").innerHTML = greeting; */

        /*const hour = new Date().getHours();
        let greeting;

        if(hour < 10) {
            greeting = "good morning!!";
        } else if (hour < 18){
            greeting = "good day!!";
        } else {
            greeting = "good evening!!";
        }

        document.getElementById("demo").innerHTML = greeting; */


        /* let user = {
             name : "keval",
             age : 22,
             city : "ahmedabad"
         }

         let {name : n, age : a, city : c} = user;

         console.log(n);
             console.log(a);
             console.log(c);*/

        /*let day;

        switch (new Date().getDay()) {
            case 0:
                day = "today is sunday!!";
                break;

            case 1:
                day = "today is monday!!";
                break;

            case 2:
                day = "today is tuesday!!";
                break;

            case 3:
                day = "today is wednesday!!";
                break;

            case 4:
                day = "today is thursday!!";
                break;

            case 5:
                day = "today is friday!!";
                break;

            case 6:
                day = "today is saturday!!";
                break;

            default:
                text = "Looking forward to the Weekend";
        }
        document.getElementById("demo").innerHTML = day;*/

        /*const fruits = ["banana","orange","apple","mango"];
         
        let txt = "";
        for (var i = 0;i< fruits.length;i++) {
            txt += fruits[i] + "<br>";
        }

        document.getElementById("demo").innerHTML= txt;*/

        /*const fruits = ["banana","orange","apple","mango"];
         let i = 2; 
        let txt = "";
        for (;i< fruits.length;i++) {
            txt += fruits[i] + "<br>";
        }

        document.getElementById("demo").innerHTML= txt;*/

        /*const fruits = ["banana", "orange", "apple", "mango"];

        let txt = "";
        for (var i = 0; i < fruits.length;) {
            txt += fruits[i] + "<br>";
            i++;
        }

        document.getElementById("demo").innerHTML = txt;*/

        /*class keval {
            message() {
                console.log("hello world!");
                
            }

            message1() {
                document.write("hello world!");
            }
        }

        let a = new keval();

        a.message();
        a.message1();*/

        /*class keval {
           constructor(){
               console.log("hello World!!");
           }
        }

        let a = new keval();*/

        /*class keval {

            constructor(name,age) {
                this.fname = name;
                this.fage = age;
                console.log("hello keval patel!!");
            }

            message() {
                console.log(`hello ${this.fname} age is ${this.fage}`);    
                document.write(`hello ${this.fname} age is ${this.fage}`);
            }

            /*message1() {
                document.write("hello world!");
            }

            static method() {
                console.log("keval patel!!");
            }
        }

        let a = new keval("keval!!",25);
        let b = new keval("patel",25);
        //a.name = "hello keval patel!!";
        a.message();
        b.message();

        keval.method();*/

        /*class student {

            constructor(name, age,fees) {
                this.sname = name;
                this.sage = age;
                this.sfees = fees;

                console.log("constructor : Student ");
            }

            info() {
                console.log("Student name :" + this.sname);
                document.write(`the name is ${this.sname} , age is ${this.sage} and fees is ${this.sfees}`);
            }
        }

        class teacher extends student {

            
           
            info() {
                //super.info();
                let sa = 100;
            let pa = 1000;
            let totalcost = this.sfees + sa + pa;
                console.log("teacher name : " + this.sname);
                document.write(`the name is ${this.sname} , age is ${this.sage} and fees is ${totalcost}`);
            }
        }

        class test extends teacher {

        }

        let a  = new test("keval patel" , 22, 6000); 
        //let b = new teacher("k p ", 23,7000);

        a.info();
        //b.info();*/

        /* const person = { fname : "keval", age :22};

         let txt = "";
         for (let x in person) {
             txt += person[x] + " ";
         }

         document.getElementById("demo").innerHTML = txt;*/

        /*const num = [23,32,66,4,22,88,97];
        
        let txt = "";
        for (let x in num) {
            txt += num[x] + "<br>";
        }

        document.getElementById("demo").innerHTML = txt;*/

        /*const num = [23, 32, 66, 4, 22, 88, 97];

        let txt = "";
        num.forEach(myFunction);
        document.getElementById("demo").innerHTML = txt;

        function myFunction(value, index, array) {
            txt += value + "<br>";
        }*/

        /*const num = [23, 32, 66, 4, 22, 88, 97];

        let txt = "";
        num.forEach(myFunction);
        document.getElementById("demo").innerHTML = txt;

        function myFunction(value) {
            txt += value + "<br>";
        }*/

        /*const fruits = ["banana", "orange", "apple", "mango"];

        let txt = "";

        for (let x of fruits){
            txt += x +"<br>";
        }

        document.getElementById("demo").innerHTML= txt;*/

        /*let language = "kevalpatel";

        let txt = "";
        for(let x of language) {
            txt += x + "<br>";
        }
        document.getElementById("demo").innerHTML = txt;*/

        /*let txt = "";
        let i = 0;
        while(i<10) {
            txt += "<br>" + i;
            i++;
        }

        document.getElementById("demo").innerHTML = txt;*/


        /*let txt = "";
        let i = 0;
         do{
            txt += "<br>" + i;
            i++;
                    }while(i<10);

        document.getElementById("demo").innerHTML = txt;*/


        /*let txt = "";
        let i = 0;
         do{
            txt += "<br>" + i;
            i++;
            if(i===3){break;}
                    }while(i<10);

        document.getElementById("demo").innerHTML = txt;*/

        /*let txt = "";
        let i = 0;
         do{
            txt += "<br>" + i;
            i++;
            if(i===3){continue;}
                    }while(i<10);

        document.getElementById("demo").innerHTML = txt;*/

        /*const fruits = ["banana", "orange", "apple", "mango"];
        let txt = "";

        list : {
            txt += fruits[0] + "<br>";
            txt += fruits[1] + "<br>";
            break list;
            txt += fruits[2] + "<br>";
            txt += fruits[3] + "<br>";
        }

        document.getElementById("demo").innerHTML = txt;*/

        /*function myFunction() {
            const message = document.getElementById("demo1");
            message.innerHTML = "";
            let x = document.getElementById("demo").value;
            try {
                if (x == "") throw "empty";
                if (isNaN(x)) throw "not a number";
                x = Number(x);
                if (x < 5) throw "too low";
                if (x > 10) throw "too high";
            } catch (err) {
                message.innerHTML = "input is : " + err;
            } finally {
                document.getElementById("demo").value = "";
            }
        }*/

        /*let num = 1;    
        try {
                //num.toPrecision(500);
                num = y + 12;
        }
        catch(err) {
            document.getElementById("demo").innerHTML = err.name;
        }*/

        /*let num = 1;    
        try {
                //num.toPrecision(500);
                //num = y + 12;
                eval("alert('hello)");  
        }
        catch(err) {
            document.getElementById("demo").innerHTML = err.name;
        }*/

        /*let num = 1;    
        try {
                //num.toPrecision(500);
                //num = y + 12;
                //eval("alert('hello)");  
                num.toUpperCase();
        }
        catch(err) {
            document.getElementById("demo").innerHTML = err.name;
        }*/

        /*myFunction();
           
           function myFunction() {
               let carname = "volvo";  
               document.getElementById("demo").innerHTML = typeof carname + " " + carname;
           }

           document.getElementById("demo1").innerHTML = typeof carname;*/

        /*let carname = "volvo";
        myFunction();

        function myFunction() {
            document.getElementById("demo").innerHTML = "hello " + carname;
        }*/

        /*myFunction();
        document.getElementById("demo").innerHTML = name;    

        function myFunction() {
            name = "keval patel";
        }*/

        /*x = 5;
        a = document.getElementById("demo").innerHTML = x;

        var x;*/

        /*var x = 5;
        var y = 7;
         
        a = document.getElementById("demo").innerHTML =   x + " " + y;*/

        /*const person = {
            fname : "keval",
            lname : "patel",
            id : 1234,
            fullname : function (){
                return this.fname + " " + this.lname;
            }
        };

        document.getElementById("demo").innerHTML = person.fullname();*/

        /*let x = this;
        document.getElementById("demo").innerHTML = x;*/

        /*const person = {
            fname : "keval",
            lname : "patel",
            age : 22,
            myFunction : function () {
                return this;
            }
        };

        document.getElementById("demo").innerHTML = person.myFunction();*/

        /*const person = {
            fname : "keval",
            lname : "patel",
            age : 22,
            myFunction : function () {
                return this.fname + " " + this.lname;
            }
        };

        document.getElementById("demo").innerHTML = person.myFunction();*/

        /*const   person1 = {
            fullname : function() {
                return this.firstname + " " + this.lastname;
            }
        }

        const person2 = {
            firstname : "keval",
            lastname : "patel",
        }
        let x = person1.fullname.call(person2);
        document.getElementById("demo").innerHTML = x;*/

        /*var hello;

        hello = function() {
            return "hello world!!";
        }
        document.getElementById("demo").innerHTML = hello();*/

        /*var hello;

        hello = () => {
            return "hello world!!";
        }
        document.getElementById("demo").innerHTML = hello();*/

        /*var hello;

        hello = () => "hello world!!";
        document.getElementById("demo").innerHTML = hello();*/

        /*var hello;
        hello = (val) => "hello " + val;

        document.getElementById("demo").innerHTML = hello("keval patel!!");*/

        /*var hello;
        hello = val => "hello " + val;

        document.getElementById("demo").innerHTML = hello("keval patel!!");*/

        /*var hello;
        hello = function() {
            document.getElementById("demo").innerHTML  += this;
        }
        window.addEventListener("load",hello);

        document.getElementById("btn").addEventListener("click", hello);*/

        /*var hello;
        hello = () => {
            document.getElementById("demo").innerHTML  += this;
        }
        window.addEventListener("load",hello);

        document.getElementById("btn").addEventListener("click", hello);*/

        /*class car {
                constructor(name,year) {
                    this.name = name;
                    this.year = year;
                }
        }
        
        const mycar = new car("kia", 2021);
        document.getElementById("demo").innerHTML = mycar.name + " " + mycar.year;*/

        /*class car {
                constructor(name,year) {
                    this.name = name;
                    this.year = year;
                }

                age() {
                    let date = new Date();
                    return date.getFullYear() - this.year;
                }
        }

        let mycar = new car("kia", 2015);
        document.getElementById("demo").innerHTML = mycar.age();*/

        /*class car {
                constructor(name,year) {
                    this.name = name;
                    this.year = year;
                }

                age(x) {
                    return x - this.year;
                }

            }

            let date = new Date();  
            let year = date.getFullYear();

            let mycar = new car("kia", 2015);
            document.getElementById("demo").innerHTML = mycar.age(year);*/

        //   class student {

        //       constructor(name, age, fees) {
        //           this.sname = name;
        //           this.sage = age;
        //           this.sfees = fees;
        //           console.log("constructor : student  ");
        //           document.write("constructor : student<br>");
        //       }

        //       info() {
        //           console.log("constructor : student " + this.sname);
        //           document.write(`student name :  ${this.sname} <br>
        //               student age : ${this.sage} <br>
        //               student fees : ${this.sfees} <br>`);
        //       }
        //   }

        //     class teacher extends student {




        //        info() {
        //           let tf = 1000;
        //           let lf = 800;
        //           let totalfees = this.sfees + tf + lf;
        //           console.log("constructor : student " + this.sname);
        //           document.write(`student name :  ${this.sname} <br>
        //               student age : ${this.sage} <br>
        //               student fees : ${totalfees} <br>`);
        //       }


             /* constructor(name){
                      super();
                      console.log("constructor : student");
                      document.write("constructor : student " + name);
              }*/
       /* info() {s
                super.info();
                console.log("constructor : student" + this.sname);
                document.write("teacher name : " + this.sname);
       }
        }

         class test extends teacher {

        }

         let a = new test("keval patel",22, 6000);
        //let a = new teacher("keval patel", 22, 6000);
        //let b = new student("k p", 22, 8000);
        a.info();
        //export { student,teacher, test, a};
        //b.info();*/

        /*const person = {
            fname : "keval",
            lname : "patel",
            age : 22,
            fullname : function () {
                return this.fname + " " + this.lname;
            }
        };

        document.getElementById("demo").innerHTML = person.fullname();*/

        // const person1= {
        //     fullname : function() {
        //             return this.fname + " " + this.lname;
        //     }
        // }
        // const person2 = {
        //     fname : "keval",
        //     lname : "patel",
        // }
        // let x = person1.fullname.call(person2);
        // document.getElementById("demo").innerHTML = x;

        /*var hello;
        hello = function() {
            return "keval patel";
        }
        document.getElementById("demo").innerHTML = hello();*/

        /*var hello;
        hello = () => "keval patel"; 
        document.getElementById("demo").innerHTML = hello();*/

        /*var keval;
        keval = (val) => "hello " + val;
        document.getElementById("demo").innerHTML = keval("keval patel");*/

        /*var  hello;

        hello = function() {
            document.getElementById("demo").innerHTML += this;
        }
        window.addEventListener("load",hello);
        document.getElementById("btn").addEventListener("click", hello);*/
    </script>
     <!--<button onclick="this.style.display='none'">remove</button>-->
     <!--<button onclick="document.getElementById('myImage').src='pic_bulbon.gif'">Turn on the light</button>
     <img id="myImage" src="pic_bulboff.gif" style="width:100px">
     <button onclick="document.getElementById('myImage').src='pic_bulboff.gif'">Turn off the light</button>-->

</body>

</html> 
<?php 

/*$candles = array(3,2,1,3);
//print_r(array_count_values($candles));
$max = max(array_count_values($candles));

echo $max;*/
/*$origDate = "07:05:45PM";
 
$newDate = date("H:i:s", strtotime($origDate));
echo $newDate;*/




?>