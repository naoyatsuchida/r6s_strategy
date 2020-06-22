window.onload = () =>{
  const container = document.getElementById('canvas_container');
  let count = document.getElementById('count').value;
  for (let step = 1; step <= count; step++) {
  
    const canvas = document.querySelector(`#CanvasMap${step}`);
    canvas.width = container.clientWidth;
    canvas.height = container.clientHeight;
    const ctx = canvas.getContext( "2d" ) ;
  
    
    let img = new Image();
    img.src = document.getElementById(`pass${step}`).value;
    img.onload = () => {
      let scale = canvas.width / img.width;
      let he = canvas.height / img.height;
      ctx.setTransform(scale, 0, 0, he, 0, 0);
      ctx.drawImage(img, 0,0,);
    }
  };
};

