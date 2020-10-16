var slide_index = 1;
        displaySlides(slide_index);

        function nextSlide(n) {
            displaySlides(slide_index += n);
        }

        function currentSlide(n) {
            displaySlides(slide_index = n);
        }

        function displaySlides(n) {
            var i;
            var slides = document.getElementsByClassName("CmpSlider-item");
            if (n > slides.length) {
                slide_index = 1
            }
            if (n < 1) {
                slide_index = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            var elmt = slides[slide_index - 1];
            if(elmt) {
                elmt.style.display = "block";
            }
            
        }

        function initSliderMouseOver() {
            var div = document.getElementById("slidercontainerParent");
            if(!div) return;
            div.mouseIsOver = false;
            div.onmouseover = function() {
                this.mouseIsOver = true;
            };
            div.onmouseout = function() {
                this.mouseIsOver = false;
            }
            
        }
        setInterval(() => {
            var div = document.getElementById("slidercontainerParent");
            if(!div) return;
           if(!div.mouseIsOver) {
            nextSlide(1);
           }
            
        }, 5000);
        initSliderMouseOver();