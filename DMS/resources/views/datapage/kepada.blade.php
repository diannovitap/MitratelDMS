
<div class="input-surat">
    <form action="javascript:void(0)" id="tujuan" method="POST" name="tujuan">
        @csrf
        <div class="col">
            <div class=" input-group mb-3">
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="kepadayth">
                <button type="submit" class="btn btn-danger" id="saveData"><i class="bi bi-plus-lg"></i>Tambah</button>
            </div>
            </div>
      </form>
    </div>


    <div class="input-surat">
        <table  id="tujuan-table" class="display">
            <thead >
                <tr>
                    <th>No</th>
                    <th>Tujuan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kepadayth as $tujuan)
                <tr>
                    <td>{{$tujuan->id}}</td>
                    <td>{{$tujuan->kepadayth}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready( function () {
            $('#tujuan-table').DataTable();
        } );

    </script>

     <script>
      // jQuery, bind an event handler or use some other way to trigger ajax call.
      $('#tujuan').submit(function( event ) {
          event.preventDefault();
          $.ajax({
              url: '{{url('kepadasave')}}',
              type: 'post',
              data: $('#tujuan').serialize(), // Remember that you need to have your csrf token included
              dataType: 'json',
              success: function( _response ){
                alert("Berhasil menambahkan data");
                window.location.reload();
              },
              error: function( _response ){
                  // Handle error
              }
          });
      });

</script>




        