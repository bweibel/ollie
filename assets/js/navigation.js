(function () {
  function init() {
    const header = document.querySelector('.site-header');
    if (!header) return;

    let headerHeight = header.offsetHeight;
    let isScrolling = false;
    let ENTER_THRESHOLD = headerHeight;
    let EXIT_THRESHOLD  = 0;

    function updateState(y) {
      if (!isScrolling && y > ENTER_THRESHOLD) {
        isScrolling = true;
        document.body.classList.add('is-scrolling');
      } else if (isScrolling && y <= EXIT_THRESHOLD) {
        isScrolling = false;
        document.body.classList.remove('is-scrolling');
      }
    }

    let lastY = window.pageYOffset || document.documentElement.scrollTop;
    let ticking = false;
    let scrollEndTimeout;

    function onScroll() {
      lastY = window.pageYOffset || document.documentElement.scrollTop;

      // rAF throttle
      if (!ticking) {
        ticking = true;
        requestAnimationFrame(function () {
          updateState(lastY);
          ticking = false;
        });
      }

      clearTimeout(scrollEndTimeout);
      scrollEndTimeout = setTimeout(function () {
        updateState(lastY);
      }, 200);
    }

    window.addEventListener('scroll', onScroll, { passive: true });

    // Keep thresholds in sync with layout changes
    window.addEventListener('resize', function () {
      headerHeight = header.offsetHeight;
      ENTER_THRESHOLD = headerHeight;
      updateState(window.pageYOffset || document.documentElement.scrollTop);
    });

    // Initial state
    updateState(window.pageYOffset || document.documentElement.scrollTop);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
