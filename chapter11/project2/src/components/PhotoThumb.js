import React from "react";

const PhotoThumb = props => {
  const imgURL = `https://www.randyconnolly.com/funwebdev/3rd/images/travel/square150/${props.photo.filename}`;

  const handleViewClick = () => {
    props.showImageDetails(props.photo.id);
  }
 
  return ( 
    <div className="photoBox" onClick={ handleViewClick }>
      <figure>
        <img src={imgURL} className="photoThumb" title={props.photo.title} alt={props.photo.title} />
      </figure>
      <div>
        <h3>{props.photo.title}</h3>
        <p>{props.photo.location.city}, {props.photo.location.country}</p>    
        <button onClick={ handleViewClick }>View</button><button >❤</button>                  
      </div>
    </div>
  );
}

export default PhotoThumb;
