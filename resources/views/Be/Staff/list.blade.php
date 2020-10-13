@extends('Be.Template.master')


@section('title', 'Page Title')
@section('heading', 'Page Title')


@section('content')
<div class="row">
    <div class="col-sm-12">
        @include('element.card_header')
         <div class="card-body">
            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                 <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                    Stt
                </th>
                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                    Tên
                </th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Browser: activate to sort column ascending">
                địa chỉ
                </th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Platform(s): activate to sort column ascending">
                email
                </th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Engine version: activate to sort column ascending">
                    số điện thoại
                </th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="CSS grade: activate to sort column ascending">
                    cấp bậc
                </th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="CSS grade: activate to sort column ascending">
                    #
                </th>
            </tr>
            </thead>
            <tbody>
                @if(isset($User) &&count($User)>0)
                @foreach($User as $k => $v)

                    <tr role="row" class="odd">
                        <td tabindex="0" class="sorting_1">{{$k+1}}</td>
                        <td> {{ $v->fullname }} </td>
                        <td> {{ $v->address }} </td>
                        <td> {{ $v->email}} </td>
                        <td> {{ $v->phone }} </td>
                        <td> {{ $v->level }} </td>
                        <td class="text_align_center">
                            <a href="{{url('admin/staff/edit/'.$v->id)}}" title="Chỉnh sửa" class="ad_button">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="{{url('admin/staff/delete/'.$v->id)}}" title="Xóa" class="ad_button ad_button-delete">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>


                    </tr>

        @endforeach

        @endif




</tbody>
    {{-- <tfoot>
    <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
    </tfoot> --}}
  </table>
</div>
</div>
</div>
  <div class="row">
    <div class="col-sm-12 col-md-7">
        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            <ul class="pagination">
                <li class="paginate_button page-item previous disabled" id="example2_previous">
                    <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">
                        Previous
                    </a>
                </li>
                <li class="paginate_button page-item active">
                    <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">
                        1</a>
                    </li>
                <li class="paginate_button page-item next" id="example2_next">
                    <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">
                        Next
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection
