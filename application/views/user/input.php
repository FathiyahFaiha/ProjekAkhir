<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Main content -->
      <section class="content">
        <form>
          <br>
          <br>
          <div class="container shadow-sm p-5 position-relative">
                <br>
                <div class="form-group row">
                  <label for="id" class="col-4 col-form-label">ID</label>
                  <div class="col-8">
                    <input id="id" name="id" type="number" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="text" class="col-4 col-form-label">Username</label>
                  <div class="col-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"></div>
                      </div>
                      <input id="text" name="text" type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-4 col-form-label">Password</label>
                  <div class="col-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"></div>
                      </div>
                      <input id="password" name="password" type="password" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="text2" class="col-4 col-form-label">Email</label>
                  <div class="col-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"></div>
                      </div>
                      <input id="text2" name="text2" type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-4">Role</label>
                  <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="administrator">
                      <label for="radio_0" class="custom-control-label">Administrator</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="public">
                      <label for="radio_1" class="custom-control-label">Public</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
</body>

</html>