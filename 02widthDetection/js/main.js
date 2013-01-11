(function(){

var myWindow = $(window);
var windowWidthSpan = $('#windowWidth');

windowWidthSpan.html( myWindow.width() + 'px' );

myWindow.resize(function() {
  windowWidthSpan.html( $(window).width() + 'px' );
});

})();