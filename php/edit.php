

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="icon" type="image/x-icon" href="../images/shuttle.png" />
    <link rel="stylesheet" href="../style/style.css" />
    <title>Edit Records Here</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Badminton Guide</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-4" style="font-size: larger;">
              <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="../about.html">About</a>
            </li>
          </ul>
      </nav>
      <div class="container d-flex justify-content-center align-items-center mt-5" style="height:75vh;">
        <div
        class="card d-flex justify-content-center align-items-center"
        style="border: 2px solid darkblue; width:400px; height:420px;"
      >
      <div class="card-body">
        <div class="card-title">
            <b>Edit Data Admin Panel</b>
        </div>
        <form action="actualedit.php" method="post">
        <?php 
        $edit = $_POST['edit'];
        echo "<input type='hidden' name='edit' value='$edit'>";
        ?>
            <label for="" class="form-label mr-2 justify-content-start my-3" id="budget">budget</label>
            <input type="text" name="budget" style="width:100px; margin-left: 7px;">
        <br>
          <label for="" class="form-label mr-3 justify-content-start my-3" id="style">weight</label>
          <select name="weight">
            <option class="bg-primary">Heavyweight</option>
            <option>Lightweight</option>
          </select><br>
          <label for="" class="form-label mr-4 justify-content-start my-3" id="style">style</label>
          <select name="style">
            <option>Attacking</option>
            <option>Defensive</option></select
          ><br>
          <label for="" class="form-label mr-4 justify-content-start my-3" id="style">link</label>
          <input type="text" name="link" style="width:100px;  margin-left: 17px;"><br>   
          <div class="d-flex justify-content-center align-items-center mt-5">
            <button type="submit" class="btn btn-outline-primary">Edit</button>
        </div>
        
        </form>
      </div>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
