(function($){				
	jQuery.fn.lightTabs = function(options){

		var createTabs = function(){
			tabs = this;
			i = 0;
			
			showPage = function(i, container){
				container = container || tabs;
				$(container).children("div").children("div").hide();
				$(container).children("div").children("div").eq(i).show();
				$(container).children("ul").children("li").removeClass("active");
				$(container).children("ul").children("li").eq(i).addClass("active");
			}
								
			showPage(0);				
			
			$(tabs).children("ul").children("li").each(function(index, element){
				$(element).attr("data-page", i);
				i++;                        
			});
			
			$(tabs).children("ul").children("li").click(function(){
				if ($(this).parents().eq(1).data('container') != undefined) {
					showPage(parseInt($(this).attr("data-page")), $(this).parents().eq(1).data('container'));
				}
				else {
					showPage(parseInt($(this).attr("data-page")));
				}
			});				
		};		
		return this.each(createTabs);
	};	
})(jQuery);