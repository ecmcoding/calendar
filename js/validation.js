
//finds the <form> element and assigns it to the form variable
const form = document.querySelector("form");

//an event listener that listens for when the form is submitted 
    form.addEventListener("submit", function (event) {
    //gets the values that are inputted in the form 
    const username = document.getElementById("username").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;

    //selects the element where error messages will be displayed
    const errorDiv = document.getElementById("error-messages");

    //creates an empty array to store error messages
    let errors = [];

    //validates the inputs
    if (username === "") {
        errors.push("Username can't be blank.");
    }

    if (!validateEmail(email)) {
        errors.push("Please enter a valid email address.");
    }

    if (password.length < 8) {
        errors.push("Password must be at least 8 characters long.");
    }

    if (errors.length > 0) {
        //if there are any errors, stop the event (of submitting the form)
        event.preventDefault();
        //shows each error in its own <div> inside the error message container (errorDiv)
        errorDiv.innerHTML = errors.map(error => `<div>${error}</div>`).join("");} 

    //clear the error messages if everything is valid
    else {errorDiv.innerHTML = "";}

    

});

function validateEmail(email) {
    //regex for validating the email-data given has the structure of an actual email
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
};
