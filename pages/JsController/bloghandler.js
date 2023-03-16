class Blog{
  constructor(){
      this.blogs = document.querySelectorAll('.blog')
      this.like = document.querySelectorAll('.likeBtn')
      this.avater = document.querySelector('#user_avatar')
      this.isLiked = false
      this.likeColor = "red"
      this.unLikeColor = "aquamarine"
      this.savetoMemory()
      this.handleLike()
      this.handleNav()
      this.handleDelete()
    }
 handleLike(){
   const liked = JSON.parse(localStorage.getItem('users')) || false
   if(liked){
    this.like.forEach((likedbtn, btnindex)=>{
    liked.forEach(liked=>{
      if(liked.btnid==btnindex){
      likedbtn.style.backgroundColor = this.likeColor
      likedbtn.textContent = 'Liked'
      }
   }) 
   })
  }
  }

  savetoMemory(){
    this.like.forEach((likebtn, index)=>{
       likebtn.onclick = ()=>{
       const button = {
        btnstatus:'isLiked',
        btnid: index
       }
  
     const userArr = JSON.parse(localStorage.getItem('users')) || []
     if(userArr[0]!="undefined"){
      this.isLiked = false
      userArr.forEach(datas=>{
      if(datas.btnid == index){
        this.isLiked = true
      }
      })
  
      if(this.isLiked){
      likebtn.style.backgroundColor = this.unLikeColor
      likebtn.textContent = 'Like'
      const memoryData = userArr.filter(data=>{
        return data.btnid != index
      })
      localStorage.setItem('users',JSON.stringify(memoryData))
      }
      else{
        userArr.push(button)
        localStorage.setItem('users',JSON.stringify(userArr))
        likebtn.style.backgroundColor = this.likeColor
        likebtn.textContent = 'Liked'
      }
      
     }
     else{
     userArr.push(button)
     localStorage.setItem('users',JSON.stringify(userArr))
     likebtn.style.backgroundColor = this.likeColor
     likebtn.textContent = 'Liked'
     }
     }
   })

  }

  handleNav(){
    if(this.avater){
      const dropdown = this.avater.querySelector('#dropdown')
      dropdown.className = 'hide'
      this.avater.onclick = ()=>{
       dropdown.classList.contains('hide') ?  dropdown.classList.remove('hide') :  dropdown.classList.add('hide')
       }
    }
  }
  handleDelete(){
   //first lets select all neccessary information between one blog post 
    this.blogs.forEach(blog=>{
      const verifydelete = blog.querySelector('.verify_delete')
      const verification_buttons = verifydelete.querySelector('.verification_buttons')
      const blog_buttons = blog.querySelector('.blog_buttons')
      //lets us hide verifybutton
      this.hideVerifyButton(verifydelete)
      //then show verify button when blog post is cliked
      blog_buttons.querySelector('.deleteBtn').onclick = ()=>{
       verifydelete.classList.toggle('show')
      //once it show also let us fire event for hide it
       verification_buttons.querySelector('.cancelDeleteBtn').onclick = ()=>{
        this.hideVerifyButton(verifydelete)
       }  
      }
    })
  }

  hideVerifyButton(verifydelete){
    verifydelete ? verifydelete.classList.remove('show') : ''
  }

}

new Blog()