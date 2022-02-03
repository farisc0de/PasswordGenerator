<?php include_once "gen.php"; ?>
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
            <div>
              <?php if (isset($error) && $error == "1") : ?>
                <div class="alert alert-dismissible alert-danger">
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                  <strong>Oh snap!</strong> <a href="#" class="alert-link">Select a few things up</a> and try again.
                </div>
              <?php endif; ?>
              <?php if (isset($error) && $error == "2") : ?>
                <div class="alert alert-dismissible alert-danger">
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                  <strong>Oh snap!</strong> <a href="#" class="alert-link">Write the desired length</a> and try again.
                </div>
              <?php endif; ?>
            </div>
            <div class="card bg-dark mb-3">
              <div class="card-header text-center">
                <b>Generate a new password</b>
              </div>
              <div class="card-body">

                <form role="form" method="POST">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Password" value="<?php echo $_password; ?>">
                  </div>


                  <div class="form-check form-switch mt-4">
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

                  <fieldset class="form-group mt-3">
                    <input type="range" class="form-range" value="8" min="8" max="50" step="1" name="length" oninput="this.nextElementSibling.value = this.value">
                    Length: <output>8</output>
                  </fieldset>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">
                      Generate Password
                    </button>
                  </div>
                </form>
              </div>

              <div class="card-footer">
                <div class="text-center">
                  Developed By: <a href="https://github.com/farisc0de/">fariscode</a>
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