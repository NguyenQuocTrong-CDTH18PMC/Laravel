@extends('Be.Template.master')


@section('title', 'Page Title')
@section('heading', 'Page Title')


@section('content')
<div class="form-row">
    <div class="form- col-md-8">
        <input id="my-input" class="form-control" type="text" name="search" placeholder="Tìm kiếm">
    </div>

    <div class="form- col-md-2">
        <a href="" class="btn btn-primary">Thêm</a>

    </div>
</div>
<div class="table-responsive mt-8">
    <table class="table ">
        <caption>List of users</caption>
        <thead class="table-success">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tên</th>
            <th scope="col">Link</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
</div>
@endsection
