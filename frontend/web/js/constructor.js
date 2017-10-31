/**
 * Created by alex on 22.06.2017.
 */

$(document).ready(function () {
  var slider;

  function initOwlCarousel() {
    slider = $('.image-slider').owlCarousel({
      loop: false,
      center: false,
      margin: 10,
      items: 10,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
        320: {
          items: 2
        },
        480: {
          items: 3
        },
        600: {
          items: 4
        },
        768: {
          items: 5
        },
        992: {
          items: 5
        },
        1000: {
          items: 8
        },
        1500: {
          items: 10
        }
      }
    });
  }

  initOwlCarousel();

  $('body').on('click', '.image-slider-item .img-ico', function () {
    var owlItemCount = $('.owl-carousel .owl-item');

    if (owlItemCount.length == 1) {
      $(this).closest('.owl-item').remove();
      slider.trigger('destroy.owl.carousel');
      return false;
    }

    $(this).closest('.owl-item').remove();
    slider.trigger('refresh.owl.carousel');
  });

  $('body').on('click', '.image-cart__btn', function (e) {
    var url = $(e.target).closest('.image-cart').find('img').data('big-img'),
      evt = new CustomEvent('printerstatechanged', { detail: url });

    window.dispatchEvent(evt);
  });

  filterObject = $('#constructor').length > 0 ? new Constructor() : 'no page';

  // $('#colorpicker-full-1').colorpicker({
  //     alpha: true,
  //     position: {
  //         my: 'center',
  //         at: 'center',
  //         of: window
  //     },
  //     modal: true
  // });
  // $('#colorpicker-full-2').colorpicker({
  //   alpha: true,
  //   position: {
  //     my: 'center',
  //     at: 'center',
  //     of: window
  //   },
  //   modal: true
  // });

  // $('#colorpicker-full-1').colorpicker({
  //     parts:	['map', 'bar', 'alpha', 'preview', 'hex'],
  //     alpha: true,
  //     position: {
  //         my: 'center',
  //         at: 'center',
  //         of: window
  //     },
  //     modal: true,
  //     layout: {
  //         map:		[0, 0, 1, 1],	// Left, Top, Width, Height (in table cells).
  //         bar:		[1, 0, 1, 1]
  //     },
  //     part:	{
  //         map:		{ size: 128 },
  //         bar:		{ size: 128 }
  //     }
  // });
  // $('#colorpicker-full-2').colorpicker({
  //     parts:	['map', 'bar', 'alpha', 'hex'],
  //     alpha: true,
  //     position: {
  //         my: 'center',
  //         at: 'center',
  //         of: window
  //     },
  //     modal: true,
  //     layout: {
  //         map:		[0, 0, 1, 1],	// Left, Top, Width, Height (in table cells).
  //         bar:		[1, 0, 1, 1],
  //     },
  //     part:	{
  //         map:		{ size: 128 },
  //         bar:		{ size: 128 }
  //     }
  // });

  var Grid = fabric.util.createClass(fabric.Grid, {

    type: 'Grid',

    initialize: function (options) {
      options || (options = {});

      this.callSuper('initialize', options);
      this.set('lines', options.lines || '');
    },

    toObject: function () {
      return fabric.util.object.extend(this.callSuper('toObject'), {
        lines: this.get('lines')
      });
    },

    _render: function (ctx) {
      this.callSuper('_render', ctx);

      // lines = {
      //   lineWith: 1,
      //   strokeStyle: '#aca593',
      //   points: [0, 1, 0, 2]
      // };

      this.lines.forEach(function (elem, index, array) {
        ctx.beginPath();
        ctx.lineWidth = elem.lineWidth;
        ctx.strokeStyle = elem.strokeStyle;
        ctx.moveTo(elem.points[0], elem.points[1]);
        ctx.lineTo(elem.points[2], elem.points[3]);
        ctx.stroke();
      });

      // ctx.font = '20px Helvetica';
      // ctx.fillStyle = '#333';
      // ctx.fillText(this.label, -this.width/2, -this.height/2 + 20);
    }
  })


});

