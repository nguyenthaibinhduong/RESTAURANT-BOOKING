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
    </div> 
  </body>
  @include('admin.adminscript')
</html>