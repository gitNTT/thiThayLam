
<footer class="text-center">
  <a class="up-arrow" href="#abc" data-toggle="tooltip" title="Lên trên">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <h2><a href="index.php">NT Mobile</a></h2>
 <style>
.footer_container{
  display: flex;
  justify-content: center;
  align-items: center;
}
 </style>
  <map class="footer_container" name="">
  <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyADAbUcLUCN7OYDx3q4tRhNeKPNTpR3kWE&q=10.815229,107.360760" width="1150" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 </map>
</footer>
<style>

</style>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#abc']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>