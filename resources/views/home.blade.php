@extends('layout.main')
@section('title', 'MP326')
@section('content')
<div style="background-image: linear-gradient(40deg, purple, blue);">
    <div class="container pt-5 pb-3">
        <div class="row g-0 text-white align-items-end">
            <div class="col-auto d-flex align-items-center rounded" style="background-image: linear-gradient(90deg, blue, white);padding: 60px">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                </svg>
            </div>
            <div class="col mx-3">
                <small>Playlist</small>
                <h1 class="text-capitalize" style="font-weight: 900;font-size: 4.5rem">Liked Songs</h1>
                <div class="row g-0 align-items-center">
                    <div class="col-auto">
                        <img src="{{ asset('storage/singer.jpg') }}" alt="" width="20" class="rounded-pill">
                    </div>
                    <div class="col mx-1">
                        <small>Muhammad Ariiq Fiezayyan - <?= count($songs) ; ?> songs</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   <div class="container py-3">
        <table class="table" id="songs">
            <thead>
            <tr class="text-capitalize">
                <th scope="col" class="text-success">#</th>
                <th scope="col" class="text-success">title</th>
                <th scope="col" class="text-success">album</th>
                <th scope="col" class="text-success">data added</th>
                <th scope="col" class="text-success"><i class="bi bi-clock"></i></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($songs as $item)
                <tr class="align-middle">
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        <div class="row g-0">
                            <div class="col-auto">
                                <img src="{{ asset('storage/album.jpg') }}" alt="" width="50">
                            </div>
                            <div class="col">
                                <div class="mx-2">
                                    <a href="/songs/{{ $item->id }}" class="text-decoration-none text-dark">{{ $item->title }}</a><br>
                                    @foreach ($item->singers as $key => $singer)
                                        <a href="/singers/{{ $singer->id }}" class="text-decoration-none text-dark">{{ $singer->name }}</a>
                                        @if (!$loop->last),@endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="/albums/{{ $item->album->id }}" class="text-decoration-none text-dark">{{ $item->album->name }}</a>
                    </td>
                    <td>1 week ago</td>
                    <td>{{ $item->minutes_duration }}:{{ sprintf('%02d', $item->second_duration) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
   </div>
@endsection