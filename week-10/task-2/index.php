<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Form validation with Ajax</h1>
        <form action="" method="POST" onsubmit="submitForm(event)">
            <table>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="fname" onkeyup="showHint(this.value,'txtHintFname')"></td>
                    <td>Suggestions: <span id="txtHintFname"></span></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lname" onkeyup="showHint(this.value,'txtHintLname')"></td>
                    <td>Suggestions: <span id="txtHintLname"></span></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" onkeyup="checkError(this.value,'txtHintEmail')"></td>
                    <td>Suggestions: <span id="txtHintEmail"></span></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="city" onkeyup="showHintCity(this.value,'txtHintCity')"></td>
                    <td>Suggestions: <span id="txtHintCity"></span></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><input type="text" name="country" onkeyup="showHintCountry(this.value,'txtHintCountry')"></td>
                    <td>Suggestions: <span id="txtHintCountry"></span></td>
                </tr>
                <tr></tr>
                <tr>
                    <td></td>
                    <td><button>Submit</button></td>
                </tr>
            </table>
        </form>
        <table id="showContent" hidden>
            <tr>
                <td>First name:</td>
                <td id="fname"></td>
            </tr>
            <tr>
                <td>Last name:</td>
                <td id="lname"></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td id="email"></td>
            </tr>
            <tr>
                <td>City </td>
                <td id="city"></td>
            </tr>
            <tr>
                <td>Country </td>
                <td id="country"></td>
            </tr>
        </table>
    </center>
    <script src="main.js"></script>
</body>

</html>