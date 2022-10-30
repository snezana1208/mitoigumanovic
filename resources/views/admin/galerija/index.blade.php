{{-- @extends('layouts.admin')

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
@endsection --}}

@extends('layouts.admin')

@section('title', 'Админ галерија')

@section('content')
  <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card" >
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Галерија</h3>
                  <a class="btn btn-info font-weight-bold" href="/admin.galerija.create">Додај нове слике<i class="icon-arrow-right"></i></a>
                  <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                          <th>
                            # ID
                          </th>
                          <th>
                            Назив
                          </th>
                          <th>
                            Progress
                          </th>
                          <th>
                            Датум
                          </th>
                          <th>
                            Уреди
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($images as $image)
                         <tr>
                            <td class="py-1">
                              {{$image->id}}
                            </td>
                            <td>
                              {{$image->name}}
                            </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>
                            {{$image->created_at->toFormattedDateString()}}
                            </td>
                            <td>
                             {{-- <a href="/admin.letopis.show/{{$post->id}}"><i class="fa fa-eye" style="font-size:20px"></i></a> --}}
                             {{-- <a href="/admin.letopis.edit/{{$post->id}}"><i class="fa fa-edit" style="font-size:20px"></i></a> --}}
                             <form action="/admin.galerija.destroy/{{ $image->id }}" id="myform" method="POST">
                              @csrf
                              @method('DELETE')
                              <button style="border:none;" type="submit"><a href="#"><i class="fa fa-trash" style="font-size:20px"></i></a> </button>                         
                            </form>
                            </td>
                          </tr>
                        @endforeach
                      </tbody> 
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
@endsection