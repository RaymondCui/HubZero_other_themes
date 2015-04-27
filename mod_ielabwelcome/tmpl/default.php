<?php
// No direct access
defined('_JEXEC') or die; ?>

<?php

	JHTML::stylesheet('ielab_welcome.css', 'modules/mod_ielabwelcome/css/');
	
	// Not using the computed welcome stuff yet.
	//echo $welcome;

?>

<div id="ielab-welcome" class="ielab-welcome">
        <div class="ielab-heading">
		  <h1>IELab</h1>
		  <h2>A virtual laboratory for Industrial Ecology research and training. </h2>
        </div>
        <div class="ielab-img-wrapper">
		  <img src="<?php echo JURI::root();?>modules/mod_ielabwelcome/tmpl/images/splash2.png" alt="IELab Splash Image" />
		</div>
	    <div class="ielab-row" style="min-height: 1px;">
		  <div class="ielab-col-md-6 ielab-col">
		    <h4 class="ielab-introduction">
		    <!-- Placeholder for additional content. -->
			</h4>
		  </div>
	    </div class="ielab-row">
</div class="ielab_welcome">

