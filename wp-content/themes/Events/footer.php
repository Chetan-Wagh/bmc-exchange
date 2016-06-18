<?php
/**
 * The template for displaying the footer
 *
 */
 
?>
				<?php if (is_active_sidebar('bottom1')) : ?>
				<?php do_action('events_before_bottom1'); ?>
				<div id="gk-bottom1" role="complementary">
					<div class="widget-area gk-3-cols" data-cols="<?php echo GK_Utils::count_sidebar_widgets('bottom1', 3); ?>">
						<?php dynamic_sidebar('bottom1'); ?>
					</div>
				</div>
				<?php do_action('events_after_bottom1'); ?>
				<?php endif; ?>
				
				<?php if (is_active_sidebar('bottom2')) : ?>
				<?php do_action('events_before_bottom2'); ?>
				<div id="gk-bottom2" role="complementary">
					<div class="widget-area gk-3-cols" data-cols="<?php echo GK_Utils::count_sidebar_widgets('bottom2', 3); ?>">
						<?php dynamic_sidebar('bottom2'); ?>
					</div>
				</div>
				<?php do_action('events_after_bottom2'); ?>
				<?php endif; ?>
				
				<?php if (is_active_sidebar('bottom3')) : ?>
				<?php do_action('events_before_bottom3'); ?>
				<div id="gk-bottom3" role="complementary">
					<div class="widget-area gk-3-cols" data-cols="<?php echo GK_Utils::count_sidebar_widgets('bottom3', 3); ?>">
						<?php dynamic_sidebar('bottom3'); ?>
					</div>
				</div>
				<?php do_action('events_after_bottom3'); ?>
				<?php endif; ?>
			</div><!-- #main -->
		</div><!-- #page -->
	</div><!-- #gk-bg -->	

	<?php do_action('events_before_footer'); ?>
	<footer id="gk-footer" role="contentinfo">
		<?php if ( is_active_sidebar( 'bottom' ) ) : ?>
		<div id="gk-bottom" role="complementary">
			<div class="widget-area">
				<?php dynamic_sidebar( 'bottom' ); ?>
			</div>
		</div>
		<?php endif; ?>
		
		<div id="gk-footer-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu', 'fallback_cb' => false ) ); ?> 
		</div>
		
		<div id="gk-copyrights">
			<p class="copyright"><?php 
				if (is_page( 'beijing-27-oct' )) { } else { echo get_theme_mod('events_copyright_text', '');}
			 ?></p>
		</div>
		
		<div id="gk-social">
			<?php //wp_nav_menu( array( 'theme_location' => 'social', 'menu_class' => 'social-menu', 'fallback_cb' => false ) ); ?>
<!-- new 2-col footer -->
		       <div class="layout-inner-wrap">
		<div class="footer-logo">
				<a href="http://www.bmc.com/" onclick="s_objectID=&quot;http://www.bmc.com/_3&quot;;return this.s_oc?this.s_oc(e):true">BMC</a>
		</div>
<?php if (!is_page_template('template.event.php')) {} else { 
		if (is_page('beijing-27-oct')) {
			echo '<p class="email-permission"><a href="http://www.bmcexchange.com/personal-data-collection-chinese/" target="_blank">个人资料收集</a></p><p class="email-permission">*这表示您同意 BMC Software, Inc. 公司向您发送电子邮件。</p>'; 
		} elseif (is_page('paris-18-nov')){
			echo '<p class="email-permission"><a href="http://www.bmcexchange.com/collecte-de-donnees-personnelles/" target="_blank">Collecte de Données Personnelles</a></p><p class="email-permission">*Vous autorisez BMC Software Inc. à vous envoyer des courriers électroniques.</p>'; 
		} elseif (is_page('saopaulo-10-nov')){
			echo '<p class="email-permission"><a href="http://www.bmcexchange.com/coleta-de-dados-pessoais/" target="_blank">Coleta de Dados Pessoais</a></p><p class="email-permission">*Você autorizará a BMC Software, Inc. a enviar e-mails a você.</p>'; 
		} elseif (is_page('bonn-16-17-nov')){
			echo '<p class="email-permission"><a href="http://www.bmcexchange.com/sammlung-von-personenbezogenen-daten/" target="_blank">Sammlung von personenbezogenen Daten</a></p><p class="email-permission">*Sie erlauben hiermit BMC Software, Inc., Ihnen E-Mails zu schicken.</p>'; 	
		}else{
			echo '<p class="email-permission"><a href="http://www.bmcexchange.com/personal-data-collection/" target="_blank">Personal Data Collection</a></p><p class="email-permission">*You are giving BMC Software, Inc. permission to send you email.</p>';
		}
}
?>	
<?php if( is_page( 'beijing-27-oct') || is_page('bmc-exchange-2015-beijing') || is_page ('beijing-27-oct/tracks') || is_page ('personal-data-collection-chinese')  || is_page ('beijing-27-oct/agenda/') ) : ?>
			
			<p class="legal-copyright">© 版权所有 2005-2015 BMC Software, Inc。使用此站点即表示您接受 BMC 的<a href="http://www.bmcsoftware.cn/legal/terms-of-use.html" onclick="s_objectID=&quot;http://www.bmcsoftware.cn/legal/terms-of-use.html_1&quot;;return this.s_oc?this.s_oc(e):true" target="_blank">使用条款</a>、<a href="http://www.bmcsoftware.cn/legal/privacy-policy.html" onclick="s_objectID=&quot;http://www.bmcsoftware.cn/legal/privacy-policy.html_1&quot;;return this.s_oc?this.s_oc(e):true" target="_blank">隐私权政策</a>和 <a href="http://www.bmcsoftware.cn/legal/cookie-notice.html" onclick="s_objectID=&quot;http://www.bmcsoftware.cn/legal/cookie-notice.html_1&quot;;return this.s_oc?this.s_oc(e):true" target="_blank">Cookie 通知</a>。 BMC、BMC Software、博思软件（中国）有限公司、<br> BMC 徽标及其他 BMC 商标是 BMC Software, Inc. 在美国 和/或其他国家/地区的商标或注册商标。</p><p>&nbsp;</p>

