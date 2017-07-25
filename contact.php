<!doctype html>
<html lang="en-us">

<head>
  <meta charset="UTF-8">
  <title>About | Brianna Dunaj</title>
  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

  <?php require './header.php' ?>

  <div class="container" id="main-container">
    <div class="row">
      <div class="col-md-8">
        <section class="main-section" id="main-content">
        <h2>Contact</h2>
          <br>
          

          <p>Name</p>
          <div class="input-group">
            <span class="input-group-addon"></span>
            <input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1">
          </div>  
        
          <br>
          <p>Email</p>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="username" aria-describedby="basic-addon2">
              <span class="input-group-addon" id="basic-addon2">@gmail.com</span>
            </div>

          <br>
          <p>Message</p>
            <div class="input-group">
               <input type="text" class="form-control" id="form-control" placeholder="...">

               <span class="input-group-btn">
                <button class="btn btn-default" type="button">Submit</button>
               </span>
             </div>

        </section>
      </div>

    <?php require './sidebar.php' ?>

    <?php require './footer.php' ?>
    
  
</body>

</html>