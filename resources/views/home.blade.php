@extends('layout')
@section('title', 'Home')
@section('body')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
        </ul>
        <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>
      </div>
    </div>
</nav>

<div class="container">
   <h1> Welcome, {{ Auth::user()->name }}</h1>
</div>

<style>
.container {
  display: flex;
}

.box {
  width: 150px; /* Adjust as needed */
  height: 150px; /* Adjust as needed */
  background-color: #3498db; /* Change color as desired */
  color: #fff; /* Text color */
  margin-right: 10px; /* Adjust spacing between boxes */
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  text-align: center;
  border-radius: 25px
}

</style>

<div class="container">
  <div class="box" onclick="window.location.href='/KeselamatanKoreksional/index'">Keselamatan dan Koreksional</div>
  <div class="box" onclick="window.location.href='/page2'">Box 2</div>
  <div class="box" onclick="window.location.href='/page3'">Box 3</div>
</div>



@endsection