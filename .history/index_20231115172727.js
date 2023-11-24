function changeColor(){
   let x= document.querySelector(".name1");
   x.innerHTML=`Since 2012`;
   x.style.color="white";
   x.style.backgroundColor="black";
}
function nochangeColor(){
    let x= document.querySelector(".name1");
    x.innerHTML=`Art Gallery`;
    x.style.color="";
    x.style.backgroundColor="white";
 }