import MinimalMenu from '../util/MinimalMenu.js';
import MainHero from '../util/MainHero.js';

export default {
  init() {
    // JavaScript to be fired on all pages
    if($('.minimal-menu').length) {
      $('.minimal-menu').each(function () {
        new MinimalMenu($(this));
      });

      MainHero.init();
    }
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
