/**
 * Created by alex on 28.06.2017.
 */

fabric.Object.prototype.getAngleRadius = function () {
    return this.getAngle()/180*Math.PI;
};

canvas.onFpsUpdate = function () {
    console.log('FPS update');
};

rect.set('fill', 'red');
rect.set({ strokeWidth: 5, stroke: 'rgba(176,213,176,1)' });
rect.set('angle', 15).set('flipY', true);

//prototype
console.log(rect.getAngleRadius());
console.log(circle.getAngleRadius());

//object manipulation
console.log(canvas.getObjects());
console.log(canvas.item(0));
canvas.remove(rect);

//selection on/off
canvas.selection = false; // выключаем выделение
circle.set('selectable', false); // делаем объект невыделяемым
