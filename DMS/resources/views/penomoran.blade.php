@include('layout.navbar')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
      function myFunction() {
      /* Get the text field */
      var copyText = document.getElementById("myInput");

      /* Select the text field */
      copyText.select();
      copyText.setSelectionRange(0, 99999); /* For mobile devices */

      /* Copy the text inside the text field */
      navigator.clipboard.writeText(copyText.value);

      /* Alert the copied text */
      alert("Copied the text: " + copyText.value);
    }
  </script>
<body>
  <div class="container col-6">
    <div style="width: 500px;">  
      <h3 style="text-align:center;"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PENOMORAN OTOMATIS</h3>
    </div>

    <div class="mb-3">
      <label for="nomorID" class="col-sm-3 col-form-label"><br><br>ID Perusahaan</label>
      <div class="col-sm-10">
        <input class="form-control" type="text" placeholder="DMT.0001" aria-label="Disabled input example" disabled>
        </div>
    </div>
    <div class="mb-3">
    <label for="Unit" class="col-sm-3 col-form-label">Unit</label>
      <div class="col-sm-10">
        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
          <option selected>Unit</option>
          <option value="1">DV1</option>
          <option value="2">OM</option>
          <option value="3">MK</option>
        </select>
      </div>
    </div>

    <div class="mb-3 row">
    <label for="Bulan" class="col-sm-3 col-form-label">Bulan</label>
      <div class="col-sm-10">
        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
          <option selected>Bulan</option>
          <option value="1">I</option>
          <option value="2">II</option>
          <option value="3">III</option>
          <option value="3">IV</option>
          <option value="3">V</option>
          <option value="3">VI</option>
          <option value="3">VII</option>
          <option value="3">VIII</option>
          <option value="3">IX</option>
          <option value="3">X</option>
          <option value="3">XI</option>
          <option value="3">XII</option>
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="tahun" class="col-sm-3 col-form-label">Year</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" placeholder="2022" aria-label="Disabled input example" disabled>
          <!-- <input type="text" readonly class="form-control-plaintext" id="year" value="2001"> -->
        </div>
    </div>
    <div class="col">
      <!-- The text field -->
      
      <div class="input-group mb-3">
          <!-- Button trigger modal -->
          <a href="DataP" class="btn btn-outline-danger" role="button">Submit</a>
      </div>
    </div>
  </div>
</body>