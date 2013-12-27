<?php
/**
 * sailing.php covers sailing and location
 *
 * It calls our class, htmlPage, sets the title for our page, sets the page content,
 * & streams the completed boilerplate code.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 23-12-2013, 16:56h
 * @copyright 2013 Haven Consulting
 */

  /* The following line makes the server display error messages.
     Uncomment it during development. */
  //ini_set("display_errors", 1);

  /* The next two lines bring in the htmlPage class and create a new instance.
     Don't change these lines! */
  require("library/htmlPage.php");
  $page = new htmlPage();
  /* The next line streams the html.  Don't change this. */
  $page->HTMLstreamTop();
?>

      <h3>Sailing</h3>
      <p>Novices can gain confidence in the sheltered waters of the lagoon and in the area directly off the slipway.  <a href="http://www3.hants.gov.uk/calshot.htm" target="_blank">Calshot Activities Centre</a> runs regular dinghy training courses.</p>
      <p>Launching and recovery is possible at all states of the tide.  Close by are Ashlett Creek, Southampton Water and the River Hamble.  Our location at the centre of the Solent means easy access to the Bromwich beaches, Beaulieu River and on the Island side, Wooton, Cowes and Newtown Creek.  Sailors will also see the regular movements of Southampton Port shipping and the action surrounding events like Cowes Week and the Round the Island race.</p>
      <p>The club has no safety boat and thus has no formal racing or training propgramme.  We are however affiliated with the <a href="http://www.swsa.org.uk/" target="_blank">Southampton Water Sailing Association</a> which has a race programme for members.</p>

      <img src="graphics/SO451BR-Calshot.jpg" />

      <h3>Facilities</h3>
      <p>There are basic facilities (kettle and microwave) in the clubhouse with changing facilities and limited equipment storage.  The clubhouse is on the shore side of the secure Calshot Activities Centre sailing compound.  Toilets and showers are provided nearby.</p>
      <p>We have a boat park close to the clubhouse, behind Stainforth Cottage with at least 24 spaces and boat washing facilities.</p>

      <h3>Weather Forecast</h3>
      <div style="font-size:1.0em;"><script type="text/javascript" language="JavaScript" src="http://www.windfinder.com/wind-cgi/homepageforecast.pl?STATIONSNR=gb56&UNIT_WIND=kts&UNIT_TEMPERATURE=c&VERSION=2&UNIT_WAVE=m&UNIT_RAIN=mm&NUM_COLS=1&NUM_DAYS=2&SHOW_DAY=1&LANG=en"></script><noscript><a href='http://www.windfinder.com/forecast/solent_mrsc?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for Solent MRSC</a> provided by <a href='http://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript></div>

      <h3>Tide Tables</h3>
      <p>In the "gadget" below, you'll need to select a country - select England - and then a location.  For the precise location, select Calshot Castle.</p>
      <script src="//www.gmodules.com/ig/ifr?url=http://hosting.gmodules.com/ig/gadgets/file/102424839555319424468/uk4.xml&amp;synd=open&amp;w=320&amp;h=200&amp;title=Tide+Graph&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js"></script>
      
      <h3>Daylight Hours</h3>
      <script src="//www.gmodules.com/ig/ifr?url=http://hosting.gmodules.com/ig/gadgets/file/101126742265493886712/almanac.xml&amp;up_loc=Calshot%20Castle&amp;up_lat=50.818844&amp;up_lon=-1.308578&amp;up_hiddenLoc=&amp;up_computerLocal=1&amp;synd=open&amp;w=320&amp;h=190&amp;title=Daylight+Hours&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js"></script>

      <h3>Youtube Videos</h3>
      <p>Dean had produced a number of fun videos of Minisails:</p>
      <script src="//www.gmodules.com/ig/ifr?url=http://www.google.com/ig/modules/youtube.xml&amp;up_channel=visitorattube&amp;synd=open&amp;w=300&amp;h=390&amp;title=Dean's+YouTube+Videos&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js"></script>

<?php
  /* The final line streams the html.  Don't change this. */
  $page->HTMLstreamBottom();
/**---------------------------------------------
 *             End of Code
 *----------------------------------------------
 */
?>

