<?php
/**
 * index.php is the home page for our website
 *
 * It instantiates our class, htmlPage, and calls the method that streams the initial 
 * html for the top of our page.  The main centre section of this file makes space to 
 * stream the page content.  Finally, it calls the method that streams the final html 
 * of our boilerplate code.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 18-12-2013, 18:14h
 * @copyright 2013 Haven Consulting
 */

  /* The following line makes the server display error messages.
     You may uncomment it during development, but don't forget to comment it out again 
     when you're ready to deploy! */
  //ini_set("display_errors", 1);

  /* The next two lines bring in the htmlPage class and create a new instance.
     Don't change these lines! */
  require("library/htmlPage.php");
  $page = new htmlPage();
  /* The next line streams the initial page html.  Don't change this. */
  $page->HTMLstreamTop();
?>
      <!-- The main page content follows.  You can change this as you wish -->

      <!-- The next bit is for future development, allowing a 2 column layout
      <aside>
        <h3>AT A GLANCE:</h3>
        <script type="text/javascript" language="JavaScript" src="http://www.windfinder.com/wind-cgi/homepageforecast.pl?STATIONSNR=gb212&UNIT_WIND=kts&UNIT_TEMPERATURE=c&VERSION=2&UNIT_WAVE=m&UNIT_RAIN=mm&NUM_COLS=1&NUM_DAYS=0&SHOW_DAY=1&LANG=en">
        </script>
        <noscript><a href='http://www.windfinder.com/forecast/calshot?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for Calshot</a> provided by <a href='http://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a>
        </noscript>
      </aside>
      -->

      <h3>Castle Sailing Club</h3>
      <img src="graphics/bosham.jpg">
      <p>Castle Sailing Club is a relaxed dinghy sailing club with all-tide access to Southampton Water and the Solent.  It is based at the tip of Calshot Spit in Southampton Water, close to Calshot Castle, the historic flying boat hangers, and Calshot Activities Centre.  The Centre is one of the country's most popular watersports locations which also has a state of the art climbing complex, the only indoor velodrome in southern England, a dry ski slope, and extensive camping facilities.</p>

      <!-- End of main page content -->
<?php
  /* The final line streams the remaining html.  Don't change this. */
  $page->HTMLstreamBottom();
/**---------------------------------------------
 *             End of Code
 *----------------------------------------------
 */
?>
