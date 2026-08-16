(function () {
	document.addEventListener('DOMContentLoaded', function () {
		var toggles = document.querySelectorAll('.ar-nav-toggle');

		toggles.forEach(function (btn) {
			btn.addEventListener('click', function () {
				var nav = btn.parentElement.querySelector('.ar-nav-links');
				if (!nav) return;
				var isOpen = nav.classList.toggle('is-open');
				btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
			});
		});
	});
})();
