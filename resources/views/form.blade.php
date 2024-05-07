<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">  
    <style>body {
    font-family: 'Oswald', sans-serif;
    background-color: #b3f52f;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

.signup-container {
    background-color:  #d4f7a2;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}
  
h1 {
    color: #333;
    margin-top: 20px;
}

h3 {
    color: #7b7b7b;
}

form {
    margin-top: 20px;
    text-align: left;
}

label {
    font-weight: bold;
    color: #333;
}

input[type="text"]
input[type="password"],
select,
textarea {
    width: 100%;
    padding: 0;
    margin-bottom: 15px;
    border: none;
    border-radius: 50px solid #ff0000;
    font-size: 16px;
}

input[type="radio"],
input[type="checkbox"] {
    margin-right: 5px;
}

button[type="submit"] {
    background-color: #4caf50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button[type="submit"]:hover {
    background-color: #357538;
}</style>
</head>
  
<body>
    <div class="signup-container">   
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <form id="form.php" action="{{ url('welcome') }}" method="get">
        <label for="first-name">First name:</label><br>
        <input type="text" name="first-name" id="first-name" required><br>
        <label for="last-name">Last name:</label><br>
        <input type="text" name="last-name" id="last-name" required><br>
        <p>Gender</p>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="Female" required>
        <label for="female">Female</label><br>
        <input type="radio" id="Secret"name="gender" value="Secret" required>
        <label for="Secret">Secret</label><br>
        <p>Nationality</p>
        <select name="nationality" id="nationality" required>
            <option value="Indonesia">Indonesia</option>
            <option value="English">English</option>
            <option value="India">India</option>
            <option value="Johar">Johar</option>
            <option value="CKM">CitraKebunMas</option>   
        </select>
        <p>Language Spoken</p>
        <input type="checkbox" id="language1" value="Indonesia" name="language[]">
        <label for="language1"> Bahasa Indonesia</label><br>
        <input type="checkbox" id="language2" value="English" name="language[]">
        <label for="language2"> English</label><br>
        <input type="checkbox" id="language3" value="Palestina" name="language[]">
        <label for="language3"> Palestine</label><br>
        <input type="checkbox" id="language4" value="Sunda" name="language[]">
        <label for="language4"> Sunda</label><br>
        <label for="bio">Bio</label><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
        <div align="center">    
            <button type="submit">Sign Up</button>
        </div>
    </form>
    </div>
</body>
</html>