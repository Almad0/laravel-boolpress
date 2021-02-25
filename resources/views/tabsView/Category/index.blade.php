<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>index post</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  </head>
  <body>
    <a href="{{ route('posts.create')}}">Crea un nuovo post</a>

    <table>
      <thead>
        <th>ID</th>
        <th>Titolo</th>
        <th>Testo</th>
        <th>Azioni possibili</th>
      </thead>
      <tbody>
        @foreach ($posts as $value)
          <tr>
            <td>{{$value -> id}}</td>
            <td>{{$value -> title}}</td>
            <td>{{$value -> body}}</td>
            <td>
              <a href="{{ route('posts.show', ['post'=>$value->id])}}">Guarda</a>
              <a href="{{ route('posts.edit', ['post'=>$value->id])}}">Modifica</a>
              <form action="{{route('posts.destroy', ['post'=>$value->id])}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" name="button">Elimina</button>
              </form>

            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </body>
</html>
