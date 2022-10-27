function nav() {
    return {
        open: false,

        burgle: function(event){
            this.open = true;
            document.body.classList.add('modal-open');
        },

        close:  function(){
            this.open = false;
            document.body.classList.remove('modal-open');
        }
    }
}

export default nav;