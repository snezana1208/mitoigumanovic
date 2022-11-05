@extends('layouts.admin')

@section('title', 'Измена такмичења')


@section('content')
<div class="col-12 grid-margin stretch-card" id="container">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Такмичења</h3>
        <p class="card-description">
          
        </p>
        <form class="forms-sample" action="/admin.takmicenja/{{$post->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="form-group">
            <label for="exampleInputName1">Наслов</label>
            <input type="text" class="form-control" name="title" value="{{ $post->title }}" id="exampleInputName1" >
          </div>
          <div class="form-group">
            <label class="exampleFiles">Слика</label>
            <input type="file" name="image" class="form-control" multiple>
            <img src="/storage/post_image/{{$post->image}}" width="100" height="80" alt="">
          </div>
          <div class="form-group" >
            <label for="exampleTextarea1">Текст</label>
            <textarea class="form-control" rows="20" id="editor" name="body" rows="4">{!! Request::old('body', $post->body) !!}</textarea>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Измени</button>
          <button class="btn btn-light">Прекини</button>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('scripts')

@endsection