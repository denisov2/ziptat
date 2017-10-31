$('#open').click(function() {
  $('.div').addClass('menu-open');
});


$('.close').click(function() {
  $('.div').removeClass('menu-open');
});

$('.vspdiv').click(function(g){
  if (!$(g.target).is('.vspdiv *')) {
    $('.spdiv').slideToggle(500);
  }
});
$(document).on('click','.imgw', function(){
  $(this).parent("div").remove();
});

$(document).on('click', '.xw', function(){
  $(this).parent().parent('div').remove();
});
$(document).on('click', '.plw', function(){
  var plwInput = $(this).siblings(".indi").children('input');
  if(plwInput.val() == "") {
    plwInput.addClass('error');
  } else {
   var name = plwInput.val();
   $('.fo .key-words').append('<div class="xdiv"><span>' + name + '</span><div class="imgw"><img src="/img/icon/redx.png" alt="" ><span>Удалить</span></div></div>');
   plwInput.val('');
   plwInput.removeClass('error');
 }
});
$(document).on('click', '.xw', function(){
  $(this).parent().parent().hide();
});

$(document).on('click', '.pen', function(){
  var texto = $(this).parent().siblings('.labl').text();
  console.log(texto);
  $(this).parent().siblings('.labl').hide();
  $(this).parent().siblings('.hut').show();
  $(this).parent().siblings('.hut').val(texto);
  $(this).hide();
  $(this).siblings('.okey').show();
});
$(document).on('click', '.okey', function(){
  var plwInput = $(this).parent().siblings('.hut');
  if(plwInput.val() == "") {
    plwInput.addClass('error');
  } else {
   var name = plwInput.val();
   $(this).parent().siblings('.labl').show();
   $(this).parent().siblings('.hut').hide();
   $(this).parent().siblings('.labl').text(name);
   $(this).hide();
   $(this).siblings('.pen').show();
   plwInput.val('');
   plwInput.removeClass('error');
 }
});

$(document).on('click', '.pla', function(){
 var plaInput = $(".asd");
 if(plaInput.val() == "") {
  plaInput.addClass('error');
} else {
  var name = plaInput.val();
  $('.so').append('<div class="p"><div class="pi">' + name + '</div><span class="blue">в обработке</span></div>');
  $('.spdiv').append('<div class="kat"><input type="checkbox" id="q"><input type="text" class="hut"><label class="labl" for="q">' + name + '</label><div class="ico"><img src="/img/icon/pen.png" class="pen" alt=""><img src="/img/icon/okey.png" class="okey" alt=""><img src="/img/icon/redx.png" class="xw" alt=""></div></div>');
  plaInput.val('');
  plaInput.removeClass('error');
}
});
$('[data-fancybox]').fancybox({
  image : {
    protect: true 
  }
});

$('[data-fancybox]').fancybox({
  video : {
    protect: true 
  }
});

$('.head').click(function(){
  $('.accarBodyblock').slideToggle(500);
});
$('.closee').hover(function(){
  $(this).next().show();
});
$('.clossse').mouseleave(function(){
  $(this).children("div").hide(500);
});
$('.clossse').click(function(){
  $(this).parent("div").hide();
});

$('.add-category').click(function(s){
  if (!$(s.target).is('.categor, .categor *')) {
    $('.categor').slideToggle(500);
    console.log('da');
  }
});
$('.add-categoryyy').click(function(){
  $('.accarBodyblock').show(500);
});


$('.categoryy li .span2lv').click(function(){
  $('.categoryy li').removeClass();
  $(this).toggleClass('active');
  $(this).parent().siblings().children('ul').slideUp();
  $(this).parent().siblings().children('.span2lv').removeClass('active');
  $(this).next().slideToggle();
});
$('.choose').click(function(){
  var top = $(this).parents('.item').offset().top +  $(this).parents('.item').height();
  var left = $(this).parents('.item').offset().left;
  var docwidth = $(document).width();
  var blockwidth = $(this).parents('.item').offset().left + $('.popup-item-block').width();
  console.log(docwidth , blockwidth);

  if(docwidth > blockwidth){
    $('.popup-item-block').show(500).css({
      right:'auto',
      top:top,
      left:left
    });
  }else{
    $('.popup-item-block').show(500).css({
      left:'auto',
      top:top,
      right:0
    }); 
  }
  $(this).parents('.item').append('<div class="chose">Выбрано</div>');
});

