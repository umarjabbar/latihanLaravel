<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SanberBook - registasi</title>
</head>
<body>
  <h1>Create New Account!</h1>

  <h3>Sign Up Form</h3>

  <form  method="POST" action="{{ url('/home') }}">
  @csrf
    <label for="fname">First name:</label><br>
    <input type="text" name="fname" id="fname"><br>
    <br>
    
    <label for="lname">Last name:</label><br>
    <input type="text" name="lname" id="lname"><br>
    <br>
    
    <label>Gander:</label><br>
    <input type="radio" name="gender" value="male"> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="radio" name="gender" value="other" checked> Other <br>
    <br>
    
    <label>Nasionality:</label><br>
    <select name="nasionality">
      <option value="Indonesian">Indonesian</option>
      <option value="Malaysian">Malaysian</option>
      <option value="Singapore">Singapore</option>
      <option value="Australia">Australia</option>
    </select><br><br>
    
    <label for="lang">Language Speaken:</label><br>
    <input type="checkbox" name="indo" value="Bahasa Indonesia">Bahasa Indoneisa<br>
    <input type="checkbox" name="english" value="English">English<br>
    <input type="checkbox" name="other" value="other">other<br>
    <br>

    <label for="bio">Bio:</label><br>
    <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
    <br>

    <button name="signup" id="signup" type="submit">Sign Up</button>
  </form>
  <br>
  <a href="{{ url('/') }}">Back</a>
</body>
</html>