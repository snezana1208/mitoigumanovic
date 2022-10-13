@extends('layouts.admin')

@section('title', 'Измена педагог')


@section('content')
<div class="col-12 grid-margin stretch-card" id="container">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Педагог</h3>
        <p class="card-description">
          
        </p>
        <form class="forms-sample" action="/admin.pedagog/{{$post->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="form-group">
            <label for="exampleInputName1">Наслов</label>
            <input type="text" class="form-control" name="title" value="{{ $post->title }}" id="exampleInputName1" >
          </div>
          <div class="form-group" >
            <label for="exampleTextarea1">Текст</label>
            <textarea class="form-control" rows="20" id="inp_editor1" name="body" rows="4">{{ $post->body }}</textarea>
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