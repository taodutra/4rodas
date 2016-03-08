var site = function(){

	return {
	
		init: function(){

			var that = this;

			this.link_set();

			this.on_scroll();
	
		},

		

		link_set: function(){

			var that = this,
				external = $('a[rel=external]'),
				toggle = $('a[rel=toggle]');

				external.attr('target','_blank');

				toggle.on('click', function(event){
					event.preventDefault();
					var t = $(this),
						t_toggle = t.data('toggle'), t_target = $(t.data('target'));

						t_target.toggleClass(t_toggle);
				})
		
		},

		on_scroll: function() {
			var that = this, w = $(window), wt, ww, b = $('body');

			w.scroll(function(){
				
				wt = w.scrollTop(), ww = window.innerWidth;
				
				if( window.innerWidth >= 1320 && wt > 110){
					b.addClass('menu-fixed');
				}else{
					b.removeClass('menu-fixed');
				}

		    })
		}

	}
}

$(function () {

	s = new site();
	s.init();

});