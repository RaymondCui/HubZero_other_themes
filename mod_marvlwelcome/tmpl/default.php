<?php
// No direct access
defined('_JEXEC') or die; ?>

<?php

	JHTML::stylesheet('marvl_welcome.css', 'modules/mod_marvlwelcome/css/');
	
	// Not using the computed welcome stuff yet.
	//echo $welcome;

?>

<div id="marvl-welcome" class="marvl-welcome">
        <div class="marvl-heading">
		  <h1>IELab</h1>
		  <h2>A virtual laboratory for Industrial Ecology research and training. </h2>
        </div>
        <div class="marvl-img-wrapper">
		  <img src="<?php echo JURI::root();?>modules/mod_marvlwelcome/tmpl/images/splash2.png" alt="IELab Splash Image" />
		</div>
	    <div class="marvl-row" style="min-height: 1px;">
		  <div class="marvl-col-md-6 marvl-col">
		    <h4 class="marvl-introduction">
		    <!-- Placeholder for additional content. -->
			</h4>
		  </div>
	    </div class="marvl-row">
</div class="marvl_welcome">

