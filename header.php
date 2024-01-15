<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package karenclinic
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
<div class="mobilMenuOverlay"></div>
<div class="mobileMenuContainer">
	
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'container_class' => 'mobileMenu',
			)
		);
	?>
	<svg class="closeMenu" width="20" height="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M15.1 3.1 12.9.9 8 5.9 3.1.9.9 3.1l5 4.9-5 4.9 2.2 2.2 4.9-5 4.9 5 2.2-2.2-5-4.9z"/></svg>
</div>
<a class="generalButton generalButtonDark generalButtonDarkMobile" href="#">دریافت نوبت</a>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<div class="clkarenTopHeaderContainer">
	<div class="clkarenTopHeader mainView">
		<div class="generalFlexPart topHeaderLocationPart">
			<a href="#">
				<span><svg height="20" width="20" fill="#fff" stroke="#fff" stroke-width="10px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 390 380" xml:space="preserve"><path d="M184.277 0c-71.683 0-130 58.317-130 130 0 87.26 119.188 229.855 124.263 235.883a7.498 7.498 0 0 0 5.705 2.67h.032a7.5 7.5 0 0 0 5.696-2.621c5.075-5.926 124.304-146.165 124.304-235.932-.001-71.683-58.317-130-130-130zm.045 349.251C160.385 319.48 69.277 201.453 69.277 130c0-63.411 51.589-115 115-115s115 51.589 115 115c-.001 73.49-90.95 189.829-114.955 219.251z"/><path d="M184.277 72.293c-30.476 0-55.269 24.793-55.269 55.269s24.793 55.269 55.269 55.269 55.269-24.793 55.269-55.269-24.793-55.269-55.269-55.269zm0 95.537c-22.204 0-40.269-18.064-40.269-40.269s18.064-40.269 40.269-40.269 40.269 18.064 40.269 40.269-18.066 40.269-40.269 40.269z"/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg></span>
				<span>تهران، خیابان فلسطین، بین خیابان انقلاب و کوچه نایبی، پلاک 328، طبقه سوم</span>
			</a>
		</div>
		<div class="generalFlexPart topHeaderIconPart">
			<a href="#">
				<svg width="18" height="18" fill="#fff" viewBox="0 0 0.84 0.84" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="M.529.186h.066V.075A.914.914 0 0 0 .499.07c-.095 0-.16.058-.16.165v.092H.231v.125h.107V.77h.129V.451h.107L.59.326H.467V.247c0-.037.01-.061.062-.061Z"/></svg>
			</a>
			<a href="#">
				<svg width="18" height="18" fill="#fff" viewBox="0 0 0.84 0.84" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="M.77.203a.297.297 0 0 1-.083.022A.145.145 0 0 0 .75.146a.287.287 0 0 1-.091.035.143.143 0 0 0-.245.131.407.407 0 0 1-.296-.15.146.146 0 0 0-.019.072.143.143 0 0 0 .064.119.142.142 0 0 1-.065-.018v.002a.143.143 0 0 0 .116.14.138.138 0 0 1-.039.006.172.172 0 0 1-.027-.002.144.144 0 0 0 .134.099.288.288 0 0 1-.177.062A.278.278 0 0 1 .07.64a.405.405 0 0 0 .22.065A.406.406 0 0 0 .7.296V.277A.295.295 0 0 0 .77.203Z"/></svg>
			</a>
			<a href="#">
				<svg width="18" height="18" fill="#fff" viewBox="-0.07 -0.175 0.84 0.84" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-youtube"><path d="M.553.001H.145A.144.144 0 0 0 0 .144v.202c0 .079.065.143.145.143h.408c.08 0 .145-.064.145-.143V.144A.144.144 0 0 0 .553.001zM.455.255l-.191.09A.008.008 0 0 1 .253.338V.152A.008.008 0 0 1 .264.145l.191.096a.008.008 0 0 1 0 .014z"/></svg>
			</a>
			<a href="#">
				<svg width="18" height="18" fill="#fff" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M349.33 69.33a93.62 93.62 0 0 1 93.34 93.34v186.66a93.62 93.62 0 0 1-93.34 93.34H162.67a93.62 93.62 0 0 1-93.34-93.34V162.67a93.62 93.62 0 0 1 93.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32Z"></path><path d="M377.33 162.67a28 28 0 1 1 28-28 27.94 27.94 0 0 1-28 28ZM256 181.33A74.67 74.67 0 1 1 181.33 256 74.75 74.75 0 0 1 256 181.33m0-37.33a112 112 0 1 0 112 112 112 112 0 0 0-112-112Z"></path></svg>
			</a>
		</div>
	</div>
