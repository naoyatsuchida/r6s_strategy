window.onload = () =>{
  //canvasタグに画像を表示させ

  let count = document.getElementById('count').value;


  for (let step = 1; step <= count; step++) {
 
      const canvas = document.querySelector(`#CanvasMap${step}`);
      const ctx = canvas.getContext( "2d" ) ;
      //背景を事前に白に塗りつぶす
      ctx.fillStyle = "rgb(255, 255, 255)";
      ctx.fillRect(0, 0, canvas.width, canvas.height);

      const canvasdraw = document.querySelector(`#CanvasDraw${step}`);
      const ctxdraw = canvasdraw.getContext( "2d" ) ;

      //canvasの幅を指定
      var w = $('.show__img__map').width();
      var h = $('.show__img__map').height();
      $(`#CanvasMap${step}`).attr('width', w);
      $(`#CanvasMap${step}`).attr('height', h);
      $(`#CanvasDraw${step}`).attr('width', w);
      $(`#CanvasDraw${step}`).attr('height', h);
      $(`#Image${step}`).attr('width', w);
      $(`#Image${step}`).attr('height', h);
      
      //画像表示する
 
      let img = new Image();
      img.src = document.getElementById(`pass${step}`).value;
      img.onload = () => {
        let canvasAspect = ctx.canvas.width / ctx.canvas.height, // canvasのアスペクト比
        imgAspect = img.width / img.height, // 画像のアスペクト比
        left, top, width, height;

        if(imgAspect >= canvasAspect) {// 画像が横長
          left = 0;
          width = ctx.canvas.width;
          height = ctx.canvas.width / imgAspect;
          top = (ctx.canvas.height - height) / 2;
      } else {// 画像が縦長
          top = 0;
          height = ctx.canvas.height;
          width = ctx.canvas.height * imgAspect;
          left = (ctx.canvas.width - width) / 2;
      }
      ctx.drawImage(img, 0, 0, img.width, img.height, 
          left, top, width, height);
         
      }
    ///////////////画像関係とじ




    // 線の状態を定義する
   
    ctxdraw.lineCap = 'round'; // 丸みを帯びた線にする
    ctxdraw.lineJoin = 'round'; // 丸みを帯びた線にする
    ctxdraw.lineWidth = 5; // 線の太さ
    ctxdraw.strokeStyle = 'red';

    //マウスの位置を観測
    const lastPosition = { x: null, y: null };
    let isDrag = false; //trueのときにイベントを発生させる

    function draw(x, y) {
    if(!isDrag) {
        return;
      }

      if (lastPosition.x === null || lastPosition.y === null) {
        // ドラッグ開始時の線の開始位置
        ctxdraw.moveTo(x, y);
      } else {
        // ドラッグ中の線の開始位置
        ctxdraw.moveTo(lastPosition.x, lastPosition.y);
        
      }
      ctxdraw.lineTo(x, y);
      ctxdraw.stroke();
      lastPosition.x = x;
      lastPosition.y = y;
    /////////////////
    };
  //全て削除

    function clear() {
      ctxdraw.clearRect(0, 0, canvasdraw.width, canvasdraw.height);
    }

    function dragStart(event) {
      // これから新しい線を書き始めることを宣言する
      // 一連の線を書く処理が終了したらdragEnd関数内のclosePathで終了を宣言する
      ctxdraw.beginPath();
  
      isDrag = true;
    }

    function dragEnd(event) {
      // 線を書く処理の終了を宣言する
      ctxdraw.closePath();
      isDrag = false;
  
      // 描画中に記録していた値をリセットする
      lastPosition.x = null;
      lastPosition.y = null;
    }
    //オペレーターそれぞれの色変更
    function change_color(box){
   
      ctxdraw.strokeStyle = box.target.dataset.color;
      
    }
    
    
   

    // 複数のcanvasを一つのcanvasに統合する
    async function concatCanvas(base,asset){
      
      const can = document.getElementById(base);
      
      const ctx = can.getContext("2d");
  
      
      for(let i=0; i<asset.length; i++){
        const image1 = await getImagefromCanvas(asset[i]);
        
        
        ctx.drawImage(image1, 0, 0, can.width, can.height);
        
       
      }
    
     
    }
    function getImagefromCanvas(id){
      return new Promise((resolve, reject) => {
        const image = new Image();
        const ctx = document.querySelector(id).getContext("2d");

        image.onload = () => resolve(image);
        image.onerror = (e) => reject(e);
        image.src = ctx.canvas.toDataURL('image/png');
        
      });
    }
    // 複数のcanvasを一つのcanvasに統合する//
    function comment(){
      document.querySelector('.form_box').style.display='block';
 
    }
    

    function initEventHandler() {
      const clearButton = document.querySelector(`#clear-button${step}`);
      clearButton.addEventListener('click', clear);
      
      canvasdraw.addEventListener('mousedown', dragStart);
      canvasdraw.addEventListener('mouseup', dragEnd);
      canvasdraw.addEventListener('mouseout', dragEnd);
      canvasdraw.addEventListener('mousemove', (event) => {
        draw(event.layerX, event.layerY);
      });
      document.querySelectorAll('.box').forEach(function(box){
        box.addEventListener('click',change_color);
      });

      document.querySelectorAll(".box").forEach(function(e){
        e.addEventListener("click", ()=>{
          concatCanvas(`Image${step}`,[`#CanvasMap${step}`,`#CanvasDraw${step}`]);
        }); 
      }); 
      
      document.querySelector('#otamesi').addEventListener("click", ()=>{
          concatCanvas(`Image${step}`,[`#CanvasMap${step}`,`#CanvasDraw${step}`]);
        }); 
      document.querySelector('#otamesi').addEventListener('click',comment);

      
    }

    initEventHandler();
 
}

//フォーム関係はこちら
//プルダウンで使用する変数
let role = document.getElementById('select_role');
let operation = document.querySelectorAll('.select_form');
let attack = document.querySelectorAll('.select_attack');
let defense = document.querySelectorAll('.select_defense');
let or = [];

//プルダウン オペレーターの選択
function change_role(e){
  or = [];
  or = e.target.value;
  //攻撃を選択した場合
  if(or == 0){
  operation.forEach(function(o){
    o.style.display='block';
  });
  
  attack.forEach(function(a){
    a.style.display='block';
  });

  defense.forEach(function(d){
    d.style.display='none';

  });
  } //防衛を選択した場合
  else if(or == 1){
    operation.forEach(function(o){
      o.style.display='block';
    });

    attack.forEach(function(a){
      a.style.display='none';
    });
    defense.forEach(function(d){
      d.style.display='block';
    });
  } else {
    operation.forEach(function(o){
      o.style.display='none';
    });
  }
}

//次のフォームを出す
let next1 = document.getElementById('next1');
let next2 = document.getElementById('next2');
let next3 = document.getElementById('next3');
let next4 = document.getElementById('next4');

function n1(){
document.getElementById('form2').style.display='block';
}
function n2(){
document.getElementById('form3').style.display='block';
}
function n3(){
document.getElementById('form4').style.display='block';
}
function n4(){
document.getElementById('form5').style.display='block';
document.getElementById('next5').remove();
}


function valid(){
  
  
  //攻撃オペが選択されている時
  if(or == 0){
    let defense_delete = document.querySelectorAll('.select_defense');

    defense_delete.forEach(function(d){

    d.remove();
    });
  } //防衛オペが選択されている時 
    else if(or == 1){
      let attack_delete = document.querySelectorAll('.select_attack');
      attack_delete.forEach(function(a){
      a.remove();
        
      });
    }
  }

  //マップULRを配列で送付するため
  function map_url(){
    
    document.querySelectorAll('.map_date').forEach(function(e){
      let date = [];
      date.push(e.toDataURL("image/png"));
      let q = [];
      q = document.createElement('input');
      q.type = 'hidden';
      q.name = 'map_path[]';
      q.value = date;
      document.querySelector('.map_array').append(q);
   
    });
  
  }

function click_btn(){
  document.querySelector('#otamesi').click();
}




  let operater_form = document.getElementById('form');

  function attackon(){
    document.querySelector('.show__said__defense').style.display='none';
    document.querySelector('.show__said__attack').style.display='block';
    document.querySelector('.show__said__attack').style.display='flex';
  
  }

  function defenseon(){
    document.querySelector('.show__said__attack').style.display='none';
    document.querySelector('.show__said__defense').style.display='block';
    document.querySelector('.show__said__defense').style.display='flex';
  }

  
  



  function idou(){
    let point = document.querySelector('#operater_form');
    let rect = point.getBoundingClientRect();
    let position = rect.top;
  
    window.scrollBy(0,position);

  }

  function eventhundle(){
    role.addEventListener('change',change_role);
    next1.addEventListener('click',n1);
    next2.addEventListener('click',n2);
    next3.addEventListener('click',n3);
    next4.addEventListener('click',n4);
    operater_form.addEventListener('click',valid);
    document.querySelector('#form').addEventListener('click',click_btn);

    document.querySelector("#form").addEventListener('click',map_url);
    document.querySelector('#otamesi').addEventListener('click',idou);

    document.querySelector('#attack').addEventListener('click',attackon);
    document.querySelector('#defense').addEventListener('click',defenseon);
   

};
eventhundle();

}
