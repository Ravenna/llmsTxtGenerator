import '@kingshott/iodine';
import axios from 'axios'
window.axios = axios;

function form() {
	return {
		inputElements: [],
		success: false,
		error: false,
        errors: [],
        submitting: false,
        formPartial: null,
        contact_method: null,
		loading: false,
		init() {
			this.inputElements = [...this.$el.querySelectorAll("[data-rules]")];
	  	},
       
		submit: function (event) {
			this.loading = true;
			let al = this;

			// empty the errors each time
			al.errors = [];

			// Get all inputs with rules
            this.inputElements = [...this.$el.querySelectorAll("[data-rules]")];

			// Figure out if any  fields are incorrect
			let invalidElements = [];
			this.inputElements.forEach(function(el){
				if(el.value == ''){
					invalidElements.push(el);
				}
			});


			if (invalidElements.length > 0) {
				event.preventDefault();
				this.loading = false;

				// scroll element into view
				document.getElementById(invalidElements[0].id).scrollIntoView();

				//And update the error messages.
				invalidElements.forEach(function(el){
					al.errors.push(el.name);
				});

			} else {
				console.log('submittable');
				// Submit this form
				this.submitForm();
			}
		},

	
		submitForm: async function() {

			let self = this;
			let action = this.$el.getAttribute('action');
           
			let body =  new FormData(this.$refs.form)
			console.log(body);

            // Send request as long as one is not pending
            if (!this.submitting) {
                this.submitting = true;

                // Axios it to the form action
                axios.post(
                    action,
                    body,
                    {
						headers: {
							'X-Requested-With' : 'XMLHttpRequest',
							'X-CSRF-Token' : await getToken()
						}
					}
                )
                  .then(function (response) {
					self.loading = false;
                    self.error = false;
                    self.success = true;
                    self.submitting = false;
                  })
                  .catch(function (er) {
					self.loading = false;

                    self.success = false;
                    self.error = true;
                    self.submitting = false;
                });
            }
		},
		change: function (event) {
            console.log('change');
			//Ignore all events that aren't coming from the inputs we're watching
			if (!this[event.target.name]) {
				return false;
			}

			if (event.type === "focusout") {
				this[event.target.name].blurred = true;
			}
            this.inputElements = [...this.$el.querySelectorAll("[data-rules]")];


			//Whether blurred or on input, we update the error messages
			this.updateErrorMessages();
		}
	};
}

export default form;