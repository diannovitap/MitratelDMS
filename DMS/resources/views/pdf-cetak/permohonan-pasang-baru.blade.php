<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 11pt "Calibri";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 21cm;
        min-height: 29.7cm;
        padding: 0.5cm;
        margin: 1cm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 2cm;
        border: 2px;
        height: 256mm;
        outline: 1.5cm ;
    }
    .img-header{
        float: right;
        width: 30%;
        
        padding: 0.6cm;
        padding-left: 1cm
    
       
        
        
    }
    .footer {
   left: 0;
   bottom: 0;
}
    .tujuan{
    width: 110px; 
    border: 1px;

    }
    
    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }


            

</style>
<body>
 
<div class="page">
    <img src="{{URL:: asset('img/Logo_Mitratel.png')}}" class="img-header">

    <div class="subpage">
   
        <div class="isi">
                <p class="text"> Bandung, {{ date("d F Y", strtotime($ppb->created_at)) }}</p>
          
                <p class="text" > Nomor: {{$ppb->nomorSurat}}</p>
            <br>
            <p class="text"> Kepada Yth.</p>
            <b> <p class="tujuan"> {{$ppb->tujuan}}</p></b>
            <p class="text"> Perihal :<b>Permohonan Pasang Baru</b> </p>
            <p class="text"> Dengan Hormat,</p>
            <p class="text"> Mengacu pada pengembangan penyedia sarana telekomunikasi milik {{$ppb->pst}} yang dikelola oleh PT. Dayamitra Telekomunikasi dengan alamat sebagai berikut :</p>
            <table style="black" class="text">
                <tr>
                    <td>Nama</td>
                </tr>
                <tr>
                    <td>Pelanggan</td>
                    <td style="width:80%">: {{$ppb->namaPelanggan}}</td>
                </tr>
                <tr>
                    <td>ID Pelanggan</td>
                    <td>: {{$ppb->IDpelanggan}}</td>
        
                </tr>
                <tr>
                    <td>ID site</td>
                    <td>: {{$ppb->idSite}}</td>
                </tr>
                <tr>
                    <td>Name Site</td>
                    <td>: {{$ppb->namaSite}}</td>
                </tr>  
                <tr>
                    <td>Alamat</td>
                    <td>: {{$ppb->alamat}}</td>
                </tr>  
                <tr>
                    <td>Keterangan</td>
                    <td>: {{$ppb->keterangan}}</td>
                </tr>  
                <tr>
                <td> <b>Tagihan Listrik</b></td>
                    <td><b>: {{$ppb->tagihanlistrik}}</b></td>
                </tr>    
        
            </table>
            <p class="text">Sehubungan dengan hal tersebut, bersama ini kami mengajukan permohonan pasang baru PLN di lokasi dimaksud. </p>
            <p class="text">Demikian surat permohonan ini kami sampaikan, sebelumnya mengucapkan terima kasih atas perhatian dan kerjasamanya.</p>
        
        
        </div>
            <div class="signature">
                <p class="text">Hormat Kami,</p>
        
                <table>
                    <tr>
                        <td><p class="text">PT. Dayamitra Telekomunikasi</p></td>
                    </tr>
                    <tr>
                        <td><img src="{{URL:: asset('img/signature-suseno-wahyu-purnomo.png')}}" width="50%" >
                    
                    </tr>
                    <tr>
                        <td><p class="text"><b><ins>Suseno Wahyu Purnomo</ins></b></br>Manager Construction Deployment & OM Regional Office Jabar</p></td>
                    </tr>
                </table>
        
            </div>
                <div class="footer">
                    <p class="text-footer">PT. DAYAMITRA TELEKOMUNIKASI – RO JABAR</br>Gedung Graha Merah Putih Telkom Lt. 2</br>Jl. Japati No. 1 Bandung 40133</p>
                </div>
            </div>
        </div>

    </div>
</div></div>
</body>
  <script>
    window.print();
</script>