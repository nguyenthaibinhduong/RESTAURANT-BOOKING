<x-app-layout></x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    @if($row->usertype =="0")
                    <td><a href="{{ url('/deleteuser',$row->id) }}" class="btn btn-danger">Xóa</a></td>
                    @else
                    <td><i>Không cho phép</i></td>
                    @endif
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
        </div>
    </div>
  </body>
  @include('admin.adminscript')
</html>