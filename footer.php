
<script>
                let navToggle = document.querySelector(".nav__toggle");
                let navWrapper = document.querySelector(".nav__wrapper");

                navToggle.addEventListener("click", function () {
                        if (navWrapper.classList.contains("active")) {
                                this.setAttribute("aria-expanded", "false");
                                this.setAttribute("aria-label", "menu");
                                navWrapper.classList.remove("active");
                        } else {
                                navWrapper.classList.add("active");
                                this.setAttribute("aria-label", "close menu");
                                this.setAttribute("aria-expanded", "true");
                        }
                });



                let slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                        showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                        showSlides(slideIndex = n);
                }

                function showSlides(n) {
                        let i;
                        let slides = document.getElementsByClassName("mySlides");
                        let dots = document.getElementsByClassName("dot");
                        if (n > slides.length) { slideIndex = 1 }
                        if (n < 1) { slideIndex = slides.length }
                        for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
                crossorigin="anonymous"></script>
</body>

</html>