@extends('layouts.app')

@section('title', 'admin')

@section('content')
  @include('partials.header')
    <ul class="navbar-nav bg-gradient-primary sidebar {{-- sidebar-dark accordion --}}" id="accordionSidebar">
    </ul>
    <div class="container-fluid">
      <!-- Content Row -->
      <div class="row">

        <!-- Earnings (Monthly) Card Example -->
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
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->uploads }}</td>
              <td>
                <a href="{{ route('admin.edit', ['id' => $user->id]) }} "class="btn btn-primary">Edit</a>
              </td>
              <td>
               <a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('remove-form-{{$user['id']}}').submit();">Delete</a>

                <form id="remove-form-{{$user['id']}}" action="{{route('admin.destroy', $user->id)}}" method="POST" style="display: none;">
                  @csrf
                  @method('DELETE')
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
    </table>
@endsection
