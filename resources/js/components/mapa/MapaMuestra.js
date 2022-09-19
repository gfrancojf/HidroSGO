import React, {useState, Fragment} from 'react'


import { Map, TileLayer,  GeoJSON, FeatureGroup} from 'react-leaflet'
import L from 'leaflet'
import { EditControl } from 'react-leaflet-draw'
import "leaflet-draw/dist/leaflet.draw.css"
import FullscreenControl from 'react-leaflet-fullscreen';
import 'react-leaflet-fullscreen/dist/styles.css'

const MapaMuestra = ({geojson, geojson2, handleChangeMapa, coordenadas_setor, coordenadas_obra, type})=> {
  const [datos, guardarDatos] = useState({
      lat:6.6181996,
      lng:-65.6477033,
      zoom:5.5,
      control: true
      
    })

  let position = [datos.lat, datos.lng]

  const onEachFeature = (feature, layer) => {
    if (feature.properties && feature.properties.nombre) {
        layer.bindPopup(feature.properties.nombre);
    }
  }

  const onColor = (feature, style) => {

    return {color:feature.properties.color}
  }

const pointToLayer = (feature, latlng) =>{
  return L.circleMarker(latlng, null); // Change marker to circle
  // return L.marker(latlng, { icon: {}}); // Change the icon to a custom icon
}




  return (

    <Map center={position} zoom={datos.zoom} zoomControl={datos.control}>
    
    <TileLayer
      url = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'
      attribution= '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      maxZoom = {19}
    />

    {type === "mapaServicioEstatus"?<FullscreenControl position="topleft"/>:null}

    {/*renderizar mapa registro*/}
    {type === "registro"?
    <Fragment>
      <GeoJSON
        data={coordenadas_obra}
      />
      <GeoJSON
        data={coordenadas_setor}
      />
      </Fragment>
    :null
    }

    {/*renderizar ambos datos*/}
    {typeof geojson !== "undefined"?
    <Fragment>

      
      <GeoJSON
        data={geojson}
        pointToLayer = {pointToLayer}
        onEachFeature={onEachFeature} style = {onColor}/>
      {typeof geojson !== "undefined"? 
      <GeoJSON
        data={geojson2}
        pointToLayer = {pointToLayer}
        onEachFeature={onEachFeature}
        style = {onColor}
        />:null}
      </Fragment>:null
    }


    {/*ocultar panel*/}
    {type !== "mapaServicioEstatus"?<FeatureGroup>
        <EditControl
          position='topleft'
          
          onCreated={handleChangeMapa}
          
          draw={{
            rectangle: false
          }}
        />
      </FeatureGroup>:null}
  
  </Map>

  );
}

export default MapaMuestra


