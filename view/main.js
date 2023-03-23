const loginHover=document.getElementById('login');
const homeHover=document.getElementById('home');
const loginNowHover=document.getElementById('loginNow');
const addHover=document.getElementById('add');
const returnHover=document.getElementById('return');
const infoHover=document.getElementById('moreInfo');


if(loginHover){loginHover.addEventListener('mouseover',()=>{
    loginHover.style.background='rgb(255, 71, 71)';
});
loginHover.addEventListener('mouseout',()=>{
    loginHover.style.background="";
})};

if(homeHover){homeHover.addEventListener('mouseover',() => {
    homeHover.style.color="rgb(156, 156, 156)";
});
homeHover.addEventListener('mouseout',() => {
    homeHover.style.color="";
})};

if(loginNowHover){loginNowHover.addEventListener('mouseover',() => {
    loginNowHover.style.color="rgb(156, 156, 156)";
});
loginNowHover.addEventListener('mouseout',() => {
    loginNowHover.style.color="";
});};

if(addHover){addHover.addEventListener('mouseover',() => {
    addHover.style.color="rgb(255, 121, 121)";
});
addHover.addEventListener('mouseout',() => {
    addHover.style.color="";
});};

if(returnHover){returnHover.addEventListener('mouseover',() => {
    returnHover.style.color="rgb(156, 156, 156)";
});
returnHover.addEventListener('mouseout',() => {
    returnHover.style.color="";
});};

if(infoHover){infoHover.addEventListener('mouseover',() => {
    infoHover.style.color="rgb(156, 156, 156)";
    infoHover.style.background="rgb(214, 214, 214)";
});
infoHover.addEventListener('mouseout',() => {
    infoHover.style.color="";
    infoHover.style.background="";
});
infoHover.onclick=function moreInfo(){
    location.href="http://ensias.um5.ac.ma/";
};
};