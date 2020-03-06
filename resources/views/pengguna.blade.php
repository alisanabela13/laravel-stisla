@extends('layouts.app')

@section('title')
    Pengguna
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Pengguna</h1>
                <div class="ml-auto">
                    <a href="#" class="btn btn-rounded btn-primary" style="font-size: 15px"> <i class="fas fa-plus"></i> </a>
                </div>
            </div>
            <div class="section-body">
                <div class="table-responsive" style="font-size:14px">
                <table id="multi-col-order" class="table table-striped table-bordered display no-wrap" style="width:100%">
                    <thead>

                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>Role</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($user as $u)
                        
                    
                      <tr class="table-light">
                      <td>{{$loop->index+1}}</td>
                      <td>{{$u->name}}</td>
                      <td>{{$u->email}}</td>
                      @if($u->role_id == '1')
                        <td>Admin</td>
                      @elseif($u->role_id == '2')
                        <td>CEO</td>
                      @else
                        <td></td>
                      @endif
                        <td style="text-align:center;">
                            <a href="#" class="btn btn-rounded btn-warning mr-1" style="width:38px; height: 38px"><i class="fas fa-pencil-alt" ></i></a>
                            <button class="btn btn-rounded btn-danger"style="width:38px; height: 38px"><i class="fas fa-trash"></i></button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>E-Mail</th>
                          <th>Role</th>
                          <th></th>
                        </tr>
                      </thead>
                  </table>
                </div>
            </div>
        </section>
    </div>
@endsection