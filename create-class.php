<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <!-- css untuk select2 -->
    <link
      href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
      rel="stylesheet"
    />
    <!-- jika menggunakan bootstrap4 gunakan css ini  -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css"
    />
    <!-- cdn bootstrap4 -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="create-class.css" />
  </head>

  <?php
  include("connection.php");

  $query = "SELECT * FROM `ppw_projekakhir`.`city`";
  $result = mysqli_query($con, $query);
  $city_option = "";
  if ($result && mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      $city_option .= '<option value="'.$row["city_id"].'">'.$row["name"].', '.$row["province"].'</option>';
    }
  } else {
    $city_option = '<option value="">No cities found</option>';
  }

  $query = "SELECT * FROM `ppw_projekakhir`.`subject`";
  $result = mysqli_query($con, $query);
  $subject_option = "";
  if ($result && mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      $subject_option .= '<option value="'.$row["subject_id"].'">'.$row["name"].'</option>';
    }
  } else {
    $subject_option = '<option value="">No subjects found</option>';
  }
?>

  <body>
    <div class="container mt-5 my-5">
      <div class="card">
        <h2 class="card-title text-center py-3 font-weight-bold">
          Create a Class
        </h2>
        <div class="card-body">
          <div class="form-group">
            <label>Subject</label>
            <select id="subject" name="subject" class="form-control">
              <option value=""></option>
              <?php echo $subject_option; ?>
            </select>
          </div>

          <div class="form-group">
            <label for="class-name">Class Name</label>
            <input
              type="text"
              id="class-name"
              class="form-control"
              name="class-name"
              placeholder="Write a class name..."
              required
            />
          </div>

          <!-- <div class="form-floating mb-3">
            <input
              type="text"
              class="form-control"
              id="floatingInput"
              placeholder="Write a class name..."
            />
            <label for="floatingInput">Class Name</label>
          </div> -->

          <!-- <div class="form-floating">
            <textarea
              class="form-control"
              placeholder="Write a description of the class..."
              id="floatingTextarea2"
              style="height: 100px"
            ></textarea>
            <label for="floatingTextarea2">Description</label>
          </div> -->

          <div class="form-group">
            <label for="class-description">Description</label>
            <textarea
              id="class-description"
              name="class-description"
              placeholder="Write a desscription. . ."
              required
              class="form-control"
            ></textarea>
          </div>

          <div class="form-group">
            <label for="class-mode">Class Type</label>
            <select
              class="form-control"
              id="class-mode"
              name="class-mode"
              onchange="toggleLocationField()"
              required
            >
              <option value="" disabled selected hidden>Please Select</option>
              <option value="online">Online</option>
              <option value="offline">Offline</option>
              <option value="both">Both (Online / Offline)</option>
            </select>
          </div>

          <div class="form-group" id="class-location-field">
            <label>Location</label>
            <select id="city" name="city" class="form-control" required>
              <option value=""></option>
              <?php echo $city_option; ?>
            </select>
          </div>

          <div class="form-group">
            <label for="class-price">Price per Hour</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">$</span>
              </div>
              <input
                class="form-control"
                type="number"
                id="class-price"
                name="class-price"
                step="0.01"
                required
              />
            </div>
          </div>

          <label for="class-picture">Image</label>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
              <input
                type="file"
                class="custom-file-input"
                id="inputGroupFile01"
              />
              <label class="custom-file-label" for="inputGroupFile01"
                >Choose file</label
              >
            </div>
          </div>

          <div class="form-group text-center">
            <input type="submit" value="Add Class" />
            <!-- <button type="submit" class="btn btn-success">Add Class</button> -->
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <!-- wajib jquery  -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <!-- js untuk bootstrap4  -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>
    <!-- js untuk select2  -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
      $(document).ready(function () {
        $("#city").select2({
          theme: "bootstrap4",
          placeholder: "Please Select",
        });
        $("#subject").select2({
          theme: "bootstrap4",
          placeholder: "Please Select",
        });
        var locationField = document.getElementById("class-location-field");
        locationField.style.display = "none";
      });

      function toggleLocationField() {
        var locationField = document.getElementById("class-location-field");
        var modeSelect = document.getElementById("class-mode");

        if (modeSelect.value === "offline" || modeSelect.value === "both") {
          locationField.style.display = "block";
        } else {
          locationField.style.display = "none";
        }
      }
    </script>
  </body>
</html>
