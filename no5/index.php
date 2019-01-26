<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>No 5</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-12">
            <form action="" method="POST">
                <div class="form-group">
                  <label for="">Masukkan kata</label>
                  <input
                    type="text"
                    class="form-control"
                    name="words"
                    aria-describedby="helpId"
                    placeholder="Arkademy"
                  />
                </div>
                <div class="form-group">
                  <label for="">Masukkan huruf</label>
                  <input
                    type="text"
                    class="form-control"
                    name="letterTarget"
                    aria-describedby="helpId"
                    placeholder="A"
                  />
                </div>
                <button name="submit" onclick="countHandShake()" class="btn btn-primary">
                  Submit
                </button>
            </form>
        </div>
      </div>

<?php
    if(isset($_POST['submit'])){
        $words = $_POST['words'];
        $letterTarget = $_POST['letterTarget'];
        
        function checkLetter($word, $letter)
        {
          if($word != "" && $letter != ""){
            $wordArray =  str_split($word);
            $wordCounter = 0;
  
            for($i = 0; $i < sizeof($wordArray); $i++){
                if($wordArray[$i] == $letter){
                    $wordCounter++;
                }
            }
            return $wordCounter;
          } else{
              echo "<script>alert('Tolong isi form pada halaman website')</script>";
          }
        }
?>
      <div class="row">
        <div class="col-md-6 col-12">
          <h1>Jumlah huruf</h1>
          <h3><?= checkLetter($words, $letterTarget); ?></h3>
        </div>
      </div>
      <script></script>
<?php
    }
?>

    </div>
  </body>
</html>
