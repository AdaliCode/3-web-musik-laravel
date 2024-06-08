@extends('layout.main')
@section('title', 'MP326')
@section('container')
  <div class="text-success" id="playlist">
    <h6>Playlist</h6>
    <h1 class="text-capitalize">Liked Songs</h1>
    <p>Muhammad Ariiq Fiezayyan - {{ count($songs) }} songs</p>
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
      @for ($i = 0; $i < 20; $i++)
        <tr>
          <th scope="row">{{ $i+1 }}</th>
          <td><?= (empty($songs[$i])) ? 'Gift - HA SUNG WOON' : $songs[$i]->title . ' - ' . $songs[$i]->singer ; ?></td>
          <td><?= (empty($songs[$i])) ? 'Lovely Runner, Pt. 9 (Original Soundtrack)' : $songs[$i]->album ; ?></td>
          <td>1 week ago</td>
          <td><?= (empty($songs[$i])) ? '4:49' : $songs[$i]->minutes_duration . ':' . sprintf('%02d', $songs[$i]->second_duration); ?></td>
        </tr>
      @endfor
    </tbody>
  </table>
@endsection