let clickAction = function(whichButton) {
  $('.user__select-btn.' + whichButton + ',.header__link.' + whichButton).click(function(event){
    // hide all popups
    $('.header__account-show,.header__account-hide,.header__account-form,.header__contacts-show,.header__contacts-hide,.header__contacts,.header__contacts-active,.contacts-block,.header__burger-show,.header__burger-hide,.header__btn-burger,.header__burger-active,.menu,.blur').removeClass('active');
    $('.header__btn-account').removeClass('hide');

    // clear classes
    $('.user__select-btn,.header__link').removeClass('active');
    $('.user__slider').removeClass('first second third forth fifth sixth seventh eight nine ten');

    // add classes
    $('.user__select-btn.' + whichButton + ',.header__link.' + whichButton).addClass('active');
    $('.user__slider').addClass(whichButton);
  })
}
var nums = ['first', 'second', 'third', 'forth', 'fifth', 'sixth', 'seventh', 'eight', 'nine', 'ten'];
nums.forEach(function(num) {
  clickAction(num);
});


const urlParams = new URLSearchParams(window.location.search);
const urlParamSelect = urlParams.get("select");

var selects = ['orders', 'projects', 'users', 'team', 'discounts', 'referal', 'cash-account', 'payments', 'settings'];

selects.forEach(function(select) {
  $('.user__select-btn.' + select + ',.header__link.' + select + '-btn').click(function(event){
    var url = new URL(window.location.href);
    url.searchParams.set("select", select);
    var updatedUrl = url.toString();
    window.history.pushState({path: updatedUrl}, '', updatedUrl);
  })
  if (urlParamSelect == select) {
    $('.user__select-btn.' + select).click()
  }
});

if (!urlParamSelect) {
  // for add param and popup btn activate
  $('.user__select-btn.first').click()
}