<?php elseif( is_page( 'paris-9-feb' ) || is_page('bmc-exchange-2015-paris') || is_page ('paris-9-feb/tracks') || is_page ('collecte-de-donnees-personnelles') || is_page ('paris-9-feb/bmc-consulting-services-genius-lab') || is_page ('paris-9-feb/sponsors') ) : ?>
			
			<p class="legal-copyright">© Copyright 2005-2015 BMC Software, Inc. L'utilisation de ce site implique votre acceptation des <a href="http://www.bmcsoftware.fr/legal/terms-of-use.html" onclick="s_objectID=&quot;http://www.bmcsoftware.fr/legal/terms-of-use.html_1&quot;;return this.s_oc?this.s_oc(e):true" target="_blank">Conditions Générales d’Utilisation</a>, de la <a href="http://www.bmcsoftware.fr/legal/privacy-policy.html" onclick="s_objectID=&quot;http://www.bmcsoftware.fr/legal/privacy-policy.html_1&quot;;return this.s_oc?this.s_oc(e):true" target="_blank"> Politique de Protection de la Vie Privée</a> et de l'<a href="http://www.bmcsoftware.fr/legal/cookie-notice.html" onclick="s_objectID=&quot;http://www.bmcsoftware.fr/legal/cookie-notice.html_1&quot;;return this.s_oc?this.s_oc(e):true" target="_blank">Avis relatif aux CookiesAvis relatif aux Cookies</a> de BMC. BMC, BMC Software, les logos BMC et autres symboles BMC sont des marques ou des marques déposées de BMC Software, Inc. aux États-Unis et/ou dans d'autres pays.</p><p>&nbsp;</p>
<?php elseif( is_page( 'saopaulo-10-nov' ) || is_page ('saopaulo-10-nov/tracks') || is_page ('saopaulo-10-nov/patrocinadores') || is_page ('coleta-de-dados-pessoais') || is_page ('saopaulo-10-nov/palestrantes') ) : ?>
			
			<p class="legal-copyright">© Copyright 2005-2015 BMC Software, Inc. A utilização deste site significa que aceita os <a href="http://www.bmcsoftware.com.br/legal/terms-of-use.html" onclick="s_objectID=&quot;http://www.bmcsoftware.com.br/legal/terms-of-use.html_1&quot;;return this.s_oc?this.s_oc(e):true" target="_blank">Termos de utilização</a>, a  <a href="http://www.bmcsoftware.com.br/legal/privacy-policy.html" onclick="s_objectID=&quot;http://www.bmcsoftware.com.br/legal/privacy-policy.html_1&quot;;return this.s_oc?this.s_oc(e):true" target="_blank">Política de privacidade</a> e o <a href="http://www.bmcsoftware.com.br/legal/cookie-notice.html" onclick="s_objectID=&quot;http://www.bmcsoftware.com.br/legal/cookie-notice.html_1&quot;;return this.s_oc?this.s_oc(e):true" target="_blank"> Aviso de cookies</a> da BMC. BMC, BMC Software, os logótipos BMC e outras marcas da BMC são marcas comerciais ou marcas comerciais registadas da BMC Software, Inc. nos EUA e/ou outros países.</p><p>&nbsp;</p>
