<table class="text-light w-100">
  <tbody>
    @foreach ($songs as $key => $item)
        <tr class="align-middle">
            <td scope="row">{{ $key+1 }}</td>
            <td>
                <div class="row g-0 align-items-center">
                    <div class="col-auto">
                        <img src="{{ asset('storage/album.jpg') }}" alt="" width="30">
                    </div>
                    <div class="col-auto">
                        <div class="mx-2">
                            <a href="/songs/{{ $item->id }}" class="text-decoration-none text-light">{{ $item->title }}</a>
                        </div>
                    </div>
                </div>
            </td>
            <td>1.000.000</td>
            <td>{{ $item->minutes_duration }}:{{ sprintf('%02d', $item->second_duration) }}</td>
        </tr>
    @endforeach
  </tbody>
</table>