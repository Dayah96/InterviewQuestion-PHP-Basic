<!DOCTYPE html>
<html>
<head>
    
<title>Interview Question - MYWAVE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}

    input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid black;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    button[type=submit] {
      background-color: #32CD32;
      color: white;
      font-weight: bold;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer; 
    }

    button[type=submit]:hover {
      background-color: #90EE90;
    }
        
    #mesej{
    text-align: left;
    margin-left: 15px;
    margin-bottom: 10px;
    font-size: 17px;   
    }
        
</style>
    
</head>
    
<body>

<form action="/info.php">
    
  <label for="uname">Username:</label><br>
  <input type="text" id="uname" name="uname" placeholder="Enter your name"><br>
 
    <p id="mesej"></p>
    
  <button type="submit" name="Submit" onclick="postValue()"> Submit </button>
    
</form> 

<script src="verify_ajax.js"></script>
</body>
</html>
