/**
 * Created by alex on 28.06.2017.
 */

window.onload = function () {
  var canvas = new fabric.Canvas('c', {
    backgroundColor: 'rgba(176,213,176,1)',
    selectionColor: 'blue',
    selectionLineWidth: 2,
    width: 927,
    height: 600
  });


  //custom filter
  // fabric.Image.filters.Redify = fabric.util.createClass({
  //
  //   type: 'Redify',
  //
  //   //применить к контексту
  //   applyTo: function (canvasE1) {
  //     var context = canvasE1.getContext('2d'),
  //       imageData = context.getImageData(0, 0, canvasE1.width, canvasE1.height),
  //       data = imageData.data;
  //
  //     for (var i = 0, len = data.length; i < len; i += 4) {
  //       data[i] = 255;
  //       data[i + 1] = 255;
  //       data[i + 2] = 255;
  //     }
  //
  //     context.putImageData(imageData, 0, 0);
  //   }
  // });
  //
  // fabric.Image.filters.Redify.fromObject = function (object) {
  //   return new fabric.Image.filters.Redify(object)
  // };
  //
  //
  // var rect = new fabric.Rect({
  //   top: 0,
  //   left: 0,
  //   width: 60,
  //   height: 60,
  //   fill: 'red',
  //   angle: 45
  // });
  //
  // var circle = new fabric.Circle({
  //   radius: 20,
  //   fill: 'green',
  //   left: 100,
  //   top: 100
  // });
  //
  // var triangle = new fabric.Triangle({
  //   width: 20,
  //   height: 30,
  //   fill: 'blue',
  //   left: 50,
  //   top: 50
  // });
  //
  // var imgElement = document.getElementById('canvasImage');
  //
  // var image = new fabric.Image('canvasImage', {
  //   left: 200,
  //   top: 100,
  //   angle: 30,
  //   opacity: 0.85,
  //   scaleX: 0.5,
  //   scaleY: 0.5,
  // });
  //
  //
  // //canvas.add(rect);
  //
  // //rect
  // rect.set('fill', 'red');
  // rect.set({ strokeWidth: 5, stroke: 'rgba(176,213,176,1)' });
  // rect.set('angle', 15).set('flipY', true);
  //
  // //path
  // var path = new fabric.Path('M 0 0 L 200 100 L 170 200 z');
  // path.set({ left: 120, top: 120 });
  // //canvas.add(path);
  //
  //
  // //animation
  // rect.set('angle', 45);
  // rect.set({ 'left': 100, 'top': 10 });
  // rect.animate(
  //   'angle', //выбранный атрибут
  //   145, //финальный атрибут
  //   {
  //     //from: 25, //начальный угол
  //     onChange: canvas.renderAll.bind(canvas),
  //     duration: 2000,
  //     easing: fabric.util.ease.easeOutBounce
  //   }
  // );
  //
  //
  // fabric.Image.fromURL('./img/tatu/1.png', function (img) {
  //
  //   // добавляем фильтр
  //   img.filters.push(
  //     new fabric.Image.filters.Redify());
  //
  //   // применяем фильтры и перерисовываем канвас после применения
  //   img.applyFilters(canvas.renderAll.bind(canvas));
  //
  //   // добавляем изображения на холст
  //   //canvas.add(img);
  // });
  //
  //
  // //color function
  // var redish = new fabric.Color('#f55');
  // var greenish = new fabric.Color('#5f5');
  //
  // redish.overlayWith(greenish).toHex(); // "AAAA55"
  // redish.toGrayscale().toHex(); // "A1A1A1"
  //
  // //console.log(redish);
  //
  // //gradient function
  // var circle2 = new fabric.Circle({
  //   left: 100,
  //   top: 100,
  //   radius: 50
  // });
  //
  // circle2.setGradient('fill', {
  //   x1: -circle2.width / 2,
  //   y1: 0,
  //   x2: circle2.width / 2,
  //   y2: 0,
  //   colorStops: {
  //     0: "red",
  //     1: "blue"
  //   }
  // });
  //
  // //canvas.add(circle2);
  //
  //
  // //text function
  // var text = new fabric.Text(
  //   'hello worl',
  //   {
  //     left: 100,
  //     top: 100,
  //     fontSize: 140,
  //     fontStyle: 'italic',
  //     fontFamily: 'Hoefler Text'
  //   }
  // );
  //
  // //event function
  // canvas.on('mouse:down', function (options) {
  //   if (options.target) {
  //     console.log(options.target);
  //   }
  //
  // });
  // //canvas.add(text);
  //
  //
  // var circle3 = new fabric.Circle({
  //   radius: 100,
  //   fill: '#eef',
  //   scaleY: 0.5,
  //   originX: 'center',
  //   originY: 'center'
  // });
  //
  // var rect3 = new fabric.Text('hello world', {
  //   fontSize: 30,
  //   originX: 'center',
  //   originY: 'center'
  // });
  //
  // var group = new fabric.Group([circle3, rect3], {
  //   left: 300,
  //   top: 300,
  //   angle: -10
  // });
  //
  // //canvas.add(group);
  //
  // group.item(0).setFill('red');
  // group.item(1).set({
  //   text: 'trololo',
  //   fill: 'white'
  // });
  //
  // group.addWithUpdate(new fabric.Rect({
  //   left: group.getLeft() + 100,
  //   top: group.getTop() + 100,
  //   fill: 'black',
  //   width: 60,
  //   height: 60,
  //   originX: 'center',
  //   originY: 'center'
  // }));
  //
  // var Point = fabric.util.createClass({
  //   initialize : function (x, y) {
  //     this.x = x || 0;
  //     this.y = y || 0;
  //   },
  //   toString: function(){
  //     return this.x + '/' + this.y;
  //   }
  //
  // });
  //
  // var ColoredPoint = fabric.util.createClass(Point, {
  //   initialize: function(x, y, color){
  //     this.callSuper('initialize', x, y);
  //     this.color = color || '#000';
  //   },
  //   toString: function(){
  //     return this.callSuper('toString') + ' (color: ' + this.color + ')';
  //   }
  // });
  //
  // var LabeledRect = fabric.util.createClass(fabric.Rect, {
  //
  //   type: 'labeledRect',
  //
  //   initialize: function(options) {
  //     options || (options = { });
  //
  //     this.callSuper('initialize', options);
  //     this.set('label', options.label || '');
  //   },
  //
  //   toObject: function() {
  //     return fabric.util.object.extend(this.callSuper('toObject'), {
  //       label: this.get('label')
  //     });
  //   },
  //
  //   _render: function(ctx) {
  //     this.callSuper('_render', ctx);
  //
  //     ctx.font = '20px Helvetica';
  //     ctx.fillStyle = '#333';
  //     ctx.fillText(this.label, -this.width/2, -this.height/2 + 20);
  //   }
  // });
  //
  //
  // var labeledRect = new LabeledRect({
  //   top: 100,
  //   left: 100,
  //   width: 100,
  //   height: 100,
  //   fill: '#ff3',
  //   label : 'text'
  // });
  //
  // labeledRect.set({lockMovementY : true });
  //
  // labeledRect.set({
  //   borderColor: 'red',
  //   cornerColor: 'green',
  //   cornerSize: 6
  // });
  //
  // canvas.add(labeledRect);

  var Grid = fabric.util.createClass(fabric.Line, {

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

      // this.lines.forEach(function (elem, index, array) {
      //   ctx.beginPath();
      //   ctx.lineWidth = elem.lineWidth;
      //   ctx.strokeStyle = elem.strokeStyle;
      //   ctx.moveTo(elem.points[0], elem.points[1]);
      //   ctx.lineTo(elem.points[2], elem.points[3]);
      //   ctx.stroke();
      // });

        ctx.beginPath();
        ctx.lineWidth = this.lines[0].lineWidth;
        ctx.strokeStyle = this.lines[0].strokeStyle;
        ctx.moveTo(this.lines[0].points[0], this.lines[0].points[1]);
        ctx.lineTo(this.lines[0].points[2], this.lines[0].points[3]);
        ctx.stroke();


      // ctx.font = '20px Helvetica';
      // ctx.fillStyle = '#333';
      // ctx.fillText(this.label, -this.width/2, -this.height/2 + 20);
    }
  });

  var gridOptions = {
    lines: [
      {
        lineWidth: 1,
        strokeStyle: '#000',
        points: [10, 10, 390, 190]
      },
      {
        lineWidth: 1,
        strokeStyle: '#000',
        points: [0, 671, 927, 671]
      },
      {
        lineWidth: 1,
        strokeStyle: '#000',
        points: [20, 0, 20, 691]
      },
      {
        lineWidth: 1,
        strokeStyle: '#000',
        points: [907, 0, 907, 691]
      }
    ]
  };

  var gridK =  new Grid(gridOptions);
  var line = new fabric.Line(
    [0, 20, 927, 20], { //x1, y1, x2, y2
      stroke: "#aca593",
      selectable: false,
      originX: 'center',
      originY: 'center'
  });
  canvas.add(gridK, line);

  canvas.renderAll();

  console.log(canvas.getObjects());


};


var k = {
  "angle" : 0,
  "fill" : "green",
  "flipX" : false,
  "flipY" : false,
  "hasBorders" : true,
  "hasControls" : true,
  "hasRotatingPoint" : false,
  "height" : 20,
  "left" : 50,
  "opacity" : 1,
  "overlayFill" : null,
  "perPixelTargetFind" : false,
  "scaleX" : 1,
  "scaleY" : 1,
  "selectable" : true,
  "stroke" : null,
  "strokeDashArray" : null,
  "strokeWidth" : 1,
  "top" : 50,
  "transparentCorners" : true,
  "type" : "rect",
  "width" : 20
}
