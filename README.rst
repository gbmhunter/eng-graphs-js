==============================================================
Engineering Graphs Written In JavaScript
==============================================================

- Author: gbmhunter <gbmhunter@gmail.com> (http://www.cladlab.com)
- Created: 2013/12/16
- Last Modified: 2013/12/16
- Version: v1.0.1.0
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

	include $_SERVER['DOCUMENT_ROOT'] . '/graphs/mosfets/two-mosfet-gate-drives-with-deadtime.php';
	
(assuming you cloned the repo directly into ``public_html``). The PHP file will automatically include it's respective Javascript file that resides in the same directory. All dependencies are automatically included via CDNs.
	
Changelog
=========

========= ========== ============================================================================================================
Version   Date       Comment
========= ========== ============================================================================================================
v1.0.1.0  2013/12/16 Fixed jQuery.csv library script include.
v1.0.0.0  2013/12/16 Initial commit. 'MOSFET gate drive with deadtime' graph added.
========= ========== ============================================================================================================