function Constructor() {
  /*
   * Data elements
   *
   * */

  this.body = $('body');
  this.html = $('html');

  //canvas function btn
  this.addImgToCnv = $('[data-role="add-img"]');
  this.vCanvas = $('[data-role="vertical-canvas"]');
  this.hCanvas = $('[data-role="horizontal-canvas"]');
  this.uploadImg = $('[data-role="upload-image"]');
  this.sortImg = $('[data-role="sort-image"]');
  this.colorCnv = $('[data-role="color-picker-canvas"]');
  this.addCnv = $('[data-role="add-canvas"]');
  this.delCnv = $('[data-role="del-canvas"]');
  this.btnCnv = '[data-role="canvas-btn"]';
  this.rangeSliderCnv = $('[data-role="canvas-range-slider"]');
  this.showCnvFunc = $('[data-role="show-canvas-func"]');

  //image function btn
  this.chgSizeImg = $('[data-role="change-size-image"]');
  this.rotateImg = $('[data-role="rotate-image"]');
  this.addWishlist = $('[data-role="add-to-wishlist"]');
  this.colorImg = $('[data-role="color-picker-img"]');

  //color picker value
  this.pickerCnvElem = $('#colorpicker-full-1');
  this.pickerImgElem = $('#colorpicker-full-2');
  this.pickerCnv = '';
  this.pickerImg = '';
  //dropdown
  this.imageDropDown = $('#select-dropdown');

  //dialog object
  this.downLoadObj = {
    'text': 'При подтверждении дейсмтвия, Вы будете переадресованы в личный кабинет на страницу загрузки изображений',
    'btnYes': 'Потвердить',
    'btnNo': 'Отменить'
  };
  this.deleteObj = {
    'text': 'Вы действительно хотите удалить выбранный холст?',
    'btnYes': 'Да',
    'btnNo': 'Нет'
  };
  this.noActiveCnvObj = {
    'text': 'Выберите пожалуйста холст.'
  };
  this.noActiveImgObj = {
    'text': 'Выберите пожалуйста изображение.'
  };
  this.lastItemObj = {
    'text': 'Нельзя удалить последний холст.'
  };

  this.closeBtn = $('.modal-dialog .img-ico');

  //rangeSlider object
  this.canvasRange = '';
  this.imageRange = '';

  //maincanvas
  this.mainCanvasElem = $('[data-role="cavnas"]');
  this.mainCanvasStr = 'mainCanvas';
  this.canvasWrapper = $('[data-role="canvas-wrapper"]');
  this.canvasWidth = 691;
  this.canvasHeight = 927;
  this.canvasLROffset = 40;
  this.canvasTBOffset = 40;
  this.canvasOrientation = 'h';
  this.canvasCount = 1;
  this.CanvasObject = {};

  //selected object
  this.objectSelected = '';
  this.canvasGridObject = '';

  //scale ration
  this.scaleRation = 1;

  this.movementDirection = '';

  this.init();
}

