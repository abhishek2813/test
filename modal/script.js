'use strict';

const modal = document.querySelector('.modal');
const overlay = document.querySelector('.overlay');
const btnopen = document.querySelectorAll('.show-modal');
const btnclose = document.querySelector('.close-modal');

for (let i = 0; i < btnopen.length; i++)
btnopen[i].addEventListener('click', function() {
    modal.classList.remove('hidden');
    overlay.classList.remove('hidden');
    console.log("button clicked");
    //alert("button clicked");
});
const close = function(){
    modal.classList.add('hidden');
    overlay.classList.add('hidden');
};
//console.log(btnopen);
btnclose.addEventListener('click',close)

document.addEventListener('keydown', function(e){
    if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
      
        close();
     
    }
});

