<!DOCTYPE html>
<html>
<head>
  <title>JavaScript Lab task</title>
</head>
<body>

  <h1>Welcome to JavaScript Lab task</h1>
  
  <script>
    
    
    //task1
    console.log("\n Store information about a student.");
    var name = "Maruf hasan chowdhury";
    var age = 23;
    var isStudent = true;
    console.log("Name:", name);
    console.log("Age:", age);
    console.log("Is Student?", isStudent);

    //task2
    console.log("\n Perform some calculations using operators");
    var a = 30;
    var b = 20;
    console.log("Addition:", a + b);
    console.log("Subtraction:", a - b);
    console.log("Multiplication:", a * b);
    console.log("Division:", a / b);
    console.log("Remainder:", a % b);

    //task3

    console.log("\nUse conditions to determine if the student is an adult and whether they passed.");

   var name = "Maruf";
   var age = 23;
   var marks = 75;

   console.log("Student Name: " + name);
   console.log("Age: " + age);
   console.log("Marks: " + marks);


   if (age >= 18) {
   console.log("Status: Adult");
   } else {
   console.log("Status: Not an Adult");
   }

  if (marks >= 40) {
  console.log("Result: Passed");
  } else {
  console.log("Result: Failed");
  }


    //task4

    console.log("\n Use a loop to print marks of each subject");
    var marks=[10,20,30,40,50]
    for (var i = 1; i <= 5; i++) {
      console.log("Subject " + (i + 1) + ": " + marks[i] + " marks");
    }

    //task5 

    console.log("\n Use a function to display a summary.");

    function greetUser(userName) {
      console.log("Hello, " + userName + "!");
    }

    greetUser("Maruf");
    greetUser("chowdhury");


    //task6

    function showResult() {
      var name = "Maruf";
      var marks = 85;
      var result = "";

      if (marks >= 40) {
        result = "Passed";
      } else {
        result = "Failed";
      }

      alert("Student: " + name + "\nMarks: " + marks + "\nResult: " + result);
      console.log("Result shown for " + name);
    }

  
  </script>
<br><br>

  <button onclick="showResult()">Click Me</button>
  

</body>
</html>
