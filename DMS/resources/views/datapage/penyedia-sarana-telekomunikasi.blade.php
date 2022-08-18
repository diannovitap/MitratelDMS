
<div class="input-surat">
    <form action="javascript:void(0)" id="inputpst" method="POST" name="inputpst">
        @csrf
        <div class="col">
            <div class=" input-group mb-3">
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="pst">
                <button type="submit" class="btn btn-danger" ><i class="bi bi-plus-lg"></i>Tambah</button>
            </div>
            </div>
      </form>
    </div>
    <div class="input-surat">
        <table  id="pst-table" class="display">
            <thead >
                <tr>
                    <th>No</th>
                    <th>Tujuan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pst as $datapst)
                <tr>
                    <td>{{$datapst->id}}</td>
                    <td>{{$datapst->pst}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready( function () {
            $('#pst-table').DataTable();
        } );
    </script>

<script>
    $('#inputpst').submit(function( e ) {
        e.preventDefault();
        $.ajax({
            url: '{{url('pstsave')}}',
            type: 'POST',
            data: $('#inputpst').serialize(), 
            dataType: 'json',
            success: function( _response ){
                alert("Berhasil menambahkan data");
                window.location.reload();
            },
            error: function( _response ){
                alert("error menambahkan data");
            }
            
        });
    });
</script>