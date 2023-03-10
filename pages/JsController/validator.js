//Initiation of all required element
const form = document.querySelector('form')
const Error = document.querySelector('.feedback_container p')
const input = document.querySelectorAll('input')

//decleration of class to handle validation
class Validator{
constructor(form,input, errorDisplay){
    this.form = form
    this.Error = errorDisplay;
    this.inputs = input
    this.btn = document.querySelector('button')
    this.#handleValidation()
    this.#handleError()
    this.#registrationHandler()
}
#handleValidation(){
    this.form.onsubmit = (e)=>{
    e.preventDefault()
    for(const input of this.inputs){
    if(input.value==""){
    this.errorElement(`please fill ${input.name} field then proceed`)
    input.focus()
    this.btn.disabled = true
    return false;
    }
   }
//Then after every thing is ok let us allow form to submit the form
   this.form.submit()
 
}
}
//now let us handleError
#handleError(){
    this.inputs.forEach(input=>{
    input.onkeydown = ()=>{
    this.btn.disabled ?  this.btn.disabled = false : ''
    if(this.Error ){
    this.Error.style.display = 'none'
   }
}
})    

}
errorElement(message){
   this.Error.parentElement.classList.add('show')
   this.Error.textContent = message
   this.Error.style.display = 'block'
}

#registrationHandler(){
if(this.form.id=="registration_form"){
    this.form.username.onkeydown = async ()=>{
    //   setTimeout(async ()=>{
    const response = await fetch('../processes/user_list.php')
    const json = await response.json()
    json.forEach(({user_name})=>{
    if(this.form.username.value.toLowerCase()==user_name.toLowerCase()){
    this.errorElement("sorry such username is already taken by another user")
    }
    })
   
    // },2000)
    }
    }
}
  
}

new Validator(form, input, Error )