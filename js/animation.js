let upbutton = document.getElementById('up-button');
let chaticon = document.getElementById('chat-icon');



window.onscroll = function(){
       if(scrollY >= 400){   
        upbutton.style.display ='block'; 
        
          }else{      
            upbutton.style.display = 'none';
               
          } 
      };



upbutton.onclick =function(){
  scroll({
      top:0,
      left:0,
      behavior:"smooth"
  })
  
};