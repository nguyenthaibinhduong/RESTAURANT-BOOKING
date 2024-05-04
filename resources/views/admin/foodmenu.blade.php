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
                        <th scope="col">Price</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col"> <a href="{{ url('/addfood') }}" class="btn btn-success">Thêm món ăn</a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$row->name}}</td>
                    <td>{{$row->price}}</td>
                    <td>{{$row->title}}</td>
                    <td>{{$row->image }}</td>
                    <td><a href="{{ url('/deletefood',$row->id) }}" class="btn btn-danger">Xóa</a></td>
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
        </div>
    </div>
  </body>
  @include('admin.adminscript')
</html>