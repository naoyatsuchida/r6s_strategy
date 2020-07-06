window.onload = () => {

  
  
  
  function canvas_download(){
    document.querySelectorAll('.canvas_download').forEach(function(e){

      console.log(e);
    })
  }
  
  function eventhandle(){
    document.querySelector('#download').addEventListener('click',canvas_download)
  }
  
  eventhandle();
}