$(document).on('resize', '.hols', function() {


  var height_holst = $('.a4').innerHeight() - 20; // Высота холста
  var width_holst = $('.a4').innerWidth() - 35; // Высота холста

  var height_block = $(this).outerHeight(); // высота текущего блока
  var width_block = $(this).outerWidth(); // высота текущего блока

  var is_maximum = false;
  if (width_holst > width_block && height_holst > height_block) {
    is_maximum = true;
  }
  else{
    is_maximum = false;
  }

  if (is_maximum) {

  }
  else{
    
  }
  console.log(is_maximum);
  // console.log(height_block);
  // var height_holst = $('.a4').height(); // Высота холста
  // var index = $(this).index(); // Текущий блок который резайзим
  // var height_block = $(this).height(); // высота текущего блока
  // var kol = $(this).parent('.a4').find('.hols').length - 1; // Кол-во всех блоков
  // console.log(kol);

  // for (var i = index; i <= kol; i++) {
  //   var minustop = $('.tab_block_holst').offset().top; // Для расчета высоты 
  //   var thisheight =  parseInt($(this).parent('.a4').find('.hols').eq(i).height()); // Текущая высота всех последующих блоков
  //   var val = $(this).parent('.a4').find('.hols').eq(i).offset().top - minustop + thisheight; // Расположение сверху блока от холста 



  // if(val > height_holst){

  //   var nextlength =  $(this).parents('.tab_block_holst').find('.center.active').next().find('.a4').find('.hols').length;

  //   if(nextlength >= 10){
  //     $('.butadd').click();
  //     var nextnext = $(this).parents('.tab_block_holst').find('.center.active').next().next().find('.a4').find('.hols').length;
  //     if(nextnext >= 10){
  //       $(this).parent('.a4').find('.hols').eq(i).remove();
  //     }
  //   }
  //   var newval =  $(this).parent('.a4').find('.hols').eq(i);
  //   $('.butadd').trigger("click");
  //   $(this).parents('.tab_block_holst').find('.center.active').next().find('.a4').prepend(newval);



  // }
  // else{
  //   console.log('2');
  // }

// }



});
