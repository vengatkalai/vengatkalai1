var eb =103;
var output="EB bill your payment";
var unit=100;
var punit=3;
var z,y;


if(eb <=unit){
    console.log("free");
}
else{
    z=eb-unit;
    y=z*punit;
    console.log(output+" rupees "+y);
}
