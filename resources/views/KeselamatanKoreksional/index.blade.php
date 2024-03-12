@extends('layout')
@section('title', 'Login')
@section('body')

<style>
    .container {
        display: flex;
    }

    .box {
        width: 150px; 
        height: 150px;
        background-color: #3498db;
        color: #fff; 
        margin-right: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        text-align: center;
        border-radius: 25px
    }
</style>

<div class="container">
    <div class="box" onclick="window.location.href='/KeselamatanKoreksional/KeselamatanInteligen'">Bahagian Keselamatan Dan Inteligen</div>
    <div class="box" onclick="window.location.href='/KeselamatanKoreksional/PengurusanBanduan'">Bahagian Pengurusan Banduan</div>
    <div class="box" onclick="window.location.href='/KeselamatanKoreksional/TahananRadikal'">Bahagian Panduan Tahanan Radikal</div>
</div>
@endsection