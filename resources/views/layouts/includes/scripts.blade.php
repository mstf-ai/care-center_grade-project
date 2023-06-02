


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>
    <!-- JavaScript of RegisterPage -->
    <script src="js/register.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    {{-- profile java script --}}
   
{{-- profile java script --}}
<script>
    function menuToggle() {
        const toggleMenu = document.querySelector(".menu");
        toggleMenu.classList.toggle("active");
    }

    // ============================================================= //


let title = document.querySelector('.title');

window.onload = function(){
if(window.navigator.onLine){
    online()
}else{
    offline()
} 
}

window.addEventListener("online", function(){
online();
});

window.addEventListener("offline", function(){
offline();
});

reload.onclick = function(){
window.location.reload();
}

function online(){
title.innerHTML = 'Online Now';
title.style.color = 'green';
ul.classList.add('hide');
reload.classList.add('hide');
}

function offline(){
title.innerHTML = 'Offline Now';
title.style.color = 'red';
ul.classList.remove('hide');
reload.classList.remove('hide');
}


</script>
