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
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

		the_post();
		?>

	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php


		// On the cover page template, output the cover header.
		$cover_header_style   = '';
		$cover_header_classes = '';

		$color_overlay_style   = '';
		$color_overlay_classes = '';

		$image_url = ! post_password_required() ? get_the_post_thumbnail_url( get_the_ID(), 'twentytwenty-fullscreen' ) : '';

		if ( $image_url ) {
			$cover_header_style   = ' style="background-image: url( ' . esc_url( $image_url ) . ' );"';
			$cover_header_classes = ' bg-image';
		}

		// Get the color used for the color overlay.
		$color_overlay_color = get_theme_mod( 'cover_template_overlay_background_color' );
		if ( $color_overlay_color ) {
			$color_overlay_style = ' style="color: ' . esc_attr( $color_overlay_color ) . ';"';
		} else {
			$color_overlay_style = '';
		}

		// Get the fixed background attachment option.
		if ( get_theme_mod( 'cover_template_fixed_background', true ) ) {
			$cover_header_classes .= ' bg-attachment-fixed';
		}

		// Get the opacity of the color overlay.
		$color_overlay_opacity  = get_theme_mod( 'cover_template_overlay_opacity' );
		$color_overlay_opacity  = ( false === $color_overlay_opacity ) ? 80 : $color_overlay_opacity;
		$color_overlay_classes .= ' opacity-' . $color_overlay_opacity;
	?>

		<div class="cover-header <?php echo $cover_header_classes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>"<?php echo $cover_header_style; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- We need to double check this, but for now, we want to pass PHPCS ;) ?>>
			<div class="cover-header-inner-wrapper screen-height">
				<div class="clubitsolutions-title">
					<h1><span>club</span><span>IT</span><span>solutions</span></h1>
				</div>
				<div class="cover-header-inner">
					<div class="cover-color-overlay color-accent<?php echo esc_attr( $color_overlay_classes ); ?>"<?php echo $color_overlay_style; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- We need to double check this, but for now, we want to pass PHPCS ;) ?>></div>

					<header class="entry-header has-text-align-center">
						<div class="entry-header-inner section-inner medium">
							<h2 class="clubitsolutions-subtitle" style="color: orangered; background-color: #0a4b78">Seite wird
								momentan ??berarbeitet!</h2>
							<ul class="clubitsolutions-offer">
								<a href="#individuelle-beratung"><li
										class="clubitsolutions-offer__item">
										<span>Individuelle Beratung</span>
									</li>
								</a>
								<a href="#umsatzsteuer-frei">
									<li class="clubitsolutions-offer__item">
										<span>Umsatzsteuerfrei in 2020</span>
									</li>
								</a>
								<a href="#passende-angebote">
									<li class="clubitsolutions-offer__item">
										<span>Passende Angebote</span>
									</li>
								</a>
								<a href="#kostenloses-erstgespraech">
									<li class="clubitsolutions-offer__item">
										<span>Kostenloses Erstgespr??ch</span>
									</li>
								</a>
							</ul>

							<div class="to-the-content-wrapper">

								<a href="#post-inner" class="to-the-content fill-children-current-color">
									<?php twentytwenty_the_theme_svg( 'arrow-down' ); ?>
									<div class="screen-reader-text"><?php _e( 'Scroll Down', 'twentytwenty' ); ?></div>
								</a><!-- .to-the-content -->

							</div><!-- .to-the-content-wrapper -->

						</div><!-- .entry-header-inner -->
					</header><!-- .entry-header -->

				</div><!-- .cover-header-inner -->
			</div><!-- .cover-header-inner-wrapper -->
		</div><!-- .cover-header -->

		<div class="post-inner post-inner--frontpage" id="post-inner">

			<div class="entry-content">

				<div class="offer alignwide">
					<div id="individuelle-beratung" class="offer__item">
						<svg class="offer__item__icon">
							<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-user"></use>
						</svg>
						<h4>Individuelle Beratung</h4>
						<p>Jeder Kunde ist besonders und hat seine eigenen Anforderungen und Erwartungen. Es ist mir
							??u??erst	wichtig diese zu erkunden und Sie bestm??glich zu beraten, um Ihnen web-basierte
							L??sungen anzubieten, die Ihnen den gr????ten Nutzen bieten</p>
					</div class="offer__item">
					<div id="umsatzsteuer-frei" class="offer__item">
						<svg class="offer__item__icon">
							<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-coin-euro"></use>
						</svg>
						<h4>Umsatzsteuerfrei in 2020</h4>
						<p>F??r das Jahr 2020 greift bei mir die Kleinunternehmerregelung nach ??19 UStG.<br>
						Dies ist besonders interessant f??r Existenzgr??nder, Start-Ups, gemeinn??tzige Vereine,
							Privatpersonen und alle anderen, die keine Vorsteuer geltend machen k??nnen. Sie sparen
							bei mir die Umsatzsteuer von 16%.
						</p>
					</div class="offer__item">
					<div id="passende-angebote" class="offer__item">
						<svg class="offer__item__icon">
							<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-equalizer"></use>
						</svg>
						<h4>Passende Angebote</h4>
						<p>Zur individuellen Beratung braucht es selbstverst??ndlich auch passende Angebote.
							Pauschale Angebote wie in vordefinierten Paketen gibt es bei mir nicht. In die Angebote
							flie??t nur das ein, was auch tats??chlich f??r eine technische Umsetzung relevant und
							gew??nscht ist.
						</p>
					</div class="offer__item">
					<div id="kostenloses-erstgespraech" class="offer__item">
						<svg class="offer__item__icon">
							<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-bubbles"></use>
						</svg>
						<h4>Kostenloses Erstgespr??ch</h4>
						<p>Der erste Kontakt ist bei mir grunds??tzlich kostenlos. Innerhalb Mannheims komme ich auch
							gerne pers??nlich bei Ihnen vorbei, ohne dass Fahrtkosten anfallen.<br> Ein Telefongespr??ch
							oder ein Video-Call ist auch sehr willkommen.
						</p>
					</div class="offer__item">
				</div>

				<?php
					the_content();
				?>

				<div id="wordpress" class="wordpress alignfull">
					<div class="wordpress__title">
						<h4>Webentwicklung mit WordPress</h4>
						<blockquote class="wp-block-quote"><p>37% aller Webseiten im Internet benutzen
								WordPress</p><cite>Quelle: <a href="https://w3techs
								.com/technologies/details/cm-wordpress">w3techs</a></cite></blockquote>
					</div>
					<svg class="wordpress__icon">
						<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-wordpress"></use>
					</svg>
					<div class="wordpress__reason" style="background-image: url(<?php echo
					get_stylesheet_directory_uri(); ?>/img/wpshirt.jpg)">
						<p>WordPress ist das am weitesten verbreitete Content-Management-System und wird
						immer beliebter. Selbst	ohne Programmierkenntnisse lassen sich damit bequem Webseiten
						erstellen. Es ist ein kostenloses Open-Source-Produkt, dass sich sehr einfach mit
						Plugins erweitern l??sst. Die Auswahl an kostenlosen Themes, die das Aussehen der Webseite
						bestimmen, ist gewaltig, so	dass man sich ganz auf den Inhalt konzentrieren kann.<br>
						Selbst Web-Entwickler wie ich, die eine Webseite von Grund auf programmieren k??nnten,
						greifen verst??rkt auf WordPress zur??ck, da es einem viel Arbeit abnimmt. WordPress ist
						keineswegs ein sogenannter Page-Builder, wie man es bspw. aus der Wix-Werbung kennt.<br>
						Programmierer k??nnen eine WordPress-Seite mit Plugins erweitern und das Aussehen selbst
						bestimmen. F??r letzteres gibt es drei Arten dies zu tun:</p>
					</div>
					<div class="wordpress__option wordpress__option--first">
						<h3 class="wordpress__option__title">Theme-Anpassungen</h3>
						<p class="wordpress__option__description">Viele Themes bieten die M??glichkeit mit dem
							sogenannenten "Customizer" nach seinen W??nschen anzupassen. Die Gestaltung des Men??s, das
							Aussehen der Startseite, welche Farben verwendent werden sollen,...<br>
							Oft kann man auch CSS-Code, der f??r die Darstellung der Webseite verantwortlich, in daf??r
							vorgesehene Felder direkt einf??gen, falls man speziell "an ein paar Schrauben drehen" m??chte.
						</p>
					</div>
					<div class="wordpress__option grey-bg wordpress__option--second">
						<h3 class="wordpress__option__title">Child-Theme</h3>
						<p class="wordpress__option__description">Child-Themes sind das m??chtigste Tool, um eine
							bestehendes Theme anzupassen. Hiermit l??sst sich nicht nur das Aussehen beeinflussen,
							sondern auch die Struktur der einzelnen Seiten und ihre Funktionalit??t.<br>
							Meine Webseite, die Sie gerade vor sich sehen, wurde mit solch einem Child-Theme erstellt.
						</p>
					</div>
					<div class="wordpress__option wordpress__option--last">
						<h3 class="wordpress__option__title">Custom-Theme</h3>
						<p class="wordpress__option__description">Ein Custom-Theme ist ein komplett individuelles
							Theme, dass von Grund auf programmiert wird. Es ist die ultimative Form seine
							WordPress-Seite individuell zu gestalten und auch die aufwendigste.<br>
							Dar??berhinaus l??sst sich damit eine WordPress-Seite auf das n??tigste trimmen, um bessere
							Performance zu erzielen. <br>
							Ein weiterer Anwendungsfall w??re, eine bestehende Webseite, die nicht auf WordPress
							basiert, zu adaptieren. Ein Beispiel w??re, wenn man bereits eine Webseite hat und ihr Design behalten
							will, aber dennoch nicht auf die Vorteile von WordPress verzichten m??chte.
						</p>
					</div>

					<?php toTheTop(); ?>

					<div id="wp-benefits" class="wordpress__benefits wordpress__benefits--customer">
						<div class="wordpress__benefits__title">
							<h4>Vorteile f??r Kunden</h4>
							<svg class="wordpress__benefits__icon">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-user-tie"></use>
							</svg>
						</div>
						<p>Der Einsatz von WordPress ist besonders f??r kleine und mittelst??ndige Unternehmen
							interessant. Besonders, wenn man es als reine Internetpr??senz oder Online-Shop nutzen
							m??chte.<br>
							Auch viele gro??e Unternehmen nutzen WordPress f??r ihre Homepage. Eine
							Kombination von WordPress mit bereits bestehenden Web-Applikationen ist n??mlich m??glich.
							Das ist alles eine Frage der Bed??rfnisse des Kunden und der technischen Umsetzung.
