@extends('layout.home')
@section('content')

    <!-- isi -->
   <style>
        .div-content{
        background: white;
        border-radius: 15px;
        box-shadow: 20px 20px 50px grey;
        padding: 25px;
         

    }
    .a{
        background: white;
        border-radius: 15px;
        box-shadow: 20px 20px 50px grey;
        padding: 25px;
        margin: 5%;
    }
    .data{
        display: none;
    }
        body {
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 9pt "Calibri";
    }

    </style>
    
    <div class="div-content mx-auto text-center col-10">
      <h2>Permohonan Pasang Baru</h2>
    </div>
    <br>
  <div class="div-content ">
      <table class="table table-bordered table-striped  " id="history-cetak">
          <thead class="table-dark text-center">
            <tr>
              <th >No</th>
              <th >No surat</th>
              <th >Tujuan</th>
              <th >Nama Pelanggan</th>
              <th >ID pelanggan</th>
              <th >ID site</th>
              <th >Nama Site</th>
              <th >Alamat Site</th>
              <th >Tagihan Listrik</th>
              <th >Create At</th>
              <th >Action</th>
            </tr>
          </thead>
          <tbody class="table-group-divider text-break " >
            @foreach ($ppb as $ppbs)
            <tr>
              <td>{{$loop->iteration}}</td>
                <td>{{$ppbs->nomorSurat}}</td>
                <td>{{$ppbs->tujuan}}</td>
                <td>{{$ppbs->namaPelanggan}}</td>
                <td>{{$ppbs->IDpelanggan}}</td>
                <td>{{$ppbs->idSite}}</td>
                <td>{{$ppbs->namaSite}}</td>
                <td>{{$ppbs->alamat}}</td>
                <td>{{$ppbs->tagihanlistrik}}</td>
                <td>{{$ppbs->created_at}}</td>
                <td>
                  <a href="/hapus/surat/psb{{$ppbs->id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-secondary btn-sm"><i class="bi bi-trash"></i></a>
                  <a href=" pdf/ppb/{{$ppbs->id}}"  target="_blank" class="btn btn-danger btn-sm"><i class="bi bi-printer"></i></a>
                </td>
            </tr>
          
            @endforeach
  
          </tbody>
        </table>

    </div>
    <script>
      $(document).ready( function () {
          $('#history-cetak').DataTable();
      } );
    </script>
@endsection