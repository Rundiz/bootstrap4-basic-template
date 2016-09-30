

jQuery(function($) {
    // make dropdown example clicked or always show.
    $('.dropdown-menu-always-show').show().css('position', 'static');

    // make checkbox indeterminate
    $('.checkbox-indeterminate').prop('indeterminate', true);

    // activate popover.
    $('[data-toggle="popover"]').popover();

    // activate tooltip.
    $('[data-toggle="tooltip"]').tooltip();
});