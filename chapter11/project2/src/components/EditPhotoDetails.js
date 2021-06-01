import React from "react";
import './EditPhotoDetails.css';

class EditPhotoDetails extends React.Component {

   handleChange = e => {
      // find the current photo in our photo array
      const id = this.props.currentPhoto;
      const photo = this.props.photos.find( p => p.id === id);
   
      // update the photo using these 3 steps ...
      
      // 1. make a clone of the current photo object
      const clonedPhoto = { ...photo };
      
      // 2. update value of field that just changed
      if (e.currentTarget.name == 'title')
        clonedPhoto[e.currentTarget.name] = e.currentTarget.value;
      else
        clonedPhoto.location[e.currentTarget.name] = 
            e.currentTarget.value;
      
      // 3. tell parent (or above) to update the state for this photo
      this.props.updatePhoto(this.props.currentPhoto, clonedPhoto);
   }
   

   render() {
      const id = this.props.currentPhoto;
      const imgURL = `https://www.randyconnolly.com/funwebdev/3rd/images/travel/medium640/`;
      // just in case, handle case of a missing photos collection 
      if (this.props.photos.length > 0) {
         // find the photo object with this id
         const photo = this.props.photos.find( p => p.id === id);
         // just in case there is no match, then exit
         if (! photo) return null;         
         // we have found a photo for this id, so display edit form
         return (
            <article className="details">
               <div className="detailsPhotoBox">
               <form className="photoForm">
                  <legend>Edit Photo Details</legend>
                  <img src={imgURL+photo.filename} alt={photo.title} />

                  <label>Title</label>
                  <input type='text'  name='title' onChange={this.handleChange} value={photo.title} />

                  <label>City</label>
                  <input type='text'  name='city' onChange={this.handleChange} value={photo.location.city} />       

                  <label>Country</label>
                  <input type='text'  name='country' onChange={this.handleChange} value={photo.location.country} />      
               </form>
               </div>
            </article>
         );
      } else {
         return null;
      }   
   }
}

export default EditPhotoDetails;
