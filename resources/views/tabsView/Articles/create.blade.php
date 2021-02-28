<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Creare un nuovo articolo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  </head>
  <body>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form class="Form container" action="{{ route('articles.store')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="title">Titolo</label>
        <input class="form-control" type="text" name="title" id="title">
      </div>
      <div class="form-group">
        <label for="body">Testo</label>
        <textarea class="form-control" name="body" rows="4" id="body"></textarea>
      </div>
      <div class="form-group">
        <label for="author">Autore</label>
        <input class="form-control" type="text" name="author" id="author">
      </div>

      <div class="form-group">
        <label for="category_id">Categorie</label>
        <select class="form-control" name="category_id" id="category_id">
          @foreach($categories as $value)
            <option value="{{ $value->id}}">{{ $value->name}}</option>
          @endforeach
        </select>
      </div>

      {{-- Nel caso usare MULTIPLE nel select e poi usare tag[] nel campo NAME --}}

      <div class="form-group">
        <label for="tag_id">Tags</label>
        <select class="form-control" name="tag_id" id="tag_id" >
          @foreach($tags as $value)
            <option value="{{ $value->id}}">{{ $value->name}}</option>
          @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Invia</button>
    </form>
  </body>
</html>
