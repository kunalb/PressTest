=== PressTest ===
Contributors: kunalb
Tags: Developers, Unit Testing, phpUnit, qUnit
Donate Link: Send any donations to bhalla.kunal@gmail.com
Requires at least: WordPress 3.2
Tested up to: WordPress 3.2.1
Stable tag: 0.2

Tip 62:
  "Test early. Test often. Test Automatically."

== Description ==
The Pragmatic Programmer, Tip 49:
  "Test your software, or your users will."

PressTest is a WordPress plugin aimed at simplifying writing unit tests for Plugins. It integrates phpUnit and qUnit within WordPress, allowing you to test your plugins without leaving the comfort of your browser -- or having to create a fresh install.

Drop your plugin's unit tests into a ptest folder within the plugin's root directory (at the moment only the 1st level of the directory is tested for tests) and a link will appear on the Plugins page to run tests.  

At the moment, PressTest provides a file that mocks all core functions in WordPress, all of which call a 'mime' to imitate the function as required by you. Read the internal documentation in the file pt-mime.php to see how to customize mocked function and class behaviour. Tests for PT_Mime at ptests/PT_Mime_Test.php will further help in understanding usage.

Note: This plugin follows semantic tagging -- in short, consider all versions starting as 0.x unstable; feature releases incrementing by .x, bugfix releases by .0x and backwards incompatible changes with x.00.

== Installation ==
Add the presstest folder to your `<install>/wp-content/plugins/` directory.

== Features ==
- Integrates phpUnit and qUnit with your WordPress install
- Generates a set of mock functions from wordpress core that can be used for writing unit tests

== Frequently Asked Questions ==

= The plugin gives an error about time elapsed/memory used =
PressTest is a memory intensive plugin, particularly while it generates the mock functions.

It attempts to increase the maximum running time during runtime but that can fail depending on your server's settings.

This is something that will be resolved by the first release: till then I recommend using this plugin strictly on your dev setup.

= The plugin gives an error about files not found =
As a hackish way to get around modifying phpUnit, the include path is modified on runtime. If your server doesn't permit changing the include path, then the tests will not run.

Again, this is something that will be resolved by the first release.

= Why? =
Because.

== Screenshots ==
1. Running qUnit with sample tests.
2. The additional links to run tests.
3. Running phpUnit with sample tests.

== Upgrade Notice ==
Please note that this is an alpha release and unstable. Any and all parts of the API/functions created are susceptible to change till version 1.0

== Changelog ==
= 0.2 =
- Added mockable functions and classes with configurable behaviour.

= 0.1 =
- Inital release -- basic phpUnit and qUnit integration.
