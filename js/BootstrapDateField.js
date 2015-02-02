/** =============================
 * site manager.js
 * * ===========================
 * @author Patrick Chito-voro
 * @copyright 2013 Chito Systems.
 *
 * ============================= */

(function ($) {
    "use strict";
    /*global jQuery, document, window*/

    $(document).ready(function () {
        $("input.bootstrap-date-field").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "1950:2000",
            numberOfMonths: 1
        });
    });
}(jQuery));