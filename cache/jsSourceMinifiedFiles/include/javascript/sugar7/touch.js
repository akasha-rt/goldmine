var _inputFocused=null;if(Modernizr.touch){$(document).on('blur','input, textarea',function(){_inputFocused=setTimeout(function(){window.scrollTo(document.body.scrollLeft,document.body.scrollTop);},0);});$(document).on('focus','input, textarea',function(){clearTimeout(_inputFocused);});}