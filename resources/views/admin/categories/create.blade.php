@extends('admin.layouts.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">главная</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">new caregorii</h3>
          </div>
          <form role="form" method="post" action="{{route('categories.store')}}">
          @csrf
<div class="card-body">
<div class="form-group">
<label for="title">nazvanie</label>
<input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
 id="title" placeholder="nazvanie">
</div>
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      
    </section>
    <!-- /.content -->
  </div>
  @endsection

