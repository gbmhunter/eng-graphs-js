==============================================================
Engineering Graphs Written In JavaScript
==============================================================

- Author: gbmhunter <gbmhunter@gmail.com> (http://www.cladlab.com)
- Created: 2013/12/16
- Last Modified: 2013/12/23
- Version: v2.0.5.0
- Company: CladLabs
- Project: Free Code Libraries	.
- Language: HTML/JS/PHP
- Compiler: n/a
- uC Model: n/a
- Computer Architecture: n/a
- Operating System: n/a
- Documentation Format: Doxygen
- License: GPLv3

Description
===========

Contains engineering calculators designed to be viewed with a browser.

two-mosfet-gate-drives-with-deadtime
------------------------------------

Graph of the gate drives to two MOSFETs, with deadtime to prevent shoot-through.

Internal Dependencies
=====================

None.

External Dependencies
=====================

None.

Issues
======

See GitHub Issues.

Limitations
===========

None documented.

Usage
=====

This repo is designed so that you can clone it directly (using SSH) into a web servers ``public_html`` folder (or any sub-folder). Then using PHP on a web page, include the php file of the specific calculator you wish to use, e.g.

::

	include $_SERVER['DOCUMENT_ROOT'] . 'eng-calcs-js/graphs/mosfets/two-mosfet-gate-drives-with-deadtime.php';
	
(assuming you cloned the repo directly into ``public_html``). The PHP file will automatically include it's respective Javascript file that resides in the same directory. All dependencies are automatically included via CDNs.
	
Changelog
=========

========= ========== ============================================================================================================
Version   Date       Comment
========= ========== ============================================================================================================
v2.0.5.0  2013/12/23 Reduced the data set (added new .csv file) for the boost converter inductor output graph to make the web page more responsive.
v2.0.4.0  2013/12/23 Replaced more '$''s with 'jQuery', to make compatible with Wordpress Megamenu plugin.
v2.0.3.0  2013/12/23 Replaced more '$''s with 'jQuery', to make compatible with Wordpress Megamenu plugin.
v2.0.2.0  2013/12/23 Replaced '$' with 'jQuery', to make compatible with Wordpress Megamenu plugin, closes #3.
v2.0.1.0  2013/12/23 Added conditional include for jQuery in all graphs to make sure it is included only once. Should fix Wordpress Megamenu clashes, closes #2.
v2.0.0.0  2013/12/23 Added 'Inductor Output Voltage In Simple Boost Converter' graph. Made graph names unique so that multiple graphs can be displayed on the same page.
v1.0.2.0  2013/12/23 Fixed bug where graphs were not scrolling when sliders were moved, it was due to the x-axis having fixed minimum and maximums, closes #1.
v1.0.1.0  2013/12/16 Fixed jQuery.csv library script include.
v1.0.0.0  2013/12/16 Initial commit. 'MOSFET gate drive with deadtime' graph added.
========= ========== ============================================================================================================