/**
 * This script customizes the jQuery UI Datepicker to create an ACF Year Picker field.
 * It configures the datepicker to allow only year selection, hiding the month and day parts.
 */
(function($) {
    $(document).ready(function() {
        // Calculate the start and end year for a 100-year range centered on the current year
        var currentYear = new Date().getFullYear();
        var startYear = currentYear - 100;
        var endYear = currentYear + 100;

        // Initialize the datepicker on elements with the class 'acf-year-picker-input'
        $('.acf-year-picker-input').datepicker({
            changeMonth: false, // Disable month selection
            changeYear: true,  // Enable year selection
            dateFormat: 'yy',  // Set format to only show the year
            yearRange: startYear + ':' + endYear, // Set the 100-year range dynamically
            showButtonPanel: true, // Show the button panel

            // Function to execute before showing the datepicker
            beforeShow: function(input, inst) {
                // Add custom classes to hide the calendar and month dropdown
                inst.dpDiv.addClass('hide-calendar-and-month');
                $('#ui-datepicker-div').addClass('only-year-picker');
            },

            // Function to execute when the month or year is changed
            onChangeMonthYear: function(year, month, inst) {
                // Update the input with the selected year and hide the datepicker
                var newDate = new Date(year, 0, 1); // Set to January 1st of the selected year
                $(this).datepicker('setDate', newDate);
                $(this).val(year); // Update the input field with the selected year
                $(this).datepicker('hide'); // Hide the datepicker after selection
            },

            // Function to execute when the datepicker is closed
            onClose: function() {
                // Remove the class when closing the datepicker
                $(this).removeClass('hide-calendar-and-month');
                $('#ui-datepicker-div').removeClass('only-year-picker');
            }
        });

        // Append custom styles to the head of the document
        // These styles ensure that the calendar and month dropdown are hidden
        $('<style>').text(`
            .hide-calendar-and-month .ui-datepicker-calendar,
            .hide-calendar-and-month .ui-datepicker-month
            .only-year-picker .ui-datepicker-month,
            .only-year-picker .ui-datepicker-calendar {
                display: none !important;
            }
        `).appendTo('head');    });
})(jQuery);
