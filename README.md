# ACF Year Picker Custom Field Plugin

## Description

The ACF Year Picker plugin extends the functionality of the Advanced Custom Fields (ACF) plugin by adding a custom field type called 'Year Picker'. This field allows users to select a year from a dropdown, leveraging the jQuery UI Datepicker, but modified to only display and select the Year. It's an ideal solution for cases where only the Year is relevant in date-related data.

## Features

- **Year-Only Selection**: Simplifies date-related fields by allowing users to select only a year.
- **Customizable Year Range**: Developers can easily adjust the years available for selection.
- **Seamless ACF Integration**: Works alongside standard ACF fields without conflict.

## Installation

1. Download the plugin from the GitHub repository.
2. Upload the plugin files to the `/wp-content/Custom-ACF-Year-Picker-Field-Type` directory, or install the plugin through the WordPress plugins screen.
3. Activate the plugin through the 'Plugins' screen in WordPress.

## Usage

After installation and activation:

1. Navigate to your WordPress admin panel's 'Custom Fields' section.
2. Create a new field group or edit an existing one.
3. Add a new field and select 'Year Picker' as the field type.
4. Configure any additional settings for the field as needed.

The 'Year Picker' field will now be available for use within posts, pages, or custom post types based on your ACF field group settings.


## Customization

The year range displayed by the Year Picker can be adjusted by editing the `acf-year-picker.js` file.

## Dependencies

This plugin requires:

- WordPress 5.0 or higher
- Advanced Custom Fields PRO (ACF)  plugin

## Contributing

Contributions to the plugin are welcome. Please feel free to fork, modify, and make pull requests or report issues.

## License

This plugin is open-sourced software licensed under the [GPLv2](http://www.gnu.org/licenses/gpl-2.0.html) license.

## Contact

Wajid Khan - [@mawkkhan]([https://twitter.com/YourTwitter](https://twitter.com/mawkkhan))

## Acknowledgments

- Thanks to the creators of Advanced Custom Fields for their incredible plugin.
- jQuery UI Datepicker for the date-picking functionality.
