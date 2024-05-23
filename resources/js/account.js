let generalSelector = function(whichButton) {
  $('.user__select-btn.' + whichButton + ',.header__link.' + whichButton).click(function(event){
    // hide all popups
    $('.header__account-show,.header__account-hide,.header__account-form,.header__contacts-show,.header__contacts-hide,.header__contacts,.header__contacts-active,.contacts-block,.header__burger-show,.header__burger-hide,.header__btn-burger,.header__burger-active,.menu,.blur').removeClass('active');
    $('.header__btn-account').removeClass('hide');

    // clear classes
    $('.selector__btn,.bigselector__btn,.user__select-btn,.header__link').removeClass('active');
    $('.selector__container,.bigselector__container,.user__slider').removeClass('first second third forth fifth sixth seventh eight nine ten');
    $('.selector__btn.first,.bigselector__btn.first').addClass('active');
    $('.selector__container,.bigselector__container').addClass('first');

    // add classes
    $('.user__select-btn.' + whichButton + ',.header__link.' + whichButton).addClass('active');
    $('.user__slider').addClass(whichButton);
  })
}
let bigSelector = function(whichButton) {
  $('.bigselector__btn.' + whichButton).click(function(event){
    // clear classes
    $('.selector__btn,.bigselector__btn').removeClass('active');
    $('.selector__container,.bigselector__container').removeClass('first second third forth fifth sixth seventh eight nine ten');
    $('.selector__btn.first').addClass('active');
    $('.selector__container').addClass('first');

    // add classes
    $('.bigselector__btn.' + whichButton).addClass('active');
    $('.bigselector__container').addClass(whichButton);
  })
}
let selector = function(whichButton) {
  $('.selector__btn.' + whichButton).click(function(event){
    // clear classes
    $('.selector__btn').removeClass('active');
    $('.selector__container').removeClass('first second third forth fifth sixth seventh eight nine ten');

    // add classes
    $('.selector__btn.' + whichButton).addClass('active');
    $('.selector__container').addClass(whichButton);
  })
}
var nums = ['first', 'second', 'third', 'forth', 'fifth', 'sixth', 'seventh', 'eight', 'nine', 'ten'];
nums.forEach(function(num) {
  generalSelector(num);
  bigSelector(num);
  selector(num);
});


const urlParams = new URLSearchParams(window.location.search);
const urlParamGeneralSelector = urlParams.get("generalSelector");

var selects = ['orders', 'projects', 'users', 'team', 'discounts', 'referal', 'cash-account', 'payments', 'settings'];

selects.forEach(function(select) {
  $('.user__select-btn.' + select + ',.header__link.' + select + '-btn').click(function(event){
    var url = new URL(window.location.href);
    url.searchParams.set("generalSelector", select);
    var updatedUrl = url.toString();
    window.history.pushState({path: updatedUrl}, '', updatedUrl);
  })
  if (urlParamGeneralSelector == select) {
    $('.user__select-btn.' + select).click()
  }
});

if (!urlParamGeneralSelector) {
  // for add param and popup btn activate
  $('.user__select-btn.first').click()
}