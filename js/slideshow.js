var slideshowIndex = 0;
slideshowSlides();

function slideshowSlides() {
  var i;
  var slides = document.getElementsByClassName("slideshowSlides");
  var dots = document.getElementsByClassName("dotSlide");
  console.log(dots.length);
  console.log(slides.length);
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideshowIndex++;
  if (slideshowIndex > slides.length) {slideshowIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" activeSlide", "");
  }
  slides[slideshowIndex-1].style.display = "block";  
  dots[slideshowIndex-1].className += " active";
  setTimeout(slideshowSlides, 2000); // Change image every 2 seconds
}