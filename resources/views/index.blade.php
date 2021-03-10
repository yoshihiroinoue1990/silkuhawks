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
    <div id="loader-bg">
  <div id="loader">
    <img src="{{ secure_asset('img/img-loading.gif') }}" width="80" height="80" alt="Now Loading..." />
    <p>Now Loading...</p>
  </div>
</div>
  <body id="wrap">
    <header class="header">
      <p class="site-title-sub">BMW Private Tuner</p>
      <h1 class="site-title">SHILKY HAWKS</h1>
      <p class="site-discription">Check out some of my works.</p>
      <div class="buttons">
        <a class="button" href="#about">LEARN MORE</a>
        <a class="button button-showy" href="#contact">SEND MESSAGE</a>
      </div>
    </header>
    <section class="about animation" id="about">
      <h2 class="heading">ABOUT US</h2>
      <p class="about-text">
        BMW...<br>
        ここ日本において余り知られていないパーツ、チューニング内容、及び取り付けDIYを紹介していきます。特に、名機と呼ばれるエンジン「N54」を載せた車両について紹介していきます
      </p>
      <p class="about-text">
        主にYouTubeとblogで情報発信していきますので、是非下記リンクよりご覧ください。
      </p>
      <p class="about-text">
        掲載していない部品、及純正部品についても輸入代行致します。<br>サイト下部にはコンタクトフォーム、twitterやInstagramからのメッセージもお待ちしております。
      </p>
    </section>
    <section class="works">
      <h2 class="heading">SNS</h2>
      <div class="works-wrapper">
        <div class="work-box front animation">
          <img class="work-image" src="{{ secure_asset('img/front.jpg') }}" alt="335フロント画像">
          <div class="work-description">
          <div class="work-description-inner">
          <p class="work-text">
            <br>
            <br>
            <br>
            <br>
            YOUTUBE<br>
            <a href="https://www.youtube.com/channel/UCOrBLZuzUUWlQp9a_eKflcQ" target="_blank" rel="noopener noreferrer" class="button button-ghost">GO TO YOUTUBE</a>
          </p>
        </div>
        </div>
        </div>
        <div class="work-box back animation">
          <img class="work-image" src="{{ secure_asset('img/back.jpg') }}" alt="335リア画像">
          <div class="work-description">
          <div class="work-description-inner">
          <p class="work-text">
            <br>
            <br>
            <br>
            <br>
            Twitter<br>
            <a href="https://twitter.com/silkyhawks" target="_blank" rel="noopener noreferrer" class="button button-ghost">GO TO Twitter</a>
          </p>
        </div>
        </div>
        </div>
        <div class="work-box run animation">
          <img class="work-image" src="{{ secure_asset('img/run.jpg') }}" alt="335走行画像">
          <div class="work-description">
          <div class="work-description-inner">
          <p class="work-text">
            <br>
            <br>
            <br>
            <br>
            Instagram<br>
            <a href="https://www.instagram.com/silky_hawks" target="_blank" rel="noopener noreferrer" class="button button-ghost">GO TO Instagram</a>
          </p>
        </div>
        </div>
        </div>
        <div class="work-box sunset animation">
          <img class="work-image" src="{{ secure_asset('img/sunset.jpg') }}" alt="335夕陽画像">
          <div class="work-description">
          <div class="work-description-inner">
          <p class="work-text">
            <br>
            <br>
            <br>
            <br>
            facebook<br>
            <a href="https://www.facebook.com/profile.php?id=100010531638482" target="_blank" rel="noopener noreferrer" class="button button-ghost">GO TO facebook</a>
          </p>
        </div>
        </div>
        </div>
      </div>
    </section>
    <section class="skills">
      <h2 class="heading">MENU</h2>
      <div class="skills-wrapper animation">
        <div class="skill-box">
          <i class="skill-icon fas fa-car"></i>
          <div class="skill-title">SERVICE</div>
          <p class="skill-text">
            愛車をベストな状態に保つためのメンテナンスメニューを<br>ご提案致します。<br>
          </p>
        </div>
        <div class="skill-box">
          <i class="skill-icon fas fa-car"></i>
          <div class="skill-title">STORE</div>
          <p class="skill-text">
            BMWをより美しく、より格好良く。<br>
            まだ日本に入っていないパーツも輸入可能です。
          </p>
        </div>
        <div class="skill-box">
          <i class="skill-icon fas fa-car"></i>
          <div class="skill-title">SHOP</div>
          <p class="skill-text">
            オーナー様が理想とするBMWに仕上げるための<br>
            最適解をご提案させていただきます。
          </p>
        </div>
      </div>
    </section>
    <section class="contacts animation" id="contact">
      <h2 class="heading">CONTACT</h2>
      @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      @endif
      <form class="contact-form" action="{{action('ContactController@confirm')}}" method="post">
        <input type="text" name="name" placeholder="name" value="{{old('name')}}">
        <input type="text" name="email" placeholder="email" value="{{old('email')}}">
        <textarea name="message" placeholder="MASSAGE">{{old('message')}}</textarea>
        <input type="submit">
        @csrf
      </form>
    </section>
    <footer class="footer">
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
      $(function() {
        var h = $(window).height();
        $('#wrap').css('display','none');
        $('#loader-bg ,#loader').height(h).css('display','block');
      });
      
      $(window).load(function () { //全ての読み込みが完了したら実行
        $('#loader-bg').delay(900).fadeOut(800);
        $('#loader').delay(600).fadeOut(300);
        $('#wrap').css('display', 'block');
      });
      
      //10秒たったら強制的にロード画面を非表示
      $(function(){
        setTimeout('stopload()',10000);
      });
      
      function stopload(){
        $('#wrap').css('display','block');
        $('#loader-bg').delay(900).fadeOut(800);
        $('#loader').delay(600).fadeOut(300);
      }
    </script>
    <script src="lib/placeholders.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
      $(function(){
  	  $(window).on('load scroll',function (){
  		  $('.animation').each(function(){
  			  //ターゲットの位置を取得
  			  var target = $(this).offset().top;
  			  //スクロール量を取得
  			  var scroll = $(window).scrollTop();
  			  //ウィンドウの高さを取得
  			  var height = $(window).height();
  			  //ターゲットまでスクロールするとフェードインする
  			  if (scroll > target - height){
  				  //クラスを付与
  				  $(this).addClass('active');
  			  }
  		  });
  	  });
    });
    </script>
  </body>
  </html>
