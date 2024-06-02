@extends('layouts.main')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Категории</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Интернет-магазин</a></li>
          <li class="breadcrumb-item active">Категории</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('category.create') }}" class="btn btn-primary">Добавить</a>
            </div>
                <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Наименование</th>
                      <th>Parent_id</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($categories as $category)
                    <tr>
                      <td>{{ $category->id }}</td>
                      <td><a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a></td>
                      <td>{{ $category->parent_id }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
          </div>
        </div>
    </div>
  </div>

<div class="card">
  <div class="card-header">
            <a href="{{ route('category.create') }}" class="btn btn-primary">Добавить</a>
            </div>

<div class="card-body p-0">
  <table class="table table-hover">
    <tbody>
    <tr data-widget="expandable-table" aria-expanded="false">
    <td>
    <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
    219
    </td>
    </tr>
    <tr class="expandable-body">
    <td>
    <div class="p-0">
    <table class="table table-hover">
    <tbody>
    <tr data-widget="expandable-table" aria-expanded="false">
    <td>
    <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
    219-1
    </td>
    </tr>
    <tr class="expandable-body d-none">
    <td>
    <div class="p-0" style="display: none;">
    <table class="table table-hover">
    <tbody>
    <tr>
    <td>219-1-1</td>
    </tr>
    <tr>
    <td>219-1-2</td>
    </tr>
    </tbody>
    </table>
    </div>
    </td>
    </tr>
    <tr data-widget="expandable-table" aria-expanded="false">
    <td>
    219-2
    </td>
    </tr>
    <tr class="expandable-body d-none">
    <td>
    <div class="p-0" style="display: none;">
    <table class="table table-hover">
    <tbody>
    <tr>
    <td>219-2-1</td>
    </tr>
    <tr>
    <td>219-2-2</td>
    </tr>
    </tbody>
    </table>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </td>
    </tr>
    </tbody>
  </table>
  </div>
</div> 

</section>
@endsection