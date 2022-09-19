import React, {useState} from "react";
import ReactDOM from 'react-dom';
import '../css/app.css'
import { MapContainer, TileLayer, Marker, Popup } from 'react-leaflet';



function App() {
  const position = [51.505, -0.09]
  return (
    <div>
      <MapContainer center={position} zoom={13} scrollWheelZoom={true}>
        <TileLayer
          url = 'https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png'
          attribution= '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>'
          maxZoom = {19}
        />
        <Marker position={position}>
          <Popup>
            A pretty CSS3 popup. <br /> Easily customizable.
          </Popup>
        </Marker>
      </MapContainer>
    </div>
  );
}

if (document.getElementById('example')) {
  ReactDOM.render(<App />, document.getElementById('example'));
}