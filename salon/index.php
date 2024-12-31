<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package salon
 */

get_header();
?>

	<main id="primary" class="site-main">

	<div class="wrapper">
    <div class="kv">
      <div class="kv__img kv__img--01 ">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_kv_01.png" alt="">
      </div>
      <div class="kv__txt">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/txt_concept.svg" alt="">
        <p class="txt-01">月22万円から理想の自分の美容室を<br>自由に。おしゃれに。高給に。理想の美容室を。</p>
        <p class="txt-02">Owner’s salonは<span>月額22万円</span>から理想の自分のオーナー美容室を持つことができるサービスです。自由に、おしゃれに、最高の環境で美容師として働けます。
        </p>
      </div>
      <div class="kv__img kv__img--02 is_pc ">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_kv_02.png" alt="">
      </div>
    </div>
    <section class="sec_01">
      <div class="container">
        <h2 class="title_h2">Owner’s Salonとは</h2>
        <p class="txt tac">自分の理想のお店を22万円で持つことができるサービスです。<br>
          14-15㎡で十分な広さで開設許可書及び登記が可能な美容室です。<br><br>
          シェアサロンではないため、<strong>24時間</strong>使用可能で壁紙やインテリアなど自由にデザインできます。<br><br>
          以下の設備が完備されているため、すぐに美容師業を始めることができ、大幅な収入UPが可能です。
        </p>

        <h3 class="title_h3">定額料金に含まれる提供設備</h3>
        <ul class="list-items">
          <li class="items">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_equipment_01.gif" alt="">
            </figure>
            <p>高級フルフラットバックシャンプー</p>
          </li>
          <li class="items">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_equipment_02.gif" alt="">
            </figure>
            <p>セットチェア</p>
          </li>
          <li class="items">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_equipment_03.gif" alt="">
            </figure>
            <p>ミラー</p>
          </li>
          <li class="items">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_equipment_04.gif" alt="">
            </figure>
            <p>毎月の光熱費電気・ガス・水道</p>
          </li>
          <li class="items">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_equipment_05.gif" alt="">
            </figure>
            <p>照明器具</p>
          </li>
          <li class="items">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_equipment_06.gif" alt="">
            </figure>
            <p>シンク</p>
          </li>
          <li class="items">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_equipment_07.gif" alt="">
            </figure>
            <p>レンタルタオル<br>（付き300枚まで）</p>
          </li>
          <li class="items">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_equipment_08.gif" alt="">
            </figure>
            <p>Wi-Fi完備</p>
          </li>
        </ul>
      </div>
    </section>
    <ul class="list-img">
      <li class="items">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_top_01.jpg" alt="">
      </li>
      <li class="items">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_top_02.jpg" alt="">
      </li>
      <li class="items">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_top_03.jpg" alt="">
      </li>
      <li class="items">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_top_04.jpg" alt="">
      </li>
    </ul>
    <section class="sec_02">
      <div class="container">
        <h2 class="title_h2">Owner’s Salon <br class="is_sp">の利点</h2>
        <ul class="list-benefits">
          <li class="items">
            <p class="num"></p>
            <h3>収入UP</h3>
            <p>自身で独立するよりも、シェアサロンで開業するよりもコストを低く抑えることができ、収入が高くなります。</p>
          </li>
          <li class="items">
            <p class="num"></p>
            <h3>内装自由・おしゃれに</h3>
            <p>内装を自分好みに変えることができるので、理想の美容室を手に入れることができる。</p>
          </li>
          <li class="items">
            <p class="num"></p>
            <h3>ワークライフバランス</h3>
            <p>シェアサロンとは違い、自身で働きたい時間に働くことができるため、ワークライフバランスの向上につながります。</p>
          </li>
          <li class="items">
            <p class="num"></p>
            <h3>ホットペッパーに掲載可能</h3>
            <p>シェアサロンとは違い、開設許可書及び登記ができるため、ホットペッパーに掲載が可能です。ホットペッパーからの集客を期待できます。</p>
          </li>
          <li class="items">
            <p class="num"></p>
            <h3>コストダウン</h3>
            <p>通常よりも安く仕入れることができるため、日々の材料費を抑えることができます。</p>
          </li>
          <li class="items">
            <p class="num"></p>
            <h3>コンサルティング費用無料</h3>
            <p>業界30年のベテラン経営者が、経営についてや集客など様々な問題を解決いたします。</p>
          </li>
        </ul>
      </div>
    </section>
    <section class="sec_03">
      <div class="container">
        <h2 class="title_h2">Who MATCHES</h2>
        <ul class="list-mess">
          <li class="items">自分の思い通りにできる理想の美容<br>室が欲しい。</li>
          <li class="items">開業する際のリスクを極力避けたい</li>
          <li class="items">自分の腕を信じて、自分自身の力で<br>挑戦してみたい。</li>
          <li class="items">毎月の売り上げの100％を自分自身で<br>得たい。</li>
          <li class="items">自由な好きな時間に働き始め、自由に<br>自分の働く環境を作りたい。</li>
          <li class="items">お客さんのためにも、落ち着ける空間<br>でマンツーマンの接客を行いたい。</li>
          <li class="items">初期費用を抑え、小さく始めていきたい。</li>
          <li class="items">おしゃれな空間で自分の世界観を表現<br>できるサロンを安価に手に入れたい。</li>
        </ul>
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_top_05.svg" alt="" class="is_pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_top_05_sp.svg" alt="" class="is_sp">
        </figure>
      </div>
    </section>
    <section class="sec_04" id="about">
      <h2 class="title_h2">Owner’s Salon <br class="is_sp">について</h2>
      <div class="block-group">
        <div class="block">
          <div class="block__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_top_06.png" alt="" class="is_pc">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_top_06_sp.png" alt="" class="is_sp">
          </div>
          <div class="block__txt">
            <p class="num">01</p>
            <p class="txt">自身で独立するよりも、シェアサロンで開業するよりもコストを低く抑えることができ、収入が高くなります。</p>
          </div>
        </div>
        <div class="block">
          <div class="block__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_top_07.png" alt="" class="is_pc">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_top_07_sp.png" alt="" class="is_sp">
          </div>
          <div class="block__txt">
            <p class="num">02</p>
            <p class="txt">内装を自分好みに変えることができるので、理想の美容室を手に入れることができる。</p>
          </div>
        </div>
        <div class="block">
          <div class="block__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_top_08.png" alt="" class="is_pc">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_top_08_sp.png" alt="" class="is_sp">
          </div>
          <div class="block__txt">
            <p class="num">03</p>
            <p class="txt">シェアサロンとは違い、自身で働きたい時間に働くことができるため、ワークライフバランスの向上につながる。<br>また、ホットペッパーに登録することができる。</p>
          </div>
        </div>
      </div>
    </section>
    <section class="sec_05">
      <div class="container">
        <h2 class="title_h2">Owner’s salon<br class="is_sp">の価格</h2>
        <div class="price">
          <ul>
            <li>
              <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_hairdresser.svg" alt=""></figure>
              <p class="price__txt">美容師は</p>
              <p class="price__txt price__txt--large">22<span>万</span></p>
            </li>
            <li>
              <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_eye.svg" alt=""></figure>
              <p class="price__txt">アイリストは</p>
              <p class="price__txt price__txt--large">20<span>万</span></p>
            </li>
            <li>
              <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_nail.svg" alt=""></figure>
              <p class="price__txt">ネイルリストは</p>
              <p class="price__txt price__txt--large">18<span>万</span></p>
            </li>
          </ul>
          <p class="txt txt--small tac">＊注意点: ＊契約時に、家賃の二ヶ月・初月賃料1ヶ月分の合計三ヶ月分必要。</p>
        </div>
      </div>
    </section>
    <section class="sec_06" id="store">
      <div class="container">
        <h2 class="title_h2">店舗一覧</h2>
        <div class="store">
          <div class="map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.351613304339!2d133.73732357626525!3d34.671074284801016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355154589ca4f587%3A0xf53ffc346ccf4096!2s2-ch%C5%8Dme-17-1%20Ekimae%2C%20Soja%2C%20Okayama%20719-1136%2C%20Japan!5e0!3m2!1sen!2s!4v1694956083814!5m2!1sen!2s"
              width="100%" height="378" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="map__details">
              <h3>Owner's Salon 町田店</h3>
              <p>〒719-1136 岡山県総社市駅前2-17-1<br>
                TEL : 0866-92-3661 / FAX : 0866-92-3662</p>
              <a class="button" href="https://maps.app.goo.gl/JVBB4a1knLqVMSPZ6" target="_blank">Google Map</a>
            </div>
          </div>
          <div class="thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_top_09.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="sec_07">
      <div class="container">
        <h2 class="title_h2">お問合せ欄</h2>
        <div class="inquiry">
          <div class="inquiry__img is_pc">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_top_10.png" alt="">
          </div>
          <div class="inquiry__txt">
            <h3>フォームを送信する</h3>
            <form action="" class="form">
              <label for="name">名前
                <input type="text" name="name" id="name" placeholder="入力テキスト *" required>
              </label>
              <label for="phone">電話番号
                <input type="text" name="phone" id="phone" placeholder="入力テキスト *" required>
              </label>
              <label for="mail">メールアドレス
                <input type="text" name="mail" id="mail" placeholder="入力テキスト">
              </label>
              <label for="message">問い合わせ内容
                <textarea name="message" id="message" cols="30" rows="4" placeholder="入力テキスト"></textarea>
              </label>
              <label for="checkbox" class="checkbox-style">
                <input type="checkbox" name="" id="checkbox" class="checkbox-input" />
                <div class="checkbox-box">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd" />
                  </svg>
                </div>
                <label for="checkbox" class="checkbox-label">プライバシーポリシーに同意する<br><a
                    href="#">プライバシーポリシー</a>をご覧ください。</label>
              </label>
              <button type="submit" class="button">提出する</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="sec_08" id="profile">
      <div class="container">
        <h2 class="title_h2">株式会社Ownwer's Salon概要</h2>
        <div class="overview">
          <div class="overview__txt">
            <table>
              <tr>
                <td>企業名:</td>
                <td>Owener's Salon</td>
              </tr>
              <tr>
                <td>創業日:</td>
                <td>令和5年6月5日</td>
              </tr>
              <tr>
                <td>所在地:</td>
                <td>東京都港区虎ノ門</td>
              </tr>
              <tr>
                <td>業種:</td>
                <td>美容業,不動産</td>
              </tr>
              <tr>
                <td>事業内容:</td>
                <td>美容室の運営・美容サービスの提供・不動産業務</td>
              </tr>
              <tr>
                <td>資本金:</td>
                <td>16,000,000円</td>
              </tr>
              <tr>
                <td>営業時間:</td>
                <td>平日 8:00~17:00</td>
              </tr>
              <tr>
                <td>休業日:</td>
                <td>土日</td>
              </tr>
            </table>
          </div>
          <div class="overview__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_top_11.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="sec_09">
      <div class="container">
        <div class="vision">
          <div class="vision__txt">
            <h2>Vision</h2>
            <h3>美容師は成功していい</h3>
            <p>この一心でこの会社を立ち上げました。<br>
              美容業界に20年ほど身を置き、「自分の店舗を持つことへのハードル」を痛いほど実感してきました。才能のあるメンバーが自分のお店を持たずに機会を逃してしまうことや金銭的・キャリアの面でのリスクが大きいが為に独立できないでいることなど、さまざま美容業界には問題があります。より自分の時間を確保し、より理想な自分の店をもち、より人生を幸せに歩んで欲しいとサロンメンバーに対して思っていました。<br><br>
              このサービスにより、「時間的自由」「金銭的自由」「お客様に使える自由」を得ることができます。才能ある優秀な若い方により成功し、明るい未来を獲得を共につくっていきましょう。</p>
          </div>
          <div class="vision__details">
            <h2>役員紹介</h2>
            <div class="introduction">
              <p>代表取締役<span>吉田大亮</span></p>
              <p>CEO<span>金子 養三</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="float-social">
      <ul>
        <ul>
          <li><a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_fb_fixed.png" alt="facebook" class="is_pc">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_fb_fixed_sp.png" alt="facebook" class="is_sp">
            </a></li>
          <li><a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_it_fixed.png" alt="instagram" class="is_pc">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_it_fixed_sp.png" alt="instagram" class="is_sp">
            </a></li>
          <li><a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_tw_fixed.png" alt="twitter" class="is_pc">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_tw_fixed_sp.png" alt="twitter" class="is_sp">
            </a></li>
          <li><a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_tt_fixed.png" alt="tiktok" class="is_pc">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_tt_fixed_sp.png" alt="tiktok" class="is_sp">
            </a></li>
        </ul>
      </ul>
    </div>
  </div>
	</main><!-- #main -->

<?php
get_footer();