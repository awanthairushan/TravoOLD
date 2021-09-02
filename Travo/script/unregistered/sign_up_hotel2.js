    const contact1 = document.getElementById('contact1')
    const contact2 = document.getElementById('contact2').value.length
    const rep_contact1 = document.getElementById('rep_contact1')
    const rep_contact2 = document.getElementById('rep_contact2').value.length
    const password = document.getElementById('password')
    const password2 = document.getElementById('retype-password')
    const form = document.getElementById('sign_up_form-hotel');
    const errorElement = document.getElementById('error')
    const log = document.getElementById('log');
    
    form.addEventListener('submit', (e) => {
        let messages = [] 
        
      //   if (contact1.value === '' || contact1.value == null) {
      //       messages.push(' First contact number is required')
      //   }
      //   if(contact1.value.length != 10){
      //     messages.push(' First contact number is not valid')
      // }
      if (contact1.value === '' || contact1.value == null) {
        messages.push('  First contact number is required')
    }
      if(contact1.value.length != 10){
          messages.push(' First contact number is not valid')
      }   
      if (rep_contact1.value === '' || rep_contact1.value == null) {
          messages.push(' Representative First contact number is required')
      }
        if(rep_contact1.value.length != 10){
            messages.push(' Representative First contact number is not valid')
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

        var eduInput = document.getElementsByClassName('inputs[]');
        for (i=0; i<eduInput.length; i++)
          {
           if (eduInput[i].value == "")
            {
              switch(i){
                case 0:
                  
                  messages.push("Name is required")
                  break
                case 1:
                  
                  messages.push("Ëmail is required")
                  break  
                  case 2:
                  
                  messages.push("First contact number is required")
                  break 
                  case 3:
                  
                  messages.push("Password is required")
                  break 
                  case 4:
                  messages.push("Please type the password again")
                  break 
                  case 5:
                  messages.push("Address line 1 is required")
                  break 
                  case 6:
                  messages.push("Address line 2 is required")
                  break 
                  case 7:
                    messages.push("City of the address is required")
                    break
                    case 8:
                      messages.push("Description is required")
                      break
                      case 9:
                        messages.push("Location link is required")
                        break
                        case 10:
                          messages.push("Representative's name is required")
                          break
                          case 11:
                            messages.push("Representative's Email address is required")
                            break
                            case 12:
                              messages.push("Representative's contact number 1 is required")
                              break
                                  case 15:
                                    messages.push("Siingle rooms Count is required")
                                    break
                                    case 16:
                                      messages.push("Single rooms Price is required")
                                      break
                                      case 17:
                                      messages.push("Double rooms count is required")
                                      break
                                      case 18:
                                      messages.push("Double rooms Price is required")
                                      break
                                      case 18:
                                      messages.push("Massive room capacity is required")
                                      break
                                      case 20:
                                      messages.push("Massive room count is required")
                                      break
                                      case 21:
                                      messages.push("Massive room price is required")
                                      break          
              }
            }
          }
       
          
          if (messages.length > 0) {
            e.preventDefault()
            errorElement.innerText = messages.join('\n')
          }
  
          
      })
      
      
     
      

        
      