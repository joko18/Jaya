<html>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {
    border: 4px solid #f1f1f1;
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    width: 20%; /* Could be more or less, depending on screen size */
}

input[type=text], input[type=password] {
  width: 50%;
  padding: 2px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
  align: center;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body background = "index.jpg">
<body>
<form  action="LoginProses1.php" method="POST">
<label>
<div class="imgcontainer">
    <img src="icons8-customer-64(1).png" alt="Avatar" class="avatar">
</div>
User &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="user" ><br>
Password:<input type="text" name="pass" ><br>

<button type="submit" name="Login" >LOGIN</button>
</form>
</label>
<body>
</html>