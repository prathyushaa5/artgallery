function changeColor(){
   let x= document.querySelector(".name1");
   x.innerHTML=`Since 2002`;
   x.style.color="#415A77";
   x.style.backgroundColor="black";
}
function nochangeColor(){
    let x= document.querySelector(".name1");
    x.innerHTML=`ART<br> GALLERY`;
    x.style.color="";
    x.style.backgroundColor="#415A77";
 }