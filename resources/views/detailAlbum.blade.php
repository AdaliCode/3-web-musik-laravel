@extends('layout.main')
<?php $singers = '' ; ?>
{{-- mencari penyanyi --}}
@foreach ($album->songs as $key => $item)
    @foreach ($item->singers as $singer)
        <?php $singers .= $singer->name; ?>
        @if (!$loop->last)
            <?php $singers .= ', '; ?>    
        @endif
    @endforeach
@endforeach
@section('title', "MP326 | $album->name - " . $singers)
@section('container')
    <div class="text-success" id="headerDetail">
        <h6>{{ $album->type }}</h6>
        <h1 class="text-capitalize lato-700">{{ $album->name }}</h1>
        <p>{{ $singers }} - {{ Carbon\Carbon::create($album->release)->year }} - {{ count($album->songs) }} lagu, 2 jam 5 detik
        </p>
    </div>
    <hr>
    <div id="song" class="mb-5">
        <table class="table table-borderless" id="songs">
            <thead>
                <tr class="text-capitalize">
                  <th scope="col" class="text-success">#</th>
                  <th scope="col" class="text-success">title</th>
                  <th scope="col" class="text-success"><i class="bi bi-clock"></i></th>
                </tr>
              </thead>
          <tbody>
                @foreach ($album->songs as $key => $item)
                    <tr>
                        <td scope="row">{{ $key+1 }}</td>
                        <td scope="row">
                            <a href="/songs/{{ $item->id }}" class="text-decoration-none text-dark">{{ $item->title }}</a>
                            -
                            @foreach ($item->singers as $key => $singer)
                                <a href="/singers/{{ $singer->id }}" class="text-decoration-none text-dark">{{ $singer->name }}</a>
                                @if (!$loop->last),@endif
                            @endforeach
                        </td>
                        <td scope="row">{{ $item->minutes_duration }}:{{ sprintf('%02d', $item->second_duration) }}</td>
                    </tr>
                @endforeach
          </tbody>
        </table>
        <p>Lihat Semua</p>
    </div>
    <p>{{ $album->release }} - © 2024 BON FACTORY, Stone Music Entertainment</p>
    <hr>
    <div class="row">
        <h3 class="lato-700">Lainnya dari HA SUNG WOON</h3>
        @for ($i = 0; $i < 4; $i++)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="{{ asset('album.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $album->name }}</h5>
                    <p class="card-text">{{ Carbon\Carbon::create($album->release)->year }}</p>
                    </div>
                </div>
            </div>
        @endfor
    </div>

@endsection