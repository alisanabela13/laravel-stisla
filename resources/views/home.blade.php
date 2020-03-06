@extends('layouts.app')
@section('title')
  Dashboard
@endsection
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Dashboard</h1>
      </div>
      <div class="section-body">
        <h5>Welcome {{auth()->user()->name}}</h3>
      </div>
    </section>
</div>
@endsection
