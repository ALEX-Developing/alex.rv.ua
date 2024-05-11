$('.consultation__select').click(function(event){
  $('.blocks__consultation').toggleClass('active');
})
let slider = document.querySelector('.consultation__selected-slider')
$('.consultation__selection-block .first').click(function(event){
  $('.blocks__consultation').removeClass('active');
  $('.consultation__selection-block > div').removeClass('active');
  $('.consultation__selection-block .first').addClass('active');
  slider.style.transform='translateY(-0px)'
})
$('.consultation__selection-block .second').click(function(event){
  $('.blocks__consultation').removeClass('active');
  $('.consultation__selection-block > div').removeClass('active');
  $('.consultation__selection-block .second').addClass('active');
  slider.style.transform='translateY(-26px)'
})
$('.consultation__selection-block .third').click(function(event){
  $('.blocks__consultation').removeClass('active');
  $('.consultation__selection-block > div').removeClass('active');
  $('.consultation__selection-block .third').addClass('active');
  slider.style.transform='translateY(-52px)'
})
$('.consultation__selection-block .forth').click(function(event){
  $('.blocks__consultation').removeClass('active');
  $('.consultation__selection-block > div').removeClass('active');
  $('.consultation__selection-block .forth').addClass('active');
  slider.style.transform='translateY(-78px)'
})
$('.consultation__selection-block .fifth').click(function(event){
  $('.blocks__consultation').removeClass('active');
  $('.consultation__selection-block > div').removeClass('active');
  $('.consultation__selection-block .fifth').addClass('active');
  slider.style.transform='translateY(-104px)'
})
$('.consultation__selection-block .sixth').click(function(event){
  $('.blocks__consultation').removeClass('active');
  $('.consultation__selection-block > div').removeClass('active');
  $('.consultation__selection-block .sixth').addClass('active');
  slider.style.transform='translateY(-130px)'
})
$('.consultation__selection-block .seventh').click(function(event){
  $('.blocks__consultation').removeClass('active');
  $('.consultation__selection-block > div').removeClass('active');
  $('.consultation__selection-block .seventh').addClass('active');
  slider.style.transform='translateY(-156px)'
})
$('.consultation__selection-block .eight').click(function(event){
  $('.blocks__consultation').removeClass('active');
  $('.consultation__selection-block > div').removeClass('active');
  $('.consultation__selection-block .eight').addClass('active');
  slider.style.transform='translateY(-182px)'
})
$('.consultation__selection-block .nineth').click(function(event){
  $('.blocks__consultation').removeClass('active');
  $('.consultation__selection-block > div').removeClass('active');
  $('.consultation__selection-block .nineth').addClass('active');
  slider.style.transform='translateY(-208px)'
})
$('.consultation__selection-block .ten').click(function(event){
  $('.blocks__consultation').removeClass('active');
  $('.consultation__selection-block > div').removeClass('active');
  $('.consultation__selection-block .ten').addClass('active');
  slider.style.transform='translateY(-234px)'
})

const slideValue = document.querySelector('.slider__span');
const inputSlider = document.querySelector('.slider__input');
const inputBg = document.querySelector(".slider__bg-1")

// doing when sliding
slideValue.textContent = inputSlider.value;
slideValue.style.left = (inputSlider.value-800)/12 + "%";
inputBg.style.width = (inputSlider.value-800)/12 + "%";

sliderInput = document.querySelectorAll('.slider__input')[0]
sliderInput.oninput = function() {
  slideValue.textContent = inputSlider.value;
  slideValue.style.left = (inputSlider.value-800)/12 + "%";
  inputBg.style.width = (inputSlider.value-800)/12 + "%";
};

// hide slider value when input checked
orderCheckbox = document.querySelectorAll('#cbx-12')[0]
orderCheckbox.oninput = function() {
  if ($('#cbx-12:checked').val()) {
    $('.order__slider').addClass('none')
    setTimeout(() => {
      $('.order__slider').addClass('remove')
    }, 500);
  }
  if (!$('#cbx-12:checked').val()) {
    $('.order__slider').removeClass('remove')
    setTimeout(() => {
      $('.order__slider').removeClass('none')
    }, 500);
  }
};

$('.price__calculate-btn,.price__close').click(function(event){
  $('.price__form').toggleClass('active');
})

$('.price__dot').click(function(event){
  $('.price__dot > ').toggleClass('active');
})

