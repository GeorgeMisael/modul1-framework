@extends('layouts.main')
@section('title', 'Buku')

@section('page-title','Buku')

@section('page-breadcrumb')
  
@endsection

@section('page-css')

@endsection

@section('page-content')
<div class="card">
    <div class="card-body">
        <h3 class="card-title">Book Management</h3>
        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif
        
        <form action="{{ route('buku.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="code">Code:</label>
                <input type="text" class="form-control form-control-sm" id="code" name="code" required>
            </div>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control form-control-sm" id="title" name="title" required>
            </div>
        
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" class="form-control form-control-sm" id="author" name="author" required>
            </div>
        
            <label for="category_id">Category:</label>
            <select class="form-select form-select-lg" id="category_id" name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id_category }}">{{ $category->name_category }}</option>
                @endforeach
            </select>
            <br>
            <br>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
    </div>
</div>

<br>

<div class="card">
    <div class="card-body">
        <h3 class="card-title">Books List</h3>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $book->category->name_category }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>
                            <form action="{{ route('buku.destroy', ['id_book' => $book->id_book]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mb-2">Delete</button>
                            </form>                    
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('page-js')

@endsection
