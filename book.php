<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        bus Booking
    </title>

    <script scr="./css/style.scss"> </script>

    <link rel="stylesheet" href="./css/style.scss">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
  <body>	

  <div class="d-flex justify-content-center line">

<h2 class="top_title">Book a seat</h2>
<hr>
</div>
  <div class="booking">
  <div class="cards-list">
  
  <div class="card 1">
  <form class="was-validated" action="formData.php" method="POST">


  <div class="mb-3">
      <label>Choose Origin</label>
    <select class="form-select" name="originCampus" required aria-label="select example">
      <option value="" readonly>Open this select menu</option>
      <option value="Arcadia Campus" >Arcadia Campus</option>
      <option value="Soshanguve">Soshanguve</option>
      <option value="Pretoria West">Pretoria West</option>
    </select>
    <div class="invalid-feedback">Example invalid select feedback</div>
  </div>

  <div class="mb-3">
      <label>Choose Date</label>
      <input class="form-select" type="date" name="date" required aria-label="select example" >
    
    <div class="invalid-feedback">Example invalid select feedback</div>
  </div>

  <div class="mb-3">
      <label>Choose Time Slot</label>
    <select class="form-select" name="time" required aria-label="select example">
      <option value="" readonly>Open this select menu</option>
      <option value="08:00">08:00</option>
      <option value="09:00">09:00</option>
      <option value="10:00">10:00</option>
      <option value="11:00">11:00</option>
      <option value="12:00">12:00</option>
      <option value="13:00">13:00</option>
      <option value="14:00">14:00</option>
      <option value="15:00">15:00</option>
      <option value="16:00">16:00</option>
      <option value="17:00">17:00</option>
      <option value="18:00">18:00</option>
      <option value="19:00">19:00</option>
      <option value="20:00">20:00</option>
      <option value="21:00">21:00</option>
    </select>
    <div class="invalid-feedback">Example invalid select feedback</div>
  </div>


  <div class="mb-3">
                <label>Choose Destination </label>
            <select class="form-select" name="destCampus" required aria-label="select example">
                <option value="" readonly>Open this select menu</option>
                <option value="Arcadia Campus" >Arcadia Campus</option>
                <option value="Soshanguve">Soshanguve</option>
                <option value="Pretoria West">Pretoria West</option>
            </select>
            <div class="invalid-feedback">Example invalid select feedback</div>
            </div>
  <div class="mb-3">
    <button class="btn btn-primary" type="submit" >book a seat</button>
  </div>
</form>
  </div>
  


  
  </div>

  </div>
</body>
</html>