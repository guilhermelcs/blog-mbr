jQuery(document).ready(function( $ ) {
    $('#search-icon-link').on('click', function() {
        $('#searchbar-section').toggleClass('hide-element');
    });

    $('#menu-icon-link, #btn-close-menu').on('click', function() {
        $('.menu-full-height').toggleClass('opacity-0 see-menu')
    });

    $(document).mouseup(function(e) {
        var container = $(".menu-full-height");
        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0 && container.hasClass('see-menu')) {
            container.toggleClass('opacity-0 see-menu');
        }
    });

    $('#search-icon-link-mobile').on('click', function() {
        $('#searchbar-section-mobile').toggleClass('hide-element');
    })
});