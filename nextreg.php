<! Doctype html>  
<html lang="en">  
<head>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <title> PHP Registration Form </title>  
  <style>  
.error {   
color: white;  
    font-family: lato;  
   
    display: inline-block;  
    padding: 2px 10px;  
}  
{  
    padding: 0;  
    margin: 0;  
    box-sizing: border-box;  
}  
body {  
    margin: 50px auto;  
    text-align: center;  
    width: 800px;  
}  
h1 {  
    font-family: sans-serif;  
  display: block;  
  font-size: 2rem;  
  font-weight: bold;  
  text-align: center;  
  letter-spacing: 3px;  
  color: black;  
    text-transform: uppercase;  
}  
 
input {  
    border: 2px solid #ccc;  
    font-size: 1.5rem;  
    font-weight: 100;  
    font-family: 'Lato';  
    padding: 10px;  
}  
form {  
    margin: 25px auto;  
    padding: 20px;  
    border: 5px solid #ccc;  
    width: 500px;  
    background: #fff;  
}  
div.form-element {  
    margin: 20px 0;  
}  
  
input[type=submit] {    
  border: 3px solid;    
  border-radius: 2px;      
  display: block;    
  font-size: 1em;    
  font-weight: bold;    
  margin: 1em auto;    
  padding: 1em 4em;    
 position: relative;    
  text-transform: uppercase;    
}    
  
input[type=submit]:hover {    
  color: #1A33FF;    
}    
</style>  
</head>  
<body> 

<?php  


 
function test_input($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  
<h1> Registration Form</h1>  
<form method="POST" action="">    
  <b> Location: </b> <input type="text" name="location">  
  <br> <br>  
 <b> Age: </b> <input type="text" name="myage"     >  
  <br> <br>  
 <b> University: </b> <input type="text" name="contact" >  
 
  <br> <br>  
 
 
  <input type="submit" name="submit1" value="REGISTER">    
</form>  

<?php
$first_name = $_POST['name'];
if ($_POST['submit1'])
echo "Thank you for filling the form" . $first_name . "<br>";
//echo $first_name;
  ?>
 
</body>  
</html>  