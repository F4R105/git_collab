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
    this.isSameName = false
    this.btn = document.querySelector('button')
    this.#handleValidation()
    this.#handleError()
    this.#fetchdata()    
}
#handleValidation(){
    this.form.onsubmit = (e)=>{
    e.preventDefault()
    for(const input of this.inputs){
    if(input.value==""){
    this.errorElement(`please fill ${input.name} field then proceed`)
    input.focus()
    return false;
    }
   }
   this.form.submit()
 
}
}
#handleError(){
    this.inputs.forEach(input=>{  
    input.onkeydown = ()=>{
    console.log(this.isSameName)  
    if(this.isSameName && this.form.id=="registration_form"){
       this.inputs[0].focus()
    }
    if(this.Error ){
    this.Error.style.display = 'none'
    this.btn.disabled = false
   
   }
}
})    

}
errorElement(message){
   this.Error.parentElement.classList.add('show')
   this.Error.textContent = message
   this.Error.style.display = 'block'
}

async #fetchdata(){
    const response = await fetch('../processes/user_list.php')
    const json = await response.json() 
    if(this.form.id=="registration_form"){
    this.form.username.oninput = async (e)=>{
        this.#registrationHandler(json)
    }
    }
}

#registrationHandler(datas){
       this.isSameName = false
        datas.forEach(({user_name})=>{
        if(this.form.username.value.toLowerCase()==user_name.toLowerCase()){
        this.errorElement("sorry such username is already taken by another user")
        this.btn.disabled = true
        this.isSameName = true
        }
        })

}
  
}

new Validator(form, input, Error )

// ***********************************************************************************************************************************

// ******  **       *  * *               * *     *****     *       *      **     *      * **        **    ******** *      * *   **   *
// *       * *     *   *    *         *       *  *          *     *      *  *    *      * *  *     *  *       *    *     *    * * *  *
// ****    *  *   *    *     *       *         * ****        *   *      * *  *   *      * *   *   * *  *      *    *    *      **  * *
// *       *   * *     *   *         *         * *            * *      *      *  *      * *  *   *      *     *    *     *   *  *   **
// ******  *    *      ***            * ** * *   *             *      *        * *****  * * *   *        *    *    *       *    *    *

// ************************************************************************************************************************************