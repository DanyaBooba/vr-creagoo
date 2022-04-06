<!DOCTYPE html>
<html>

<?php include_once "php/head.php" ?>

<?php

$array = [
    ['']
];

?>

<body>

    <a-scene room-manager="nav: true; startPos: 0 0 -40" fog="type: linear; color: #aaa">

        <!-- /models -->

        <a-entity id="Стенд" position="0 -2 0" gltf-model="/models/stand.glb"></a-entity>

        <a-entity id="Винт Ветрогенератора 1" position="-52.95 16.88 24.95" gltf-model="/models/windTurbinePropeller.glb" animation="property: rotation; to: -360 0 0; loop: true; dur: 3000; easing: linear;"></a-entity>

        <a-entity id="Винт Ветрогенератора 2" position="-52.95 16.88 0" rotation="-90 0 0" gltf-model="/models/windTurbinePropeller.glb" animation="property: rotation; to: -450 0 0; loop: true; dur: 3000; easing: linear;"></a-entity>

        <a-entity id="Винт Ветрогенератора 3" position="-52.95 16.88 -25" rotation="-180 0 0" gltf-model="/models/windTurbinePropeller.glb" animation="property: rotation; to: -540 0 0; loop: true; dur: 3000; easing: linear;"></a-entity>

        <a-entity id="Винт Мини Ветрогенератора" position="77.77 4.55 16.47" gltf-model="/models/windMiniTurbinePropeller.glb" animation="property: rotation; to: 0 -360 0; loop: true; dur: 1000; easing: linear;"></a-entity>

        <!-- //models -->


        <!-- Planes -->

        <a-plane id="Плейн Подстанция [1]" material="color: #696969; opacity: 0.4;" position="-27.98 0.5 -6.15" rotation="0 90 0" scale="2.5 3 1"></a-plane>
        <a-plane id="Плейн СБ2 [2]" material="color: #696969; opacity: 0.4;" position="-18.28 0.5 11.38" rotation="0 180 0" scale="2.5 3 1"></a-plane>
        <a-plane id="Плейн МП1 [3]" material="color: #696969; opacity: 0.4;" position="-19.83 0.5 -13.93" rotation="0 0 0" scale="2.5 3 1"></a-plane>
        <a-plane id="Плейн МП2 [4]" material="color: #696969; opacity: 0.4;" position="-6.70 0.5 11.38" rotation="0 180 0" scale="2.5 3 1"></a-plane>
        <a-plane id="Плейн Больница 2 [5]" material="color: #696969; opacity: 0.4;" position="-8.78 0.5 -13.93" rotation="0 0 0" scale="2.5 3 1"></a-plane>
        <a-plane id="Плейн Завод 2 [6]" material="color: #696969; opacity: 0.4;" position="4.035 0.5 11.38" rotation="0 180 0" scale="2.5 3 1"></a-plane>
        <a-plane id="Плейн МР [7]" material="color: #696969; opacity: 0.4;" position="22.65 0.5 -13.93" rotation="0 0 0" scale="2.5 3 1"></a-plane>
        <a-plane id="Плейн МР [8]" material="color: #696969; opacity: 0.4;" position="29.15 0.5 -13.93" rotation="0 0 0" scale="2.5 3 1"></a-plane>
        <a-plane id="Плейн МР [9]" material="color: #696969; opacity: 0.4;" position="36.48 0.5 -13.93" rotation="0 0 0" scale="2.5 3 1"></a-plane>
        <a-plane id="Плейн МР [10]" material="color: #696969; opacity: 0.4;" position="20.44 0.5 11.38" rotation="0 180 0" scale="2.5 3 1"></a-plane>
        <a-plane id="Плейн МР [11]" material="color: #696969; opacity: 0.4;" position="27.63 0.5 11.38" rotation="0 180 0" scale="2.5 3 1"></a-plane>
        <a-plane id="Плейн МР [12]" material="color: #696969; opacity: 0.4;" position="34.63 0.5 11.38" rotation="0 180 0" scale="2.5 3 1"></a-plane>
        <a-plane id="Плейн Завод 1 [13]" material="color: #696969; opacity: 0.4;" position="46.89 0.5 -13.93" rotation="0 0 0" scale="2.5 3 1"></a-plane>
        <a-plane id="Плейн Больница 1 [14]" material="color: #696969; opacity: 0.4;" position="68.28 0.5 11.38" rotation="0 180 0" scale="2.5 3 1"></a-plane>
        <a-plane id="Плейн СБ [15]" material="color: #696969; opacity: 0.4;" position="71.89 0.5 -13.93" rotation="0 0 0" scale="2.5 3 1"></a-plane>
        <a-plane id="Плейн ВГ [16]" material="color: #696969; opacity: 0.4;" position="75.19 0.5 11.38" rotation="0 180 0" scale="2.5 3 1"></a-plane>


        <!-- /Planes -->


        <!-- Text -->

        <!-- Substation [1] -->
        <a-entity text="value: Substation; color: #ffffff; align: center;" id="t1__id" scale="7 7 1" position="-27.9 1 -6.15" rotation="0 90 0"></a-entity>
        <a-entity text="value: Substation; color: #ffffff; align: center;" id="t1__genpow" scale="7 7 1" position="-27.9 0.5 -6.15" rotation="0 90 0"></a-entity>
        <a-entity text="value: Substation; color: #ffffff; align: center;" id="t1__ison" scale="7 7 1" position="-27.9 0 -6.15" rotation="0 90 0"></a-entity>
        <!-- /Substation [1] -->


        <!-- Solar Battery [2] -->
        <a-entity text="value: Solar Battery; color: #ffffff; align: center;" id="t2__id" scale="7 7 1" position="-18.28 1.5 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Solar Battery; color: #ffffff; align: center;" id="t2__genpow" scale="7 7 1" position="-18.28 1 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Solar Battery; color: #ffffff; align: center;" id="t2__power" scale="7 7 1" position="-18.28 0.5 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Solar Battery; color: #ffffff; align: center;" id="t2__reqpower" scale="7 7 1" position="-18.28 0 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Solar Battery; color: #ffffff; align: center;" id="t2__ison" scale="7 7 1" position="-18.28 -0.5 11.38" rotation="0 180 0"></a-entity>
        <!-- /Solar Battery [2] -->


        <!-- Mini Substation 1 [3] -->
        <a-entity text="value: Mini Substation 1; color: #ffffff; align: center;" id="t3__id" scale="7 7 1" position="-19.83 1.5 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Mini Substation 1; color: #ffffff; align: center;" id="t3__genpow" scale="7 7 1" position="-19.83 1 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Mini Substation 1; color: #ffffff; align: center;" id="t3__power" scale="7 7 1" position="-19.83 0.5 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Mini Substation 1; color: #ffffff; align: center;" id="t3__reqpower" scale="7 7 1" position="-19.83 0 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Mini Substation 1; color: #ffffff; align: center;" id="t3__ison" scale="7 7 1" position="-19.83 -0.5 -13.93" rotation="0 0 0"></a-entity>
        <!-- /Mini Substation 1 [3] -->


        <!-- Mini Substation 2 [4] -->
        <a-entity text="value: Mini Substation 2; color: #ffffff; align: center;" id="t4__id" scale="7 7 1" position="-6.70 1.5 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Mini Substation 2; color: #ffffff; align: center;" id="t4__genpow" scale="7 7 1" position="-6.70 1 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Mini Substation 2; color: #ffffff; align: center;" id="t4__power" scale="7 7 1" position="-6.70 0.5 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Mini Substation 2; color: #ffffff; align: center;" id="t4__reqpower" scale="7 7 1" position="-6.70 0 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Mini Substation 2; color: #ffffff; align: center;" id="t4__ison" scale="7 7 1" position="-6.70 -0.5 11.38" rotation="0 180 0"></a-entity>
        <!-- /Mini Substation 2 [4] -->


        <!-- Hospital 2 [5] -->
        <a-entity text="value: Hospital 2; color: #ffffff; align: center;" id="t5__id" scale="7 7 1" position="-8.78 1.5 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Hospital 2; color: #ffffff; align: center;" id="t5__genpow" scale="7 7 1" position="-8.78 1 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Hospital 2; color: #ffffff; align: center;" id="t5__power" scale="7 7 1" position="-8.78 0.5 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Hospital 2; color: #ffffff; align: center;" id="t5__reqpower" scale="7 7 1" position="-8.78 0 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Hospital 2; color: #ffffff; align: center;" id="t5__ison" scale="7 7 1" position="-8.78 -0.5 -13.93" rotation="0 0 0"></a-entity>
        <!-- /Hospital 2 [5] -->


        <!-- Factory 2 [6] -->
        <a-entity text="value: Factory 2; color: #ffffff; align: center;" id="t6__id" scale="7 7 1" position="4.035 1.5 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Factory 2; color: #ffffff; align: center;" id="t6__genpow" scale="7 7 1" position="4.035 1 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Factory 2; color: #ffffff; align: center;" id="t6__power" scale="7 7 1" position="4.035 0.5 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Factory 2; color: #ffffff; align: center;" id="t6__reqpower" scale="7 7 1" position="4.035 0 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Factory 2; color: #ffffff; align: center;" id="t6__ison" scale="7 7 1" position="4.035 -0.5 11.38" rotation="0 180 0"></a-entity>
        <!-- /Factory 2 [6] -->


        <!-- Microdistrict [7] -->
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t7__id" scale="7 7 1" position="22.65 1.5 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t7__genpow" scale="7 7 1" position="22.65 1 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t7__power" scale="7 7 1" position="22.65 0.5 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t7__reqpower" scale="7 7 1" position="22.65 0 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t7__ison" scale="7 7 1" position="22.65 -0.5 -13.93" rotation="0 0 0"></a-entity>
        <!-- /Microdistrict [7] -->


        <!-- Microdistrict [8] -->
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t8__id" scale="7 7 1" position="29.15 1.5 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t8__genpow" scale="7 7 1" position="29.15 1 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t8__power" scale="7 7 1" position="29.15 0.5 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t8__reqpower" scale="7 7 1" position="29.15 0 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t8__ison" scale="7 7 1" position="29.15 -0.5 -13.93" rotation="0 0 0"></a-entity>
        <!-- /Microdistrict [8] -->


        <!-- Microdistrict [9] -->
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t9__id" scale="7 7 1" position="36.48 1.5 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t9__genpow" scale="7 7 1" position="36.48 1 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t9__power" scale="7 7 1" position="36.48 0.5 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t9__reqpower" scale="7 7 1" position="36.48 0 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t9__ison" scale="7 7 1" position="36.48 -0.5 -13.93" rotation="0 0 0"></a-entity>
        <!-- /Microdistrict [9] -->


        <!-- Microdistrict [10] -->
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t10__id" scale="7 7 1" position="20.44 1.5 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t10__genpow" scale="7 7 1" position="20.44 1 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t10__power" scale="7 7 1" position="20.44 0.5 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t10__reqpower" scale="7 7 1" position="20.44 0 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t10__ison" scale="7 7 1" position="20.44 -0.5 11.38" rotation="0 180 0"></a-entity>
        <!-- /Microdistrict [10] -->


        <!-- Microdistrict [11] -->
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t11__id" scale="7 7 1" position="27.63 1.5 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t11__genpow" scale="7 7 1" position="27.63 1 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t11__power" scale="7 7 1" position="27.63 0.5 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t11__reqpower" scale="7 7 1" position="27.63 0 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t11__ison" scale="7 7 1" position="27.63 -0.5 11.38" rotation="0 180 0"></a-entity>
        <!-- /Microdistrict [11] -->


        <!-- Microdistrict [12] -->
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t12__id" scale="7 7 1" position="34.63 1.5 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t12__genpow" scale="7 7 1" position="34.63 1 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t12__power" scale="7 7 1" position="34.63 0.5 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t12__reqpower" scale="7 7 1" position="34.63 0 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Microdistrict; color: #ffffff; align: center;" id="t12__ison" scale="7 7 1" position="34.63 -0.5 11.38" rotation="0 180 0"></a-entity>
        <!-- /Microdistrict [12] -->


        <!-- Factory 1 [13] -->
        <a-entity text="value: Factory 1; color: #ffffff; align: center;" id="t13__id" scale="7 7 1" position="46.89 1.5 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Factory 1; color: #ffffff; align: center;" id="t13__genpow" scale="7 7 1" position="46.89 1 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Factory 1; color: #ffffff; align: center;" id="t13__power" scale="7 7 1" position="46.89 0.5 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Factory 1; color: #ffffff; align: center;" id="t13__reqpower" scale="7 7 1" position="46.89 0 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Factory 1; color: #ffffff; align: center;" id="t13__ison" scale="7 7 1" position="46.89 -0.5 -13.93" rotation="0 0 0"></a-entity>
        <!-- /Factory 1 [13] -->


        <!-- Hospital 1 [14] -->
        <a-entity text="value: Hospital 1; color: #ffffff; align: center;" id="t14__id" scale="7 7 1" position="68.28 1.5 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Hospital 1; color: #ffffff; align: center;" id="t14__genpow" scale="7 7 1" position="68.28 1 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Hospital 1; color: #ffffff; align: center;" id="t14__power" scale="7 7 1" position="68.28 0.5 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Hospital 1; color: #ffffff; align: center;" id="t14__reqpower" scale="7 7 1" position="68.28 0 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Hospital 1; color: #ffffff; align: center;" id="t14__ison" scale="7 7 1" position="68.28 -0.5 11.38" rotation="0 180 0"></a-entity>
        <!-- /Hospital 1 [14] -->


        <!-- Solar Battery [15] -->
        <a-entity text="value: Solar Battery; color: #ffffff; align: center;" id="t15__id" scale="7 7 1" position="71.89 1.5 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Solar Battery; color: #ffffff; align: center;" id="t15__genpow" scale="7 7 1" position="71.89 1 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Solar Battery; color: #ffffff; align: center;" id="t15__power" scale="7 7 1" position="71.89 0.5 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Solar Battery; color: #ffffff; align: center;" id="t15__reqpower" scale="7 7 1" position="71.89 0 -13.93" rotation="0 0 0"></a-entity>
        <a-entity text="value: Solar Battery; color: #ffffff; align: center;" id="t15__ison" scale="7 7 1" position="71.89 -0.5 -13.93" rotation="0 0 0"></a-entity>
        <!-- /Solar Battery [15] -->


        <!-- Wind Generator [16] -->
        <a-entity text="value: Wind Generator; color: #ffffff; align: center;" id="t16__id" scale="7 7 1" position="75.19 1.5 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Wind Generator; color: #ffffff; align: center;" id="t16__genpow" scale="7 7 1" position="75.19 1 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Wind Generator; color: #ffffff; align: center;" id="t16__power" scale="7 7 1" position="75.19 0.5 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Wind Generator; color: #ffffff; align: center;" id="t16__reqpower" scale="7 7 1" position="75.19 0 11.38" rotation="0 180 0"></a-entity>
        <a-entity text="value: Wind Generator; color: #ffffff; align: center;" id="t16__ison" scale="7 7 1" position="75.19 -0.5 11.38" rotation="0 180 0"></a-entity>
        <!-- /Wind Generator [16] -->

        <!-- /Text -->


        <a-sky src="/img/sky.jpg" rotation="0 -130 0"></a-sky>

        <!-- Camera -->
        <a-entity id="cameraRig" movement-controls="constrainToNavMesh: true; enabled: true">
            <a-entity id="cursor" camera look-controls position="0 0.8 0" rotation="0 180 0" cursor="rayOrigin: mouse" raycaster="objects: .interractible">
            </a-entity>
            <a-entity id="leftHand" hand-controls="hand: left; handModelStyle: highPoly; color: #94c6ff"></a-entity>
            <a-entity id="rightHand" hand-controls="hand: right; handModelStyle: highPoly; color: #94c6ff" laser-controls line="color: red; opacity: 0.75" raycaster="objects: .interractible"></a-entity>
            <a-entity id="choseHand"></a-entity>
        </a-entity>
        <!-- /Camera -->

    </a-scene>

    <?php include_once "php/javascripts.php" ?>
</body>

</html>