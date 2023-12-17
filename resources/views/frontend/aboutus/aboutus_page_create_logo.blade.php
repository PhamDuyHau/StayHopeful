<!DOCTYPE html>
<html lang="en">

@extends('frontend.adminpage.index')
@section('admin_content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<link rel="stylesheet" href="{{ asset('general/general.css') }}">


<div class="container mt-3">
  <h1>Logo Form</h1>
  <form method="POST" enctype="multipart/form-data" action="{{ route('aboutuspage.store_logo') }}">
    @csrf
    
    <div class="btn__back">
      <a href="{{ route('aboutuspage.index') }}" class="btn__go_back">
          <i class="fa fa-long-arrow-left"></i>GO BACK</a>
    </div>
    <br>

    <div class="mb-3">
      <label for="title" class="form-label">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>

    <div class="mb-3">
        <label for="images" class="form-label">Image:</label>
        <input type="file" class="form-control" id="images" multiple name="images[]"/>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@include('frontend/login/login')
@endsection