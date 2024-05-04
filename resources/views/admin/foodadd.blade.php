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
            <form action="{{ url('/insertfood') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label  class="form-label">Tên món ăn</label>
                  <input type="text" name="name" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label  class="form-label">Giá</label>
                  <input type="text" name="price" class="form-control">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Tiêu đề</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Ảnh</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Thêm</button>
              </form>
        </div>
    </div>
  </body>
  @include('admin.adminscript')
</html>