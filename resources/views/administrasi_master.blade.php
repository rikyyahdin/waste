@extends('master')


@section('main-section')
    <div class="col-md-4">
        <h2 class="sub-header">Administrasi</h2>
        <h4>Disini anda bisa mengubah data TPS dan TPA, Petugas dan Admin</h4>
        <h2 class="sub-header">Menu</h2>
        <a href="dataTP"><button style="margin-top:10px;" class="btn_style">TPS-TPA</button></a><br/>
        <a href="dataPetugas"><button style="margin-top:10px;" class="btn_style">Petugas</button></a><br/>
        <a href="dataAdmin"><button style="margin-top:10px;" class="btn_style">Admin</button></a><br/>
    </div>
    <div class="col-md-8">
        @yield('main-section')
    </div>
@overwrite