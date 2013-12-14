<?php
/**
 * sailing.php covers sailing and location
 *
 * It calls our class, htmlPage, sets the title for our page, sets the page content,
 * & streams the completed boilerplate code.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 08-12-2013, 08:15h
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
      <p>Novices can gain confidence in the sheltered waters of the lagoon and in the area directly off the slipway.  Calshot Acitivities Centre runs regular dinghy training courses.</p>
      <p>Launching and recovery is possible at all states of the tide.  Close by are Ashlett Creek, Southampton Water and the River Hamble.  Our location at the centre of the Solent means easy access to the Bromwich beaches, Beaulieu River and on the Island side, Wooton, Cowes and Newtown Creek.  Sailors will also see the regular movements of Southampton Port shipping and the action surrounding events like Cowes Week and teh Round the Island race.</p>
      <p>The club has no safety boat and thus has no formal racing or training propgramme.  We are however affiliated with the Southampton Water Sailing Association which has a race programme for members.</p>

      <img src="graphics/SO451BR-Calshot.jpg" />

      <h3>Facilities</h3>
      <p>There are basic facilities (kettle and microwave) in the clubhouse with changing facilities and limited equipment storage.  The clubhouse is on the shore side of the secure Calshot Activities Centre sailing compound.  Toilets and showers are provided nearby.</p>
      <p>We have a boat park close to the clubhouse, behind Stainforth Cottage with at least 24 spaces and boat washing facilities.</p>

<?php
  /* The final line streams the html.  Don't change this. */
  $page->HTMLstreamBottom();
/**---------------------------------------------
 *             End of Code
 *----------------------------------------------
 */
?>

