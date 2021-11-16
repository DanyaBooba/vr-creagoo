// Основной файл

let interval = 700;
let jsonFile = 'json_data.txt';

$(function() {
    var scene = document.querySelector('a-scene');
    DrawAxis();

    setInterval(function() {
        ReData();
    }, interval);

    function ReData() {
      var data = null;
      $.ajax({
        url: jsonFile,
        dataType: 'json'
      }).done(function(mainFile) {

        data = mainFile;
        if (data === null) {
          console.log('File is empty');
        }
        else if(data !== null){
            for (var i = 1; i < 20; i++) {
                if (data['x' + i] != undefined && data['y' + i] != undefined && data['z' + i] != undefined) {
                  if ($('#' + 'id' + i).length) {
                    //$('#' + 'id' + i)[0].setAttribute('animation', 'property: position; to: ' + parseInt(data['x' + i], 10) + ' ' + parseInt(data['y' + i], 10) + ' ' + parseInt(data['z' + i], 10) + '');
                    $('#' + 'id' + i)[0].setAttribute('text', {
                      value: 'id=' + i + ' (' + parseInt(data['x' + i], 10) + ',' + parseInt(data['y' + i], 10) + ',' + parseInt(data['z' + i], 10) + ')',
                      color: 'red'
                    });
    
                    PlotData(i, parseInt(data['x' + i], 10), parseInt(data['y' + i], 10), parseInt(data['z' + i], 10));
                  } else {
                    var entity = document.createElement('a-entity');
                    entity.setAttribute('text', {
                      value: 'id=' + i + ' (' + parseInt(data['x' + i], 10) + ',' + parseInt(data['y' + i], 10) + ',' + parseInt(data['z' + i], 10) + ')',
                      color: 'black'
                    });
                    entity.setAttribute('id', 'id' + i);
                    entity.setAttribute('position', {
                      x: parseInt(data['x' + i], 10),
                      y: parseInt(data['y' + i], 10),
                      z: parseInt(data['z' + i], 10)
                    });
                    scene.appendChild(entity);
                  }
                }
              }
        }
      });

    }

    function DrawAxis() {
      for (var i = 0; i < 100; i++) {
        var boxEl = document.createElement('a-sphere');
        boxEl.setAttribute('material', {
          color: 'red'
        });
        boxEl.setAttribute('position', {
          x: 0,
          y: 0,
          z: i
        });
        boxEl.setAttribute('scale', {
          x: 0.05,
          y: 0.05,
          z: 0.15
        });
        scene.appendChild(boxEl);

        var textA = document.createElement('a-text');
        textA.setAttribute('text', {
          value: 'z=' + i,
          color: 'black'
        });
        textA.setAttribute('position', {
          x: 0,
          y: 0,
          z: i
        });
        scene.appendChild(textA);



        var boxEl = document.createElement('a-sphere');
        boxEl.setAttribute('material', {
          color: 'red'
        });
        boxEl.setAttribute('position', {
          x: i,
          y: 0,
          z: 0
        });
        boxEl.setAttribute('scale', {
          x: 0.05,
          y: 0.05,
          z: 0.05
        });
        scene.appendChild(boxEl);

        var textA = document.createElement('a-text');
        textA.setAttribute('text', {
          value: 'x=' + i,
          color: 'black'
        });
        textA.setAttribute('position', {
          x: i,
          y: 0,
          z: 0
        });
        scene.appendChild(textA);



        var boxEl = document.createElement('a-sphere');
        boxEl.setAttribute('material', {
          color: 'red'
        });
        boxEl.setAttribute('position', {
          x: 0,
          y: i,
          z: 0
        });
        boxEl.setAttribute('scale', {
          x: 0.05,
          y: 0.05,
          z: 0.05
        });
        scene.appendChild(boxEl);

        var textA = document.createElement('a-text');
        textA.setAttribute('text', {
          value: 'y=' + i,
          color: 'black'
        });
        textA.setAttribute('position', {
          x: 0,
          y: i,
          z: 0
        });
        scene.appendChild(textA);
      }
    }

    function PlotData(id, x, y, z) {
      var textA = document.createElement('a-text');
      textA.setAttribute('text', {
        value: 'id=' + id + ' (' + x + ',' + y + ',' + z + ')',
        color: 'black'
      });
      textA.setAttribute('position', {
        x: 3,
        y: 3 - id,
        z: 75
      });
      textA.setAttribute('id', 'idt' + id);
      scene.appendChild(textA);
    }


    

  });