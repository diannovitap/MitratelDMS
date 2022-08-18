<div class="input-surat">
<form action="/store" method="post">
    @csrf
    <div class="col">
          <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">Nomor Surat</label>
              <select class="form-select" id="inputGroupSelect01" name="nomorSurat">
                  <option selected>Choose...</option>
                    @foreach ($pst as $datapst)
                        <option value="{{$datapst->pst}}">{{$datapst->pst}}</option>
                    @endforeach
              </select>
              </div>
        </div>
    <div class="col">
      <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupSelect01">kepada Yth.</label>
          <select class="form-select" id="inputGroupSelect01" name="tujuan">
              <option selected>Choose...</option>
                @foreach ($kepadayth as $tujuan)
                    <option value="{{$tujuan->kepadayth}}">{{$tujuan->kepadayth}}</option>
                @endforeach
     </select>
          </div>
    </div>
    <div class="col">
      <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupSelect01">Penyedia Sarana Telekomunikasi</label>
          <select class="form-select" id="inputGroupSelect01" name="pst">
            <option selected>Pilih...</option>
            @foreach ($pst as $datapst)
            <option value="{{$datapst->pst}}">{{$datapst->pst}}</option>
        @endforeach
          </select>
          </div>
    </div>
    
    <div class="col">
        <label >Nama Pelanggan</label>
      <div class="input-group mb-3">
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="namaPelanggan">
          </div>
    </div>
    <div class="col">
        <label >ID Pelanggan</label>
      <div class="input-group mb-3">
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="IDpelanggan">
          </div>
    </div>
    <div class="col">
        <label >ID site</label>
      <div class="input-group mb-3">
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="idSite">
          </div>
    </div>
    <div class="col">
        <label >Name Site</label>
      <div class="input-group mb-3">
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="namaSite">
          </div>
    </div>
    <div class="col">
        <label >Alamat</label>
      <div class="input-group mb-3">
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="alamat">
          </div>
    </div>
    <div class="col">
        <label >Keterangan</label>
      <div class="input-group mb-3">
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="keterangan">
          </div>
    </div>
    <div class="col">
        <label >Tagihan Listrik</label>
      <div class="input-group mb-3">
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="tagihanlistrik">
          </div>
    </div>

    <div class="col">
      <div class="input-group mb-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-danger rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Buat Surat
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  Apakah anda yakin membuat surat !!!
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <input type="submit" class="btn btn-danger">
                  </div>
              </div>
              </div>
          </div>

          <!-- Modal -->
          
      </div>
    </div>
  </form>
</div>