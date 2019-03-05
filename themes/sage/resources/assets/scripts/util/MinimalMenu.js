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

    // this is the name of the body click that event that will
    // close the menu
    this.bodyEvent = 'click.body-close-menu-click';

    // make sure there is always space for the menu
    if ($('main').height() > $('body').height()) {
      $('main').css('padding-bottom', this.$button.outerHeight() + 15);
    }
  }

  toggleMenu() {
    return (ev) => {
      ev.stopPropagation();

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

    $('body').on(this.bodyEvent, (ev) => {
      let $target = $(ev.target);
      if (!$target.is(this.$button) && !$target.is(this.$menu)) {
        this.hideMenu();
      }
    });
  }

  hideMenu() {
    this.$menu.fadeOut(500, () => {
      this.$menu.addClass('d-none');
    });

    $('body').off(this.bodyEvent);
  }
}

export default MinimalMenu;
