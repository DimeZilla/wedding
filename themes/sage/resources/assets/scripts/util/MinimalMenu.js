/**
 * For the minimal menu functionality
 */
class MinimalMenu {
  constructor(elem) {
    if (! (elem instanceof $)) {
      throw new Error('Element must be an instance of jQuery');
    }
    this.$elem = elem;
    this.$menu = this.$elem.find('.minimal-menu-menu');
    this.$button = this.$elem.find('button.menu-trigger');

    this.$button.on('click', this.toggleMenu());
  }

  toggleMenu() {
    return () => {
      this.$elem.removeClass('bounce');
      if (this.$menu.hasClass('d-none')) {
        this.showMenu();
      }
      else {
        this.hideMenu();
      }
    };
  }

  showMenu() {
    this.$menu.hide();
    this.$menu.removeClass('d-none');
    this.$menu.fadeIn(500);
  }

  hideMenu() {
    this.$menu.fadeOut(500, () => {
      this.$menu.addClass('d-none');
    });
  }
}

export default MinimalMenu;
