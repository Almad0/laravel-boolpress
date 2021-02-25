<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Creare un nuovo articolo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  </head>
  <body>
    <form class="Form container" action="{{ route('articles.store')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="title">Titolo</label>
        <input class="form-control" type="text" name="title" id="title" required>
      </div>
      <div class="form-group">
        <label for="body">Testo</label>
        <textarea class="form-control" name="body" rows="4" id="body" required></textarea>
      </div>
      <div class="form-group">
        <label for="author">Autore</label>
        <input class="form-control" type="text" name="author" id="author" required>
      </div>
      <div class="form-group">
        <label for="categories">Categoria</label>
        <input class="form-control" type="text" name="categories" id="categories" required>
      </div>
      <div class="form-group">
        <label for="tags">Tags</label>
        <input class="form-control" type="text" name="tags" id="tags" required>
      </div>
      <button type="submit" class="btn btn-primary">Invia</button>
    </form>
  </body>
</html>