</div>
<div class="mainDesctopHeaderContainer">
	<div class="mainDesctopHeader mainView">
		<a href="#" class="desctopLogoPart">
			<svg id="a" xmlns="http://www.w3.org/2000/svg"  width="100" height="80" viewBox="0 0 100 80"><defs><style>.c{fill:#e3b077}.d{fill:#18162b}</style></defs><path d="M49.36 14.68h15.36v8.76h2.59l11.57-8.76h19.43L73.67 36.47 100 65.33H80.59L64.54 48.96v16.37H49.35V14.68Z" style="fill:#fff"/><path class="d" d="M77.74 40.94h-8.72l-1.69-4.24-6.08 11.16-4.39-11.48-2.4 4.39h-5.1v24.55h15.19V48.95L80.6 65.32h19.41L77.75 40.94Z"/><path class="c" d="m73.67 36.47 24.64-21.79H78.88l-11.57 8.76h-2.59v-8.76H49.36v23.74h3.62l4.22-7.43 4.39 11.31 5.91-11.16 3.21 7.43h4.88l-1.93-2.1Z"/><path class="d" d="M21.27 27.49h3.6v5.93c0 2.29-.58 4.09-1.71 5.4s-3.17 2.19-5.63 2.19h-1.09v-3.62h1.09c1.35 0 2.29-.3 2.87-.9s.88-1.63.88-3.06V27.5Zm21.53 1.93c.25.58.39 1.19.41 1.82v.09c0 .45-.1.9-.28 1.31-.17.39-.4.74-.69 1.05-.42.41-.93.73-1.48.94-.97.34-1.99.5-3.02.47h-6.23c-.76 0-1.51-.14-2.21-.43-.48-.2-.92-.5-1.29-.88-.36-.37-.66-.81-.86-1.29-.3-.69-.45-1.43-.43-2.19v-11.1h3.6v11.1c0 .45.09.75.24.92s.47.24.94.24h6.23c1.16 0 1.82-.04 2.06-.17l-.13-.3-.28-.47c-.38-.56-.81-1.08-1.29-1.56-1.29-1.37-2.38-2.49-3.32-3.41l-.47-.43-.32-.3-.11-.11-.06-.06h-.09l.43-3.02 9.64-4.39 1.5 3.3-7.22 3.21c.62.62 1.52 1.54 2.66 2.74s1.65 2.01 2.06 2.91Zm-34.32-.47-2.29-2.34 2.29-2.31 2.34 2.34-2.34 2.31Z"/><path class="d" d="M12.28 27.49h3.6v6.86c0 1.95-.47 3.47-1.44 4.56-.63.72-1.43 1.27-2.34 1.59-1.05.36-2.15.54-3.26.51H7.19c-1.18.02-2.35-.22-3.43-.71a6.195 6.195 0 0 1-2.7-2.29 7.432 7.432 0 0 1-1.04-3.9c0-.17.02-.36.02-.54.09-1.71.62-3.62 1.59-5.7l3.28 1.5c-.77 1.67-1.2 3.13-1.26 4.37v.39c-.03.68.14 1.35.49 1.93.35.54.88.93 1.5 1.09.27.09.55.15.84.19l.73.04h1.65c1.37 0 2.31-.26 2.81-.77s.62-1.18.62-2.27v-6.86Z"/><path class="c" d="M44.6 52.15c-.14-.56-.37-1.09-.69-1.56-.86-1.26-2.29-1.89-4.26-1.89-1.1.01-2.18.29-3.15.81l-.77.45.04-.39v-6.71h-3.6v11.08l-.75 1.2h-8.63c-.51 0-.88-.13-1.07-.36-.17-.29-.26-.62-.26-.96v-2.68h-3.62v3.41c0 .47-.26.73-.79.73h-13c-.2 0-.39-.11-.47-.3-.05-.11-.08-.24-.09-.36 0-.04.02-.11.02-.17.18-1.11.43-2.2.75-3.28l-3.47-.99s-.03.09-.04.13l-.06.26c-.09.28-.15.56-.21.84-.19.64-.33 1.29-.41 1.95-.04.32-.06.64-.06.96 0 .3.02.58.04.84.08.69.32 1.35.71 1.93.58.9 1.53 1.51 2.59 1.65.58.11 1.91.15 3.96.15h6.26c1.89 0 3.21-.04 3.94-.13.84-.06 1.67-.31 2.4-.73.6.49 1.59.73 2.89.73h17.18c.24 0 .49-.04.73-.09.62-.1 1.21-.3 1.76-.6 1.52-.88 2.29-2.4 2.29-4.56 0-.45-.06-.91-.15-1.35Zm-3.23 1.95c-.03.19-.1.36-.21.51-.3.36-.86.54-1.69.54h-4.24c.19-.22.4-.43.62-.62.39-.34.77-.66 1.18-.96 1.14-.84 2.08-1.26 2.83-1.26s1.56.41 1.56 1.22c0 .19-.01.39-.04.58Zm-30.33 6.17 2.34 2.34-2.31 2.31-2.31-2.34 2.29-2.31Z"/></svg>
		</a>
		<?php
			wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'container_class' => 'mainMenu',
			)
			);
		?>
		<a class="menuMobile" href="#">
			<svg width="35" height="35" viewBox="0 0 0.6 0.6" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M.525.425a.025.025 0 0 1 0 .05h-.45a.025.025 0 0 1 0-.05h.45Zm0-.15a.025.025 0 0 1 0 .05h-.45a.025.025 0 0 1 0-.05h.45Zm0-.15a.025.025 0 0 1 0 .05h-.45a.025.025 0 1 1 0-.05h.45Z"/></svg>
		</a>
		<a class="generalButton generalButtonDark" href="#">دریافت نوبت</a>
	</div>
</div>



