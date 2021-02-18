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
      <div class="buttons">
        <a class="button" href="#about">LEARN MORE</a>
        <a class="button button-showy" href="#contact">SEND MESSAGE</a>
      </div>
    </header>
    <section class="about animation" id="about">
      <h2 class="heading">ABOUT</h2>
      <p class="about-text">
        BMW...<br>
        ここ日本において余り知られていないパーツ、チューニング内容,及び取り付けDIYを紹介していきます。特に、名機N54を載せた車両について紹介していきます。他にも、国産車、その他輸入車についても情報を発信していきます。<br>もちろん、車だけで無く旅や、多ジャンルにおける趣味、皆さんが真似したくなるようなDIYや情報もお伝えしていきたいと思っています。
      </p>
      <p class="about-text">
        主にYouTubeとblogで紹介していきますので、是非ご覧ください。<br>DIYなどで、わからない事などあれば上記メールかtwitter,Instagramにてメッセージお待ちしております。
      </p>
      <p class="about-text">
        サイト下部のSTOREリンクにて海外パーツの販売もしています。<br>掲載していない部品、及純正部品についても輸入代行致しますので、是非お問い合わせください。
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
          <img class="work-image" src="{{ secure_asset('img/back.jpg') }}"" alt="335リア画像">
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
