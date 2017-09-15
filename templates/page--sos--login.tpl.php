<div class="container-fluid">
  <div class="row">
    <div class="banner"><img src="/edbaug/sites/default/files/ursosbasedbanner.png"></div>
    <div class="container">
      <?php print $messages; ?>
	  <?php print $sos_message; ?>	   
	<h1 class="page-header"> <?php print $title; ?></h1>
	
      <div id="login-block-container">
        <div id="login-block-form-fields">
           <?php print render($page['content']); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="container">
    <div class="footer-center"><a href="mailto:info@localsp.com">info@localsp.com</a></div>
  </div>
</footer>
