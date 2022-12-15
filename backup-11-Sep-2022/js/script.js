$(window).load(function(){
	$('.slider')._TMS({
		playBu:'.play',
		preset:'diagonalFade',
		easing:'easeOutQuad',
		duration:1200,
		pagination:true,
		slideshow:6000})
	$('ul.menu').superfish({
      delay:       600,
      animation:   {height:'show'},
      speed:       600,
      autoArrows:  false,
      dropShadows: false
    });
})
