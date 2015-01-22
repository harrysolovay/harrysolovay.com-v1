




/* + –––––––––––––––––––––––––––––––––––––––––––––––––––––––––– +
   | inner-text-shadow.js | By Harry Solovay | harrysolovay.com |
   + –––––––––––––––––––––––––––––––––––––––––––––––––––––––––– + */
   
   
   
   

'use strict';





// these functions require jQuery
if(!window.jQuery || typeof jQuery == 'undefined') {

	// create new script element
	var script = document.createElement('script');

	// set type and source
	script.type = 'text/javascript';
	script.src = 'http://code.jquery.com/jquery-latest.min.js';

	// append it to the head
	document.getElementsByTagName('head').item(0).appendChild(script);
}





/**
 * @return true if background-clip : text is functional in browser
 */
function backgroundClipText() {

	// create modernizr test for background-clip property
	Modernizr.addTest('backgroundcliptext', function() {
    	var div = document.createElement('div');
    	div.style.webkitBackgroundClip = "text";
    	var text = div.style.cssText.indexOf('text');
    	if (text > 0) return true;
    	'Webkit Moz O ms Khtml'.replace(/([A-Za-z]*)/g,function(val){
        	if (val+'BackgroundClip' in div.style) return true;
    	});
    });

    // return property's presence
    return Modernizr.backgroundcliptext;

}





/**
 * for each object in the input array, applies the text-shadow(value), background-color & other necessary CSS to the selected element(the key name of each object)
 * @param an array with the element selector as the key and the inner-objects as the desired text-shadow and background values
 */
function applyInnerTextShadow(selectorShadowPairs) {

	if(backgroundClipText()) {

		// get all key names (selectors to have the corresponding shadow value applied)
		var keys = Object.keys(selectorShadowPairs),
			// string of all selectors
			combinedSelector = '',
			// for referencing the current key in the for each loop below
			index = 0;

		for(var key in selectorShadowPairs) {
			// add onto the selector (with a ', ' unless it is the last one)
			combinedSelector += keys[index] + ((index < keys.length - 1) ? ', ' : '');
			// set the background-color & text-shadow of the given selector (key)
			$(keys[index]).css('background-color', selectorShadowPairs[keys[index]]['background-color']);
			$(keys[index]).css('text-shadow', selectorShadowPairs[keys[index]]['text-shadow']);
			// keep track of the current key
			index++;
		}

		// sets necessary other CSS for other elements
		$(combinedSelector).css({
    		'color' : 'transparent',
			'-webkit-background-clip' : 'text',
			   '-moz-background-clip' : 'text',
        			'background-clip' : 'text'
    	});
	}
}




