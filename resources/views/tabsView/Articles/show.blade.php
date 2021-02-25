<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mostra il post selezionato</title>
  </head>
  <body>
    <h2>{{$article->title}}</h2>
    <p>{{$article->body}}</p>
    <p>{{$article->author}}</p>
    <p>{{$article->categories}}</p>
    <p>{{$article->tags}}</p>
  </body>
</html>
