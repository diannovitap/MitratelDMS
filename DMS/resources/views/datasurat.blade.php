@extends('layout.home')
@section('content')
    <div class="input-group input-atas">
        <label class="input-group-text" for="jenis-data">Jenis Surat</label>
        <select class="form-select" id="jenis-data">
            <option selected>Choose...</option>
            <option value="kepada">Kepada Yth.</option>
            <option value="penyedia-sarana-telekomunikasi">Penyedia Sarana Telekomunikasi</option>

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
    @include('datapage.kepada')
</div>
<div class="data" id="penyedia-sarana-telekomunikasi">
    @include('datapage.penyedia-sarana-telekomunikasi')
</div>

     

<script>
    $(document).ready(function(){
        $("#jenis-data").on('change',function(){
            $('.data').hide();
            $("#"+$(this).val()).fadeIn(700);
        }).change();
    })
</script>
@endsection