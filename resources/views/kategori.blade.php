@extends('layouts.main')
@section('title', 'Kategori')

@section('page-title','Kategori')

@section('page-breadcrumb')
  
@endsection

@section('page-css')

@endsection

@section('page-content')
@if(session('success'))
<p>{{ session('success') }}</p>
@endif  

<form action="" method="POST">
  @csrf
  <div class="card">
    <div class="card-body">
      <h3 class="card-title"> Input Category</h3>
      <form class="form-inline">
        <label class="sr-only" for="name_category">Name</label>
        <input type="text" class="form-control form-control-sm mb-2 mr-sm-2" name="kategori" id="name_category" placeholder="Category" required>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
      </form>
    </div>
</form>
</div>

<br>

<div class="card">
  <div class="card-body">
    <h3 class="card-title">Category of Books</h3>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th> No </th>
            <th> Category </th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)
            <tr>
              <td> {{ $loop->iteration }} </td>
              <td> {{ $category->name_category }} </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <br>
  </div>
</div>

@endsection

@section('page-js')

@endsection
