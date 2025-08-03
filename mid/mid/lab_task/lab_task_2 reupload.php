<!DOCTYPE html>
<html>
<head>
    // update 
    <title>Bank Management System</title>
    <style>
    h1,h2{
       text-align:center;
       color:blue;
    }
    table{
        align:center;
        Background-color:blue;
        margin:2px;
        border:50px;
        padding:20px;

    }
    input [type="text"], [type="email"],[type="password"]{
        padding: 2px;
        width: 90%;
    }
    </style>

    <!-- and end with -->
   

</head>
<body style ="background-image:url('pexels-anjana-c-169994-674010.jpg');">
   
    <h1>Bank Management System</h1>
    <h2>Your trusted Financial partner</h2>
   
    <center>
         <h3 style="color:white";>Customer Registration From</h3>
    <table>
    <tr>
        <td>Full Name :</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>Date of Birth:</td>
        <td><input type="date"></td>
    </tr>
    <tr>
        <td>gender:</td>
        <td><input type="radio" name="des">male
            <input type="radio" name="des">Female
            <input type="radio" name="des">other 
    </td>
    </tr>
    <tr>
        <td>Marital Status:</td>
        <td>
            <select name ="marital_status">
                
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="divorced">Divorced</option> 
        </td>
    </tr>
    <tr>
        <td>Account Type:</td>
        <td>
            <select name="account_type">
                <option value="savings">Savings</option>
                <option value="current">Current</option>
                <option value="fixed">Fixed Deposit</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Initial Deposit Amount:</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>Mobile Number:</td>
        <td><input type="text"</td>
    </tr>
    <tr>
        <td>Email Address:</td>
        <td><input type="email"></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><input type="text"></td>
        
    </tr>
    <tr>
        <td>Occupation :</td>
        <td><input type="text"</td>
    </tr>
    <tr>
        <td>National ID (NID):</td>
        <td><input type="text"></td>
    </tr>
    <tr></tr>
        <td>Set passWord:</td>
        <td><input type="password"></td>
    </tr>
    <tr>
        <td>Upload Id Proof :</td>
        <td><input type="File"></td>

    </tr>
    <tr>
        
        <td><input type="checkbox">I agree to the tram and conditions</td>
    </tr>
     
<tr>
     <td>

    </td>
    <td><input type ="submit" value="register">
    <input type ="reset" value="clear"></td>

</tr>
   
    </table>
    </center>





    <br>


</body>
</html>