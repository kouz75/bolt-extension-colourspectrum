jQuery(document).ready(function($) {
    var inputs   = $('input[data-colourspectrum]'),
        defaults = {
            preferredFormat: "hex3"
        };

    inputs.each(function(i, input) {
        var $input   = $(input),
            options  = $input.data('spectrum-options') || {},
            settings = $.extend(defaults, options);

        $input.spectrum(settings);
    });
});
