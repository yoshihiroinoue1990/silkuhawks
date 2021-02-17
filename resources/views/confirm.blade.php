<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>SHILKY HAWKS TOP PAGE</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        {{-- この章で作成するＣＳＳを読み込みます --}}
        <link rel="stylesheet" href="{{ secure_asset('css/normalize.css') }}">
        {{-- この章で作成するＣＳＳを読み込みます --}}
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
  </head>
  <body>
    <header class="header">
      <p class="site-title-sub">BMW designer's portfolio</p>
      <h1 class="site-title">SHILKY HAWKS</h1>
      <p class="site-discription">Check out some of my works.</p>
    </header>
    
    <section class="contacts" id="contact">
      <h2 class="heading">Please check the input contents.</h2>
      <form action="{{action('ContactController@process')}}" method="post">
      
        <p class="about-text">
          <div class="contact-head">NAME</div>
          {{$contact->name}}
        </p>
        <p class="about-text">
          <div class="contact-head">E-mail</div>
          {{$contact->email}}
        </p>
        <p class="about-text">
          <div class="contact-head">MESSAGE</div>
          {{$contact->message}}
        </p>
        
        <div class="confirm-btn-grp">
          <input class="button" type="submit" name="action" value="back">
          <input class="button button-showy" type="submit" name="action" value="Submit">
        </div>
  
        @foreach($contact->getAttributes() as $key => $value)
          <input type="hidden" name="{{$key}}" value="{{$value}}">
        @endforeach
        @csrf
      </form>
    </section>
    
    <footer class="footer">
    </footer>
    <script src="lib/placeholders.min.js"></script>
  </body>
  </html>
