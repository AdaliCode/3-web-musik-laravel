@extends('layout.main')
<?php $singers = '' ; ?>
@foreach ($song->singers as $item)
    <?php $singers .= $item->name; ?>
    @if (!$loop->last)
        <?php $singers .= ', '; ?>    
    @endif
@endforeach
@section('title', "MP326 | $song->title - " . $singers)
@section('content')
<div style="background-image: linear-gradient(white, rgba(168, 79, 31, 0.74));">
    <div class="container pt-5 pb-3">
        <div class="row g-0 text-white align-items-end">
            <div class="col-auto">
                <img src="{{ asset('storage/album.jpg') }}" alt="" width="200" class="rounded">
            </div>
            <div class="col mx-3">
                <small>Song</small>
                <h1 class="text-capitalize" style="font-weight: 900;">{{ $song->title }}</h1>
                <div class="row g-0 align-items-center">
                    <div class="col-auto">
                        <img src="{{ asset('storage/singer.jpg') }}" alt="" width="20" class="rounded-pill">
                    </div>
                    <div class="col mx-1">
                        <small>
                            <a href="/singers/{{ $song->singers[0]->id }}" class="text-decoration-none text-light">
                                {{ $song->singers[0]->name }}
                            </a> - <a href="/albums/{{ $song->album->id }}" class="text-decoration-none text-light">
                                {{ $song->album->name }}
                            </a> - {{ $song->title }} - {{ Carbon\Carbon::create($song->album->release)->year }} - {{ $song->minutes_duration }}:{{ sprintf('%02d', $song->second_duration) }}
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container py-3 text-light">
    <div id="song" class="mb-5">
        <h5>Track Populer oleh</h5>
        <h3 class="lato-700">{{ $song->singers[0]->name }}</h3>
        <table class="text-light w-100" id="songs">
          <tbody>
              @for ($i = 0; $i < 5; $i++)
                  <tr>
                    <td scope="row">{{ $i+1 }}</td>
                    <td class="p-1">
                        <div class="row g-0 align-items-center">
                            <div class="col-auto">
                                <img src="{{ asset('storage/album.jpg') }}" alt="" width="30" class="rounded">
                            </div>
                            <div class="col">
                                <div class="mx-2">
                                    <a href="/songs/{{ $song->id }}" class="text-decoration-none text-light">
                                        {{ $song->title }}</a>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>1.000.000</td>
                    <td>{{ $song->minutes_duration }}:{{ sprintf('%02d', $song->second_duration) }}</td>
                  </tr>
              @endfor
          </tbody>
        </table>
        <p>Lihat Semua</p>
    </div>
    @foreach ($song->singers as $item)
        <h3 class="lato-700">Rilis Populer oleh {{ $item->name }}</h3>
        <div class="row mb-3">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="{{ asset('storage/album.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $song->singer }}</h5>
                        <p class="card-text">{{ Carbon\Carbon::create($song->album->release)->year }} - {{ $song->album->type }}</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    @endforeach
</div>
@endsection