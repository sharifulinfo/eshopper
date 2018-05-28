/* according */
 jQuery( '#accordion' ).accordion({
	active: false,
	collapsible: true,
	event: "mousedown touchstart",
	heightStyle: "content",
	hide: {effect: "slideUp", duration: 500},
	show: {effect: "slideDown", duration: 500},
 });