//pnJoin.js 
// simon
// 10/24/2014

/*
bindWithDelay jQuery plugin
Author: Brian Grinstead
MIT license: http://www.opensource.org/licenses/mit-license.php

http://github.com/bgrins/bindWithDelay
http://briangrinstead.com/files/bindWithDelay

Usage:
    See http://api.jquery.com/bind/
    .bindWithDelay( eventType, [ eventData ], handler(eventObject), timeout, throttle )

Examples:
    $("#foo").bindWithDelay("click", function(e) { }, 100);
    $(window).bindWithDelay("resize", { optional: "eventData" }, callback, 1000);
    $(window).bindWithDelay("resize", callback, 1000, true);
*/

(function($) {

    $.fn.bindWithDelay = function( type, data, fn, timeout, throttle ) {

	if ( $.isFunction( data ) ) {
            throttle = timeout;
            timeout = fn;
            fn = data;
            data = undefined;
	}

    // Allow delayed function to be removed with fn in unbind function
	fn.guid = fn.guid || ($.guid && $.guid++);

    // Bind each separately so that each element has its own delay
	return this.each(function() {

            var wait = null;

            function cb() {
		var e = $.extend(true, { }, arguments[0]);
		var ctx = this;
		var throttler = function() {
                    wait = null;
                    fn.apply(ctx, [e]);
		};

		if (!throttle) { clearTimeout(wait); wait = null; }
		if (!wait) { wait = setTimeout(throttler, timeout); }
            }

            cb.guid = fn.guid;

            $(this).bind(type, data, cb);
	});
    };

})(jQuery);


function pnJoin(){
}

function newUser(){
    var email, cell, firstName, lastName;
    var facebook=twitter=googlep={};
    var hasValidEmail = false;

}


pnJoin.prototype.setInputListeners = function(){
};

pnJoin.prototype.setButtons = function(){}; 

pnJoin.prototype.setForms = function(){
    var me =this;
    $("#emailLoginPasswdForm").submit(function(e){me.submitEmailLoginPasswd(e,this); });
    $("#namesCellForm").submit(function(e){me.submitNamesCell(e,this); });
    $("#socialMediaURLsForm").submit(function(e){me.submitSocialMediaURLs(me,this); });
    // need one here for photo upload form
};

pnJoin.submitEmailLoginPasswd = function(event, form){
    // manipulate $(form) here
    this.submitForm(event, form);
};

pnJoin.prototype.submitNamesCell = function(event,form){
};

pnJoin.prototype.submitSocialMediaUrls = function(event,form){
};

pnJoin.prototype.submitForm = function(event,form){
    var me=this;
    event.preventDefault();
    $.ajax({
	url: '/joinControl.php',
	type: 'POST',
	cache: false,
	dataType: 'json',
	context: null,
	data: $(form).serialize()
    }).done(function(data){
	if (data.success) {
	    alert("nice job!");
	} else {
	    alert("Oops! Something went wrong!");
	}
    }).fail(function(data){
	alert("Uh oh! Something really bad happened.");
    });
};

pnJoin.prototype.checkEmailValidInvited = function(email){
    return true;
};


pnJoin.prototype.validSignInNameString = function(name){
    if (!name) return false;
    if ( (typeof name === 'string') && name.match(/^[a-z0-9_-]+$/i) ) return true;
    else return false;
};

// input listeners for form validation

