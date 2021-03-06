<?php
/**
 * contact.php gives contact details
 *
 * It calls our class, htmlPage, sets the title for our page, sets the page content,
 * & streams the completed boilerplate code.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 08-12-2013, 00:10h
 * @copyright 2013 Haven Consulting
 */

  /* The following line makes the server display error messages.
     Uncomment it during development. */
  //ini_set("display_errors", 1);

  /* The next two lines bring in the htmlPage class and create a new instance.
     Don't change these lines! */
  require("library/htmlPage.php");
  $page = new htmlPage();
  /* The next line streams the initial html.  Don't change this. */
  $page->HTMLstreamTop();
?>

      <h3>Contact</h3>
      <p>If you want to discuss membership or anything to do with the activity of the Castle Sailing Club, please contact Jamie Cordery, preferably by email, on:</p>
      <p class="centre"><a href=\"mailto:castlesailingclub@gmail.com\">castlesailingclub@gmail.com</a></p>
      <p>or by 'phone on:</p>
      <p class="centre">01962 711 389</p>
      
      <h3>Getting to Calshot</h3>
      <script src="//www.gmodules.com/ig/ifr?url=http://www.google.com/ig/modules/driving_directions.xml&amp;up_from=London&amp;up_to=Calshot%20Castle&amp;up_country=7&amp;synd=open&amp;w=352&amp;h=94&amp;title=Directions+to+Calshot&amp;lang=all&amp;country=UK&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js"></script>

<?php
  /* The final line streams the final html.  Don't change this. */
  $page->HTMLstreamBottom();
/**---------------------------------------------
 *             End of Code
 *----------------------------------------------
 */
?>