$('.material-icons').mouseover(function(){
  $('.punctirspan, dot').addClass('dot');
});
$('.material-icons').mouseout(function(){
  $('.punctirspan').removeClass('dot');
});
$('.down').mouseover(function(){
  $('.svernut').addClass('dot');
});
$('.down').mouseout(function(){
  $('.svernut').removeClass('dot');
});
$('.r-p-i-login').mouseover(function(){
  $('.fgh').addClass('qwe');
});
$('.r-p-i-login').mouseout(function(){
  $('.fgh').removeClass('qwe');
});



$('.item, .save, #open ').click(function(s){
  if (!$(s.target).is('.choose')) {
    $('body').addClass('noscroll');
   $('.wrapper').addClass('open');
   $('.wrapperr').addClass('open');
}
});

$('.menu').click(function(){
   $('.many').toggleClass('open-m');
// }
});

$('.closeew').click(function(){
  $(this).parents('.tatu-zakaz-block').hide(500);
});

$('.liked').hover(function(){
$(this).children('img').attr('src', '/img/icon/like.png');
});
$('.liked').mouseover(function(){
$(this).children('img').attr('src', '/img/icon/lovwh.png');
});
$('.like').hover(function(){
$(this).children('img').attr('src', '/img/icon/like.png');
});
$('.like').mouseover(function(){
$(this).children('img').attr('src', '/img/icon/lovwh.png');
});
$('.likeq').hover(function(){
$(this).children('img').attr('src', '/img/icon/like.png');
});
$('.likeq').mouseover(function(){
$(this).children('img').attr('src', '/img/icon/lovwh.png');
});

$(window).on('load', function(){
  $('.wrapper').removeClass('loading').addClass('loaded');
});


$('.item').click(function(d) {
  if (!$(d.target).is('.choose, .save , .liked, .like')) {

    var top = $(this).offset().top +  $(this).height() - 280;
    var left = $(this).offset().left;
    var docwidth = $(document).width();
    var blockwidth = $(this).offset().left + $('.popupuvl').width();
    imgq = $(this).children('.uvl').attr('data-src');
    console.log( top);
    $('.popupuvl .imgbl > img').prop('src',imgq);
    $('.popup-main').show().css({
    }); 
  }
});
$('.impor-1, .close').click(function(){
  $('.popup-main').hide();
  $('.wrapper').removeClass('open');
  $('body').removeClass('noscroll')
});

$(document).click(function(y) {
  if (!$(y.target).is('.popup-main *, .mobile, .nav, .mobile *, .nav *, #open, save-block-open, popup-saveblock, .item, save-popup-closse, .saveblock, closes-popup, impor, .popup-item-block, .save, .choose, input, .svernut, .closes,  .down, .clossse, a, .closee, .registrationh, .vhodh')) {
    $('.popup-main, .popup-saveblock, .popup-item-block').hide();
    $('.voydite').show();

    $('.registrationh').show();
    $('.vhodh').show();
    var windowWidth= $( window ).width();
    if(windowWidth < 768){
      $('.vhodn').slideUp();
      $('.registrationn').slideUp();
      $('.popup-saveblock').slideUp();
    };
    $('.wrapper, .wrapperr').removeClass('open');
    $('body').removeClass('noscroll');
  }
});
$('.csa').click(function(){
  $('.popup-main').removeClass('beffore');
  $('body').removeClass('noscroll');
});
$('.closes').click(function(){
  $('.popup-main').addClass('beffore');
  $('.popup-saveblock').slideUp();
  $('body').removeClass('noscroll');
});

$('.clsse,.closepopup').click(function(){
  $('.popup-item-gl').slideUp();
  $('.popup-item-block h4').slideUp();
  $(this).slideUp();
  $('.svernut').show();
  $('.down').show();
  $('.popup-item-block').slideUp(500);
});

$('.cart > img, .cart > span, .clssee').click(function(){
  $('.popup-item-blockk').toggle(500);
});

