@extends('layout.main')
@section('title', "MP326 | $album->name - " . $album->singer->name)
@section('content')
<div style="background-image: linear-gradient(180deg, white, rgba(168, 79, 31, 0.74));">
    <div class="container pt-5 pb-3">
        <div class="row g-0 text-white align-items-end">
            <div class="col-auto">
                <img src="{{ asset('storage/album.jpg') }}" alt="" width="200" class="rounded">
            </div>
            <div class="col mx-3">
                <small>{{ $album->type }}</small>
                <h1 class="text-capitalize" style="font-weight: 900;">{{ $album->name }}</h1>
                <div class="row g-0 align-items-center">
                    <div class="col-auto">
                        <img src="{{ asset('storage/singer.jpg') }}" alt="" width="20" class="rounded-pill">
                    </div>
                    <div class="col mx-1">
                        <small>
                            <a href="/singers/{{ $album->singer->id }}" class="text-decoration-none text-light">
                                {{ $album->singer->name }}
                            </a> - {{ Carbon\Carbon::create($album->release)->year }} - {{ count($album->songs) }} lagu, 2 jam 5 detik
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container py-3 text-light">
    <div id="song" class="mb-5">
        <table class="text-light w-100">
            <thead class="border-bottom border-light">
                <tr class="text-capitalize">
                  <th scope="col">#</th>
                  <th scope="col">title</th>
                  <th scope="col"><i class="bi bi-clock"></i></th>
                </tr>
              </thead>
          <tbody>
                @foreach ($album->songs as $key => $item)
                    <tr class="align-middle">
                        <td scope="row">{{ $key+1 }}</td>
                        <td class="lh-1">
                            <div class="p-2">
                                <a href="/songs/{{ $item->id }}" class="text-decoration-none text-light">{{ $item->title }}</a><br>
                                @foreach ($item->singers as $key => $singer)
                                    <a href="/singers/{{ $singer->id }}" class="text-decoration-none text-light">{{ $singer->name }}</a>
                                    @if (!$loop->last),@endif
                                @endforeach
                            </div>
                        </td>
                        <td>{{ $item->minutes_duration }}:{{ sprintf('%02d', $item->second_duration) }}</td>
                    </tr>
                @endforeach
          </tbody>
        </table>
        <p>Lihat Semua</p>
    </div>
    <p>{{ $album->release }} - © 2024 BON FACTORY, Stone Music Entertainment</p>
    <hr>
    <div class="row">
        <h3 class="lato-700">Lainnya dari {{ $album->singer->name }}</h3>
        @for ($i = 0; $i < 4; $i++)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="{{ asset('storage/album.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $album->name }}</h5>
                    <p class="card-text">{{ Carbon\Carbon::create($album->release)->year }}</p>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>

@endsection