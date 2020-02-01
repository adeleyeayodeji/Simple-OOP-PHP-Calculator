<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Simple OOP PHP Calculator</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="container">
    <div class="header p-5 bg-blue bg-primary mt-2 mb-2 rounded-sm text-white">
        <h1 class="text-center">Simple OOP PHP Calculator</h1>
    </div>
    <h5 id="topScreen" class="text-center text-primary p-0 m-0">0</h5>
    <div id="screencon" class="header p-2 bg-blue border border-primary mt-2 mb-2 rounded-sm text-white">
        <h1 id="screen" class="text-center text-dark font-weight-bold">0</h1>
    </div>
      <form class="text-center" action="" method="post" >

        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="field1">1st Field</label>
              <input type="number" id="field1" placeholder="Enter number" class="form-control">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="operator">Operator</label>
              <select class="form-control" id="operator">
                <option value="add">Addition (+)</option>
                <option value="sub">Subtraction (-)</option>
                <option value="mul">Multiplication (*)</option>
                <option value="div">Division (/)</option>
              </select>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
            <label for="field2">2st Field</label>
            <input type="number" id="field2" placeholder="Enter number" class="form-control">
          </div>
          </div>
        </div>
        <div class="form-group">
          <input type="submit" id="submit" value="Calculate" class="form-control btn btn-primary">
        </div>
      </form>
    </div>
    <div class="footer text-center">
      Simple Script | <a href="https://adeleyeayodeji.com" class="link">Adeleye Ayodeji</a>
    </div>
    <script type="text/javascript" src="js/core.js"></script>
  </body>
</html>
