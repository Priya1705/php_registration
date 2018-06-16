<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <style>
    .error 
    {
      color: #FF0000;
    }
    #form 
    {
      height: 300px;
      width: 400px;
      background-color: rgb(140,209,211, 0.3);
      opacity:0.2%;
      box-shadow: 10px 10px;
      border: 2px solid black;
      padding: 30px;
      padding-top:30px;
      font-size: 20px;
      position:absolute;
    top: 35%;
    left: 35%;
    bottom:35%;
    right: 35%;
    }

  </style>
  <script>
    function validate()
    { 
      var name = document.register.name.value;
      var email = document.register.email.value;
      var comment = document.register.comment.value; 
      var gender = document.register.gender.value;
      
      if (name==null || name=="")
      { 
      alert("Name can't be blank"); 
      return false; 
      }
      else if (email==null || email=="")
      { 
      alert("Email can't be blank"); 
      return false; 
      }
      else if (comment==null || comment=="")
      { 
      alert("comment can't be blank"); 
      return false; 
      }
      else if (gender==null || gender=="")
      { 
      alert("gender can't be blank"); 
      return false; 
      }
    } 
  </script>
</head>
<body>
  <div id="form">
    <h1 align="center">ENQUIRY FORM</h1>
    <form name="register" method="post" action="enquiry_2.php" onSubmit="return validate();">
      <table>
        <tr>
          <td>Name</td>
          <td><input type="text" name="name">
          <span class="error">*</span></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="email" name="email">
          <span class="error">*</span></td>
        </tr>
        <tr>
          <td>Comment</td>
          <td><input type="text" name="comment">
          <span class="error">*</span></td>
        </tr>
        <tr>
          <td>Gender</td>
          <td>Male<input type="radio" name="gender">
              Female<input type="radio" name="gender">
            <span class="error">*</span></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Submit">
              <input type="Reset" value="Reset"></td>
        </tr>
      </table>  
    </form>
  </div>
</body>
</html>