var grid = 20;
var width = 700;

window.canvas = new fabric.Canvas('c', { selection: false });



// Draw measuring area
// First = first point
// 
// Third = second point
// var measurementThickness = 60;
// window.canvas.add( new fabric.Rect({
//   left: 0,
//   top: 0,
//   fill: '#DDD',
//   selectable: false,
//   width: measurementThickness,
//   height: 1000
// }));
//
// window.canvas.add( new fabric.Rect({
//   left: 0,
//   top: 0,
//   fill: '#DDD',
//   width: 4000,
//   selectable: false,
//   height: measurementThickness
// }));
//
// var tickSize = 10;
// var tickSizeFoot = 40;
//
// // Drag grid
// var count = 1;
// var footCount = 0;
//
// for (var i = 0; i < (width / grid); i++) {
//   var offset = (i * grid),
//     location1 = offset + measurementThickness,
//     isFoot = ((i + 1) % 12) === 0 && i !== 0;
//
//
//   // Grid ------------
//
//   // vertical
//   window.canvas.add(new fabric.Line([ location1, measurementThickness, location1, width], { stroke: isFoot ? '#888' : '#ccc', selectable: false }));
//
//   // horizontal
//   window.canvas.add(new fabric.Line([ measurementThickness, location1, width, location1], { stroke: isFoot ? '#888' : '#ccc', selectable: false }));
//
//   // Ruler ------------
//
//   // left
//   window.canvas.add(new fabric.Line([measurementThickness - tickSize, location1, measurementThickness, location1], { stroke: '#888', selectable: false }));
//   window.canvas.add(new fabric.Text(count + "\"", {
//     left: measurementThickness - (tickSize * 2) - 7,
//     top: location1,
//     fontSize: 12,
//     fontFamily: 'san-serif'
//   }));
//
//   if(isFoot)
//   {
//     footCount++;
//
//     window.canvas.add(new fabric.Line([measurementThickness - tickSizeFoot, location1, measurementThickness, location1], { stroke: '#222', selectable: false }));
//     window.canvas.add(new fabric.Text(footCount + "\'", {
//       left: measurementThickness - (tickSizeFoot) - 7,
//       top: location1 + 4,
//       fontSize: 12,
//       fontFamily: 'san-serif'
//     }));
//   }
//
//
//   // top
//   window.canvas.add(new fabric.Line([location1, measurementThickness - tickSize, location1, measurementThickness], { stroke: '#888', selectable: false }));
//   window.canvas.add(new fabric.Text(count + "\"", {
//     left: location1,
//     top: measurementThickness - (tickSize * 2) - 4,
//     fontSize: 12,
//     fontFamily: 'san-serif'
//   }));
//
//   if(isFoot)
//   {
//     window.canvas.add(new fabric.Line([location1, measurementThickness - tickSizeFoot, location1, measurementThickness], { stroke: '#222', selectable: false }));
//     window.canvas.add(new fabric.Text(footCount + "\'", {
//       left: location1 + 4,
//       top: measurementThickness - (tickSizeFoot) - 7,
//       fontSize: 12,
//       fontFamily: 'san-serif'
//     }));
//   }
//
//
//
//   count++
// }
//
// var rect = new fabric.Rect({
//   width: 100,
//   height: 100,
//   top: 100,
//   left: 100,
//   fill: 'black'
// });
//
// window.canvas.add(rect);
// window.canvas.renderAll();
//
// // snap to grid
//
// window.canvas.on('object:moving', function(options) {
//   // Snap to grid
//   options.target.set({
//     left: Math.round(options.target.left / grid) * grid,
//     top: Math.round(options.target.top / grid) * grid
//   });
//
//   // Detect nearby plants
//   window.canvas.forEachObject(function(obj) {
//
//   });
// });
