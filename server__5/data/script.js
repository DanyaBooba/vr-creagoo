// Основной файл

let interval = 200;
let loopLength = 5;

let countObjects = 18;

let jsonFile = 'data/json_data.txt';
let idName = 'text';

$(function() {
    var scene = document.querySelector('a-scene');
    //DrawAxis();
    SetID();
    ReData();
    
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


            var root = data["RootNode"];
            var objects__1 = root["Lines"];

            console.log(data);
            console.log(root);
            console.log('f');
            //console.log(objects__1[0].Childs[0].Childs[1].Childs[0]);
            console.log(objects__1);

            var hospital__2 = objects__1[1]["Childs"][0];
            var factory__1 = objects__1[1]["Childs"][1];
            var factory__2 = objects__1[1]["Childs"][2];

            var home__1 = objects__1[0].Childs[0].Childs[1].Childs[0];
            var home__2 = objects__1[0].Childs[0].Childs[1].Childs[1];
            var home__3 = objects__1[1]["Childs"][3];
            var home__4 = objects__1[1]["Childs"][4];
            var home__5 = objects__1[1]["Childs"][5];
            var home__6 = objects__1[1]["Childs"][6];

            console.log("Обьекты: ");
            console.log(home__1);
            console.log(home__2);
            console.log(home__3);
            console.log(home__4);
            console.log(home__5);
            console.log(home__6);
            console.log(hospital__2);
            console.log(factory__1);
            console.log(factory__2);


            /*
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
              */


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

    function ToNewArray(){

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