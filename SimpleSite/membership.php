<?php
/**
 * membership.php deals with membership issues
 *
 * It calls our class, htmlPage, sets the title for our page, sets the page content,
 * & streams the completed boilerplate code.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 13-12-2013, 00:20h
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

      <h3>Membership</h3>
      <p>Membership of the Castle Sailing Club (CSC) is principally open to all current and former employees of Hampshire County Council and their families.  There is also limited associate membership. CSC members become members of the Calshot Activities Centre which entitles them to car parking, free launching and the use of shower and changing facilities.  There is also a bar and a cafe in the Sunderland Hanger.</p>
      <p>The club has been at Calshot since 1960 and has a relaxed attitude to its sailing activities, being well suited to independent sailors, although occasional group events are organised.  There are no club duties to perform, members come and go as they please.</p>

      <h3>Annual Fees</h3>
      <p>Membership fees are the same for individuals or families.  Membership of Calshot Activities Centre and the parking fee are required if anyone wishes to sail; this covers launch fees and use of facilities and allows for concessionary boat park rates, which are about half normal rates.</p>
      <p>Indicative fees for 2014 are as follows:</p>
      <table>
        <tr><td>Castle SC membership</td>	<td class="r-align">&pound;5</td><td>per indiv or family</td></tr>
        <tr><td>Calshot Association</td>	<td class="r-align">&pound;13</td><td></td></tr>
        <tr><td>Calshot annual parking</td>	<td class="r-align">&pound;38</td><td></td></tr>
        <tr><td>Calshot 2nd car (optional)</td>	<td class="r-align">&nbsp;&nbsp;&pound;25</td><td></td></tr>
      </table>
      <p>Boat park/launch fees:</p>
      <table>
        <tr><td>Less than 3.5m length</td>	<td class="r-align">&pound;42.50</td></tr>
        <tr><td>3.5m to 4.49m</td>		<td class="r-align">&pound;104.50</td></tr>
        <tr><td>4.5m to 5.5m</td>		<td class="r-align">&nbsp;&nbsp;&pound;163.00</td></tr>
      </table>

      <h3>How to Apply</h3>
      <p>If you are associated with Hampshire County Council and would like to discuss membership of the Castle Sailing Club, please contact Jamie Cordery, preferably by email, on:</p>
      <p class="centre"><a href=\"mailto:castlesailingclub@gmail.com\">castlesailingclub@gmail.com</a></p>
      <p>or by 'phone on:</p>
      <p class="centre">01962 711 389</p>

<?php
  /* The final line streams the final html.  Don't change this. */
  $page->HTMLstreamBottom();
/**---------------------------------------------
 *             End of Code
 *----------------------------------------------
 */
?>

