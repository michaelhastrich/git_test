		</div>
		<!-- /wrapper -->
		</div><!-- /main-content -->
		<!-- footer -->
		<footer id="footer" class="footer group" role="contentinfo">
			<div class="footerwrap group">	
				<div class="footer-widget">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-footer')) ?>
				</div>
			</div>
		<!-- /wrapper -->	
		</footer>
			<!-- /footer -->
		<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '354601588226174');
		fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=354601588226174&ev=PageView&noscript=1"
		/></noscript>
		<!-- DO NOT MODIFY -->
		<!-- End Facebook Pixel Code -->

		<?php wp_footer(); ?>
		 <script type="text/javascript">
		    window.addEventListener('load', function() {
		    new FastClick(document.body);
			}, false);
		    $('.menu').click(function(e){
		      $('.nav').toggleClass('active');
		      e.preventDefault();
		    });
		  </script>

	</body>
</html>