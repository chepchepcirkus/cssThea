// FUNCTIONS
function stickHeader() {
	if ($(window).scrollTop() >= 0) {
		$('header').addClass('fix');
	}
	if ($(window).scrollTop() <= 30) {
		$('header').removeClass('fix');
	}
}

// Scroll to anchor
function scrollToAnchor(id){
	var anchor = $(id);
	if(anchor.length == 0) {
		$('html,body').animate({scrollTop: (anchor.offset().top-50)},'slow');
	}
}

function setViewPortBodyClass(width){
	if(width <= 768) {
		$('body').addClass('mb');
	} else if(width > 768 && width < 960) {
		$('body').addClass('device');
	} else if(width >= 960) {
		$('body').addClass('screen');
	}
}
// PANEL
var panelIsOpen = false;

// Launch app
jQuery(document).ready(function($) {
	// set view port class
	var outerwidth = $(window).outerWidth();
	setViewPortBodyClass(outerwidth);
	// Observe resize of window
	$(window).resize(function() {
		// clean
		$('body').removeClass('mb');
		$('body').removeClass('device');
		$('body').removeClass('screen');
		// set view port class
		outerwidth = $(window).outerWidth();
		setViewPortBodyClass(outerwidth);
	});

	$('#open-menu-trigger').click(function() {
		$('header').toggleClass('nav-opened');
	});
	$('nav a').click(function() {
		$('header').toggleClass('nav-opened');
	});
	// Header fixed on scroll
	$(window).bind('scroll', function() {
		stickHeader();
	});
	stickHeader();

	$('a').click(function() {
		var id = $(this).attr('href').substr($(this).attr('href').indexOf("#"));
		scrollToAnchor(id)
	});

	// PANEL CUSTOM
    $('[data-toggle="panel"]').click(function(e) {
        var event = new CustomEvent('cssThea.panel', {detail: this});
        window.dispatchEvent(event);
    });

    window.addEventListener('cssThea.panel', function (e) {
		var $this   = $(e.detail)
		var $target = $($this.attr('data-target') || (href && href.replace(/.*(?=#[^\s]+$)/, ''))) // strip for ie7

		if ($this.is('a')) e.preventDefault()

		if(!panelIsOpen) {
			// move panel
			panelIsOpen = true;
            var event = new CustomEvent('cssThea.panel.show', {detail: {target: $this}});
            window.dispatchEvent(event);
			// var e = $.Event('show.chepk.panel', {  })
			// $target.trigger(e);
		} else {
			// move back panel
			var e = $.Event('hide.chepk.panel', { relatedTarget: $this })
			$target.trigger(e);
		}
	});

    window.addEventListener('cssThea.panel.show', function(event) {
        var panel = $(event.detail.target);
        // reset body and title
        $('body').removeClass('popup-is-open');
        panel.find('.modal-title').text('');
        panel.find('.modal-body').text('');
        panelIsOpen = false;
    });
	// $('#ajax-panel').on('hide.chepk.panel', function (event) {
    //
	// });

    // Tab
    $('.tabs').each(function() {
    	var height = $(this).find('.tab-content .active').height();
        $(this).find('.tab-content').css('height', (height + height*0.2) + 'px');
    });

    $('[data-toggle="tab"]').click(function(e) {
        var event = new CustomEvent('cssThea.tab', {detail: this});
        window.dispatchEvent(event);
    });

    window.addEventListener('cssThea.tab', function (event) {
		var $this = $(event.detail);
		var $target = $($this.data('target'));
		// remove all class active and hide current tab content 
		$this.closest('.tabs').find('.tabs-head').children().removeClass('active');
		$this.closest('.tabs').find('.tab-content').children().removeClass('active');
		$this.closest('.tabs').find('.tab-content').css('height', ($target.height()+$target.height()*0.2) + 'px');
		// set tab active and display target tab content
		$this.addClass('active');
		$target.addClass('active');
	});

	$('[data-toggle="flash-message"]').click(function(e) {
        var event = new CustomEvent('cssThea.flash-message', {detail: this});
        window.dispatchEvent(event);
    });

    window.addEventListener('cssThea.flash-message', function (event) {
        var $data = $(event.detail);
        var bgClass = $data[0].dataset.class;
        var text = $data[0].dataset.text;
        var uniqueId = 'flash-mess-' + Date.now();
        $('.flash-message-container').append('<div id="' + uniqueId + '" class="flash-message ' + bgClass + '">' + text + '</div>');
        var timeout = setTimeout(function(){
            $('#' + uniqueId).fadeOut().remove();
            clearTimeout(timeout);
        }, 2000);
    });
});