$(document).on('click' , 'a.button-faq' ,function(){
  var da = $(this).attr('data-caption');

  $('.fancybox-wrap').prepend('<h2>' + da + '</h2>');
});


$('.save').click(function(w){
  $('.popup-saveblock').addClass('save-block-open').show(500);
  $('body').addClass('noscroll');
$('.wrapper, .wrapperr').addClass('open');
});
$('.closes').click(function(){
 $('.wrapper').removeClass('open');
 $('.wrapperr').removeClass('open');
 if(windowWidth < 768){
   $('.voydite').show();
   $('.registrationh').show();
   $('.vhodh').show();
   $('.vhodn').slideUp();
   $('.registrationn').slideUp();
   $('.popup-saveblock').slideUp();
 }
});
$('.svernut, .down').click(function(){
  $('.closepopup').show(500);
  $('h4').css({'display':'flex'});
  $('.popup-item-gl').show(500);
});

$('.svernut').click(function(){
  $('.svernut').hide(500);
});


$('.svernut').click(function(){
  $('.svernut').hide(500);
});
$('.svernut').click(function(){
  $('.down').hide(500);
});
$('.down').click(function(){
  $('.svernut').hide(500);
});
$('.down').click(function(){
  $('.down').hide(500);
});

$('.vhodh').click(function(){
  $('.registrationh').hide(300);
  $('.voydite').hide(300);
  $('.registrationn').show(400);
});
$('.registrationh').click(function(){
  $('.vhodh').hide(300);
  $('.voydite').hide(300);
  $('.vhodn').show(400);
});
$('.accar.body-inner h3').click(function(){
  $(this).toggleClass('transformcl');
  $(this).parent().siblings().find('.container').slideUp(500);
  $('.body-inner h3').parent().removeClass('body-inners');
  $(this).next('.container').slideToggle(500);
  $(this).parent().addClass('body-inners');
});

$('.left-btn').on('click' , '.up-tatu' ,function(){
 $(this).remove();
});
$('.left-btn').on('click' , '.women-tatu' ,function(){
 $(this).remove();
});
$('.left-btn').on('click' , '.add-tatu' ,function(){
 $(this).remove();
});



$('.women-tatu span').click(function(){
  $(this).parent().remove();
});
$('.add-tatu span').click(function(){
  $(this).parent().remove();
});
$(".categoryy li span.arou").click(function(e){
  // random background for additional blocks
  var r = Math.round(Math.random() * 255 + 1),
      g = Math.round(Math.random() * 255 + 1),
      b = Math.round(Math.random() * 255 + 1);

  var name = $(this).parent('li').find('>span.arou').text();
  $('.left-btn').prepend('<div style="opacity:0.8; background: rgb('+r+','+g+','+b+')" class="add-tatu">'+ name +'<span><span class="skriva">Убрать из списка</span></span> </div>');
})


// mobile

$("#kek1").keyup(function(event){
    var s_val = $(this).val();
    if(event.keyCode == 13 && !(s_val == "")){
        var r = Math.round(Math.random() * 255 + 1),
            g = Math.round(Math.random() * 255 + 1),
            b = Math.round(Math.random() * 255 + 1);
        var name = $("#kek1").val();
        $('.left-btn').prepend('<div style="opacity:0.8; background: rgb('+r+','+g+','+b+')" class="add-tatu">'+ name +'<span><span class="skriva">Убрать из списка</span></span> </div>')
        $("#kek1").val();
    }
})

// screen

$("#kek2").keyup(function(event){
    var s_val = $(this).val();
    if(event.keyCode == 13 && !(s_val == "")){
        var r = Math.round(Math.random() * 255 + 1),
            g = Math.round(Math.random() * 255 + 1),
            b = Math.round(Math.random() * 255 + 1);
        var name = $("#kek2").val();
        $('.left-btn').prepend('<div style="opacity:0.8; background: rgb('+r+','+g+','+b+')" class="add-tatu">'+ name +'<span><span class="skriva">Убрать из списка</span></span> </div>')
        $("#kek2").val();
    }
})

$(document).on('click','.choose', function(){

});

