@extends('backend.master')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Sản phẩm</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <a class="btn btn-link text-success text-gradient px-3 mb-0" href="{{ route('show.create') }}">Thêm mới</a>
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mã sản phẩm</th></th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên sản phẩm</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hình ảnh</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Số lượng sản phẩm</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Giá sản phẩm</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" colspan="2">Chức năng</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>    
                    @foreach ($products as $key => $product)
                        <tr style="text-align: center">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->image }}</td>
                            <td>{{ $product->quantityInStock }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                              <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{ route('delete',$product->id) }}"><i class="far fa-trash-alt me-2"></i>Delete</a>
                            </td>
                            <td>
                              <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('show.edit',$product->id) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
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
  </div>
@endsection