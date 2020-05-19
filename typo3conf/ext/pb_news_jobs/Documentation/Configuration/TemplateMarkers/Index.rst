.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _configuration-template-markers:

Template markers
----------------

Now you have the following new template markers.
Wrap them in your template with the Fluid-format.html-Viewhelper, for example:

::

  <f:format.html>{newsItem.txPbnewsjobsTasks}</f:format.html>


============  =================================
Title         Marker
============  =================================
Entry Date    {newsItem.txPbnewsjobsEntrydate}
------------  ---------------------------------
Location      {newsItem.txPbnewsjobsLocation}
------------  ---------------------------------
Area          {newsItem.txPbnewsjobsArea}
------------  ---------------------------------
Position      {newsItem.txPbnewsjobsPosition}
------------  ---------------------------------
Job Number    {newsItem.txPbnewsjobsJobnumber}
------------  ---------------------------------
Payment       {newsItem.txPbnewsjobsPayment}
------------  ---------------------------------
Tasks         {newsItem.txPbnewsjobsTasks}
------------  ---------------------------------
Requirements  {newsItem.txPbnewsjobsRequirements}
------------  ---------------------------------
Contact       {newsItem.txPbnewsjobsContact}
============  =================================

