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

            let main_array = ["empty"];            

            var root = data["RootNode"];
            var objects__1 = root["Lines"];
            var objects__2 = root["Stations"];

            console.log(data);
            console.log(root);

            // Формируем Обьекты

            //energy

            var home__1 = objects__1[0].Childs[0].Childs[1].Childs[0];
            var home__2 = objects__1[0].Childs[0].Childs[1].Childs[1];
            var home__3 = objects__1[1]["Childs"][3];
            var home__4 = objects__1[1]["Childs"][4];
            var home__5 = objects__1[1]["Childs"][5];
            var home__6 = objects__1[1]["Childs"][6];

            //hospital__2
            var hospital__2 = objects__1[1]["Childs"][0];

            var factory__1 = objects__1[1]["Childs"][1];
            var factory__2 = objects__1[1]["Childs"][2];

            var minienergy__1 = objects__1[2].Childs[0];
            var minienergy__2 = objects__1[0].Childs[0];
            
            var lightpanel__1 = objects__2[0];
            var lightpanel__2 = objects__2[4];

            var windgen = objects__2[2];

            // Формируем массив
            main_array.push(home__1);
            main_array.push(home__2);
            main_array.push(home__3);
            main_array.push(home__4);
            main_array.push(home__5);
            main_array.push(home__6);
            main_array.push(hospital__2);
            main_array.push(windgen);
            main_array.push(factory__1);
            main_array.push(lightpanel__1);
            main_array.push(factory__2);
            main_array.push(lightpanel__2);
            main_array.push("energo");
            //console.log(main_array[1]);
            

            console.log("Обьекты: ");
            for(var i = 0; i < main_array.length; i++){
              console.log('[' + i + '] ' + main_array[i]["ID"] + ' ' + ReplacementOfKeys(main_array[i]["ID"]));
            }

            var test = minienergy__1["ID"];
            //12 - МП 1
            if ($('#' + idName + '12').length) {
              $('#' + idName + '12')[0].setAttribute('text', {
                value: '[' + ReplacementOfKeys(test) + ']',
              });
            }

            

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

    function ReplacementOfKeys(key){
      if(key === null){
        return "";
      }

      if(key === "Микро район №1"){
        return "Mikro rayon №1";
      }
      else if(key === "Микро район №2"){
        return "Mikro rayon №2";
      }
      else if(key === "Микро район №3"){
        return "Mikro rayon №3";
      }
      else if(key === "Микро район №4"){
        return "Mikro rayon №4";
      }
      else if(key === "Микро район №5"){
        return "Mikro rayon №5";
      }
      else if(key === "Микро район №6"){
        return "Mikro rayon №6";
      }
      else if(key === "Больница №1"){
        return "Bol'nitsa №1";
      }
      else if(key === "Больница №2"){
        return "Bol'nitsa №2";
      }
      else if(key === "ВГ1"){
        return "VG1";
      }
      else if(key === "Завод №1"){
        return "Zavod №1";
      }
      else if(key === "Завод №2"){
        return "Zavod №2";
      }
      else if(key === "СБ1"){
        return "SB1";
      }
      else if(key === "СБ2"){
        return "SB2";
      }
      else{
        return key;
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