<?php elseif( is_page( 'bonn-16-17-nov' ) || is_page('bmc-exchange-bonn') || is_page ('bonn-16-17-nov/tracks') || is_page ('sammlung-von-personenbezogenen-daten') || is_page ('bonn-16-17-nov/genius-lab/') || is_page ('bonn-16-17-nov/partner/') )  : ?>
			
			<p class="legal-copyright">© Copyright 2005-2015 BMC Software, Inc. Mit dem Zugriff auf diese Website bestätigen Sie, dass Sie die <a href="http://www.bmcsoftware.de/legal/terms-of-use.html" onclick="s_objectID=&quot;http://www.bmcsoftware.de/legal/terms-of-use.html_1&quot;;return this.s_oc?this.s_oc(e):true" target="_blank">Nutzungsbedingungen</a>, <a href="http://www.bmcsoftware.de/legal/privacy-policy.html" onclick="s_objectID=&quot;http://www.bmcsoftware.de/legal/privacy-policy.html_1&quot;;return this.s_oc?this.s_oc(e):true" target="_blank">Datenschutzbestimmungen</a> und den <a href="http://www.bmcsoftware.de/legal/cookie-notice.html" onclick="s_objectID=&quot;http://www.bmcsoftware.de/legal/cookie-notice.html_1&quot;;return this.s_oc?this.s_oc(e):true" target="_blank">Hinweis zur Verwendung von Cookies</a> von BMC gelesen haben und mit diesen einverstanden sind. BMC, BMC Software, die BMC-Logos und andere BMC-Marken sind Marken oder in den USA und/oder anderen Ländern eingetragene Marken der BMC Software, Inc.</p><p>&nbsp;</p>
			<?php  else : ?>

		<p class="legal-copyright">© Copyright 2005-2015 BMC Software, Inc. Use of this site signifies your acceptance of BMC's <a href="http://www.bmc.com/legal/terms-of-use.html" onclick="s_objectID=&quot;http://www.bmc.com/legal/terms-of-use.html_1&quot;;return this.s_oc?this.s_oc(e):true" target="_blank">Terms of Use</a>, <a href="http://www.bmc.com/legal/privacy-policy.html" onclick="s_objectID=&quot;http://www.bmc.com/legal/privacy-policy.html_1&quot;;return this.s_oc?this.s_oc(e):true" target="_blank">Privacy Policy</a> and <a href="http://www.bmc.com/legal/cookie-notice.html" onclick="s_objectID=&quot;http://www.bmc.com/legal/cookie-notice.html_1&quot;;return this.s_oc?this.s_oc(e):true" target="_blank">Cookie Notice</a>. BMC, BMC Software, the BMC logos, and other BMC marks are <a href="http://www.bmc.com/legal/trademarks.html" onclick="s_objectID=&quot;http://www.bmc.com/legal/trademarks.html_1&quot;;return this.s_oc?this.s_oc(e):true" target="_blank">trademarks or registered trademarks</a> of BMC Software, Inc. in the U.S. and/or certain other countries.
		<br><a id="_bapw-link" href="http://info.evidon.com/pub_info/2744?v=1&amp;nt=0&amp;nw=true" target="_blank" style="text-decoration:none !important" onclick="s_objectID=&quot;http://www.bmc.com/#_10&quot;;return this.s_oc?this.s_oc(e):true"><img id="_bapw-icon" style="border:0 !important;display:inline !important;vertical-align:middle !important;padding-right:5px !important;" src="http://c.betrad.com/pub/icon1.png"><span style="vertical-align:middle !important">Manage Cookies</span></a></p>
   <p>&nbsp;</p>
<?php  endif; ?>
	</div>
<!-- end new 2-col footer -->
		</div>
	</footer><!-- end of #gk-footer -->
	<?php do_action('events_after_footer'); ?>
	
	<?php do_action('events_before_asidemenu'); ?>
	<i id="close-menu" class="fa fa-times"></i>
	<aside id="aside-menu">
		<nav id="aside-navigation" class="main-navigation" role="navigation">
			<h3><?php _e( 'Menu', 'events' ); ?></h3>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-aside-menu', 'fallback_cb' => false ) ); ?>
		</nav><!-- #aside-navigation -->
	</aside><!-- #aside-menu -->
	<?php do_action('events_after_asidemenu'); ?>
	
	<?php get_template_part('login', 'popup'); ?>
	
	<?php wp_footer(); ?>

<!-- SiteCatalyst code version: H.17. 
Copyright 1997-2009 Omniture, Inc. More info available at
http://www.omniture.com --> 
<script id="sitecatalyst" language="JavaScript" type="text/javascript">
s.server="" + document.location.host.toLowerCase() + "";
s.pageName = "bmcexchange";
s.channel="bmc exchange";
s.prop2="";
s.prop8="en-us";
var s_code=s.t();if(s_code)document.write(s_code)</script>
<!-- End SiteCatalyst code version: H.17. -->

<script type="text/javascript">_satellite.pageBottom();</script>
</body>
</html>