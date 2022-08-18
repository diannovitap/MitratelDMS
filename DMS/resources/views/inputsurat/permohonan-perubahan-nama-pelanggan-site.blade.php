<div class="input-surat">
    <form action="/createsurat/input" method="post">
        {{ csrf_field() }}
        <div class="col">
              <div class="input-group mb-3">
                  <label class="input-group-text" for="inputGroupSelect01">Nomor Surat</label>
                  <select class="form-select" id="inputGroupSelect01">
                      <option selected>Choose...</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                      <option value="4">Four</option>
                  </select>
                  </div>
            </div>
        <div class="col">
          <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">kepada Yth.</label>
              <select class="form-select" id="inputGroupSelect01">
                  <option selected>Choose...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                  <option value="4">Four</option>
              </select>
              </div>
        </div>
        <div class="col">
          <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">Penyedia Sarana Telekomunikasi</label>
              <select class="form-select" id="inputGroupSelect01">
                  <option value="1">PT.XL</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
              </select>
              </div>
        </div>
        <div class="col">
          <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">Nama Pelanggan</label>
              <select class="form-select" id="inputGroupSelect01">
                  <option selected>Choose...</option>
                  <option value="1">XL-JAW-JB-CJR-4334</option>
                  <option value="2">XL-JAW-JB-CJR-4334</option>
                  <option value="3">XL-JAW-JB-CJR-4334</option>
              </select>
              </div>
        </div>
        <div class="col">
          <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">ID Pelanggan</label>
              <select class="form-select" id="inputGroupSelect01">
                  <option selected>Choose...</option>
                  <option value="1">XL-JAW-JB-CJR-4334</option>
                  <option value="2">XL-JAW-JB-CJR-4334</option>
                  <option value="3">XL-JAW-JB-CJR-4334</option>
              </select>
              </div>
        </div>
        <div class="col">
          <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">ID site</label>
              <select class="form-select" id="inputGroupSelect01">
                  <option selected>Choose...</option>
                  <option value="1">XL-JAW-JB-CJR-4334</option>
                  <option value="2">XL-JAW-JB-CJR-4334</option>
                  <option value="3">XL-JAW-JB-CJR-4334</option>
              </select>
              </div>
        </div>
        <div class="col">
          <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">Name Site</label>
              <select class="form-select" id="inputGroupSelect01">
                  <option selected>Choose...</option>
                  <option value="1">XL-JAW-JB-CJR-4334</option>
                  <option value="2">XL-JAW-JB-CJR-4334</option>
                  <option value="3">XL-JAW-JB-CJR-4334</option>
              </select>
              </div>
        </div>
        <div class="col">
          <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">Alamat</label>
              <select class="form-select" id="inputGroupSelect01">
                  <option selected>Choose...</option>
                  <option value="1">XL-JAW-JB-CJR-4334</option>
                  <option value="2">XL-JAW-JB-CJR-4334</option>
                  <option value="3">XL-JAW-JB-CJR-4334</option>
              </select>
              </div>
        </div>
        <div class="col">
          <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">Keterangan</label>
              <select class="form-select" id="inputGroupSelect01">
                  <option selected>Choose...</option>
                  <option value="1">XL-JAW-JB-CJR-4334</option>
                  <option value="2">XL-JAW-JB-CJR-4334</option>
                  <option value="3">XL-JAW-JB-CJR-4334</option>
              </select>
              </div>
        </div>
        <div class="col">
          <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">Tagihan Listrik</label>
              <select class="form-select" id="inputGroupSelect01">
                  <option selected>Choose...</option>
                  <option value="1">XL-JAW-JB-CJR-4334</option>
                  <option value="2">XL-JAW-JB-CJR-4334</option>
                  <option value="3">XL-JAW-JB-CJR-4334</option>
              </select>
              </div>
        </div>
    
        <div class="col">
          <div class="input-group mb-3">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger rounded" data-bs-toggle="modal" data-bs-target="#surat2">
                  Buat Surat
              </button>
    
              <!-- Modal -->
              <div class="modal fade" id="surat2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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