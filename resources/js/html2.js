window.onload = () => {
let strategy_name =  document.querySelector('.download__content__name').dataset.name;

//canvasを画像化する

  
 

//   function canvas_download(){
 
// let e = document.body;
// let g = document.querySelector('.download');
// let c = document.querySelector('.download_content');

//   html2canvas(e).then(function(canvas) {
//     let dwn_btn = document.createElement('a');
//     dwn_btn.href  = canvas.toDataURL('image/jpeg', 0.7);
//     dwn_btn.download = 'download.jpg';
//     dwn_btn.click();
// });

  // }
  function canvas_download(){
 
let e = document.body;
let g = document.querySelector('.download');
let c = document.querySelector('.download_content');

  html2canvas(e).then(function(canvas) {
    let dwn_btn = document.createElement('a');
    dwn_btn.href  = canvas.toDataURL('image/jpeg', 0.7);
    dwn_btn.download = strategy_name;
    dwn_btn.click();
});
  }
  

  function eventhandle(){
    document.querySelector('#download_btn').addEventListener('click',canvas_download)
  }
  
  eventhandle();
}