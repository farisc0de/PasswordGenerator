<?php include_once "gen.php"; ?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="content-language" content="en" />
  <meta name="description" content="Password Gen" />
  <meta name="author" content="FarisCode" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="application-name" content="Password Gen Tool" />
  <meta name="language" content="EN" />
  <title>
    Password Generation Service
  </title>
  <link rel="stylesheet" href="https://bootswatch.com/5/vapor/bootstrap.min.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Password Gen</a>
    </div>
  </nav>

  <div id="wrapper">
    <div id="content-wrapper">
      <div class="container pb-5 pt-5">
        <div class="row justify-content-center">
          <div class="col-sm-12 col-md-8 col-lg-4">
            <div>
              <?php if (isset($error) && $error == "1") : ?>
                <div class="alert alert-dismissible alert-danger">
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button> <strong>Oh snap!</strong> <a href="#" class="alert-link">Select few things up</a> and try again.
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
                    <input type="text" id="password" class="form-control" placeholder="Password" value="<?php echo $_password; ?>" onclick="copyText()">
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

  <div aria-live="polite" aria-atomic="true" class="bg-dark position-relative">
    <div class="toast-container position-absolute bottom-0 end-0 p-3">
      <div class="toast">
        <div class="toast-header">
          <strong class="me-auto">Password copied</strong>
        </div>
        <div class="toast-body">
          Done, the password is in ur clipboard.
        </div>
      </div>
    </div>
  </div>


  <footer class="py-5 my-sm-10 bg-primary">
    <div class="container-fluid my-auto">
      <p class="m-0 text-center text-white">
        Copyright &copy; Password Gen - <?php echo date('Y') ?>
      </p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

  <script>
    function copyText() {
      var copyText = document.getElementById("password");

      if (copyText.value != '') {
        copyText.select();
        copyText.setSelectionRange(0, 99999);

        navigator.clipboard.writeText(copyText.value);


        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function(toastEl) {
          return new bootstrap.Toast(toastEl)
        })

        toastList.forEach(toast => toast.show());
      }
    }
  </script>
</body>

</html>

</html>