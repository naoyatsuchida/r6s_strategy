window.onload = () =>{
  const container = document.getElementById('canvas_container');
  const canvas = document.querySelector("#CanvasMap");
  canvas.width = container.clientWidth;
  canvas.height = container.clientHeight;
  const ctx = canvas.getContext( "2d" ) ;
  // let img = new Image();
  // img.src = document.querySelectorAll('input').value;
  // console.log(foo01);

  let img = new Image();
  img.src = document.getElementById('h').value;
  img.onload = () => {
    let scale = canvas.width / img.width;
    let he = canvas.height / img.height;
    ctx.setTransform(scale, 0, 0, he, 0, 0);
    ctx.drawImage(img, 0,0,);
  };
};