<!--							Sollten Sie auf Ihrer Webseite Funktionen abbilden wollen, dann rate ich eher zu-->
<!--							einer sogenannten Web-Applikation. Dabei programmiert man von Grund auf neu und l??sst sie-->
<!--							??ber Schnittstellen mit dem im Unternehmen eingesetzten Unternehmen kommunizieren.-->
						</p>
						<p>
							Vorteile von WordPress f??r Sie als Kunde im folgenden zusammengefasst:
						</p>
						<ul class="wordpress__benefits__list">
							<li class="wordpress__benefits__item">
								<svg class="wordpress__list__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-trophy"></use>
								</svg>
								<div class="wordpress__list__text">
									<h6>Kosteng??nstig</h6>
									<p>WordPress ist kostenlos und ist bereits eine funktionierende Webseite, hat man
										erst einmal installiert. Danach folgen meist nur Anpassungen am Aussehen und
										das Bef??llen mit Inhalt</p>
								</div>
							</li>
							<li class="wordpress__benefits__item">
								<svg class="wordpress__list__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-trophy"></use>
								</svg>
								<div class="wordpress__list__text">
									<h6>Suchmaschinenoptimiert</h6>
									<p>Google liebt WordPress. Kein Wunder, da es so oft eingesetzt wird. Mit
										Plugins l??sst sich das sogar noch weiter optimieren.</p>
								</div>
							</li>
							<li class="wordpress__benefits__item">
								<svg class="wordpress__list__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-trophy"></use>
								</svg>
								<div class="wordpress__list__text">
									<h6>Gro??er Markt an Entwickler</h6>
									<p>Es gibt sehr viele WordPress-Entwickler und Freiberufler mit viel
										Nutzererfahrung. F??r
										allt??gliche Aufgaben gibt es viele Studenten und Einsteiger mit einem
										geringen Stundensatz. F??r technisch anspruchsvollere und komplexe
										L??sungsans??tze gibt es Experten, die fast jeden Kundenwunsch erf??llen k??nnen.</p>
								</div>
							</li>
							<li class="wordpress__benefits__item">
								<svg class="wordpress__list__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-trophy"></use>
								</svg>
								<div class="wordpress__list__text">
									<h6>Mehrere Benutzer</h6>
									<p>Bei Content-Management-System ist es ??blich, dass mehrere Benutzer an einer
										Seite arbeiten und denen kann man bestimmte Rollen geben. Zum Beispiel hat
										der Webentwickler vollen Zugriff, der Kunde eine Redakteur-Rolle und ein
										Mitarbeiter eine Autoren-Rolle.<br>
										Der Webentwickler ist dabei der einzige, der sich um Code, Back-Ups und
										Updates k??mmern kann, damit nicht jemand versehentlich besch??digen kann. Der
										Mitarbeiter kann Inhalte erstellen, jedoch nicht ver??ffentlichen, sondern zur
										??berpr??fung bereitstellen. Der Kunde als Redakteur kann diesen Inhalt nach
										einer Pr??fung dann ver??ffentlichen.
									</p>
								</div>
							</li>
							<li class="wordpress__benefits__item">
								<svg class="wordpress__list__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-trophy"></use>
								</svg>
								<div class="wordpress__list__text">
									<h6>Social-Media-Integration</h6>
									<p>Links zu Facebook, Instagram und Co sind mittlerweile auf fast jeder Seite zu
										sehen und nat??rlich auch in WordPress m??glich. Dar??berhinaus kann man mit
										Plugins daf??r sorgen, dass ein ver??ffentlicher Beitrag in den sozialen
										Netwerk geteilt wird oder dass ein Besucher Inhalte Ihrer Seite in seiner
										Timeline teilen kann.
									</p>
								</div>
							</li>
							<li class="wordpress__benefits__item">
								<svg class="wordpress__list__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-trophy"></use>
								</svg>
								<div class="wordpress__list__text">
									<h6>Plugins und Widgets</h6>
									<p>Viele Funktionen m??ssen nicht extra programmiert werden, sondern werden
										bereits von vielen kostenlosen und kostenpflichtigen Plugins und Widgets
										abgedeckt. Das spart viele Kosten. WordPress hat derzeit eine Auswahl von 56
										.992 Plugins in seinem Download-Portal. <small><em>Stand: 17. Aug
												2020</em></small></p>
									<p style="padding-top: .5rem">
										<a href="https://de.wordpress.org/plugins/" target="_blank">Zu den WordPress-Plugins</a>
									</p>
								</div>
							</li>
							<li class="wordpress__benefits__item">
								<svg class="wordpress__list__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-trophy"></use>
								</svg>
								<div class="wordpress__list__text">
									<h6>Content-Management</h6>
									<p>Texte, Bilder und andere Inhalte k??nnen einfach von Benutzern erstellt und
										ge??ndert werden.<br> Bspw. ist eine ??nderung der ??ffnungszeiten binnen
										Minuten angepasst, ohne dass man einen Entwickler kontaktieren muss.</p>
								</div>
							</li>
							<li class="wordpress__benefits__item">
								<svg class="wordpress__list__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-trophy"></use>
								</svg>
								<div class="wordpress__list__text">
									<h6>Online-Shop m??glich</h6>
									<p>Obwohl WordPress urspr??nglich als Blog-System entwickelt wurde, hat es
										mittlerweile auch einen sehr gro??en Anteil im E-Commerce. Ein Web-Shop l??sst
										sich einfach integrieren.
									</p>
								</div>
							</li>
						</ul>
					</div>
					<div class="wordpress__benefits wordpress__benefits--developer">
						<div class="wordpress__benefits__title">
							<h4>Vorteile f??r Entwickler</h4>
							<svg class="wordpress__benefits__icon">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
								.svg#icon-embed2"></use>
							</svg>
						</div>
						<p>
							Auch wenn Entwickler eine Webseite von Grund auf programmieren k??nnten, w??rde ich dennoch
							den Einsatz zu WordPress raten. <em>Don't repeat yourself!</em> Top-Entwickler aus
							allerwelt schreiben Code f??r st??ndig wiederkehrende Aufgaben. Man muss
							nicht immer alles selbst tun.
						</p>
						<p>
						<!--							Besonders Entwickler am Anfang ihrer Karriere sollten zu-->
