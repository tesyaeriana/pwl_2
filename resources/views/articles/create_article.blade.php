@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('/articles')}}" method="post" enctype="multipart/form-data">
@csrf
    <div class="form-group">
        <label for="title">Title: </label>
        <input type="text" class="form-control" required="required" name="title">
        <label for="content">Content: </label>
        <textarea type="text" class="form-control" required="required" name="content"></textarea>
        <label for="image">Feature Image: </label>
        <input type="file" class="form-control" required="required" name="image">
        <button type="submit" name="submit" class="btn btn-primary float-right">Simpan</button> 
    </div>
</form>
</div>
@endsection
