/**
 * Created by Vincent on 04/02/2017.
 */

jQuery(function ($) {
    // fancybox
    $(".fancybox").fancybox({
        modal: true, // disable regular nav and close buttons
        // add buttons helper (requires buttons helper js and css files)
        helpers: {
            buttons: {}
        }
    });
    // filter selector
    $(".filter").on("click", function () {
        var $this = $(this);
        // if we click the active tab, do nothing
        if ( !$this.hasClass("active") ) {
            $(".filter").removeClass("active");
            $this.addClass("active"); // set the active tab
            // get the data-rel value from selected tab and set as filter
            var $filter = $this.data("rel");
            // if we select view all, return to initial settings and show all
            $filter == 'all' ?
                $(".fancybox")
                    .attr("data-fancybox-group", "gallery")
                    .not(":visible")
                    .fadeIn()
                : // otherwise
                $(".fancybox")
                    .fadeOut(0)
                    .filter(function () {
                        // set data-filter value as the data-rel value of selected tab
                        return $(this).data("filter") == $filter;
                    })
                    // set data-fancybox-group and show filtered elements
                    .attr("data-fancybox-group", $filter)
                    .fadeIn(1000);
        } // if
    }); // on
}); // ready