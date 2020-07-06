window.onload = () => {
  
  function line_color(){
  
      for($i=1;$i<6;$i++){
        $color = document.querySelector(`#operation__line${$i}`).dataset.color;
  
        document.querySelector(`#operation__line${$i}`).style.backgroundColor = $color;
        
      }
    }
let strategy_name =  document.querySelector('.download__content__name').dataset.name;

//canvasを画像化する
function delete_node(){
  document.querySelector('.navbar').remove();
  document.querySelector('.form_down').remove();
  
}

  function canvas_download(){
    delete_node();
    let a = document.body;
    html2canvas(a).then(function(canvas) {
      let dwn_btn = document.createElement('a');
      dwn_btn.href  = canvas.toDataURL('image/jpeg', 0.7);
      dwn_btn.download = strategy_name;

      dwn_btn.click();
      

      location.reload();
    });
  }
  
  
  function eventhandle(){
    document.querySelector('#download_btn').addEventListener('click',canvas_download)
  }
  
  eventhandle();
  line_color()
}