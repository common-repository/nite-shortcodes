jQuery(document).ready(function($){
    // Toggles
    if ($('.nite_shortcodes_toggle').length) {
        $(".togglec").hide();
    	$(".wps_togglet").click(function(){
    	   $(this).toggleClass("toggleta").next(".togglec").slideToggle("normal");
    	});
     }
     
     // Tabs
    if ($('.nite_shortcodes_tabs').length) {
        $('.nite_shortcodes_tabs').each(function() {
            var $this = $(this);
            $this.find('.tab_content').slice(1).hide();
            $this.find('ul.wps_tabs li:first').addClass('active');
            $this.find('ul.wps_tabs li a').click(function(e) {
                e.preventDefault();
                var $this_a = $(this);
                var $tab = $this.find('#'+$this_a.data('tab'));
                if (! $tab.is(':visible')) {
                    $this.find('.tab_content').hide();
                    $this_a.parent().addClass('active').siblings().removeClass('active');
                    $tab.fadeIn(600);
                }
            });
        });
    }
});