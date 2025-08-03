
function handlesubmit() {

if (firstName === "" || lastName === "" || email === "" || password === "" || confirmPassword === "") {
    alert("Please fill in all required fields.");
    return false;


}
alert("registration successful"|/n/n"+
    "First Name: " + firstName + "|/n/n" +
    "Last Name: " + lastName + "|/n/n" +
    "Email: " + email + "|/n/n" +
    "Password: " + password + "|/n/n" +
    "Confirm Password: " + confirmPassword);


return true;
}




