<h1>{{ $sponsor->image }}</h1>

<a href="/sponsors/{{ $sponsor->id }}/edit"><img src="{{ Storage::url("uploads/$sponsor->image") }}"></a>
