<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>modifica post</title>
  </head>
  <body>
    <h2>Modifica del post: {{$post->title}}</h2>
    <form class="Form" action="{{ route('posts.update', $post)}}" method="post">
      @csrf
      @method('PUT')
      <div class="">
        <label for="title">Titolo del post</label>
        <input type="text" name="title" id="{{$post->title}}" placeholder="Scrivi qui il tuo titolo" required>
      </div>
      <div class="">
        <label for="body"></label>
        <textarea name="body" rows="4" id="{{$post->bo}}" required></textarea>
      </div>
      <button type="submit" name="button">Invia</button>
    </form>
  </body>
</html>
