function gallery() {
    return {
        open: false,

        showLarge: function(event){
            this.open = true;
            let image = event.currentTarget.dataset.image;
            let modalImg = document.getElementById('gallery-modal-image');
            modalImg.src = image;

            document.body.classList.add('modal-open');
        },

        // TODO
       
        // Add logos to the homepage and test sizing

        close:  function(){
            this.open = false;
            document.body.classList.remove('modal-open');

        }
    }
}

export default gallery;