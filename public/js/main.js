$('document').ready(function(){
    
    // Open and close mobile nav
    $('.openMenuButton').on('click', function(){
        $('.mobileNavBar').css('right', '0');
        $('.openMenuButton').css('display', 'none');
        $('.closeMenuButton').css('display', 'block');
    });

    $('.closeMenuButton').on('click', function(){
        $('.mobileNavBar').css('right', '-75%');
        $('.openMenuButton').css('display', 'block');
        $('.closeMenuButton').css('display', 'none');
    });

    // Open and close search bar
    $('.openSearch').on('click', function () {
        $('.searchForm').css('right', '0px');
        $('.openSearch').css('display', 'none');
        $('.closeSearch').css('display', 'block');
    });

    $('.closeSearch').on('click', function() {
        $('.searchForm').css('right', '-350px');
        $('.openSearch').css('display', 'block');
        $('.closeSearch').css('display', 'none');
    });

});