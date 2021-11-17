// Основной файл

let interval = 200;
let loopLength = 5;

let countObjects = 18;

let jsonFile = 'data/data_file.txt';
let idName = 'text';

$(function() {
    var scene = document.querySelector('a-scene');
    //DrawAxis();
    SetID();

    /*
    setInterval(function() {
        ReData();
    }, interval);
    */
   
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
            for (var i = 1; i < loopLength; i++) {
                if (data['x' + i] != undefined && data['y' + i] != undefined && data['z' + i] != undefined) {
                  if ($('#' + idName + i).length) {

                    let x = parseInt(data['x' + i], 10);
                    let y = parseInt(data['y' + i], 10);
                    let z = parseInt(data['z' + i], 10);
                    $('#' + idName + i)[0].setAttribute('text', {
                      value: '[' + i + '] (' + x + ', ' + y + ', ' + z + ')',
                    });
                  }
                }
              }
        }
      });

    }

    function SetID(){
      for (var i = 1; i < countObjects; i++) {
        if ($('#' + idName + i).length) {

          $('#' + idName + i)[0].setAttribute('text', {
            value: '[' + i + ']',
          });
        }
      }
    }

    function CreateElement(id, x, y, z) {
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