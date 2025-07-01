// Form validation for FIR registration
function validateFIRForm() {
    var name = document.forms["firForm"]["name"].value;
    var contact = document.forms["firForm"]["contact"].value;
    var email = document.forms["firForm"]["email"].value;
    var complaint = document.forms["firForm"]["complaint"].value;

    if (name == "" || contact == "" || email == "" || complaint == "") {
        alert("All fields must be filled out!");
        return false;
    }

    if (isNaN(contact) || contact.length != 10) {
        alert("Please enter a valid 10-digit contact number.");
        return false;
    }

    return true;
}

// Optional: Alert on successful registration
function showSuccess(message) {
    alert(message);
}
