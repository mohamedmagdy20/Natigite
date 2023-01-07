@extends('layouts.app')
@section('content')
{{-- <div class="container mt-5 text-center">
    <form action="{{ route('result.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-4">
            <div class="custom-file text-left">
                <input type="file" name="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <button class="btn btn-primary">Import Users</button>
    </form>
</div> --}}

<div class="page-content">
    <div class="container-fluid">
       <!-- start page title -->
       <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 p-2">قم بادخال النتيجه</h4>
            </div>
        </div>
    </div>             
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">                
                <form method="post" action="{{ route('result.store')}}"  class="needs-validation" enctype="multipart/form-data"  novalidate >
                    @csrf
    
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-1 col-form-label">النتيجه</label>
                    <div class="col-sm-11">
                        <input type="file" name="file" class="form-control" value="" type="text"  required>
                        @error('file')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
    
          <center>
            <input type="submit" class="btn btn-info waves-effect waves-light validate" value="اضافه">
          </center>
                </form>
                 
               
               
            </div>
        </div>
    </div> <!-- end col -->
    </div>
     
    
    
    </div>
    </div>
@endsection
