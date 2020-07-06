window.onload = () => {

function download_on(e){

}

//canvasを画像化する

  
 

  function canvas_download(){
 
let e = document.body;
let a = document.querySelector('.download');
let c = document.querySelector('.download_content');

  html2canvas(e).then(function(canvas) {
    let dwn_btn = document.querySelector('#download_btn');
    dwn_btn.href  = canvas.toDataURL('image/png', 0.85);
    dwn_btn.download = 'download.jpg';

});
  }
  

  function eventhandle(){
    document.querySelector('#download_btn').addEventListener('click',canvas_download)
  }
  
  eventhandle();
}