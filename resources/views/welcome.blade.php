@extends('Layouts.main',['title' => 'Beranda'])

@section('content-header')
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Beranda</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
@endsection

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Ini Halaman Beranda</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      Start creating your amazing application! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro mollitia nisi quod optio, pariatur itaque ipsum at vel dignissimos suscipit aperiam provident placeat officiis ad, iste iusto asperiores! Facilis, illo vel reprehenderit aliquid eaque minus consectetur facere explicabo a laboriosam? Doloribus eaque maxime, fugiat ipsa veritatis nam reiciendis nulla repellat neque eligendi, quia amet explicabo id nobis distinctio recusandae molestias, consectetur quis omnis tenetur. In, enim eius pariatur voluptatum eveniet ab assumenda architecto tempore nam voluptatem natus amet alias officiis aliquam dicta nulla molestias, eos sit. Nam repellendus impedit unde doloribus maiores distinctio aperiam amet modi expedita reiciendis, dolore rem!
      <br><br>
      <button class="btn btn-red">Click Me</button> 
    </div>
</div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer
    </div>
    <!-- /.card-footer-->
  </div>
@endsection

@push('css')
<style>
    .btn-red{
        background-color: red;
        color: white;
    }
</style>
@endpush

@push('js')
    <script>
        $(function(){
           $('.btn-red').click(function(){
            alert('Hello Budiman');
           })     
        });
    </script>
@endpush