<?
	include_once   "./header.php";
?>
<script>
	// init controller
	var controller = new ScrollMagic.Controller();
</script>
 
<div class="spacer s2"></div>
<div id="trigger1" class="spacer s0"></div>
<div data-scrollmagic-pin-spacer="" class="scrollmagic-pin-spacer" style="top: auto; left: auto; bottom: auto; right: auto; margin: 25px auto; display: inline-block; position: relative; box-sizing: content-box; min-width: 247px; width: auto; min-height: 50px; height: auto; padding-top: 0px; padding-bottom: 300px;"><div id="pin1" class="box2 blue" style="position: relative; margin: auto; top: auto; left: auto; bottom: auto; right: auto;">
	<p>Stay where you are (at least for a while).</p>
	<a href="#" class="viewsource">view source</a>
</div></div>
<div class="spacer s2"></div>
<script>
		// build scene
		var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 300})
						.setPin("#pin1")
						//.addIndicators({name: "1 (duration: 300)"}) // add indicators (requires plugin)
						.addTo(controller);
</script>