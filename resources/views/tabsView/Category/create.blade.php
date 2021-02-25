<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Creare nuovo post</title>
  </head>
  <body>
    <form class="Form" action="{{ route('posts.store')}}" method="post">
      @csrf
      <div class="">
        <label for="title">Titolo del post</label>
        <input type="text" name="title" id="title" placeholder="Scrivi qui il tuo titolo" required>
      </div>
      <div class="">
        <label for="body"></label>
        <textarea name="body" rows="4" id="body" required></textarea>
      </div>
      <button type="submit" name="button">Invia</button>
    </form>
  </body>
</html>