$(document).on('click', '.csa, .clsse, .closepopup', function(){
  $('.wrapper').removeClass('open');
  $('.wrapperr').removeClass('open');
  $(this).parent().parent().hide();
});

$(document).on('click', '.pla', function(){
 var plaInput = $(".asd");
 if(plaInput.val() == "") {
  plaInput.addClass('error');
} else {
  var name = plaInput.val();
  $('.so').append('<div class="p"><div class="pi">' + name + '</div><span class="blue">в обработке</span></div>');
  plaInput.val('');
  plaInput.removeClass('error');
}
});

$('body').on('change' , '.color' , function(){
  var val = $(this).val();
  console.log(val);
  var mask = $(this).parents('.dive').find('.imgblock img').attr('src');
  $(this).parents('.dive').find('.imgblock').css({
    '-webkit-mask-box-image':'url('+mask+')',
    'background': val,
    'mask':'url('+mask+')',
    'mask-size': '100%'
  });
  $(this).parents('.dive').find('.imgblock img').css('visibility','hidden')
});

$('body').on('change' , '.colorw' , function(){
  var valq = $(this).val();
  console.log($(this));
  $(this).parents('.karusel').siblings('.holst').find('.a4').css('background', valq);
});


/* FOOTER */
heightfunction = function(){
  var height = $('footer').height();
  $('.wrapper').css({
    'padding-bottom': height
  });
}
heightfunction();
$(window).on('load' , function(){
  heightfunction();
})
$(window).on('resize' , function(){
  heightfunction();
});
/* FOOTER */

$(".toggo .dew").click(function(){
  $(this).siblings().removeClass('active');
  $(this).addClass('active');
  $('.for-tab').removeClass('open');
  $('.'+$(this).attr('data-tab')).addClass('open');
});

function onFileSelected(event) {
  var selectedFile = event.target.files[0];
  var reader = new FileReader();

  var imgtag = document.getElementById("myimage");
  // imgtag.title = selectedFile.name;

  reader.onload = function(event) {
    imgtag.src = event.target.result;
  };

  reader.readAsDataURL(selectedFile);
  $('.chosediv').css('display','none');
  $('.deleteimg').css('display','inline-block');
};
$('.deleteimg').click(function(){
  $('.deleteimg').css('display','none');
  $("#myimage").attr("src","/img/icon/foto.png");
  $('.chosediv').css('display','inline-block');
});

$('.imxxx').click(function(){
  $(this).parents('.owl-item').remove();
});

var templatea4,tempa4,a4,butadd;






$('.redkr').click(function(){
  $(this).parent().remove();
});

$('.but').mouseout(function(){
  $(this).children('.vspi').show();
});
$('.but').mouseleave(function(){
  $(this).children('.vspi').hide();
});

$(document).on('resize', '.hols', function() {
  console.log('da');
});

$(document).on('resize', '.hols', function() {


  var height_holst = $('.a4').outerHeight(); // Высота холста
  // var height_holst = $('.a4').height(); // Высота холста
  var index = $(this).index(); // Текущий блок который резайзим
  var height_block = $(this).height(); // высота текущего блока
  var kol = $(this).parent('.a4').find('.hols').length - 1; // Кол-во всех блоков
  console.log(kol);

  for (var i = index; i <= kol; i++) {
    var minustop = $('.tab_block_holst').offset().top; // Для расчета высоты 
    var thisheight =  parseInt($(this).parent('.a4').find('.hols').eq(i).height()); // Текущая высота всех последующих блоков
    var val = $(this).parent('.a4').find('.hols').eq(i).offset().top - minustop + thisheight; // Расположение сверху блока от холста 



    if(val > height_holst){

      var nextlength =  $(this).parents('.tab_block_holst').find('.center.active').next().find('.a4').find('.hols').length;

      if(nextlength >= 10){
        $('.butadd').click();
        var nextnext = $(this).parents('.tab_block_holst').find('.center.active').next().next().find('.a4').find('.hols').length;
        if(nextnext >= 10){
          $(this).parent('.a4').find('.hols').eq(i).remove();
        }
      }
      var newval =  $(this).parent('.a4').find('.hols').eq(i);
      $('.butadd').click();
      $(this).parents('.tab_block_holst').find('.center.active').next().find('.a4').prepend(newval);



    }
    else{
      console.log('2');
    }

  }
});


