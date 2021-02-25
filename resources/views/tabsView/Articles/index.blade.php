<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index Articles Table</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  </head>
  <body>
    <button type="button" name="button" class="btn-light"><a href="{{ route('articles.create')}}">Crea un nuovo post</a></button>

    <table class="table-striped">
      <thead>
        <th scope="col">ID</th>
        <th scope="col">Titolo</th>
        <th scope="col">Testo</th>
        <th scope="col">Autore</th>
        <th scope="col">Categorie</th>
        <th scope="col">Tags</th>
        <th scope="col">Azioni Possibili</th>

      </thead>
      <tbody>
        @foreach ($articles as $value)
          <tr>
            <td scope="row">{{$value -> id}}</td>
            <td scope="row">{{$value -> title}}</td>
            <td scope="row">{{$value -> body}}</td>
            <td scope="row">{{$value -> author}}</td>
            <td scope="row">{{$value -> categories}}</td>
            <td scope="row">{{$value -> tags}}</td>
            <td>
              <button type="button" name="edit" class="btn-primary"><a href="{{ route('articles.show', ['article'=>$value->id])}}" class="text-light">Guarda</a></button>
              <button type="button" name="edit" class="btn-warning"><a href="{{ route('articles.edit', ['article'=>$value->id])}}" class="text-dark">Modifica</a></button>
              <span class="">
                <form action="{{route('articles.destroy', ['article'=>$value->id])}}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" name="button" class="btn-danger">Elimina</button>
                </form>
              </span>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </body>
</html>
