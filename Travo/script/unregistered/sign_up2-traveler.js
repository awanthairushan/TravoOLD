
    const name = document.getElementById('name')
    const email = document.getElementById('email')
    const contact1 = document.getElementById('contact1')
    const contact2 = document.getElementById('contact2')
    const line1 = document.getElementById('address-line1')
    const line2 = document.getElementById('address-line2')
    const city = document.getElementById('city')
    const password = document.getElementById('password')
    const password2 = document.getElementById('retype-password')
    const form = document.getElementById('form-sign_up-traveler')
    const errorElement = document.getElementById('error')
    const log = document.getElementById('log');
    
    
    form.addEventListener('submit', (e) => {
        let messages = []

        var inputs = document.getElementsByClassName('inputs[]');
      	for (i=0; i<inputs.length; i++)
		    {
		      if (inputs[i].value == "")
			    {
		 	      switch(i){
                case 0:
                  messages.push('Name is required')
                  break
                case 1:
                  messages.push('Email is required')
                  break
                case 2:
                  messages.push('First contact is required')
                  break
                case 3:
                  messages.push('Password is required')
                  break
                case 4:
                  messages.push('Retype password is required')
                  break
                case 5:
                  messages.push('Address line 1 is required')  
                  break
                case 6:
                  messages.push('Address line 2 is required')  
                  break
                case 7:
                  messages.push('City is required')
             }
			    }
		    }

        // if(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)){
        //     messages.push(' Email is not valid')
        // }
      
        if(contact1.value.length != 10){
            messages.push(' First contact number is not valid')
        }

        if(!(contact2.value.length == 10 || contact2.value.length == 0)){
          messages.push(' Second contact number is not valid')
      }

        if (password.value.length <= 6) {
          messages.push(' Password must be longer than 6 characters')
        }
      
        if (password.value.length >= 20) {
          messages.push(' Password must be less than 20 characters')
        }

        if(password.value != password2.value){
            messages.push(' Entered passwords does not match')
        }
      
        if(!(document.getElementById('tc').checked)){
            messages.push(' Accept Terms and conditions to continue further')
        }

        if (messages.length > 0) {
          e.preventDefault()
          errorElement.innerText = messages.join('\n')
        }  
      })