<!--							WordPress greifen, da viele Dinge, die man ??ber die Jahre erst lernt, bereits in-->
<!--							WordPress implementiert sind.<br>-->
<!--							Besonders in Sachen Web-Design ist man nach Ausbildung und Studium nicht ausreichend-->
<!--							vorbereitet. Andersherum wissen Web-Designer anfangs zwar eine Webseite zu gestalten, in-->
<!--							der Regel jedoch nicht diese zu implementieren. Mit WordPress l??sst sich der Mangel an-->
<!--							Erfahrung deutlich kompensieren.<br>-->
<!--							Taucht man mit den Jahren immer tiefer in WordPress ein, lernt man-->
<!--							sehr viel ??ber Design und Programmierung. -->
						Wer sich gut mit HTML5, CSS, JavaScript und PHP auskennt und mehrj??hrige
							Programmiererfahrung hat, dem stehen nahe zu unbegrenzte M??glichkeiten in WordPress zur
							Verf??gung. Hier ein paar Beispiele, warum man WordPress-Entwickler werden m??chte:
						</p>
						<ul class="wordpress__benefits__list">
							<li class="wordpress__benefits__item">
								<svg class="wordpress__list__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-trophy"></use>
								</svg>
								<div class="wordpress__list__text">
									<h6>Sehr ausf??hrliche Dokumentation</h6>
									<p>Die <a href="https://developer.wordpress.org/"
											  target="_blank">Dokumentation</a> ist sehr ausf??hrlich und verst??ndlich
										. Dar??berhinaus gibt es zahlreiche Youtube-Videos, Tutorials, Blog-Artikel und
										B??cher.
									</p>
								</div>
							</li>
							<li class="wordpress__benefits__item">
								<svg class="wordpress__list__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-trophy"></use>
								</svg>
								<div class="wordpress__list__text">
									<h6>Open-Source</h6>
									<p>WordPress ist Open-Source. Sehr viele Entwickler arbeiten st??ndig daran
										Sicherheitsl??cken zu schlie??en und WordPress um Funktionen zu erweitern.
										Auch Themes und Plugins sind quelloffen. Das ist eine spitzen Gelegenheit in
										Code einzutauchen, der von anderen geschrieben wurde.
									</p>
								</div>
							</li>
							<li class="wordpress__benefits__item">
								<svg class="wordpress__list__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-trophy"></use>
								</svg>
								<div class="wordpress__list__text">
									<h6>SEO-freundlich</h6>
									<p>XML-Sitemaps werden optimal f??r Google erstellt und es gibt viele Plugins,
										die eine gro??e Hilfe sind. Man kann die Meta-Informationen direkt beim
										erstellen von Content bearbeiten und es gibt eine gute M??glichkeit f??r das
										Tracking, wie Inhalte performen.</p>
								</div>
							</li>
							<li class="wordpress__benefits__item">
								<svg class="wordpress__list__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-trophy"></use>
								</svg>
								<div class="wordpress__list__text">
									<h6>Flache Lernkurve</h6>
									<p>Der Einstieg in WordPress ist f??r Webentwickler sehr einfach und fast
										selbsterkl??rend. Anschlie??end kann man sich an erste Child-Themes und
										Plugins heranwagen. Das meistern von Custom-Themes und von eigenen
										Gutenberg-Blocks
										machen einen dann zum echten WordPress-Entwickler.</p>
								</div>
							</li>
							<li class="wordpress__benefits__item">
								<svg class="wordpress__list__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-trophy"></use>
								</svg>
								<div class="wordpress__list__text">
									<h6>Riesige Entwickler-Community</h6>
									<p>Es gibt weltweite Treffen von WordPress-Entwicklern und WordPress-Nutzern,
										die sich austauschen, weiterbilden und Vortr??ge halten. Es gibt Foren,
										Facebook-Gruppen, Discord-Channels,... die Community ist freundlich und
										hilfsbereit.</p>
								</div>
							</li>
							<li class="wordpress__benefits__item">
								<svg class="wordpress__list__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-trophy"></use>
								</svg>
								<div class="wordpress__list__text">
									<h6>Einfache Installation</h6>
									<p>Web-Server aufsetzen, Datenbank einrichten, WordPress herunterladen,
										konfigurieren und fertig ist die Installation. Das geht oft innerhalb weniger
										Minuten. Sowohl auf der Kommandozeile auf dem eigenen Server als auch bei den
										meisten Web-Panels vieler Hosting-Anbieter.
									</p>
								</div>
							</li>
							<li class="wordpress__benefits__item">
								<svg class="wordpress__list__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-trophy"></use>
								</svg>
								<div class="wordpress__list__text">
									<h6>Lokale Entwicklung</h6>
									<p>Man kann alles lokal ausprobieren. Am liebsten in der eigenen
										Entwicklungsumgebung oder mit n??tzlichen Tools wie Docker, Local by Flywheel,
										etc.
									</p>
								</div>
							</li>
							<li class="wordpress__benefits__item">
								<svg class="wordpress__list__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-trophy"></use>
								</svg>
								<div class="wordpress__list__text">
									<h6>Schnelles Deployment</h6>
									<p>CI/CD ist f??r WordPress kein Fremdwort. Man kann seinen Entwicklungsprozess
										so einrichten, dass mit einem Git-Push die ??nderungen sofort in der
										Live-Umgebung umgesetzt werden. Oder man richtig sogar noch eine
										Staging-Ebene dazwischen ein.</p>
								</div>
							</li>
							<li class="wordpress__benefits__item">
								<svg class="wordpress__list__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprite
							.svg#icon-trophy"></use>
								</svg>
								<div class="wordpress__list__text">
									<h6>Custom Post-Types und Custom-Fields</h6>
									<p>Man ist nicht auf die vordefinierten Felder von WordPress beschr??nkt. Als
										lassen sich Felder hinzuf??gen. Sogar eigene Custom-Post-Types, dessen
										Datenstruktur individuell abbildbar ist.<br>
										Man kann WordPress sogar f??r die Aufbewahrung und Verwaltung von Daten aller
										Art benutzen. Diese sind sogar ??ber eine REST-Schnittstelle abrufbar, welche
										sich auch wiederum individualisieren l??sst.
									</p>
								</div>
							</li>
						</ul>
					</div>

					<?php toTheTop(); ?>

					<?php
						portfolio();
					?>
				</div>
			</div><!-- .entry-content -->
			<?php
				edit_post_link();
			?>

		</div><!-- .post-inner -->

	</article><!-- .post -->

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();

