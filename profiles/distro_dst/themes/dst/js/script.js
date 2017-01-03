 jQuery(document).ready(function(e){
        $('#flexisel').flexisel();
        $('#flexisel').flexisel({
          visibleItems: 7,
          itemsToScroll: 3,
          animationSpeed: 200,
          infinite: true
        });

    $('.about').hover(function(){

    	var children=$(this).children();
    	if($(children).text().length>80){
    		$(this).css({'overflow':'visible'});
    	$(children).css({'position':'absolute'});
    	}
    },function(){
    	var children=$(this).children();
  $(this).css({'overflow':'hidden'});
    	$(children).css('position','static');
 
    });    

 });