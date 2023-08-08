function showHint(str, id) {
    if (str.length == 0) {
        document.getElementById(id).innerHTML = "";
        return;
    }
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById(id).innerHTML =
            this.responseText;
    }
    xhttp.open("GET", "gethint.php?q=" + str);
    xhttp.send();
}



function showHintCountry(str, id) {
    if (str.length == 0) {
        document.getElementById(id).innerHTML = "";
        return;
    }
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById(id).innerHTML =
            this.responseText;
    }
    xhttp.open("GET", "getHintCountry.php?q=" + str);
    xhttp.send();
}

function showHintCity(str, id) {
    if (str.length == 0) {
        document.getElementById(id).innerHTML = "";
        return;
    }
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById(id).innerHTML =
            this.responseText;
    }
    xhttp.open("GET", "getHintCity.php?q=" + str);
    xhttp.send();
}

checkError

function checkError(str, id) {
    if (str.length == 0) {
        document.getElementById(id).innerHTML = "";
        return;
    }
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById(id).innerHTML =
            this.responseText;
    }
    xhttp.open("GET", "getEmailValid.php?q=" + str);
    xhttp.send();
}

function submitForm(event) {
    event.preventDefault(); // Prevent the default form submission behavior

    const form = event.target;


    const formData = new FormData(form);

    const formValues = {};

    for (const [name, value] of formData) {
        formValues[name] = value;
    }
    var fname = document.getElementById('fname');
    var lname = document.getElementById('lname');
    var email = document.getElementById('email');
    var city = document.getElementById('city');
    var country = document.getElementById('country');

    if (formValues.fname == '' || formValues.lname == '' || formValues.email == '' || formValues.city == '' || formValues.country == '') {
        console.log('All fields are empty.');
        document.getElementById("showContent").setAttribute("hidden", true);
    } else {
        document.getElementById("showContent").removeAttribute("hidden");
        fname.innerHTML = formValues.fname;
        lname.innerHTML = formValues.lname;
        email.innerHTML = formValues.email;
        city.innerHTML = formValues.city;
        country.innerHTML = formValues.country;
    }


    form.reset();
}