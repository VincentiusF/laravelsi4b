@extends('layout.main')

@section('title', 'Fakultas')
    
@section('content')
    <h1>UMDP</h1>
    <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Program Studi</h4>
                  <p class="card-description">
                  List data program studi
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama program studi</th>
                          <th>Singkatan</th>
                          <th>Nama Fakultas
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($prodi as $item)
                            <tr>
                                <td>{{ $item["nama"] }} 
                                <td>{{ $item["singkatam"] }} </td>
                                <td> {{ $item["fakultas"] ["nama"] }}</td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>
@endsection