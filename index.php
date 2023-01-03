
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Attendance System in PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body >

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Student Attendance System</h1>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-4">

    </div>
    <div class="col-md-4" style="margin-top:20px;">
      <div class="card">
        <div class="card-header" align="center">Choose Login</div>
        <div class="card-body">
          <form method="post" id="teacher_login_form" align="center">
              <div class="form-group">
              <input type="button" class="btn btn-info" value="Admin Login" onclick="admin()"/>
              </div>
              <div class="form-group">
              <input type="button" class="btn btn-info" value="Teacher Login" onclick="teacher()"/>
              </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-4">

    </div>
  </div>
</div>

</body>
</html>

<script>
function admin()
    {
        alert("Welcome to Admin Login");
        window.location="admin/login.php";
        
    }
function teacher()
    {
        alert("welcome to Teacher Login");
        window.location="login.php";
        
    }
</script>
