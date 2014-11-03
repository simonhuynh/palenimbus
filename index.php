<?php


function parseURL(){
	$path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
	$elements = explode('/', $path);                // Split path on slashes
	if(count($elements) == 0)  header('/home.php');       // No path elements means home 
	else switch(array_shift($elements)) {            // Pop off first item and switch
		case 'Some-text-goes-here':
        	     ShowPicture($elements); // passes rest of parameters to internal function
        	     break;
    		case 'more':
      
		default:
			header('HTTP/1.1 404 Not Found');
        		Show404Error();
	}
	
}
function getCurrentUri() {
   $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
   $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
   if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
   $uri = '/' . trim($uri, '/');
   return $uri;
}
 
   $base_url = getCurrentUri();
   $routes = array();
   $routes = explode('/', $base_url);
   foreach($routes as $route)
   {
   if(trim($route) != '')
   array_push($routes, $route);
   }
 
   /*
   Now, $routes will contain all the routes. $routes[0] will correspond to first route. For e.g. in above example $routes[0] is search, $routes[1] is book and $routes[2] is fitzgerald
   */
 
   if($routes[0] == “search”)
   {
   if($routes[1] == “book”)
   {
   searchBooksBy($routes[2]);
   }
   }

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simon Huynh</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/mq.css" rel="stylesheet" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<script>
//Fall back to a local copy of jQuery if the CDN fails
window.jQuery || document.write('<script src="js/lib/jquery-2.1.1.min.js"><\/script>');
</script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/lib/underscore-min.js" type="text/javascript"></script>
<script src="js/lib/backbone.js" type="text/javascript"></script>
<script type="text/javascript">

/*!
 * jQuery UI Touch Punch 0.2.3
 *
 * Copyright 2011–2014, Dave Furfero
 * Dual licensed under the MIT or GPL Version 2 licenses.
 *
 * Depends:
 *  jquery.ui.widget.js
 *  jquery.ui.mouse.js
 */
!function(a){function f(a,b){if(!(a.originalEvent.touches.length>1)){a.preventDefault();var c=a.originalEvent.changedTouches[0],d=document.createEvent("MouseEvents");d.initMouseEvent(b,!0,!0,window,1,c.screenX,c.screenY,c.clientX,c.clientY,!1,!1,!1,!1,0,null),a.target.dispatchEvent(d)}}if(a.support.touch="ontouchend"in document,a.support.touch){var e,b=a.ui.mouse.prototype,c=b._mouseInit,d=b._mouseDestroy;b._touchStart=function(a){var b=this;!e&&b._mouseCapture(a.originalEvent.changedTouches[0])&&(e=!0,b._touchMoved=!1,f(a,"mouseover"),f(a,"mousemove"),f(a,"mousedown"))},b._touchMove=function(a){e&&(this._touchMoved=!0,f(a,"mousemove"))},b._touchEnd=function(a){e&&(f(a,"mouseup"),f(a,"mouseout"),this._touchMoved||f(a,"click"),e=!1)},b._mouseInit=function(){var b=this;b.element.bind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),c.call(b)},b._mouseDestroy=function(){var b=this;b.element.unbind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),d.call(b)}}}(jQuery);

var mobileSpecs={};
function isMobile() {
	var out={};
	
	//check for Android phone 
    var ua = navigator.userAgent.toLowerCase();   
    if ( ( ua.indexOf("android") > -1) && (ua.indexOf("mobile") > -1) ) {
	out.Android=true;
	out.mobile=true;
	}

	if (/iPhone/.test(navigator.platform)) {
		out.mobile=true;
		out.iPhone=true;
	}

    if ( (/iP(hone|od)/.test(navigator.platform)) && (/Safari/i.test(navigator.userAgent) ) ) {
		// supports iOS 2.0 and later: <http://bit.ly/TJjs1V>
		//this will also include iPad		
		var v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
		out.mobileSafari = parseInt(v[1], 10);
    }	
    
	return out;
}

mobileSpecs=isMobile();
var adjust = (mobileSpecs.mobile) ? '-125px' : '-130px';
var $siMenu;
$(document).ready(function() {	
	
	$siMenu = $("#si-menu");

	if (!mobileSpecs.mobileSafari) $('#si-menu').css('left', adjust);
	
//	if (mobileSpecs.mobile || mobileSpecs.mobileSafari) { }	
    setTimeout( function(){
		$siMenu.toggleClass('open');
		
	},4000);
});
</script>
</head>
<body>
<div id="user-photo" class="page photo">

</div>
<!--SLIDING ICON MENU PANEL-->
<div id="si-menu" class="open">
    <nav class="si-nav">
        <a id="si-phone" class="si-icon" href="tel:4157346182"></a>
        <a id="si-mail" class="si-icon" href="mailto:simonhuynh@gmail.com"></a>
        <a id="si-text" class="si-icon" href="sms://4157346182"></a>
		<a id="si-linkedin" class="si-icon" href="https://www.linkedin.com/profile/view?id=379270475"></a>
        <a id="si-facebook" class="si-icon" href="http://facebook.com/hellomynameissimon"></a>
        <a id="si-googlep" class="si-icon" href="http://plus.google.com/+SimonHuynh-SF"></a>
    </nav>
</div>
<!--END SLIDING ICON MENU PANEL-->
</body>
</html>
