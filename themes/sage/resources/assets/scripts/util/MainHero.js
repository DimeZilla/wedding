/**
 * Appends a double arrow to the main hero
 * when the height of body is larger than the height
 * of the hero it assumes that there is more to scroll to
 */

class MainHero {
  constructor() {
    this.$hero = $('div.main-hero');
  }

  init() {
    if (this.$hero.next().length && $('main').height() > $('body').height()) {
      this.showIcon();
    }
  }

  showIcon() {
    this.$hero.append(this.getIcon());
  }

  getIcon() {
    return $('<div class="scrollicon"><i class="fa fa-angle-double-down" aria-hidden="true"></i></div>');
  }
}

export default new MainHero();
