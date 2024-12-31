<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package salon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
    <div class="container">
      <div class="header__content">
        <a href="/" class="logo">
          <h1>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Owner’s Salon">
          </h1>
        </a>
        <div class="gnavi">
          <div class="navi">
            <ul class="navi__main js-gnav">
              <li>
                <a href="#profile" class="js-anchor"><span>会社概要</span></a>
              </li>
              <li>
                <a href="#about" class="js-anchor"><span>THE SALONSについて</span></a>
              </li>
              <li>
                <a href="#store" class="js-anchor"><span>店舗</span></a>
              </li>
              <li>
                <a href="#"><span>不動産オーナーの方へ</span></a>
              </li>
            </ul>
          </div>
          <a href="#store" class="button js-anchor">アクセス</a>
        </div>
      </div>
      <p class="is_sp btn_hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </p>
    </div>
  </header>
