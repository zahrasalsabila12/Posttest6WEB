const toggle = document.getElementById('lightMode');
const body = document.querySelector('body');

toggle.addEventListener('click', function(){
    this.classList.toggle('bx-moon');
    if(this.classList.toggle('bx-sun')){
        body.style.background = '#EDDFB3';
        body.style.color = 'black';
        body.style.transition = '2s';
    }else{
        body.style.background = '#171010';
        body.style.color = 'white';
        body.style.transition = '2s';
    }
})
