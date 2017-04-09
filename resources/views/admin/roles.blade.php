@extends('admin.layouts.master')
@section('content')
<div class="col-xs-12">
<div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="#" class="btn btn-success">Add New</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="roleTbl" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Role Id</th>
                  <th>Role Name</th>
                  <th>Display Name</th>
                  <th>Desciption</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                <tr>
                  <td>{{$role->id}}</td>
                  <td>{{$role->name}}</td>
                  <td>{{$role->display_name}}</td>
                  <td>{{$role->description}}</td>
                  <td><a href="#" class="btn btn-small btn-primary">Permissions</a>
                      <a href="#" class="btn btn-small btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Role Id</th>
                  <th>Role Name</th>
                  <th>Display Name</th>
                  <th>Desciption</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
@endsection
