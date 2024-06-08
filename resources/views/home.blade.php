@extends('layout.main')
@section('title', 'MP326')
@section('container')
  <div class="text-success" id="playlist">
    <h6>Playlist</h6>
    <h1 class="text-capitalize">Liked Songs</h1>
    <p>Muhammad Ariiq Fiezayyan - 110 songs</p>
  </div>
  <hr>
  <table class="table table-borderless" id="songs">
    <thead>
      <tr class="text-capitalize">
        <th scope="col" class="text-success">#</th>
        <th scope="col" class="text-success">title</th>
        <th scope="col" class="text-success">album</th>
        <th scope="col" class="text-success">data added</th>
        <th scope="col" class="text-success">duration</th>
      </tr>
    </thead>
    <tbody>
      @for ($i = 0; $i < 20; $i++)
        <tr>
          <th scope="row">{{ $i+1 }}</th>
          <td>Gift - HA SUNG WOON</td>
          <td>Lovely Runner, Pt. 9 (Original Soundtrack)</td>
          <td>1 week ago</td>
          <td>4:49</td>
        </tr>
      @endfor
    </tbody>
  </table>
@endsection