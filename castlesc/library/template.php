<?php
/**
 * template.php is the template webpage for our website
 *
 * It calls our class, htmlPage, sets the title for our page, sets the page content,
 * & streams the completed boilerplate code.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 14-12-2013, 22:13h
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

      <h3>Template Page</h3>
      <p>Welcome to my Site!</p>

<?php
  /* The final line streams the remaining html.  Don't change this. */
  $page->HTMLstreamBottom();
/**---------------------------------------------
 *             End of Code
 *----------------------------------------------
 */
?>

