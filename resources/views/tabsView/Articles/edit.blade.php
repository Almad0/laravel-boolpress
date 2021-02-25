<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>modifica articolo</title>
  </head>
  <body>
    <h2>Modifica dell'articolo</h2>

    <form class="Form container" action="{{ route('articles.update' , $article->id )}}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="title">Titolo</label>
        <input class="form-control" type="text" name="title" id="title" >
      </div>
      <div class="form-group">
        <label for="body">Testo</label>
        <textarea class="form-control" name="body" rows="4" id="body" ></textarea>
      </div>
      <div class="form-group">
        <label for="author">Autore</label>
        <input class="form-control" type="text" name="author" id="author" >
      </div>
      <div class="form-group">
        <label for="category">Categoria</label>
        <input class="form-control" type="text" name="category" id="category" >
      </div>
      <div class="form-group">
        <label for="tag">Tags</label>
        <input class="form-control" type="text" name="tag" id="tag" >
      </div>
      <button type="submit" class="btn btn-primary">Invia</button>
    </form>
  </body>
</html>
