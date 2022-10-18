@extends('layouts.admin')

@section('title', 'Креирање педагог')


@section('content')
<div class="col-12 grid-margin stretch-card" id="container">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Педагог</h3>
        <p class="card-description">
          
        </p>
        <form class="forms-sample" action="/admin.pedagog.store" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Наслов</label>
            <input type="text" class="form-control" name="title" {{ old('title') }} id="exampleInputName1" >
          </div>
          <div class="form-group" >
            <label for="exampleTextarea1">Текст</label>
            <textarea class="form-control" rows="20" id="editor" name="body" rows="20">{!! old('body') !!}</textarea>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Сними</button>
          <button class="btn btn-light">Прекини</button>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    ClassicEditor
      .create( document.querySelector( '#editor' ), {
        ckfinder:{
          uploadUrl: '{{ route('upload'). '?_token='.csrf_token() }}'
        }
      } )
      .then( editor => {
              console.log( editor );
      } )
      .catch( error => {
              console.error( error );
      } );
  </script>
@endsection