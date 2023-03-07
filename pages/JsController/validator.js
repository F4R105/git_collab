//Initiation of all required element
const form = document.querySelector('form')
const Error = document.querySelector('feedback_container p')
const input = document.querySelectorAll('input')

//decleration of class to handle validation
class Validator{
constructor(form,input, errorDisplay){
    this.form = form
    this.Error = errorDisplay;
    this.inputs = input
    this.#handleValidation()
    this.#handleError()
}
#handleValidation(){
//first lets listen submision event for any form
    this.form.onsubmit = (e)=>{
//let us disable form to submit any value first
    e.preventDefault()
//let us listen if there is any input remained as empty
   for(const input of this.inputs){
    if(input.value==""){
//show user such input
    input.focus()
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
     if(this.Error){
     this.Error.style.display = 'none'
    }
    }
    })    

}
}

new Validator(form, input, Error )