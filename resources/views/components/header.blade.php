@extends('layouts.app')
@section('title-page', 'La miglior Pasta - Home')
@section('Main-content')
    <h1>Home Page</h1>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="light">
      <div class="container-fluid">
        <a class="navbar-brand" href="">La miglior Pasta</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="{{route('Home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pastas.index') }}">Lista Pasta</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
@endsection

