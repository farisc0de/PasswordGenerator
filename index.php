<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
  <meta charset="UTF-8" />
  <?php include_once 'components/header.php'; ?>
  <title>
    Password Generation Service
  </title>
  <?php include_once 'components/css.php'; ?>
</head>

<body>

  <?php include_once 'components/navbar.php'; ?>

  <div id="wrapper">
    <div id="content-wrapper">
      <div class="container pb-5 pt-5">
        <div class="row justify-content-center">
          <div class="col-sm-12 col-md-8 col-lg-4">
            <div class="card bg-dark mb-3">
              <div class="card-header text-center">
                <b>Generate a new password</b>
              </div>
              <div class="card-body">

                <form role="form" method="POST" action="gen.php">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Password" value="<?php echo $_SESSION['password'] ?>">
                  </div>


                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="lower">
                    <label class="form-check-label">Lowercase Letters</label>
                  </div>


                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="upper">
                    <label class="form-check-label">Uppercase Letters</label>
                  </div>

                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="numbers">
                    <label class="form-check-label">Numbers</label>
                  </div>

                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="special">
                    <label class="form-check-label">Special Characters</label>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" name="length" placeholder="Length">
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">
                      Generate Password
                    </button>
                  </div>
                </form>
              </div>

              <div class="card-footer">
                <div class="text-center">
                  Developed By: <a href="https://github.com/farisd3v/">fariscode</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include_once 'components/footer.php'; ?>

  <?php include_once 'components/js.php'; ?>
</body>

</html>

</html>
<?php session_destroy(); ?>