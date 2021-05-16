/* **************POP UP EFFECT**************** */
$(document).ready(function () {

  // cadres txt et img
  var imgPopup = $('.img-popup');
  var imgCont = $('.container__img-holder');

  var popupImage = $('.img-popup img');
  var closeBtn = $('.close-btn');

  //évènement du clique
  imgCont.on('click', function () {
    var img_src = $(this).children('img').attr('src');
    imgPopup.children('img').attr('src', img_src);
    imgPopup.addClass('opened');
  });

  $(imgPopup, closeBtn).on('click', function () {
    imgPopup.removeClass('opened');
    imgPopup.children('img').attr('src', '');
  });

  popupImage.on('click', function (e) {
    e.stopPropagation();
  });

});


/* ********** FILTRE JS ************* */
$("#filtres li").click(function () {
  value = $(this).data("filter");

  $("#filtres li").removeClass("active"), $(this).addClass("active");

  $("#elements div").each(function () {
    el = $(this);

    el.show();

    if (!el.hasClass(value) && value != "all") el.hide();
  });
});

/* **************DARK MODE**************** */
var element1 = document.getElementsByClassName('space_write')
console.log(element1)

var element2 = document.getElementsByClassName('space_com')
console.log(element2)

var element3 = document.getElementsByClassName('supp')
console.log(element3)

var darkm = document.getElementById('dark')
console.log(darkm)

darkm.addEventListener("click", function () {
  console.log('Je suis ici après avoir cliqué')
  for (i = 0; i < element1.length; i++) {
    element1[i].classList.toggle('dark-mode')
  }
  for (i = 0; i < element2.length; i++) {
    element2[i].classList.toggle('dark-mode')
  }
  for (i = 0; i < element3.length; i++) {
    element3[i].classList.toggle('dark-mode')
  }
})
