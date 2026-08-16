(function () {
	document.addEventListener('DOMContentLoaded', function () {
		if (!('IntersectionObserver' in window)) return;

		var selector = [
			'.ar-hero', '.ar-feature-strip', '.ar-categories', '.ar-about',
			'.ar-brand-wrap', '.ar-footer', '.ar-inner-hero', '.ar-about-page-hero',
			'.ar-about-split', '.ar-values-row', '.ar-contact-wrap',
			'.ar-sizeguide-wrap', '.ar-legal-wrap', '.woocommerce-tabs',
			'.related.products'
		].join(',');
		var targets = document.querySelectorAll(selector);

		var observer = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add('ar-in-view');
					observer.unobserve(entry.target);
				}
			});
		}, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

		targets.forEach(function (el) {
			// Sections already on screen at load (e.g. the hero) render
			// normally with no animation, so there's never a flash of
			// visible-then-hidden content — only what's below the fold
			// fades in as the user scrolls to it.
			var rect = el.getBoundingClientRect();
			var alreadyVisible = rect.top < window.innerHeight && rect.bottom > 0;
			if (alreadyVisible) return;

			el.classList.add('ar-reveal');
			observer.observe(el);
		});
	});
})();