$(".par2").on('click', function(){
  $(".top-burger").show(400);
  $(".par2").css('display', 'none');
  $(".par7").css('display', 'block');
  $("body").addClass("body-fixed");
  $('.t-cont-mob.t-containere').css('display', 'none');
  $(".par3").css('display', 'block');
  $(".par8").css('display', 'none');
});

$(".par7").on('click', function(){
  $(".top-burger").hide(400);
  $(".par2").css('display', 'block');
  $(".par7").css('display', 'none');
  $("body").removeClass("body-fixed");
})


$('.par3').click(function(){
  $('.t-cont-mob').show(500);
  $(".par3").css('display', 'none');
  $(".par8").css('display', 'block');
  $('.top-burger').css('display', 'none');
  $(".par2").css('display', 'block');
  $(".par7").css('display', 'none');
  $("body").removeClass("body-fixed");
});

$('.par8').click(function(){
   $('.t-cont-mob').hide(500);
  $(".par3").css('display', 'block');
  $(".par8").css('display', 'none');
});

$(".bottom-block").on('click', function(){
  $(".slide").slideToggle();
  $(".bottom-block img").toggleClass("transform");
  $(".paar2").slideToggle(0);
});

$(".top-hov-1").on('click', function(){
  $(".top-win").css("display", "block");
});
$(".top-hov-2").on('click', function(){
  $(".top-win2").css("display", "block");
});
$(".closes-popup").on('click', function(){
  $(".top-win").css("display", "none");
  $(".top-win2").css("display", "none");
  $(".top-win3").css("display", "none");
  $(".top-win4").css("display", "none");
});

  $(".bg").on('click', function(){
    $(".toggo").slideToggle(400);
  });
  $(window).resize(function(){
    if ($(window).width() > 880) {
      $(".toggo").removeAttr("style");
    }
  });

$('.category-prepend > span').click(function(){
  $(this).parent().css({'display':'none'});
})

$('.tu-block > img').click(function(){
  $(this).parent().css({'display':'none'});
})

$('.non1').click(function(){
  $('.non1').css({'display':'none'});
})

$('.non2').click(function(){
  $('.non2').css({'display':'none'});
})

$('.non3').click(function(){
  $('.non3').css({'display':'none'});
})

$('.non4').click(function(){
  $('.non4').css({'display':'none'});
})

$(document).mouseup(function(e){
    var container = $(".top-win");
    if (container.has(e.target).length === 0){
        container.hide();
    }
});
$(document).mouseup(function(e){
    var container = $(".top-win2");
    if (container.has(e.target).length === 0){
        container.hide();
    }
});

    $('.save').on('click', function() {
      $('.po-pap').slideDown(500);
    });

    $('.closes-2, .exit-3').on('click', function() {
       $('.po-pap').slideUp(500);
    })

$('.pop-1').on('click', function() {
  $(".top-win3").css('display', 'block');
  $(".po-pap").css('display', 'none');
});
$('.pop-2').on('click', function() {
  $(".top-win4").css('display', 'block');
  $(".po-pap").css('display', 'none');
});

$('.ss-1').click(function(){
    $('.top-win').css({'display':'none'});
    $('.top-win2').css({'display':'block'});
})
$('.ss-2').click(function(){
    $('.top-win2').css({'display':'none'});
    $('.top-win').css({'display':'block'});
})

$('.ss-3').click(function(){
    $('.top-win4').css({'display':'none'});
    $('.top-win3').css({'display':'block'});
})
$('.ss-4').click(function(){
    $('.top-win3').css({'display':'none'});
    $('.top-win4').css({'display':'block'});
})

$('.login1').on('click', function() {
  $(".top-win3").css('display', 'block');
  $(".po-pap").css('display', 'none');
});
$('.regist1').on('click', function() {
  $(".top-win4").css('display', 'block');
  $(".po-pap").css('display', 'none');
});

$( window ).resize(function() {
  if ($(window).width() > 550) {
    $('.t-cont-mob.t-containere').css('display', 'none');
    $(".par3").css('display', 'block');
    $(".par8").css('display', 'none');
  }
});