<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- <link rel="stylesheet" href="./css/index.css"> -->
  <script>
    (function(d) {
      var config = {
          kitId: 'vkh0ows',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <nav class="nav" id="pc-df">
      <ul class="nav-ul">
        <div class="nav-ul-l">
          <li>
            <h1><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="米子コンテンツ工場"></a></h1>
          </li>
        </div>
        <div class="nav-ul-r">
          <li><a href="/about/">米コンとは</a></li>
          <li><a href="#">よくあるご質問</a></li>
          <li><a href="#">制作実績</a></li>
          <li><a href="#">ブログ</a></li>
          <li><a href="#">メンバー紹介</a></li>
          <li><a href="#">お問い合わせ</a></li>
        </div>
      </ul>
    </nav>
    <!--  -->
    <div class="navsp-wrapper" id="sp">
      <h1><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="米子コンテンツ工場"></a></h1>
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="navsp">
        <ul>
          <li><a href="/about/">米コンとは</a></li>
          <li><a href="#">よくあるご質問</a></li>
          <li><a href="#">制作実績</a></li>
          <li><a href="#">ブログ</a></li>
          <li><a href="#">メンバー紹介</a></li>
          <li><a href="#">お問い合わせ</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- /header -->
  <main>
    <div class="mv">
      <img src="<?php echo get_template_directory_uri(); ?>/img/mv-pc.jpg" alt="" id="pc">
      <img src="<?php echo get_template_directory_uri(); ?>/img/mv-sp.jpg" alt="" id="sp">
    </div>
    <div class="cta-fixed--right">
      <span>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/side-cta.svg" alt=""></a>
        <img src="<?php echo get_template_directory_uri(); ?>/img/yona-side-cta.png" alt="" class="yona-side-cta">
        </spa>
    </div>
    <div class="post-mv">
      <div class="post-mv-inner">
        <div class="post-mv-l">
          <p>米子コンテンツ工場（通称：米コン）は、デジタルハリウッドSTUDIO米子の卒業生で結成されたクリエイターチームです。
          </p>
          <p id="sp">webサイト制作・印刷物制作・イベント企画などを通し
            て、世界一あなたに寄り添いながら、「面白い企画」
            や「やってみたい！」を実現するものづくりのお手伝い
            を致します。</p>
        </div>
        <div class="post-mv-r">
          <div class="post-mv-r-about">
            <div class="door_btn_wrapper">
              <p class="cta-b4-motto"><img src="<?php echo get_template_directory_uri(); ?>/img/cta-b4-motto.png" alt=""></p>
              <a href="#">
                <div class="door_btn_txt">
                  <p>米コン<span>についてはこちら</span></p>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/door_btn_arrow.png" alt="">
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/door_cl.png" alt="door_close" class="door_btn">
              </a>
            </div>
          </div>
          <div class="post-mv-r-dhw">
            <div class="door_btn_wrapper">
              <a href="#">
                <div class="door_btn_txt">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo_yonago_orange.png" alt="" class="door_btn-dhw">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/door_btn_arrow.png" alt="">
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/door_cl.png" alt="door_close" class="door_btn">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.post-mv -->
    <div class="index-content-sidebar">
      <aside class="sidebar">
        <div class="sidebar-content">
          <div class="sidebar-search">
            <h5>検索</h5>
            <form method="get" action="#" class="search_container">
              <input type="text" size="25" placeholder="キーワード検索">
              <input type="submit" value="">
            </form>
          </div>
          <div class="sidebar-blog">
            <div class="sidebar-blog-item">
              <h5>ブログ（新着順）</h5>
              <ol>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/blog-thumbnail.jpg" alt="">
                  <time datetime="#">2022/22/22</time>
                  <p>あああああああああああああああああああああああああ
                  </p>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/blog-thumbnail.jpg" alt="">
                  <time datetime="#">2022/22/22</time>
                  <p>あああああああああああああああああああああああああ
                  </p>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/blog-thumbnail.jpg" alt="">
                  <time datetime="#">2022/22/22</time>
                  <p>あああああああああああああああああああああああああ
                  </p>
                </li>
              </ol>
            </div>
            <div class="sidebar-blog-item sidebar-blog-item--popular">
              <h5>ブログ（人気順）</h5>
              <ol>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/blog-thumbnail.jpg" alt="">
                  <time datetime="#">2022/22/22</time>
                  <p>あああああああああああああああああああああああああ
                  </p>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/blog-thumbnail.jpg" alt="">
                  <time datetime="#">2022/22/22</time>
                  <p>あああああああああああああああああああああああああ
                  </p>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/blog-thumbnail.jpg" alt="">
                  <time datetime="#">2022/22/22</time>
                  <p>あああああああああああああああああああああああああ
                  </p>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </aside>
      <!-- / aside -->
      <div class="index-content">
        <div class="works">
          <div class="index-inner inner">
            <div class="index-sec-ttl">
              <img src="<?php echo get_template_directory_uri(); ?>/img/works.png" alt="">
              <h1>制作実績</h1>
            </div>
            <div class="works-img-wrapper">
              <div class="works-img">
                <a href="#" class="previous"></a>
                <div class="index-thumbnail-frame">
                  <div class="index-thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/works-thumbnail.png" alt="">
                  </div>
                </div>
                <a href="" class="next"></a>
              </div>
              <div class="works-img-btn">
                <div class="door_btn_wrapper">
                  <a href="#">
                    <div class="door_btn_txt">
                      <p>制作実績一覧<span>についてはこちら</span></p>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/door_btn_arrow.png" alt="">
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/door_cl.png" alt="door_close" class="door_btn">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.works -->
        <div class="process">
          <div class="index-process-inner index-inner">
            <div class="index-sec-ttl">
              <img src="<?php echo get_template_directory_uri(); ?>/img/process.png" alt="">
              <h1>依頼から納品まで</h1>
              <h5>あなたの想いが形になるまで</h5>
            </div>
            <div class="step-box step01">
              <div class="step-box-l">
                <h2><img src="<?php echo get_template_directory_uri(); ?>/img/step01-ttl.png" alt=""></h2>
              </div>
              <div class="step-box-r">
                <p>相談後、お見積もりをいたします。</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/step01-illust.png" alt="" class="step01-illust">
              </div>
            </div>
            <!-- /.step01 -->
            <div class="step-box step02">
              <div class="step-box-l">
                <h2><img src="<?php echo get_template_directory_uri(); ?>/img/step02-ttl.png" alt=""></h2>
              </div>
              <div class="step-box-r">
                <p>相談後、お見積もりをいたします。</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/step02-illust.png" alt="" class="step02-illust">
              </div>
            </div>
            <!-- /.step02 -->
            <div class="step-box step03">
              <div class="step-box-l">
                <h2><img src="<?php echo get_template_directory_uri(); ?>/img/step03-ttl.png" alt=""></h2>
              </div>
              <div class="step-box-r">
                <p>相談後、お見積もりをいたします。</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/step03-illust.png" alt="" class="step01-illust">
              </div>
            </div>
            <!-- /.step03 -->
            <div class="step-box step04">
              <div class="step-box-l">
                <h2><img src="<?php echo get_template_directory_uri(); ?>/img/step04-ttl.png" alt=""></h2>
              </div>
              <div class="step-box-r">
                <p>相談後、お見積もりをいたします。</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/step04-illust.png" alt="" class="step04-illust">
              </div>
            </div>
            <!-- /.step04 -->
            <div class="step-box step05">
              <div class="step-box-l">
                <h2><img src="<?php echo get_template_directory_uri(); ?>/img/step05-ttl.png" alt=""></h2>
              </div>
              <div class="step-box-r">
                <p>相談後、お見積もりをいたします。</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/step05-illust.png" alt="" class="step05-illust">
              </div>
            </div>
            <!-- /.step04 -->
          </div>
        </div>
        <!-- /.process -->
        <div class="index-inner">
          <div class="cta-sec">
            <img src="<?php echo get_template_directory_uri(); ?>/img/cta-b4-sassoku.png" alt="" class="ballon">
            <a href="#" class="contact_btn bgleft">
              <div>お問い合わせ<span>&rang;</span></div>
            </a>
          </div>
        </div>
        <!-- /.cta-sec -->
        <div class="price">
          <div class="index-inner price-index-inner">
            <div class="index-sec-ttl">
              <img src="<?php echo get_template_directory_uri(); ?>/img/priceflow.png" alt="">
              <h1>料金・詳しい流れ</h1>
              <p>米子コンテンツ工場では明確な料金表や料金プランを提示しておりません。<br>
                だからこそ、まずは丁寧な打ち合わせをもとにお見積もりをさせていただきます。</p>
            </div>
            <div class="price-content content-half">
              <div class="content-half-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/price-kuwashii.png" alt="" class="price-ballon">
                <div class="index-thumbnail-frame">
                  <div class="index-thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/index-thumbnail.png" alt="">
                  </div>
                </div>
                <div class="door_btn_wrapper">
                  <a href="#">
                    <div class="door_btn_txt">
                      <p>詳しい流れ<span>についてはこちら</span></p>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/door_btn_arrow.png" alt="">
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/door_cl.png" alt="door_close" class="door_btn">
                  </a>
                </div>
              </div>
              <div class="content-half-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/price-ryoukin.png" alt="" class="price-ballon">
                <div class="index-thumbnail-frame">
                  <div class="index-thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/index-thumbnail.png" alt="">
                  </div>
                </div>
                <div class="door_btn_wrapper">
                  <a href="#">
                    <div class="door_btn_txt">
                      <p>料金<span>についてはこちら</span></p>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/door_btn_arrow.png" alt="">
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/door_cl.png" alt="door_close" class="door_btn">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.price -->
        <div class="member">
          <div class="index-inner member-index-inner">
            <div class="index-sec-ttl">
              <img src="<?php echo get_template_directory_uri(); ?>/img/member.png" alt="">
              <h1>メンバー</h1>
              <p>米子コンテンツ工場にはさまざまなメンバーが所属しています。</p>
            </div>
            <div class="member-content content-half">
              <div class="index-thumbnail-frame">
                <div class="index-thumbnail">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/member-thumbnail.png" alt="">
                </div>
              </div>
              <div class="door_btn_wrapper">
                <a href="#">
                  <div class="door_btn_txt">
                    <p>メンバー一覧<span>についてはこちら</span></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/door_btn_arrow.png" alt="">
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/door_cl.png" alt="door_close" class="door_btn">
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.member -->
      </div>
      <!-- /.index-content -->

    </div>
    <!-- /.index-content-sidebar -->
    <div class="index-bottom-cta">
      <div class="index-bottom-cta-inner">
        <div class="cta-sec">
          <span>
            <img src="<?php echo get_template_directory_uri(); ?>/img/cta-b4-yoshi.png" alt="" class="ballon">
            <a href="#" class="contact_btn bgleft">
              <div>お問い合わせ<span>&rang;</span></div>
            </a>
            </spa>
        </div>
        <div class="name-address">
          <p><img src="<?php echo get_template_directory_uri(); ?>/img/logo-horizontal.svg" alt=""></p>
          <address>〒683-0812<br>
            鳥取県米子市角盤町1-55-2<br>
            中海テレビ放送センタービル2階<br>
            デジタルハリウッドSTUDIO米子内</address>
        </div>
      </div>
    </div>
  </main>
  <footer class="footer">
    <div class="inner">
      <div class="footer-upp">
        <ul>
          <li><a href="#">TOP</a></li>
          <li><a href="#">米コンについて</a></li>
          <li><a href="#">お悩み相談室</a></li>
          <li><a href="#">制作実績</a></li>
          <li><a href="#">ブログ</a></li>
          <li><a href="#">メンバー</a></li>
          <li><a href="#">よくある質問</a></li>
        </ul>
      </div>
      <div class="footer-low">
        <div class="footer-low-l">
          <ul>
            <span>
              <li class="twitter"><a href="#" class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt=""></a></li>
              <li><a href="#" class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt=""></a></li>
            </span>
            <li class="email"><a href="mailto:yonagofactory@gmail.com">yonagofactory@gmail.com</a></li>
          </ul>
        </div>
        <div class="footer-low-r">
          <a href="#" class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_yonago_orange.png" alt=""></a>
        </div>
      </div>
    </div>
    <div class="copyright">
      <p>© 2022 YONAGO CONTENTS FACRTORY.COM <span>ALL RIGHTS RESERVED 米子コンテンツ工場</spa>
      </p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
  <script src="./js/menu.js" type="text/javascript"></script>
  <?php wp_footer(); ?>
</body>

</html>