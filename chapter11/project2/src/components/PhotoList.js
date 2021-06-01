import React from "react";
import PhotoThumb from './PhotoThumb.js';

const PhotoList = (props) => {
   if (props.photos.length > 1) {
   return (       
      <article className="photos">
          {props.photos.map( (p) => <PhotoThumb photo={p} key={p.id} 
                                                showImageDetails={props.showImageDetails} /> )}              
      </article>
   );
   } else 
      return null;
}
export default PhotoList;
