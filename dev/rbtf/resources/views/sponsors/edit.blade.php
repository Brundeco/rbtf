<h1>Edit sponsor</h1>

<form action="/sponsors/{{ $sponsor->id }}" method="POST">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
    <input type="text" name="image" value="{{ $sponsor->image }}">
    <button type="submit">Date project up</button>
</form>

<form action="/sponsors/{{ $sponsor->id }}" method="POST">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit">Delete sponsor</button>
</form>