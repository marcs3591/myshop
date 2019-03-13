/**
 * Specific JS for the elegance theme
 * 
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2014
 */

$(window).resize(function() {
    $('#catalog-detail-image').height($(window).height() - 400);
});

$(window).trigger('resize');
