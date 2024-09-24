// stickyNavbar.js
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar');
    const sticky = navbar.offsetTop;

    function stickyNavbar() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add('sticky');
        } else {
            navbar.classList.remove('sticky');
        }
    }
    
    window.addEventListener('scroll', stickyNavbar);
});
