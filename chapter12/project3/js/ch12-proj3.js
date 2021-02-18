document.addEventListener("DOMContentLoaded", function() {

   const select = document.querySelector('#file');
   const images = document.querySelectorAll('section.grid-container img');
   setBorders(images, images[0]);

   for (let img of images) {
      img.addEventListener('click', (e) => {

         let file = img.dataset.value;
         let selector = '#whichPainting [value="' + file + '"]'
         document.querySelector(selector).selected = true;         
         setBorders(images, img);
      });

   }


   function setBorders(images, current) {
      for (let img of images) {
         img.classList.remove('img-selected');
      }
      current.classList.add('img-selected');
   }

});