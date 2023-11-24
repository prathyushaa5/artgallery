function changeColor(){
   let x= document.querySelector(".name1");
   x.innerHTML=`Since 2002`;
   x.style.color="grey";
   x.style.backgroundColor="black";
}
function nochangeColor(){
    let x= document.querySelector(".name1");
    x.innerHTML=`DANNY'S`;
    x.style.color="";
    x.style.backgroundColor="#415A77";
 }