=== TK Event Weather ===
Contributors: cliffpaulick
Donate link: http://tourkick.com/pay/?utm_source=plugin-donate-link&utm_medium=free-plugin&utm_term=Event%20Weather%20plugin&utm_campaign=TK%20Event%20Weather
Tags: calendars, celsius, classes, concerts, events, fahrenheit, forecast, local, meetings, shortcode, tickets, weather
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Requires at least: 4.3.0
Tested up to: 4.4.2
Stable tag: trunk

Display beautiful, accurate, and free weather forecasts between a start and end time on the same day. Perfect for event calendars.

== Description ==

Display beautiful, accurate, and free weather forecasts between a start and end time on the same day. Perfect for event calendars.

= Highlights =

* Registers the `[tk_event_weather]` shortcode for use anywhere on your site (not just for your site calendar's event-specific information) so its usage is very flexible as long as there is a valid Forecast.io API key, latitude, longitude, and time (will output for _right now_ if no time is given)
* Uses the Forecast.io API to provide you with an accurate, reliable (typically 99.9% uptime), and free (or low cost if over the daily free API calls limit) weather forecast
* Uses WordPress' Transients API to minimize Forecast.io API calls (i.e. does not call the Forecast.io API on every page load) to increase page load time and save you money (or keep you from hitting the daily free limit)
* Returns temperature (fahrenheit or celsius) in units local to the given latitude and longitude (with optional override to force display in one or the other)
* Internationalized / translatable (translations not provided)
* No WP_DEBUG messages
* Optimized loading of assets and Forecast.io API calls
* Actions and Filters available for developers and advanced customizations
* Responsive plugin developer

= Paid Add-Ons =

Currently Available:

* [TK Event Weather for The Events Calendar by Modern Tribe](http://tourkick.com/shop/wordpress/tk-event-weather-the-events-calendar/)

I am considering making add-ons for the following event calendars:

* [WP Event Organiser by Stephen Harris](http://wp-event-organiser.com/)
* [Calendarize it! by RightHere](http://codecanyon.net/item/calendarize-it-for-wordpress/2568439?ref=cliffpaulick)
* [Events+ by WPMU DEV](https://premium.wpmudev.org/project/events-plus/)
* [Appointment+ by WPMU DEV](https://premium.wpmudev.org/project/appointments-plus/)

Additional add-on ideas:

* Geolocate user to display weather for user's current location (i.e. no specific latitude or longitude shortcode arguments)
* Styling (custom colors, possibly custom icons)
* Advanced templates/views

I'll consider making whichever add-ons I receive the most requests for (and are technically feasible) so please [share your request](http://tourkick.com/contact/?topic=website)!

= Notes =
* You'll need to register for a free [Forecast.io API key](https://developer.forecast.io/)
* As of January 2016, Forecast.io allows up to 1,000 free API calls per day. The cost for additional API calls is $0.0001 per API call (or $1 per 10,000 requests).
* You'll need to enter your billing information at Forecast.io if you want to ensure your API access isn't cut off after 1,000 API calls per day.
* If you're out of API calls for the day and you haven't entered billing information, the plugin will "fail gracefully" (does not display errors to non-Administrators).
* The Forecast.io [Terms of Use](https://developer.forecast.io/terms_of_use.txt) states, "Any public or user-facing application or service made using the Forecast API must prominently display the message "Powered by Forecast" wherever data from the Forecast API is displayed. This message must, if possible, open a link to http://forecast.io/ when clicked or touched."
* This plugin's output will automatically add a compliant link; however, there is a setting to disable outputting this link. This is because your site may not be a "public or user-facing application" (although it probably is) or because you've emailed to the address in their Terms of Use to request (and have been approved for) their extremely-affordable *white-label* account.
* This plugin and its author are not affiliated with or endorsed by Forecast.io or The Dark Sky Company, LLC.
* This plugin may contain affiliate links.

= Support Me =
* [Leave a great review](https://wordpress.org/support/view/plugin-reviews/tk-event-weather?rate=5#postform)
* Buy one of my available paid add-ons or tell me about one you'd be interested in purchasing!
* [View my other plugins](http://tourkick.com/plugins/)
* [Hire Me for Customizations](http://tourkick.com/)
* [Contribute code via GitHub](https://github.com/cliffordp/tk-event-weather)
* **[Tweet this plugin](https://twitter.com/home?status=I%20love%20the%20free%20TK%20Event%20Weather%20%23WordPress%20plugin%20by%20%40TourKick.%20http%3A//tourkick.com/plugins/tk-event-weather/%20-%20weather%20for%20any%20event!)**

== Installation ==

After automatically or manually installing to wp-content/plugins/:

1. Activate this plugin
2. Navigate to this plugin's Settings page (wp-admin > Settings > TK Event Weather)
3. Click the "Edit Plugin Settings in WP Customizer" button to enter your Forecast.io API key and setup any other available settings.
4. Then use the shortcode however you wish throughout your site (will require manually entering latitude and longitude) or install one of our add-ons to make it easy to integrate with your event calendar.

== Frequently Asked Questions ==


= What shortcodes are available? =

`[tk_event_weather]`

= What are some shortcode examples? =

1) Weather for the White House on Feb 1 at 4:30pm Eastern Time:

A) with single Latitude/Longitude shortcode argument and ISO 8601 datetime format

`[tk_event_weather lat_long="36.281445,-75.794662" start_time="2016-02-01T16:30:00-05:00" end_time="2016-02-01T21:45:00-05:00"]`

B) or separate shortcode arguments for Latitude and Longitude

`[tk_event_weather lat="36.281445" long="-75.794662" start_time="2016-02-01T16:30:00-05:00" end_time="2016-02-01T21:45:00-05:00"]`

C) or with Unix timestamps

`[tk_event_weather lat_long="36.281445,-75.794662" start_time="1454362200" end_time="1454381100"]`

= Will this plugin work with my theme? =

This plugin will work with any properly-coded WordPress theme. Free styling / customization help to integrate with your theme is not available from the plugin author.

= What system specs are required? =

This plugin requires WordPress version 4.3.0 or later. It is always recommended to use the latest version of WordPress for compatibility, performance, and security reasons.

This plugin may not work properly with PHP versions earlier than 5.4. You should meet or exceed the (WordPress recommended software specs)[https://wordpress.org/about/requirements/] for best performance and security.

Any of this plugin's add-ons for specific event calendars would require the latest version of each add-on plugin and each event calendar plugin.

= How accurate are the forecasts? =

Basically, accuracy is a high priority.

Here are quotes from the [Forecast.io API docs](https://developer.forecast.io/docs/v2):

* "Please note that we only store the best data we have for a given location and time: in the past, this will usually be observations from weather stations (though we may fall back to forecasted data if we don't have any observations); in the future, data will be more accurate the closer to the present moment you request."
* "This API is backed by a wide range of data sources, which are aggregated together statistically to provide the most accurate forecast possible for a given location."

== Screenshots ==
1. Caption here

== Changelog ==
*Changelog DIFFs for all versions are available at <a href="http://plugins.trac.wordpress.org/browser/tk-event-weather/trunk" target="_blank">WordPress SVN</a>.*

= Version 1.0 =
* April 1, 2016
* Initial version
