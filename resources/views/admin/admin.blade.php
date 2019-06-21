@extends('layouts.app')

@section('class', 'admin')

@section('content')
  @include('partials.header')
    <ul class="navbar-nav bg-gradient-primary sidebar {{-- sidebar-dark accordion --}}" id="accordionSidebar">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="../public/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="fas fa-fw fa-cog"></i>
          <span>Edit account</span>
        </a>
      </li>

       <li class="nav-item">
        <a class="nav-link collapsed" href="" >
          <i class="fas fa-fw fa-folder"></i>
          <span>All users</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>All uploads</span></a>
      </li>
    </ul>
    <div class="container-fluid">
      <!-- Content Row -->
      <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    All users
                  </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    All posts
                  </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>User</th>
            <th>E-mail</th>
            <th>Uploads</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td {{-- class="text-center" --}}>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->uploads }}</td>
              <td>
                <a href="{{url($user->id.'/adminedit') }} "class="btn btn-primary">Edit</a>
                @method('PUT')
                @csrf

              </td>
              <td>
               <a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('remove-form-{{$user['id']}}').submit();">Delete</a>

                <form id="remove-form-{{$user['id']}}" action="{{url($user->id)}}" method="POST" style="display: none;">
                  @csrf
                  @method('DELETE')
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
    </table>
@endsection
