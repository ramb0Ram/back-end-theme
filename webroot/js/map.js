var map;
//Dibuja el grid
function CoordMapType(tileSize) {
    this.tileSize = tileSize;
}
CoordMapType.prototype.getTile = function(coord, zoom, ownerDocument) {
    var div = ownerDocument.createElement('div');
    div.innerHTML = coord;
    div.style.width = this.tileSize.width + 'px';
    div.style.height = this.tileSize.height + 'px';
    div.style.fontSize = '10';
    div.style.borderStyle = 'solid';
    div.style.borderWidth = '1px';
    div.style.borderColor = '#AAAAAA';
    return div;
};
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: {lat: Number(local.latitude), lng: Number(local.longitude)}
    });
    //Grid
    map.overlayMapTypes.insertAt(0, new CoordMapType(new google.maps.Size(256, 256)));
    //Marcador
    var myLatLng = {lat: Number(local.latitude), lng: Number(local.longitude)};
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
    });
    //Coordenadas grid por zoom
    var bounds = {
        16: [[14727, 14730], [29170, 29173]],
        17: [[29454, 29461], [58341, 58346]],
        18: [[58907, 58923], [116683, 116692]],
        19: [[117814, 117847], [233366, 233385]],
        20: [[235628, 235694], [466732, 466770]],
        21: [[471256, 933464], [471388, 933541]]

    };
    //Imagenes a cargar
    var imageMapType = new google.maps.ImageMapType({
        getTileUrl: function(coord, zoom) {
            if (zoom < 15 || zoom > 21 ||
                bounds[zoom][0][0] > coord.x || coord.x > bounds[zoom][0][1] ||
                bounds[zoom][1][0] > coord.y || coord.y > bounds[zoom][1][1]) {
              return null;
            }
            //console.log(zoom);
            return 'http://localhost/CONTRASTE/contraste--18_ficeda_buscador_locatarios/img/map/lay_'+zoom+'.png';
            
            /*
            var i = ['http://www.gstatic.com/io2010maps/tiles/5/L2_',
                zoom, '_', coord.x, '_', coord.y, '.png'].join('');
            console.log(i);
            */
            //return i;

            /*
            return [
                'http://localhost/CONTRASTE/contraste--18_ficeda_buscador_locatarios/img/map/',
                "zoom_"+zoom+".png"
            ].join('');
            */
            
        },
        tileSize: new google.maps.Size(256, 256)
    });
    map.overlayMapTypes.push(imageMapType);
}



function initMapEjemplo() {
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        //center: {lat: Number(local.latitude), lng: Number(local.longitude)}
        center: {lat: 37.783, lng: -122.403}
    });
    map.overlayMapTypes.insertAt(0, new CoordMapType(new google.maps.Size(256, 256)));
    var myLatLng = {lat: Number(local.latitude), lng: Number(local.longitude)};
    /*
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
    });
    */
    var bounds = {
        17: [[20969, 20970], [50657, 50658]],
        18: [[41939, 41940], [101315, 101317]],
        19: [[83878, 83881], [202631, 202634]],
        20: [[167757, 167763], [405263, 405269]]

    };
    var imageMapType = new google.maps.ImageMapType({
        getTileUrl: function(coord, zoom) {
            if (zoom < 17 || zoom > 20 ||
                bounds[zoom][0][0] > coord.x || coord.x > bounds[zoom][0][1] ||
                bounds[zoom][1][0] > coord.y || coord.y > bounds[zoom][1][1]) {
              return null;
            }
            console.log(zoom);
            var i = ['http://www.gstatic.com/io2010maps/tiles/5/L2_',
                zoom, '_', coord.x, '_', coord.y, '.png'].join('');
            console.log(i);
            return i;

            /*
            return [
                'http://localhost/CONTRASTE/contraste--18_ficeda_buscador_locatarios/img/map/',
                "zoom_"+zoom+".png"
            ].join('');
            */
            
        },
        tileSize: new google.maps.Size(256, 256)
    });
    map.overlayMapTypes.push(imageMapType);
}