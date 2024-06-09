@extends('layout.main')
@section('title', "MP326 | $song->title - $song->singer")
@section('container')
    <div class="text-success" id="headerDetail">
        <h6>Lagu</h6>
        <h1 class="text-capitalize lato-700">{{ $song->title }}</h1>
        <p>{{ $song->singer }} - {{ $song->title }} - {{ Carbon\Carbon::create($song->release)->year }} - {{ $song->minutes_duration }}:{{ sprintf('%02d', $song->second_duration) }}</p>
    </div>
    <hr>
    <div id="song" class="mb-5">
        <h5>Track Populer oleh</h5>
        <h3 class="lato-700">{{ $song->singer }}</h3>
        <table class="table table-borderless" id="songs">
          <tbody>
              @for ($i = 0; $i < 5; $i++)
                  <tr>
                      <td scope="row">{{ $i+1 }}</td>
                      <td scope="row">{{ $song->title }}</td>
                      <td scope="row">1.000.000</td>
                      <td scope="row">{{ $song->minutes_duration }}:{{ sprintf('%02d', $song->second_duration) }}</td>
                  </tr>
              @endfor
          </tbody>
        </table>
        <p>Lihat Semua</p>
    </div>
    <h3 class="lato-700">Rilis Populer oleh {{ $song->singer }}</h3>
    <div class="row">
        @for ($i = 0; $i < 4; $i++)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="{{ asset('album.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $song->singer }}</h5>
                    <p class="card-text">{{ Carbon\Carbon::create($song->release)->year }} - <?= ($i % 2 == 0) ? 'Single' : 'Album' ; ?></p>
                    </div>
                </div>
            </div>
        @endfor
    </div>

@endsection