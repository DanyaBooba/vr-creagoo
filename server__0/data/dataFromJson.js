// Основной файл

let interval = 200;
let loopLength = 5;

let countObjects = 18;

let jsonFile = 'data/json_data.txt';
let idName = 't';

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

            const substation = {
              GeneratedPower: root.GeneratedPower,
              ID: "Подстанция",
              IsON: true,
              RequiredPower: root.RequiredPower,
              SocketNum: -1
            };

            //objects__2[0]
            const solarBattery1 = {
              GeneratedPower: root.GeneratedPower,
              ID: "Солнечная Батарея 1",
              IsON: true,
              RequiredPower: root.RequiredPower,
              SocketNum: -1
            };

            //objects__1[2].Childs[0]
            const miniSubstation1 = {
              GeneratedPower: root.GeneratedPower,
              ID: "Мини Подстанция 1",
              IsON: true,
              RequiredPower: root.RequiredPower,
              SocketNum: -1
            };

            //objects__1[0].Childs[0]
            const miniSubstation2 = {
              GeneratedPower: root.GeneratedPower,
              ID: "Мини Подстанция 2",
              IsON: true,
              RequiredPower: root.RequiredPower,
              SocketNum: -1
            };

            //objects__1[1]["Childs"][0]
            const hospital2 = {
              GeneratedPower: root.GeneratedPower,
              ID: "Больница 2",
              IsON: true,
              RequiredPower: root.RequiredPower,
              SocketNum: -1
            };

            //objects__1[1]["Childs"][2]
            const factory2 = {
              GeneratedPower: root.GeneratedPower,
              ID: "Завод 2",
              IsON: true,
              RequiredPower: root.RequiredPower,
              SocketNum: -1
            };

            //objects__1[0].Childs[0].Childs[1].Childs[0]
            const house1 = {
              GeneratedPower: root.GeneratedPower,
              ID: "Микрорайон 1",
              IsON: true,
              RequiredPower: root.RequiredPower,
              SocketNum: -1
            };

            //objects__1[0].Childs[0].Childs[1].Childs[1]
            const house2 = {
              GeneratedPower: root.GeneratedPower,
              ID: "Микрорайон 2",
              IsON: true,
              RequiredPower: root.RequiredPower,
              SocketNum: -1
            };

            //objects__1[1]["Childs"][3]
            const house3 = {
              GeneratedPower: root.GeneratedPower,
              ID: "Микрорайон 3",
              IsON: true,
              RequiredPower: root.RequiredPower,
              SocketNum: -1
            };

            //objects__1[1]["Childs"][4]
            const house4 = {
              GeneratedPower: root.GeneratedPower,
              ID: "Микрорайон 4",
              IsON: true,
              RequiredPower: root.RequiredPower,
              SocketNum: -1
            };

            //objects__1[1]["Childs"][5]
            const house5 = {
              GeneratedPower: root.GeneratedPower,
              ID: "Микрорайон 5",
              IsON: true,
              RequiredPower: root.RequiredPower,
              SocketNum: -1
            };

            //objects__1[1]["Childs"][6]
            const house6 = {
              GeneratedPower: root.GeneratedPower,
              ID: "Микрорайон 6",
              IsON: true,
              RequiredPower: root.RequiredPower,
              SocketNum: -1
            };

            //objects__1[1]["Childs"][1]
            const factory1 = {
              GeneratedPower: root.GeneratedPower,
              ID: "Завод 1",
              IsON: true,
              RequiredPower: root.RequiredPower,
              SocketNum: -1
            };

            //objects__1[2].Childs[0].Childs[1].Childs[0]
            const hospital1 = {
              GeneratedPower: root.GeneratedPower,
              ID: "Больница 1",
              IsON: true,
              RequiredPower: root.RequiredPower,
              SocketNum: -1
            };

            //objects__2[4]
            const solarBattery2 = {
              GeneratedPower: root.GeneratedPower,
              ID: "Солнечная Батарея 2",
              IsON: true,
              RequiredPower: root.RequiredPower,
              SocketNum: -1
            };

            //objects__2[2]
            const windGenerator = {
              GeneratedPower: root.GeneratedPower,
              ID: "Ветрогенератор",
              IsON: true,
              RequiredPower: root.RequiredPower,
              SocketNum: -1
            };

            // Формируем массив
            main_array.push(substation);
            main_array.push(solarBattery1);
            main_array.push(miniSubstation1);
            main_array.push(miniSubstation2);
            main_array.push(hospital2);
            main_array.push(factory2);
            main_array.push(house1);
            main_array.push(house2);
            main_array.push(house3);
            main_array.push(house4);
            main_array.push(house5);
            main_array.push(house6);
            main_array.push(factory1);
            main_array.push(hospital1);
            main_array.push(solarBattery2);
            main_array.push(windGenerator);


            for(var i = 0; i < main_array.length; i++){
              var item = main_array[i];

              if($('#' + idName + i + '__id').length){
                $('#' + idName + i + '__id')[0].setAttribute('text', {
                  value: ReplacementOfKeys(item["ID"]),
                });
              }

              if($('#' + idName + i + '__ison').length){
                
                bool = item["IsON"];

                $('#' + idName + i + '__ison')[0].setAttribute('text', {
                  value: '[' + ReplacementIsOn(item["IsON"]) + ']',
                });

                if(bool === true){
                  $('#' + idName + i + '__ison')[0].setAttribute('text', {
                    color: '#2BFF3B',
                  });
                }
                else if(bool === false){
                  $('#' + idName + i + '__ison')[0].setAttribute('text', {
                    color: '#FF2B2B',
                  });
                }

              }

              if($('#' + idName + i + '__genpow').length){
                $('#' + idName + i + '__genpow')[0].setAttribute('text', {
                  value: Math.round(item["GeneratedPower"]) + ' kWt',
                });
              }

              if($('#' + idName + i + '__power').length){
                $('#' + idName + i + '__power')[0].setAttribute('text', {
                  value: Math.round(item["Power"]) + ' kWt',
                });
              }

              if($('#' + idName + i + '__reqpower').length){
                $('#' + idName + i + '__reqpower')[0].setAttribute('text', {
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

      if(key === "Микрорайон 1"){
        return "Microdistrict 1";
      }
      else if(key === "Микрорайон 2"){
        return "Microdistrict 2";
      }
      else if(key === "Микрорайон 3"){
        return "Microdistrict 3";
      }
      else if(key === "Микрорайон 4"){
        return "Microdistrict 4";
      }
      else if(key === "Микрорайон 5"){
        return "Microdistrict 5";
      }
      else if(key === "Микрорайон 6"){
        return "Microdistrict 6";
      }
      else if(key === "Больница 1"){
        return "Hospital 1";
      }
      else if(key === "Больница 2"){
        return "Hospital 2";
      }
      else if(key === "Ветрогенератор"){
        return "Wind Generator";
      }
      else if(key === "Завод 1"){
        return "Factory 1";
      }
      else if(key === "Завод 2"){
        return "Factory 2";
      }
      else if(key === "Солнечная Батарея 1"){
        return "Solar Battery 1";
      }
      else if(key === "Солнечная Батарея 2"){
        return "Solar Battery 2";
      }
      else if(key === "Подстанция"){
        return "Substation";
      }
      else if(key === "Мини Подстанция 1"){
        return "Mini Substation 1";
      }
      else if(key === "Мини Подстанция 2"){
        return "Mini Substation 2";
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