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
        <div class="mb-3">  
        <h3><br><p class="text-center">DATA PENOMORAN</p></h3>
        </div>
     
    <center><div class="mb-3">
        <div class="col-sm-10"><br>
            <table class="table table-danger table-striped">
                    <thead>
                    <tr>
                    <th scope="col">ID Perusahaan</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Bulan</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Aksi</th>     
                    </tr>
                    
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td><button type="button" class="btn btn-danger btn-sm" href="layout/createsurat">Buat</button></td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Amel</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td><button type="button" class="btn btn-danger btn-sm">Create</button></td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Vita</td>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                    <td><button type="button" class="btn btn-danger btn-sm">Nyieun</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div></center>
  </div>
</body>