
@extends('mainlayout')

@section('title', 'Dashboard')


@section('content')


           <div class="container">
               <div class="row">
                   <div class="col-md-12">
                       <div class="card">
                           <div class="card-header">
                               <h1>Dashboard</h1>
                           </div>
                           <div class="card-body">

                               <table class="table table-bordered table-striped">
                                   <thead>
                                   <tr>
                                       <th>ID</th>
                                       <th>Name</th>
                                       <th>username</th>
                                       <th>email </th>

                                       <th>Edit</th>
                                       <th>Delete</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   @foreach ($users as $item)
                                       <tr>
                                           <td>{{ $item->id }}</td>
                                           <td>{{ $item->name }}</td>
                                           <td>{{ $item->username }}</td>
                                           <td>{{ $item->email  }}</td>
                                           <td>
                                               <a href="" class="btn btn-primary btn-sm">Edit</a>
                                           </td>
                                           <td>
                                               <a href="" class="btn btn-danger btn-sm">Delete</a>
                                           </td>
                                       </tr>
                                   @endforeach
                                   </tbody>
                               </table>

                           </div>
                       </div>
                   </div>
               </div>
           </div>

@endsection

