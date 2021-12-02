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
    
    /*setInterval(function() {
      ReData();
  }, interval);*/
    
   
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

            // Формируем Обьекты

            const energo_array = {
              GeneratedPower: root.GeneratedPower,
              ID: "Подстанция",
              IsON: true,
              RequiredPower: root.RequiredPower,
              SocketNum: -1
            };

            var energo = energo_array;

            var home__1 = objects__1[0].Childs[0].Childs[1].Childs[0];
            var home__2 = objects__1[0].Childs[0].Childs[1].Childs[1];
            var home__3 = objects__1[1]["Childs"][3];
            var home__4 = objects__1[1]["Childs"][4];
            var home__5 = objects__1[1]["Childs"][5];
            var home__6 = objects__1[1]["Childs"][6];

            var hospital__1 = objects__1[2].Childs[0].Childs[1].Childs[0];
            var hospital__2 = objects__1[1]["Childs"][0];

            var factory__1 = objects__1[1]["Childs"][1];
            var factory__2 = objects__1[1]["Childs"][2];

            var minienergy__1 = objects__1[2].Childs[0];
            var minienergy__2 = objects__1[0].Childs[0];
            
            var lightpanel__1 = objects__2[0];
            var lightpanel__2 = objects__2[4];

            var windgen = objects__2[2];


            // Формируем массив
            main_array.push(home__1); //1 
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
            main_array.push(energo); //13
            main_array.push(minienergy__1);
            main_array.push(minienergy__2);
            main_array.push(hospital__1);

            console.log(hospital__1);

            for(var i = 0; i < main_array.length; i++){
              var item = main_array[i];
              //console.log('[' + i + '] ' + item["ID"] + ' ' + ReplacementOfKeys(item["ID"]));


              if($('#' + idName + i + '_id').length){
                $('#' + idName + i + '_id')[0].setAttribute('text', {
                  value: '[' + ReplacementOfKeys(item["ID"]) + ']',
                });
              }

              if($('#' + idName + i + '_ison').length){
                
                bool = item["IsON"];

                $('#' + idName + i + '_ison')[0].setAttribute('text', {
                  value: '[' + ReplacementIsOn(item["IsON"]) + ']',
                });

                if(bool === true){
                  $('#' + idName + i + '_ison')[0].setAttribute('text', {
                    color: '#2BFF3B',
                  });
                }
                else if(bool === false){
                  $('#' + idName + i + '_ison')[0].setAttribute('text', {
                    color: '#FF2B2B',
                  });
                }

              }

              if($('#' + idName + i + '_genpow').length){
                $('#' + idName + i + '_genpow')[0].setAttribute('text', {
                  value: Math.round(item["GeneratedPower"]) + ' kWt',
                });
              }

              if($('#' + idName + i + '_power').length){
                $('#' + idName + i + '_power')[0].setAttribute('text', {
                  value: Math.round(item["Power"]) + ' kWt',
                });
              }

              if($('#' + idName + i + '_reqpower').length){
                $('#' + idName + i + '_reqpower')[0].setAttribute('text', {
                  value: Math.round(item["RequiredPower"]) + ' kWt',
                });
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

    function ReplacementOfKeys(key){
      if(key === null){
        return "";
      }

      if(key === "Микро район №1"){
        return "Live N1";
      }
      else if(key === "Микро район №2"){
        return "Live N2";
      }
      else if(key === "Микро район №3"){
        return "Live N3";
      }
      else if(key === "Микро район №4"){
        return "Live N4";
      }
      else if(key === "Микро район №5"){
        return "Live N5";
      }
      else if(key === "Микро район №6"){
        return "Live N6";
      }
      else if(key === "Больница №1"){
        return "Hosp N1";
      }
      else if(key === "Больница №2"){
        return "Hosp N2";
      }
      else if(key === "ВГ1"){
        return "VG1";
      }
      else if(key === "Завод №1"){
        return "Fact N1";
      }
      else if(key === "Завод №2"){
        return "Fact N2";
      }
      else if(key === "СБ1"){
        return "SB1";
      }
      else if(key === "СБ2"){
        return "SB2";
      }
      else if(key === "Подстанция"){
        return "Podstantsiya";
      }
      else if(key === "МП1"){
        return "MP 1";
      }
      else if(key === "МП2"){
        return "MP 2";
      }
      else{
        return key;
      }

    }

    function ReplacementIsOn(value){

      if(value === null){
        return ReplacementIsOn(false);
      }

      if(value === false){
        return "OFF";
      }
      else if(value === true){
        return "ON";
      }
      else{
        return ReplacementIsOn(false);
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