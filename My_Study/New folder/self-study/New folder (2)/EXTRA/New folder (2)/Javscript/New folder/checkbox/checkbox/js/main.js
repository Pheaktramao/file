let colors = document.getElementsByName('colors');
function setColor(event){
    document.body.style.background = event.target.value;
}
for (const color of colors) {
    color.addEventListener('change',setColor)
    
}