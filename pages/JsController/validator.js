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
}
#handleValidation(){
    this.form.onsubmit = (e)=>{
    e.preventDefault()
    for(const input of this.inputs){
    if(input.value==""){
    this.errorElement(input,`please fill ${input.name} field then proceed`)
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
    input.nextElementSibling ? input.nextElementSibling.style.display = 'none' :''
    if(this.Error ){
    this.Error.style.display = 'none'
   }
}
})    

}
errorElement(input,message){
    const err = document.createElement('p')
    err.className = 'field_feedback'
    err.textContent = message;
    input.parentElement.appendChild(err)
}
}

new Validator(form, input, Error )