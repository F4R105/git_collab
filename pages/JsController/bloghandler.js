class Blog{
  constructor(){
      this.blog = document.querySelectorAll('.blog')
      this.like = document.querySelectorAll('.likeBtn')
      this.avater = document.querySelector('#user_avatar')
      this.isLiked = false
      this.likeColor = "red"
      this.unLikeColor = "aquamarine"
      this.savetoMemory()
      this.handleLike()
      this.handleNav()
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
    if(this.avater) this.avater.className = 'hide'
   this.avater.onclick = ()=>{
    this.avater.classList.toggle('show')
    console.log(this.avater)
   }
  }

}

new Blog()