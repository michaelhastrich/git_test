		</div>
		<!-- /wrapper -->
		
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