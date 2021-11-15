<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hello!</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
    <script src="https://web.archive.org/web/20200212061206js_/https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">

    $(function() 
     {
      var scene = document.querySelector('a-scene');
      plotAxes();
      setInterval(function(){redata();},700); // 700 - интервал выполнения функции redata()

      function redata() {
        var data = null;
        $.ajax({url: './data.txt', dataType: 'json'}).done(function(v) {

         data = v;
         if (data !== null) 
         {
            for(var i = 1; i<20; i++) 
            {
              if (data['x'+i] != undefined &&data['y'+i] != undefined &&data['z'+i]  != undefined) 
                {
                  if ($('#'+'id'+i).length) 
                    {        
                     //console.log(i+' -->'+$('#'+'id'+i).length);
                     $('#'+'id'+i)[0].setAttribute('animation', 'property: position; to: '+parseInt(data['x'+i], 10)+' '+parseInt(data['y'+i], 10)+' '+parseInt(data['z'+i], 10)+'');
                     $('#'+'id'+i)[0].setAttribute('text', {value: 'id='+i+' ('+parseInt(data['x'+i], 10)+','+parseInt(data['y'+i], 10)+','+parseInt(data['z'+i], 10)+')', color: 'red' });

                     plotData(i, parseInt(data['x'+i], 10), parseInt(data['y'+i], 10), parseInt(data['z'+i], 10));
                    } 
                   else 
                    {
                     var entity = document.createElement('a-entity');
                     entity.setAttribute('text', {value: 'id='+i+' ('+parseInt(data['x'+i], 10)+','+parseInt(data['y'+i], 10)+','+parseInt(data['z'+i], 10)+')', color: 'black' });
                     entity.setAttribute('id', 'id'+i);
                     entity.setAttribute('position', {x: parseInt(data['x'+i], 10), y: parseInt(data['y'+i], 10), z: parseInt(data['z'+i], 10)});
                     scene.appendChild(entity);
                    }
                }
            }
          }
        });

      } //end of function redata
 
    function plotAxes()
    {
      for (var i = 0; i < 100; i++) 
              {
                      var boxEl = document.createElement('a-sphere');
                      boxEl.setAttribute('material', {color: 'red'});
                      boxEl.setAttribute('position', {x: 0, y: 0, z: i});
                      boxEl.setAttribute('scale', {x: 0.05, y: 0.05, z: 0.15});
                      scene.appendChild(boxEl);

                      var textA= document.createElement('a-text');
                      textA.setAttribute('text', {
                          value: 'z='+i, 
                          color: 'black'
                      });
                      textA.setAttribute('position', {x: 0, y: 0, z: i});
                      scene.appendChild(textA);
                      


                      var boxEl = document.createElement('a-sphere');
                      boxEl.setAttribute('material', {color: 'red'});
                      boxEl.setAttribute('position', {x: i, y: 0, z: 0});
                      boxEl.setAttribute('scale', {x: 0.05, y: 0.05, z: 0.05});
                      scene.appendChild(boxEl);

                      var textA= document.createElement('a-text');
                      textA.setAttribute('text', {
                          value: 'x='+i, 
                          color: 'black'
                      });
                      textA.setAttribute('position', {x: i, y: 0, z: 0});
                      scene.appendChild(textA);
                      


                      var boxEl = document.createElement('a-sphere');
                      boxEl.setAttribute('material', {color: 'red'});
                      boxEl.setAttribute('position', {x: 0, y: i, z: 0});
                      boxEl.setAttribute('scale', {x: 0.05, y: 0.05, z: 0.05});
                      scene.appendChild(boxEl);

                      var textA= document.createElement('a-text');
                      textA.setAttribute('text', {
                          value: 'y='+i, 
                          color: 'black'
                      });
                      textA.setAttribute('position', {x: 0, y: i, z: 0});
                      scene.appendChild(textA);
             }
      }



    function plotData(id, x, y, z)
    {
                      var textA= document.createElement('a-text');
                      textA.setAttribute('text', {
                          value: 'id='+id+' ('+x+','+y+','+z+')', 
                          color: 'black'
                      });
                      textA.setAttribute('position', {x: 3, y: 3-id, z: 75});
                      textA.setAttribute('id', 'idt'+id);
                      scene.appendChild(textA);
    }


   });
    </script>

  </head>
  <body>
    <a-scene>
      <a-entity position="0 0 5" rotation="0 0 0">
        <a-camera rotation-reader wasd-controls="acceleration: 200"></a-camera>   
      </a-entity>

      <a-sky color="#ECECEC"></a-sky>
    </a-scene>

  </body>
</html>
