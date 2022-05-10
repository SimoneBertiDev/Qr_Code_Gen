<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>
  <br>
  <div class="container p-3">
    <form action="qr_code.php" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" name="nome">
        </div>
        <div class="form-group col-md-6">
          <label for="cognome">Cognome:</label>
          <input type="text" class="form-control" name="cognome">
        </div>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" placeholder="marco.rossi@gmail.com">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="PRN">Codice PRN:</label>
          <input type="text" class="form-control" name="PRN">
        </div>
        <div class="form-group col-md-4">
          <!-- <label for="inputState">State</label>
          <select name="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
          </select> -->
        </div>
        <div class="form-group col-md-2">
          <!-- <label for="inputZip">Zip</label>
          <input type="text" class="form-control" name="inputZip"> -->
        </div>
      </div>
      <div class="form-group">
        <label for="indirizzo">Indirizzo:</label>
        <input type="text" class="form-control" name="indirizzo" placeholder="Via/Piazza M.Rossi, 5 , 12345">
      </div>
      <button type="submit" class="btn btn-primary">Sign in</button>
    </form>



  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</html>