Constructor.prototype = {
  changeCanvasWrapper: function () {
    this.canvasOrientation == 'h' ? this.canvasWrapper
      .addClass('image-func_type_horizontal').removeClass('image-func_type_vertical') :
      this.canvasWrapper
        .addClass('image-func_type_vertical').removeClass('image-func_type_horizontal');
  },
  initCanvas: function (count) {
    var _this = this,
      heightC, widthC, canvas;

    if (this.canvasOrientation === 'h') {
      widthC = this.canvasHeight;
      heightC = this.canvasWidth;
    } else {
      widthC = this.canvasWidth;
      heightC = this.canvasHeight;
    }

    canvas = new fabric.Canvas(this.mainCanvasStr + (typeof count != 'undefined' ? count : ''), {
      backgroundColor: '#fff',
      selectionColor: '#eee',
      selectionLineWidth: 1,
      width: widthC,
      height: heightC
    });

    //draw grid
    this.getCanvasGrid(canvas, widthC, heightC);
    canvas.renderAll();

    canvas.on('object:selected', function (options) {
      _this.objectSelected = options;
    });

    canvas.on('selection:cleared', function (options) {
      _this.objectSelected = '';
    });

    canvas.on({
      'object:moving': onChange,
      'object:scaling': onChange,
      'object:rotating': onChange,
    });

    function onChange(options) {
      options.target.setCoords();
      canvas.forEachObject(function (obj) {
        var selectObj = options.target;

        if (obj === options.target) return;

        if (options.target.intersectsWithObject(obj)) {
          console.log('intersection');
        }
      });
    }

    return canvas;
  },
  initDropDown: function () {

  },
  initColorPicker: function () {
    var that = this;

    this.pickerCnv = this.pickerCnvElem.colorpicker({
      alpha: true,
      position: {
        my: 'center',
        at: 'center',
        of: window
      },
      modal: true,
      ok: function (event, color) {
        that.setColorCnv(color, event);
      }
    });

    this.pickerImg = this.pickerImgElem.colorpicker({
      alpha: true,
      position: {
        my: 'center',
        at: 'center',
        of: window
      },
      modal: true,
      ok: function (event, color) {
        that.setColorImg(color, event);
      }
    });
  },
  initRangeSliderCanvas: function () {
    var _this = this, maxRange = _this.canvasCount - 3;
    this.canvasRange = new Slider('#range-slider', {
      min: 0,
      max: maxRange,
      step: 1,
      value: 0,
      handle: 'custom',
      tooltip: 'hide'
    });
  },
  initRangeSliderImage: function () {
    var _this = this;

    this.imageRange = new Slider('#modal-range-slider', {
      min: (_this.canvasWidth * _this.canvasHeight) / 6,
      max: _this.canvasWidth * _this.canvasHeight,
      step: 1,
      value: 0,
      handle: 'custom',
      tooltip: 'hide'
    });
  },
  showHideBtn: function (e) {
    var wrapper = $('.canvas-func__wrapper');

    if (wrapper.is(":hidden")) {
      e.target.innerText = 'Скрыть';
      $(this).addClass('opened').removeClass('closed');
    } else {
      e.target.innerText = 'Показать';
      $(this).removeClass('opened').addClass('closed');
    }

    wrapper.slideToggle();
  },
  triggerColorCanvas: function (e) {
    var data = this.getCanvasObject(),
      canvas = data[0],
      _this = this;

    e.stopPropagation();

    if (typeof canvas == 'undefined') {
      this.setModalDialog(this.noActiveCnvObj, e, 'modal-dialog_type_noActive', 'noActive');
      return false
    }

    this.pickerCnv.colorpicker('open');
  },
  triggerColorImg: function (e) {
    var data = this.getCanvasObject(),
      canvas = data[0],
      _this = this;

    e.stopPropagation();

    if (typeof canvas == 'undefined') {
      this.setModalDialog(this.noActiveCnvObj, e, 'modal-dialog_type_noActive', 'noActive');
      return false
    }

    if (
      typeof canvas.getActiveObject() == 'undefined' || canvas.getActiveObject() == null
    ) {
      this.setModalDialog(this.noActiveImgObj, e, 'modal-dialog_type_noActive', 'noActive');
      return false
    }

    this.pickerImg.colorpicker('open');
  },
  setColorImg: function (color, e) {
    var data = this.getCanvasObject(),
      canvas = data[0],
      _this = this,
      opacity = color.a || 1,
      f = fabric.Image.filters;

    function applyFilter(index, filter, canvas) {
      var obj = canvas.getActiveObject();
      obj.filters[index] = filter;
      obj.applyFilters(canvas.renderAll.bind(canvas));
    }

    applyFilter(14, new f.Tint({
      color: color.formatted,
      opacity: parseFloat(opacity)
    }), canvas);
  },
  setColorCnv: function (color, e) {
    var data = this.getCanvasObject(),
      canvas = data[0];

    if (typeof canvas == 'undefined') {
      this.setModalDialog(this.noActiveCnvObj, e, 'modal-dialog_type_noActive', 'noActive');
      return false
    }

    canvas.set({ 'backgroundColor': color.css });
    canvas.renderAll();
  },
  colorEvents: function () {
    var k = {
      init: function (event, color) {
        addToEventLog('Init', color.formatted, color.colorPicker.color.toCSS());
      },
      select: function (event, color) {
        addToEventLog('Select', color.formatted);
      },
      stop: function (event, color) {
        addToEventLog('Stop', color.formatted);
      },
      close: function (event, color) {
        addToEventLog('Close', color.formatted + ' r:' + color.rgb.r + ' g:' + color.rgb.g + ' b:' + color.rgb.b + ' a:' + color.a);
      },
      ok: function (event, color) {
        addToEventLog('Ok', color.formatted + ' r:' + color.rgb.r + ' g:' + color.rgb.g + ' b:' + color.rgb.b + ' a:' + color.a);
      },
      open: function (event, color) {
        addToEventLog('Open', color.formatted + ' r:' + color.rgb.r + ' g:' + color.rgb.g + ' b:' + color.rgb.b + ' a:' + color.a);
      },
      cancel: function (event, color) {
        addToEventLog('Cancel', color.formatted + ' r:' + color.rgb.r + ' g:' + color.rgb.g + ' b:' + color.rgb.b + ' a:' + color.a);
      }
    }
  },
  triggerCanvasBtn: function (e) {
    e.preventDefault();

    $(this.btnCnv).removeClass('active');
    $(e.target).closest(this.btnCnv).addClass('active');
  },
  changeCanvasRange: function (e) {
    var range = e.value.newValue - e.value.oldValue;
    $('.canvas-btn__inner').css('left', -e.value.newValue * 65);
  },
  uploadImageModalCnvFunc: function (e) {
    this.setModalDialog(this.downLoadObj, e, 'modal-dialog_type_download', 'uploadImg');
  },
  uploadImageCnvFunc: function () {

  },
  deleteModalCnvFunc: function (e) {
    var elem = $('.canvas-btn__wrapper').find('[data-role="canvas-btn"].active');


    if (elem.length == 0) {
      this.setModalDialog(this.noActiveCnvObj, e, 'modal-dialog_type_noActive', 'noActive');
    } else {
      this.setModalDialog(this.deleteObj, e, 'modal-dialog_type_delete', 'deleteCnv');
    }

    if (this.canvasCount == 1) {
      this.setModalDialog(this.lastItemObj, e, 'modal-dialog_type_lastItem', 'lastItem');
      return;
    }

  },
  deleteCnvFunc: function () {
    var elem = $('.canvas-btn__wrapper').find('[data-role="canvas-btn"].active'),
      count = elem.data('count'),
      name = this.mainCanvasStr + count,
      canvasElem = $('#' + this.mainCanvasStr + count).closest('.canvas-container'),
      newCanvasObject = [];

    //delete
    delete this.CanvasObject[this.mainCanvasStr + count]; //delete element from CanvasObject
    this.canvasCount--;
    canvasElem.remove();
    elem.closest('.canvas-btn').remove();

    if (this.canvasCount == 3) {
      this.canvasRange.destroy();
      $(this.canvasRange.element).remove();
      $('.canvas-btn__inner').css('left', 0);
    }

    //check range slider available
    if (this.canvasCount > 3) {
      $('.canvas-btn__inner').css('left', 0);
      this.updateCanvasRange(this.canvasCount - 3); //обновляем слайдер
    }

    this.updateCanvasList(); //обновляем список-контейнер
    this.updateCanvasCount(); // обновляем нумерацию
  },
  addCnvFunc: function (e) {
    $('.canvas-btn__inner').append(this.getCanvasBtnMarkUp(++this.canvasCount));
    this.canvasWrapper.append(this.getCanvasMarkUp(this.canvasCount));

    this.CanvasObject['' + this.mainCanvasStr + this.canvasCount] = this.initCanvas(this.canvasCount);

    this.updateCanvasList();  //обновляем список-контейнер

    //check range slider available
    if (this.canvasCount > 3) {
      if ($('[data-role="canvas-range-slider"]').length == 0) {
        $('.canvas-func__range-slider').append(this.getRangeSliderCanvas());
        this.initRangeSliderCanvas();
        $(this.canvasRange.element).on('change', this.changeCanvasRange.bind(this));
      }

      this.updateCanvasRange(this.canvasCount - 3); //обновляем слайдер
    }
  },
  rotateCanvasH: function (e) {
    var canvas,
      elem,
      data = this.getCanvasObject();

    if (typeof data[0] == 'undefined') {
      this.setModalDialog(this.noActiveCnvObj, e, 'modal-dialog_type_noActive', 'noActive');
      return false
    }

    canvas = data[0];
    elem = data[1];

    canvas.setWidth(this.canvasHeight, 'cssOnly');
    canvas.setHeight(this.canvasWidth, 'cssOnly');
    elem.data('position', 'h');

    this.deleteCanvasGrid(canvas);
    this.getCanvasGrid(canvas, this.canvasHeight, this.canvasWidth);

    if (this.canvasCount == 1) {
      this.canvasWrapper.removeClass('image-func_type_vertical').addClass('image-func_type_horizontal');
    } else {
      this.canvasWrapper.removeClass('image-func_type_vertical').removeClass('image-func_type_horizontal');
    }

  },
  rotateCanvasV: function (e) {
    var canvas,
      elem,
      data = this.getCanvasObject();

    if (typeof data[0] == 'undefined') {
      this.setModalDialog(this.noActiveCnvObj, e, 'modal-dialog_type_noActive', 'noActive');
      return false
    }

    canvas = data[0];
    elem = data[1];

    canvas.setWidth(this.canvasWidth, 'backstoreOnly');
    canvas.setHeight(this.canvasHeight, 'backstoreOnly');
    elem.data('position', 'v');

    this.deleteCanvasGrid(canvas);
    this.getCanvasGrid(canvas, this.canvasWidth, this.canvasHeight);

    if (this.canvasCount == 1) {
      this.canvasWrapper.removeClass('image-func_type_horizontal').addClass('image-func_type_vertical');
    } else {
      this.canvasWrapper.removeClass('image-func_type_vertical').removeClass('image-func_type_horizontal');
    }
  },
  renderCanvas: function (canvas) {
    canvas.renderAll();
  },
  getCanvasObject: function () {
    var elem = $('.canvas-btn__wrapper').find('[data-role="canvas-btn"].active'),
      count = elem.data('count');

    return [this.CanvasObject['' + this.mainCanvasStr + (typeof count == 'undefined' ? '' : count)], elem];

  },
  getCanvasGrid: function (canvas, widthC, heightC) {
    var _this = this;

    var lineT = new fabric.Line([0, this.canvasTBOffset, widthC, this.canvasTBOffset], { //x1, y1, x2, y2 width = 927 height = 691
      stroke: "#aca593",
      originX: 'center',
      originY: 'center',
      selectable: false,
      hoverCursor: 'normal'
    });


    var lineB = new fabric.Line([0, heightC - this.canvasTBOffset, widthC, heightC - this.canvasTBOffset], {
      stroke: "#aca593",
      originX: 'center',
      originY: 'center',
      selectable: false,
      hoverCursor: 'normal'
    });

    var lineL = new fabric.Line([this.canvasLROffset, 0, this.canvasLROffset, heightC], {
      stroke: "#aca593",
      originX: 'center',
      originY: 'center',
      selectable: false,
      hoverCursor: 'normal'
    });

    var lineR = new fabric.Line([widthC - this.canvasLROffset, 0, widthC - this.canvasLROffset, heightC], {
      stroke: "#aca593",
      originX: 'center',
      originY: 'center',
      selectable: false,
      hoverCursor: 'normal'
    });

    var text = widthC > heightC ? '297 мм' : '210 мм';
    var text2 = widthC < heightC ? '297 мм' : '210 мм';

    var topText = new fabric.Text(text,
      {
        left: 40,
        top: 0,
        fontSize: 14,
        originX: 'center',
        originY: 'center',
        selectable: false,
        hoverCursor: 'normal'
      });

    var topText2 = new fabric.Text(text2,
      {
        left: 0,
        top: -6,
        fontSize: 14,
        originX: 'center',
        originY: 'center',
        selectable: false,
        hoverCursor: 'normal'
      });

    var bottomText = new fabric.Text('Отступы для печати', {
      fontSize: 14,
      left: 40,
      top: 12,
      originX: 'center',
      originY: 'center',
      selectable: false,
      hoverCursor: 'normal'
    });

    var textGroup = '',
      textGroup2 = '';

    fabric.Image.fromURL('./img/arrow.png', function (img) {
      var img1 = img.set({ left: 0, top: 7, angle: 180 });

      fabric.Image.fromURL('./img/arrow.png', function (img) {
        var img2 = img.set({ left: 80, top: -5 });

        textGroup = new fabric.Group([img1, img2, topText, bottomText]);
        textGroup2 = new fabric.Group([img1, img2, topText2, bottomText]);

        textGroup.set(
          {
            top: (_this.canvasTBOffset - textGroup.getHeight()) / 2,
            left: (widthC - textGroup.getWidth()) / 2,
            selectable: false,
            hoverCursor: 'normal'
          });

        textGroup2.set({
          top: (heightC + textGroup2.getWidth()) / 2,
          left: (_this.canvasLROffset - textGroup.getHeight()) / 2,
          angle: -90,
          selectable: false,
          hoverCursor: 'normal'
        });

        _this.canvasGridObject = [lineR, lineL, lineB, lineT, textGroup2, textGroup];

        canvas.add(lineR, lineL, lineB, lineT, textGroup2, textGroup);
      });
    });
  },
  deleteCanvasGrid: function (canvas) {
    var _this = this;

    _this.canvasGridObject.forEach(function (elem, index, array) {
      canvas.remove(elem);
    });
  },
  changeImgSize: function (e) {
    var x = e.pageX,
      y = e.pageY,
      modalWidth,
      modalHeight,
      modalDialog;

    var data = this.getCanvasObject(),
      canvas = data[0],
      _this = this,
      image;

    if (typeof canvas == 'undefined') {
      this.setModalDialog(this.noActiveCnvObj, e, 'modal-dialog_type_noActive', 'noActive');
      return false
    }

    if (
      typeof canvas.getActiveObject() == 'undefined' || canvas.getActiveObject() == null
    ) {
      this.setModalDialog(this.noActiveImgObj, e, 'modal-dialog_type_noActive', 'noActive');
      return false
    }


    $('.modal-dialog').remove();
    $('body').append(this.getModalSlideMarkUp(e));

    modalDialog = $('.modal-dialog')
    modalHeight = modalDialog.height() / 2;
    modalWidth = modalDialog.width() / 2;


    modalDialog.css({
      top: y - modalHeight + 80,
      left: x - modalWidth
    });

    this.initRangeSliderImage();
    this.imageRange.on('change', this.changeImageRange.bind(this));

  },
  changeImageRange: function (e) {
    var range = e.newValue - e.oldValue,
      data = this.getCanvasObject(),
      canvas = data[0],
      image;

    image = canvas.getActiveObject();

    //calculate k
    var imgWidth = image.getWidth(),
      imgHeight = image.getHeight(),
      oldSquare = imgWidth * imgHeight,
      newSquare = e.newValue;

    k = newSquare / oldSquare;

    image.set({
      scaleX: k,
      scaleY: k
    });


    $(e.target).closest('.modal-dialog').find('input').val(e.newValue);
  },
  addImgCnvFunc: function (e) {
    var data = this.getCanvasObject(),
      canvas = data[0],
      _this = this;

    if (typeof canvas == 'undefined') {
      this.setModalDialog(this.noActiveCnvObj, e, 'modal-dialog_type_noActive', 'noActive');
      return false
    }

    fabric.Image.fromURL(e.detail, function (img) {
        canvas.add(img);
      }, {
        width: 360,
        height: 240,
        left: _this.canvasLROffset,
        top: _this.canvasTBOffset,
        lockRotation: true,
        borderColor: 'black',
        cornerColor: 'black',
        cornerSize: 8
      }
    );

    this.renderCanvas(canvas);
  },
  delImgCnvFunc: function (e) {
    console.log('printer state changed', e.detail);
  },
  rotateImgCnvFunc: function(e){
    var data = this.getCanvasObject(),
      canvas = data[0],
      _this = this;
    debugger;
    if (typeof canvas == 'undefined') {
      this.setModalDialog(this.noActiveCnvObj, e, 'modal-dialog_type_noActive', 'noActive');
      return false
    }

    if (
      typeof canvas.getActiveObject() == 'undefined' || canvas.getActiveObject() == null
    ) {
      this.setModalDialog(this.noActiveImgObj, e, 'modal-dialog_type_noActive', 'noActive');
      return false
    }

    var image = canvas.getActiveObject(),
      angle = image.getAngle();

    angle+=90;

    image.set({
      lockRotation: false
    });

    image.setAngle(angle);


    image.set({
      lockRotation: true
    });

    canvas.renderAll();
  },
  addAllImgCnvFunc: function (e) {
    var img = $('.owl-carousel img');

    var data = this.getCanvasObject(),
      canvas = data[0];

    if (typeof canvas == 'undefined') {
      this.setModalDialog(this.noActiveCnvObj, e, 'modal-dialog_type_noActive', 'noActive');
      return false
    }

    img.each(function () {
      var _this = this;

      fabric.Image.fromURL($(_this).data('thumb-img'), function (img) {
          canvas.add(img);
        }, {
          width: 360,
          height: 240,
          left: 0,
          top: 0,
          borderColor: 'black',
          cornerColor: 'black',
          cornerSize: 8
        }
      );
    });

    this.renderCanvas(canvas);
  },
  getModalMarkUp: function (data, className, type, e) {
    var style = (typeof data.btnYes == 'undefined') ? 'display: none' : '';
    var dataTarget = $(e.target).closest('.func-btn__btn').attr('data-target');

    dataTarget = dataTarget.replace(/#/, '');

    return '' +
      '<div class="modal-dialog dropdown-element ' + className + '" data-type="' + type + '" id="'+dataTarget+'">' +
      '<i class="img-ico img-ico-14"></i>' +
      '   <div class="modal-dialog__body">' + data.text + '</div>' +
      '   <div class="modal-dialog__btn-group" style="' + style + '">' +
      '       <button class="btn btn_type_yes" data-answer="yes">' + data.btnYes + '</button>' +
      '       <button class="btn btn_type_no" data-answer="no">' + data.btnNo + '</button>' +
      '   </div>' +
      '</div>';
  },
  getModalSlideMarkUp: function (e) {
    var dataTarget = $(e.target).closest('.func-btn__btn').attr('data-target');

    dataTarget = dataTarget.replace(/#/, '');

    return '' +
      '<div class="modal-dialog dropdown-element modal-dialog_type_slider" id="'+dataTarget+'">' +
      '   <i class="img-ico img-ico-14" style="/*display: none;*/"></i>' +
      '   <div class="modal-dialog__wrapper">' +
      '       <div class="modal-dialog__input-group modal-dialog__input-group_type_left">' +
      '           <label for="width">Ширина, мм</label>' +
      '           <input type="text" name="width" value="0">' +
      '       </div>' +
      '       <div class="modal-dialog__input-group modal-dialog__input-group_type_right">' +
      '           <label for="height">Высота, мм</label>' +
      '           <input type="text" name="height" value="0">' +
      '       </div>' +
      '   </div>' +
      '   <div class="modal-dialog__range-slider">' +
      '       <input' +
      '           id="modal-range-slider"' +
      '           class="range-slider"' +
      '           type="text"' +
      '           name="slider"' +
      '       >' +
      '   </div>' +
      '</div>';
  },
  getCanvasBtnMarkUp: function (count) {
    return '' +
      '<div class="canvas-btn">' +
      ' <div class="canvas-btn__btn" data-role="canvas-btn" data-count="' + count + '" data-position="h"><i class="img-ico img-ico-11"></i></div>' +
      ' <div class="canvas-btn__text">Холст ' + count + '</div>'
    '</div>';
  },
  getCanvasMarkUp: function (count) {
    return '' +
      '<canvas class="main-canvas" id="' + this.mainCanvasStr + count + '" data-role="canvas"></canvas>';
  },
  getRangeSliderCanvas: function () {
    return '' +
      '<input ' +
      'data-role="canvas-range-slider"' +
      'id="range-slider"' +
      'class="range-slider"' +
      'type="text"' +
      'name="slider"' +
      '>';
  },
  getAnswerSwitch: function (e) {
    var elem = $(e.target).closest('.modal-dialog').data('type');

    if ($(e.target).data('answer') == 'no') {
      this.closeFunc(e);
      return;
    }

    switch (elem) {
      case 'deleteCnv':
        this.deleteCnvFunc(e);
        this.closeFunc(e);
        break;
      case 'uploadImg':
        this.uploadImageCnvFunc(e);
        this.closeFunc(e);
        break;
      default:
        this.closeFunc(e);
        break;
    }
  },
  updateCanvasList: function () {
    var canvasInner = $('.canvas-btn__inner'),
      canvasLine = $('.canvas-btn__line');
    canvasInner.width(canvasInner.children().length * canvasInner.children().first().width());
    canvasLine.width(canvasInner.children().length * canvasInner.children().first().width())
  },
  updateCanvasCount: function () {
    var btn = $('.canvas-btn');

    btn.each(function (index, elem, array) {
      $(this).find('.canvas-btn__text').text('Холст ' + (index + 1));
    });
  },
  updateCanvasRange: function (count) {
    this.canvasRange.setAttribute('max', parseFloat(count));
    this.canvasRange.refresh();
  },
  setModalDialog: function (data, e, className, type) {
    var x = e.pageX,
      y = e.pageY,
      modalWidth,
      modalHeight,
      modalDialog;

    $('.modal-dialog').remove();
    $('body').append(this.getModalMarkUp(data, className, type, e));

    modalDialog = $('.modal-dialog');
    modalHeight = modalDialog.height() / 2;
    modalWidth = modalDialog.width() / 2;


    modalDialog.css({
      top: y - modalHeight + 80,
      left: x - modalWidth
    });
  },
  closeFunc: function (e) {
    $(e.target).closest('.modal-dialog').remove();
  },
  func: function (e) {
    console.log(e);
  },
  bindAllEvents: function () {
    var _this = this;

    //canvas func click
    this.addImgToCnv.on('click', this.addAllImgCnvFunc.bind(this));
    this.vCanvas.on('click', this.rotateCanvasV.bind(this));
    this.hCanvas.on('click', this.rotateCanvasH.bind(this));
    this.uploadImg.on('click', this.uploadImageModalCnvFunc.bind(this));
    this.sortImg.on('click', this.func.bind(this));
    this.colorCnv.on('click', this.triggerColorCanvas.bind(this));
    this.addCnv.on('click', this.addCnvFunc.bind(this));
    this.delCnv.on('click', this.deleteModalCnvFunc.bind(this));
    this.body.on('click', this.btnCnv, this.triggerCanvasBtn.bind(this));
    this.rangeSliderCnv.on('click', this.func.bind(this));
    this.showCnvFunc.on('click', this.showHideBtn.bind(this));

    //image func click
    this.chgSizeImg.on('click', this.changeImgSize.bind(this));
    this.rotateImg.on('click', this.rotateImgCnvFunc.bind(this));
    this.addWishlist.on('click', this.func.bind(this));
    this.colorImg.on('click', this.triggerColorImg.bind(this));

    //drop-down click
    this.imageDropDown.on('click', this.func.bind(this));

    //close btn
    this.body.on('click', '.modal-dialog .img-ico', this.closeFunc.bind(this));
    this.body.on('click', '[data-answer]', this.getAnswerSwitch.bind(this));

    //Listen to your custom event
    window.addEventListener('printerstatechanged', this.addImgCnvFunc.bind(this));

    //example
    // this.modal.on('hidden.bs.modal', function () {
    //   _this.productPage.removeClass('show').addClass('hide');
    // });

    // document.addEventListener('FinishRangeSlider', this.changeRange.bind(this));
    // window.addEventListener('resize', this.resizeWindow.bind(this));
  },
  init: function () {
    this.changeCanvasWrapper();
    this.CanvasObject[this.mainCanvasStr + this.canvasCount] = this.initCanvas(1);
    this.initColorPicker();
    this.bindAllEvents();
    console.log(this);
  }
};
