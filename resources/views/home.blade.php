@extends('layout.main')
@section('title', 'MP326')
@section('container')
  <div class="text-success">
    <h6>Playlist</h6>
    <h1 class="text-capitalize lato-700">Liked Songs</h1>
    <p>Muhammad Ariiq Fiezayyan - <?= count($songs) ; ?> songs</p>
  </div>
  <hr>
  <table class="table table-borderless" id="songs">
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
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>
            <a href="/songs/{{ $item->id }}" class="text-decoration-none text-dark">{{ $item->title }}</a> - {{ $item->singer }}
          </td>
          <td>{{ $item->album }}</td>
          <td>1 week ago</td>
          <td>{{ $item->minutes_duration }}:{{ sprintf('%02d', $item->second_duration) }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection