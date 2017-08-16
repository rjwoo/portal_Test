<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sos-knowledge-base
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>


<section class="pre-footer bg-secondary">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-3">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340.21 190.13"><defs>
                <style>.cls-1,.cls-2{fill:#0e425b;}.cls-1{fill-rule:evenodd;}</style></defs><title>SOS Logo</title><path class="cls-1" d="M168.08,62.33c-33.95,0-64.9,25-64.9,65.23v.17c0,31.62,26,62.4,64.73,62.4,38.27,0,65.23-29.62,65.23-63.9S206,62.33,168.08,62.33Zm30.51,101c-1.53,2.34-5.07,2.66-5.8,5.8-6.09,1.43-6.58,8.45-11.6,11-2.27-6.69,4.75-12.78,2.9-18.68-1.25-4-7.92-2.36-9.34-6.76-.88,0-.65.54-1.29,0-.38-1.12-.59-2.42-1.93-2.58,1-2.27-.49-4.23-.32-7.41a13.4,13.4,0,0,0,1.93-1.93c.44-4.19-3.61-5.08-6.12-2.9-1.13-1.77-4.11-1.68-4.19-4.51-1.83-1.32-3.27-1.27-5.8-.64a2.44,2.44,0,0,1-.64-2.26c-5.15.54-6.74-2.42-10.95-2.58,1.78-5.78-3.6-9-5.8-12.88-1.77,1.23.59,3,.32,4.83-.68-.28-1-1-1.93-1,.93-1.89-1.3-3.14-.64-5.8-2.58-2.61-4.71-9-1.29-12.24-.21-2,1-3.92-.32-5.15,2.13-1.42.74-4.48,0-6.44a5.79,5.79,0,0,0,1.93-1.61c-1-1.35-1-3.74-3.22-3.87.61-3.89,3.95-5.07,6.76-6.76,1.59.23,1.52,2.13,2.57,2.9h2.9c.1,1.3,1.22,1.58,1.93,2.25,1-.22,2-.39,2.25-1.29.27-1.61-2.75-1.12-1.61-2.58,0-.7-.81-.69-1.61-.64-.13-.78.59-.7.32-1.61,2.07.18,2.21,2.3,4.19,2.58-3.17,3.16,4,5.26,2.9,1.61.77-1.06,1,1.17,2.26.64,1-.07.54-1.6.64-2.58,1,.75,1.59-1,1.93-1.93,2.69.21,3,2.8,6.12,2.58-2.57,1.23.72,2.51,1,3.86-2.17.34-3-.63-4.83-.65.09-.66.87-.63,1-1.29-.24-1.26-1.27-1.73-2.25-2.26C159.32,82,156.47,83.5,157,86c-4.51,1.68-2.17,8.2,2.9,6.44-.11,1.89.82,2.82,2.58,3.54,2.13-1.18-.74-3.54,1.29-4.83-.78-2-1.92-1.75-1.29-4.83a8.71,8.71,0,0,1,3.86,1.93c1.1,0,1.2-.95,1.61-1.61,1.36,3.48,7.5,2.17,8.37,6.12.88.2,2.56-.41,2.9.32-.57,1.5-4,1.8-3.54-.64-3.55-.7-6.54,2.62-6.44,5.48,2.16.34,1.86-1.79,3.54-1.93,1.12.27,1.2,1.59,1.61,2.58-2.32-1-2.79,2.52-4.83,2.9-.17,1.17,1.42,1.45.64,2.26a5.24,5.24,0,0,0-2.26.64c.3,4.92-.75,8.48-3.54,10.31-.11,2.69,1.68,3.47,1.93,5.8-2.12-.46-2.43-2.73-3.54-4.19-2.39.57-5.12-1-5.15,1.61-5.64-2.12-5.41,3.6-6.44,6.44.87,3,2.64,7.46,6.12,6.12,2.08-.8.17-4.62,3.87-4.19.89,1.92-2.91,4.76-.32,6.44,1.18,0,1.45-.92,2.25-1.29,1.14-.18.79,1.14,1.93,1a4.18,4.18,0,0,0,2.26,5.8c1.57.17,1.51-1.29,2.58-1.61,1.15,0,1.17,1.19,2.58,1s1.71-1.94,2.25-3.22c.44-.85,2.06-.52,1.93-1.93,1.28-.31.13,1.8,1.29,1.61s1.42-.73,1.29-1.93c1.09.09,1.11,1.26,2.26,1.29,1.86-.07,2.41-1.45,3.86-1.93,1.05,1.73,4.2,1.38,5.47,2.9,2.51-.94,5.55-1.31,7.41.65.33,1.51-1.29,1.07-1,2.58,1.9,1.52,5.48-.42,7.09-1.29,1.73,1.46,4.47,0,6.12,1.29-1.73,6.65-2.31,11.6-5.47,16.75C203.13,157.4,199.15,158.81,198.59,163.33Z"/>
                <path class="cls-2" d="M46.59,146.15c0,13.34,8.22,15.67,11.94,15.67a11.07,11.07,0,0,0,11.17-11c0-6-4.81-7.91-22.49-15.35-8.06-3.26-28.07-11.32-28.07-32.88,0-23.11,20.94-35.36,40.17-35.36,15.82,0,38.15,8.06,38.62,35.67h-29C68.31,99,67.37,91.71,58.38,91.71c-5.12,0-10.08,3.57-10.08,9,0,5.27,3.1,6.67,23.73,16,21.4,9.62,26.83,19.55,26.83,32.88,0,18.3-9.62,36.76-40,36.76-30.09,0-42.19-17.68-41.41-40.17Z"/><path class="cls-2" d="M267.85,146.15c0,13.34,8.22,15.67,11.94,15.67a11.07,11.07,0,0,0,11.17-11c0-6-4.81-7.91-22.49-15.35-8.06-3.26-28.07-11.32-28.07-32.88,0-23.11,20.94-35.36,40.17-35.36,15.82,0,38.15,8.06,38.62,35.67h-29c-.62-3.88-1.55-11.17-10.54-11.17-5.12,0-10.08,3.57-10.08,9,0,5.27,3.1,6.67,23.73,16,21.4,9.62,26.83,19.55,26.83,32.88,0,18.3-9.62,36.76-40,36.76-30.09,0-42.18-17.68-41.41-40.17Z"/><path class="cls-2" d="M165.73,0S78.45,60.42,2.19,57c5.51,8,12.9,14.85,20.46,20.53,0,0-2.72-3.71-7.3-13.12C93.85,60.15,165.73,0,165.73,0Z"/>
                <path class="cls-2" d="M165.73,0S53.41,52.4,0,40.74c1.95,9.55,6,11.51,9.77,16.43,0,0-1.78-5.59-.56-9.47,14.42.18,52.46,3.63,156.52-47.7"/>
                <path class="cls-2" d="M165.73,0S51.8,42.55,2.85,27.71C.26,35.88,8.11,42.1,8.11,42.1s-2.67-2.69-1.4-8.69C51.61,43.52,111,19.8,165.73,0Z"/>
                <path class="cls-2" d="M165.42,0S62.18,30.86,13.23,16c-2.59,8.17,5.26,14.39,5.26,14.39s-2.67-2.69-1.4-8.69C62,31.83,111.09,15.19,165.42,0Z"/>
                <path class="cls-2" d="M174.48,0S261.76,60.42,338,57c-5.51,8-12.91,14.85-20.46,20.53,0,0,2.72-3.71,7.3-13.12C246.35,60.15,174.48,0,174.48,0Z"/>
                <path class="cls-2" d="M174.48,0S286.8,52.4,340.21,40.74c-1.95,9.55-6,11.51-9.77,16.43,0,0,1.78-5.59.56-9.47-14.42.18-52.46,3.63-156.52-47.7"/>
                <path class="cls-2" d="M174.48,0S288.4,42.55,337.35,27.71c2.59,8.17-5.25,14.39-5.25,14.39s2.67-2.69,1.4-8.69C288.6,43.52,229.25,19.8,174.48,0Z"/>
                <path class="cls-2" d="M174.78,0S278,30.86,327,16c2.58,8.17-5.26,14.39-5.26,14.39s2.67-2.69,1.4-8.69C278.22,31.83,229.11,15.19,174.78,0Z"/>
                <path class="cls-2" d="M169.83.65c-2.95,9.21-3.43,37.69-.36,42.39C171.79,38.71,171.87,9.23,169.83.65Z"/>
                </svg>            
            </div>
            <div class="col-xs-12 col-md-3">
                <h6>Address</h6>
                <p>
                    1234 Street Name<br/>
                    City, AA 99999
                </p>
            </div>
            <div class="col-xs-12 col-md-3">
                <h6>Contacts</h6>
                <p>
                    Email: support@email.com<br/>
                    Phone: +1 (0) 000 0000 001<br/>
                    Fax: +1 (0) 000 0000 002
                </p>
            </div>
            <div class="col-xs-12 col-md-3">
                <h6>Links</h6>
                <p>
                    <a class="text-primary" href="#">Link 1</a><br/>
                    <a class="text-primary" href="#">Link 2</a><br/>
                    <a class="text-primary" href="#">Link 3</a>
                </p>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</section>

<footer class="footer footer-default bg-dark">
    <div class="container">
        <nav>
            <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank">Terms of Service</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" target="_blank">Privacy Policy</a>
                </li>
            </ul>
        </nav>
        <div class="copyright">
            <p class="text-xs-center">&copy; Copyright <script>document.write(new Date().getFullYear())</script> – Students Offering Support</p>
        </div>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>

</html>

