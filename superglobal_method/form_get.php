<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply online-form</title>
</head>
<body style="background-color:Tomato";>
 
    <form action="getdata.php" method = "get">
 Name: <input type="text" name="name"><br><br>

E-mail: <input type="text" name="email" ><br><br>

Father's name: <input type="text" name="Father's name"> <br><br>

Gender:
<input type="radio" name="gender"
value="female">Female
<input type="radio" name="gender"
value="male">Male
<input type="radio" name="gender"
value="other">Other<br><br>

My favourate color:
<input type='color' name=color><br><br>

DOB= <input type='date' name=DOB><br><br>
Salery Range<input type='range' name='salary ramge'><br><br>
   Location : 
   <input type='radio' , name ='nsti-name' , value='Allahabad'> Allahabad <br>
   <input type='radio' name ='nsti-name' value='Andhra Pradesh'> Andhra Pradesh <br>
   <input type='radio' name ='nsti-name' value='Assam'> Assam <br>
   <input type='radio' name ='nsti-name' value='Bihar'> Bihar <br>
   <input type='radio' name ='nsti-name' value='KNP'>Kanpur<br>
   <input type='radio' name ='nsti-name' value='Leh'> Leh <br>
   <input type='radio' name ='nsti-name' value='Azamgar'> Azamgar <br>

Courses:
<input type='checkbox' name ='course' values='BE/B.Tech'>BE/B.Tech<br>
<input type='checkbox' name ='course' values='B.Arch'>B.Arch<br>
<input type='checkbox' name ='course' values='BCA'>BCA<br>
<input type='checkbox' name ='course' values='B.Sc'>B.Sc<br>
<input type='checkbox' name ='course' values='B.Sc- Nursing'>B.Sc- Nursing<br>
<input type='checkbox' name ='course' values='BDS- Bachelor of Dental Surgery.'>BDS- Bachelor of Dental Surgery.<br>
<input type='checkbox' name ='course' values='Bachelor in Hotel Management.'>Bachelor in Hotel Management.<br>
<input type='checkbox' name ='course' values='Digital Marketing'>Digital Marketing<br><br>
  <h3>UPLOAD YOUR DOCUMENT</h3><input type='file' name ='document'>
<input type ='submit' name='submit'>
</form>
</body>
</html>