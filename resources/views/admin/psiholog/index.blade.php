@extends('layouts.admin')

@section('title', 'Админ psiholog')

@section('content')
  <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card" style="width: 100%">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Психолог</h3>
                  <a class="btn btn-info font-weight-bold" href="/admin.psiholog.create">Додај ново обавештење<i class="icon-arrow-right"></i></a>
                  <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                          <th>
                            # ID
                          </th>
                          <th>
                            Наслов
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
                        @foreach ($posts as $post)
                         <tr>
                            <td class="py-1">
                              {{$post->id}}
                            </td>
                            <td>
                              {{$post->title}}
                            </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>
                            {{$post->created_at->toFormattedDateString()}}
                            </td>
                            <td>
                             <a href="/admin.psiholog.show/{{$post->id}}"><i class="fa fa-eye" style="font-size:20px"></i></a>
                             <a href="/admin.psiholog.edit/{{ $post->id }}"><i class="fa fa-edit" style="font-size:20px"></i></a>
                             <form action="/admin.psiholog.destroy/{{ $post->id }}" id="myform" method="POST">
                              @csrf
                              @method('DELETE')
                              <a onclick="document.getElementById('myform').submit()" href="#"><i class="fa fa-trash" style="font-size:20px"></i></a>                         
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