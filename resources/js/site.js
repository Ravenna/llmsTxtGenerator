//imports
import form from '../js/components/form'
import Alpine from 'alpinejs';

// Global get CSRF token function (used by forms).
window.getToken = async () => {
    return await fetch('/!/DynamicToken/refresh')
        .then((res) => res.json())
        .then((data) => {
            return data.csrf_token
        })
        .catch(function (error) {
            this.error = 'Something went wrong. Please try again later.'
        })
}


Alpine.data("form", form);
window.Alpine = Alpine
Alpine.start()


// Ghosts
window.addEventListener('scroll', function(e){
    var scrolled = window.pageYOffset;
    var hundred = window.innerHeight + window.innerHeight ; //+ window.innerHeight * .4

    if(scrolled > hundred){
        resetParallax('ghost-one','one')
        resetParallax('ghost-two','two')
        resetParallax('ghost-three','three')
        resetParallax('ghost-four','four')
        resetParallax('ghost-five','five')

    } else {
        parallax('ghost-one','one')
        parallax('ghost-two','two')
        parallax('ghost-three','three')
        parallax('ghost-four','four')
        parallax('ghost-five','five')
    }
}); 

let oldScroll = 0;
let newScroll = 0;
function parallax(el,num) {
    let newVal = 0;
    let scrolled = window.pageYOffset;
    let ghost = document.getElementById(el);
    let windowHeight = window.innerHeight;
    
    newScroll = scrolled;
    newVal = scrolled * 0.3;

    if(num === 'one'){
        ghost.style.marginTop = 1.1 * newVal + 'px';
    } 
    else if(num === 'two'){
        ghost.style.marginTop = .8 * newVal + 'px';
    } 
    else if(num === 'three'){
        ghost.style.marginTop = .6 * newVal + 'px';
    }
    else if(num === 'four'){
        ghost.style.marginTop = '-'+ .7  * newVal + 'px';
    }
    else if(num === 'five'){
        ghost.style.marginTop = '-'+ 1.1 * newVal + 'px';
    } 
    
    oldScroll = newScroll;
};

function resetParallax(el, num){
    var ghost = document.getElementById(el);
    ghost.style.marginTop = 0+ 'px';

}

function reverseNum(n) {
    let r = n.toString().split('').reverse().join('');
    return Math.sign(n) * parseInt(r);
  }

  
