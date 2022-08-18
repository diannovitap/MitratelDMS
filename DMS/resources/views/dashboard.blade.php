@extends('layout.home')
@section('content')
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
</style>
<div class="row">
    <div class="div-content col m-2 text-center">
        <h5>Total Surat</h5>
        <p>{{$totalsurat}}</p>
    </div>
    <div class="div-content col m-2 text-center">
        <p></p>
    </div>
    <div class="div-content col m-2 text-center">
        <p></p>
    </div>

</div>



@endsection