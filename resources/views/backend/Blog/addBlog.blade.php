@extends('backend.layout.master')


@section('content')
  <div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">ADD Form</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route("blog.store") }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Blog Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="">
            @if($errors->has('title'))
                <div class="error text-danger">{{ $errors->first('title') }}</div>
              @endif
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">BLog</label>
            <textarea type="text" class="form-control" id="exampleFormControlInput1" name="blog"  cols="30" rows="10" ></textarea>
                  @if($errors->has('blog'))
                  <div class="error text-danger">{{ $errors->first('blog') }}</div>
                @endif
          </div>
          
          <div>
            <label for="exampleInputEmail1"> Select Author</label>
          
            <select class="form-select" aria-label="Default select example" name="author_id">
             
                @foreach ( $author as $val ) 
                  <option value="{{ $val->id }}">{{ $val->name }}</option>
                 
          @endforeach 
          </div>
          
          <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input name="img" class="form-control" type="file" id="formFile">
          </div>
        </div>


       
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="{{ url('blog')}}" class="btn btn-lg btn-primary m-3">BACK</a>
          <button type="submit" class="btn btn-lg btn-success m-3" >Add</button> 
        </div>
      </form>
    </div>
    <!-- /.card -->
  @endsection