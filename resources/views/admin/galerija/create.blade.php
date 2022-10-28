@extends('layouts.admin')

@section('title', 'Креирање галерије')


@section('content')
<div class="col-12 grid-margin stretch-card" id="container">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Галерија</h3>
        <p class="card-description">
          
        </p>
        <form class="forms-sample" action="/admin.galerija.store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="exampleFiles">Галерија</label>
                <input type="file" name="images[]" class="form-control" multiple>
            </div>
          
          <button type="submit" class="btn btn-primary mr-2">Сними</button>
          <button class="btn btn-light">Прекини</button>
        </form>
      </div>
    </div>
  </div>
@endsection