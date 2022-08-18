
@extends('layout.home')
@section('content')
    <div class="input-group input-atas">
        <label class="input-group-text" for="jenis-surat">Jenis Surat</label>
        <select class="form-select" id="jenis-surat">
            <option selected>Choose...</option>
            <option value="permohonan-pasang-baru">Permohonan Pasang Baru</option>
            <option value="permohonan-perubahan-nama-pelanggan-site">Permohonan Perubahan Nama Pelanggan site</option>
            <option value="surat3">surat3</option>
        </select>
        </div>
<style>
        .input-atas{
        background: white;
        border-radius: 15px;
        box-shadow: 20px 20px 50px grey;
        padding: 25px;
        

    }
    .input-surat{
        background: white;
        border-radius: 15px;
        box-shadow: 20px 20px 50px grey;
        padding: 25px;
        margin: 5%;
    }
    .data{
        display: none;
    }
</style>

<div class="data" id="kepada">
    @include('inputdata.kepada')
</div>

<div class="data" id="permohonan-perubahan-nama-pelanggan-site">
    @include('inputsurat.permohonan-perubahan-nama-pelanggan-site')
</div>
     

<script>
    $(document).ready(function(){
        $("#jenis-surat").on('change',function(){
            $('.data').hide();
            $("#"+$(this).val()).fadeIn(700);
        }).change();
    })
</script>
@endsection