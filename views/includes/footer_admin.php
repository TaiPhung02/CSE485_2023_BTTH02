<footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
    <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script>
    var currentLocation = location.href;
    var navItems = document.querySelectorAll('.navbar-nav li a');
    for (var i = 0; i < navItems.length; i++) {
        if (navItems[i].href === currentLocation) {
            navItems[i].className += " active fw-bold";
        }
        navItems[i].onclick = function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active  fw-bold", "");
            this.className += " active fw-bold";
        };
    }
</script>
</body>

</html>