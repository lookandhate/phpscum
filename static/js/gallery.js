const images = document.querySelectorAll('.slider .line img');
const sliderLine = document.querySelector('.line');
let selectedImage = 0;
let width;

function init(){
    console.log('resize');
   width = document.querySelector('.slider').offsetWidth;
   sliderLine.style.width = `${width*images.length}px`;
   images.forEach(item =>{
       item.style.width = `${width}px`;
       item.style.height = 'auto';
   });
   redraw();
}

window.addEventListener('resize', init);
init();

document.querySelector('.next').addEventListener('click',function(){
    selectedImage++;
    if (selectedImage >= images.length){
        selectedImage = 0;
    }
    redraw()
});

document.querySelector('.prev').addEventListener('click',function(){
    selectedImage--;
    if (selectedImage < 0){
        selectedImage = images.length - 1;
    }
    redraw()
});

function redraw(){
    sliderLine.style.transform = `translate(-${selectedImage * width}px`;
}