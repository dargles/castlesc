<?php
/**
 * htmlPage.php provides a basic web page class for our website
 *
 * It defines a class, htmlPage, which forms a boilerplate html page which we 
 * re-use on every page.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 08-12-2013, 07:57h
 * @copyright 2013 Haven Consulting
 */

/**
 * htmlPage provides a basic web page class for our website
 *
 * It defines several page attributes which are loaded from an htmlPage.ini file. 
 * It also defines an HTMLstream method which outputs the necessary HTML code to 
 * make up our boilerplate page.
 * 
 * @param void
 * @return void
 */
  class htmlPage
  {
    protected $page;
    protected $cssfile = "htmlPage.css";
    protected $title = "Default Page Title";
    protected $content = "Default page content";
    protected $heading = "Default Website Heading";
    protected $tagline = "Default website description";
    protected $menu = array ("Page 1"=>"page1.php", "Page 2"=>"page2.php");

    public function setCSS($filename)
    {
      $this->cssfile = $filename;
      return;
    }

    public function setTitle($newTitle)
    {
      $this->title = $newTitle;
      return;
    }

    public function setContent($newContent)
    {
      $this->content = $newContent;
      return;
    }

    public function __construct()
    {
      if(parse_ini_file("library/htmlPage.ini",true)){
        $iniFile = (object) parse_ini_file("htmlPage.ini",true);
/*echo("<pre>");
print_r($iniFile);
echo("</pre>");*/
        $this->cssfile = $iniFile->cssfile;
        $this->title = $iniFile->headtitle;
        $this->heading = $iniFile->heading;
        $this->tagline = $iniFile->tagline;
        $this->menu = (object) $iniFile->menu;

        $this->page = substr(strrchr($_SERVER['PHP_SELF'],"/"),1);
        foreach($this->menu as $label=>$link){
          if($this->page==$link) $this->title = $label.": ".$this->title;
        }
      }
      return;
    }

/**
 * HTMLstreamTop() streams all the code necessary for the top of our boilerplate HTML page
 * 
 * @param void
 * @return void
 */
    public function HTMLstreamTop()
    {
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" <?php echo("href=\"library/".$this->cssfile."\""); ?>>
    <title><?php echo($this->title); ?></title>
  </head>

  <body>
    <container> 
      <header>
        <img src="graphics/pennant.png" />
        <h3><?php echo($this->heading); ?></h3>
        <p><?php echo($this->tagline); ?></p>
      </header>
      <banner></banner>
      <nav>
        <?php
          foreach($this->menu as $label=>$link)
          {
            if($this->page==$link) echo('        <a class="current" href="'.$link.'">'.$label."</a>\n");
             else echo('        <a href="'.$link.'">'.$label."</a>\n");
          }
        ?>
      </nav>

    <section>
      <?php 
    }

/**
 * HTMLstreamBottom() streams all the code necessary for the bottom of our boilerplate HTML page
 * 
 * @param void
 * @return void
 */
    public function HTMLstreamBottom()
    {
?>
    </section>

    <footer>
      <p>&copy;2013 Castle Sailing Club</p>
    </footer>
   </container>
  </body>
</html>
<?php
    }
  }

/**---------------------------------------------
 *             End of Code
 *----------------------------------------------
 */
?>
