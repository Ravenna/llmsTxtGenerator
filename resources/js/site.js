//imports
import form from '../js/components/form'
import gallery from '../js/components/gallery'
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
Alpine.data("gallery", gallery);
window.Alpine = Alpine
Alpine.start()


window.addEventListener('load', (event) => {
    let current = window.location.pathname;
    if (current == '/') {
        startStopIntroAnim();
    }


    //
    //
    // Eyeball tracking
    let eyeBalls = document.getElementsByClassName('eb')
    document.onmousemove = (event) => {
        var x = event.clientX * 100 / window.innerWidth / 2 + "%";
        var y = event.clientY * 100 / window.innerHeight /  2 + "%";
        for(var index=0;index < eyeBalls.length;index++){
            eyeBalls[index].style.transition = "0s";
            eyeBalls[index].style.left = x;
            eyeBalls[index].style.top = y;
        }
    }
    
    document.onmouseout = (event) => {
        for(var index=0;index < eyeBalls.length;index++){
            eyeBalls[index].style.transition = "0.7s";
            eyeBalls[index].style.left = "calc(50% - 15px)";
            eyeBalls[index].style.top = "calc(50% - 15px)";
        }
    }
});

window.addEventListener('scroll', function(e){
    let current = window.location.pathname;
    if (current == '/') {
        startStopIntroAnim();
    }
    
});

function startStopIntroAnim(){
    let scrolled = window.pageYOffset;
    let hundred = window.innerHeight
    let sectionOne = document.getElementById('section-1');
    let logo = document.getElementById('logo');

    if(scrolled < (hundred - (hundred * 0.2))){
        sectionOne.classList.add('animate');
        logo.classList.remove('shown');
    } else {
        sectionOne.classList.remove('animate');
        logo.classList.add('shown');
    }
}






  
