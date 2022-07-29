<?php get_header(); ?>
<div class="bg">
  <div class="bg__box">
    <div class="bg__catch"><span class="bg__catch-en">Connecting <br class="sp">people</span><span class="bg__catch-ja">人と人を繋ぐ会社です。</span></div>
  </div>
</div>
<main>
  <section class="vision">
    <div class="vision__flex">
      <div class="vision__imgbox">
        <picture>
          <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/src/img/vision_pc.jpg">
          <source media="(min-width: 600px) and (max-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/src/img/vision_pc.jpg">
          <source media="(max-width: 599px)" srcset="src/img/vision_sp.jpg"><img class="vision__imgbox-img" src="<?php echo get_template_directory_uri(); ?>/src/img/vision_pc.jpg" alt="">
        </picture>
      </div>
      <div class="vision__textbox"><span class="vision__smltitle">Vision</span>
        <h1 class="vision__lartitle">Let's go the way <br>we want to go</h1>
        <div class="vision__subtitle">自分の進みたい道に進もう</div>
        <p class="vision__text">テキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキスト</p><a class="vision__btn-bl" href="#">view more</a>
      </div>
    </div>
  </section>
  <section class="business">
    <div class="wrapper">
      <div class="business__flex">
        <div class="business__textbox"><span class="business__smltitle">Business</span>
          <h1 class="business__lartitle">Become a <br>web professional</h1>
          <div class="business__subtitle">webのプロフェッショナルになろう</div>
          <p class="business__text">テキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキスト</p><a class="business__btn-bl" href="#">view more</a>
        </div>
        <div class="business__list"><a class="business__list-item" href="#"><img class="business__list-img" src="<?php echo get_template_directory_uri(); ?>/src/img/Business_1_pc.jpg" alt="">
            <div class="business__list-flex"><span class="business__list-number">01</span>
              <div class="business__list-title"><span class="business__list-en">Engineering</span><span class="business__list-ja">エンジニアリング</span></div><a class="business__btn-wh" href="#">view more</a>
            </div>
          </a><a class="business__list-item" href="#"><img class="business__list-img" src="<?php echo get_template_directory_uri(); ?>/src/img/Business_2_pc.jpg" alt="">
            <div class="business__list-flex"><span class="business__list-number">02</span>
              <div class="business__list-title"><span class="business__list-en">Designer</span><span class="business__list-ja">デザイナー</span></div><a class="business__btn-wh" href="#">view more</a>
            </div>
          </a><a class="business__list-item" href="#"><img class="business__list-img" src="<?php echo get_template_directory_uri(); ?>/src/img/Business_3_pc.jpg" alt="">
            <div class="business__list-flex"><span class="business__list-number">03</span>
              <div class="business__list-title"><span class="business__list-en">Marketing</span><span class="business__list-ja">マーケティング</span></div><a class="business__btn-wh" href="#">view more</a>
            </div>
          </a></div>
      </div>
    </div>
  </section>
  <section class="news wrapper">
    <div class="news__textbox"> <span class="news__smltitle">News</span></div>
    <div class="news__box">
      <dl class="news__item"><a href="#">
          <dt class="news__item-dt"><span class="news__item-date">2022.08.01</span><span class="news__item-tag">news</span></dt>
          <dd class="news__item-dd">
            <p class="news__item-text">テキストテキストテキストテキストテキストテキスト</p>
          </dd>
        </a></dl>
      <dl class="news__item"><a href="#">
          <dt class="news__item-dt"><span class="news__item-date">2022.08.02</span><span class="news__item-tag">news</span></dt>
          <dd class="news__item-dd">
            <p class="news__item-text">テキストテキストテキストテキストテキストテキスト</p>
          </dd>
        </a></dl>
      <dl class="news__item"><a href="#">
          <dt class="news__item-dt"><span class="news__item-date">2022.08.03</span><span class="news__item-tag">news</span></dt>
          <dd class="news__item-dd">
            <p class="news__item-text">テキストテキストテキストテキストテキストテキスト</p>
          </dd>
        </a></dl>
      <div class="news__btn"><a class="news__btn-bl" href="#">view more</a></div>
    </div>
  </section>
  <div class="content"><a class="recruit" href="#">
      <div class="recruit__title"><span class="recruit__title-en">Recruit</span><span class="recruit__title-ja">弊社で働きたい方へ</span></div>
    </a><a class="contact" href="#">
      <div class="contact__title"><span class="contact__title-en">Contact</span><span class="contact__title-ja">お問い合わせはこちら</span></div>
    </a></div>
  <section class="company">
    <div class="wrapper"><span class="company__smltitle">Company</span>
      <div class="company__flex"><a class="company__item" href="#"><img class="company__img" src="<?php echo get_template_directory_uri(); ?>/src/img/information_pc.jpg" alt="">
          <div class="company__title"><span class="company__title-en">Information</span><span class="company__title-ja">会社概要</span></div>
        </a><a class="company__item" href="#"><img class="company__img" src="<?php echo get_template_directory_uri(); ?>/src/img/access_pc.jpg" alt="">
          <div class="company__title"><span class="company__title-en">access</span><span class="company__title-ja">アクセス情報</span></div>
        </a></div>
    </div>
  </section>
</main>
<?php get_footer(); ?>