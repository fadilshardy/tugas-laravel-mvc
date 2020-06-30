<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up SanberBook</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>

    <h3>Sign Up Form</h3>

    <form action="/register" method="POST">
        @csrf

        <label for="fname">First name:</label><br>
        <input type="text" name="fname" id="fname"><br>

        <label for="lname">Last name:</label><br>
        <input type="text" name="lname" id="lname"><br><br>

        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>

        <label for="nationality">Nationality:</label><br><br>
        <select id="nationality" name="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="malaysian">Malaysian</option>
            <option value="singaporean">Singaporean</option>
            <option value="australian">Australian</option>
        </select> <br><br>


        <label for="language">Language Spoken:</label><br>
        <input type="checkbox" id="indonesia" name="indonesia" value="indonesia">
        <label for="male">Indonesia</label><br>
        <input type="checkbox" id="english" name="english" value="english">
        <label for="female">English</label><br>
        <input type="checkbox" id="other" name="other" value="other">
        <label for="other">Other</label><br><br>

        <label for="bio">Bio:</label><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
        <br>
        <button type="submit" value="submit">Sign Up</button>
    </form>

</body>

</html>