window.onscroll = function () {
	if (document.documentElement.scrollTop > 50) {
		$('nav').removeClass('bg-nav-primary');
		$('nav').addClass('bg-nav-secondary');
	}

	if (document.documentElement.scrollTop <= 0) {
		$('nav').removeClass('bg-nav-secondary');
		$('nav').addClass('bg-nav-primary');
	}
}
