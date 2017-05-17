<!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=9">
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/colorbox.css" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/tabs.css" />

<script type="text/javascript">
 
var namee;
function change(namee){
document.getElementById("Display_content").innerHTML=document.getElementById(namee).innerHTML;
 
//optional Javascript code below - To change color of clicked tab
var livetab, i;
switch(namee){
    case 'tab1':
        livetab='t1';
    break;
    case 'tab2':
        livetab='t2';
    break;
    case 'tab3':
        livetab='t3';
    break;
}
for(i=1;i<=3;i++){
    document.getElementById("t"+i).style.backgroundColor="gray";
}
document.getElementById(livetab).style.backgroundColor="silver";
//optional code ends here
 
}
 
</script>

<style type="text/css" rel="stylesheet">
div.content_tab {
    display:none;
}
#tabbed_section {
background-color: transparent!important;
    background-image: url(images/bg-find-box.png);
    background-repeat: repeat;
    border: 0px;
    height: 100px!important;
    padding-top: 25px!important;
    padding-left: 30px!important;
    padding-right: 20px!important;
    padding-bottom: 25px!important;
    -moz-border-radius: 5px 5px 0px 0px;
    border-radius: 5px 5px 0px 0px;
    border-top: 0px!important;
    }
#menu {
    clear: both;
    width: 300px;
}
#Display_content {
    clear: both;
    min-height: 44px;
    padding: 2px;
    border: 1px solid gray;
}
#ul_tabs {
    clear: both;
    padding: 0px;
    margin: 0px;
}
.lh {
    padding:5px;
    background-color: gray;
    list-style: none;
    width: 88px;
    height: 25px;
    float: left;
    border: 1px solid #FFFFFA;
    text-align:center;
}
li.lh:hover {
    background-color: white;
    cursor: pointer;
}
 
</style>
<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
<!-- RECOMMEND PUTTING THESE CALLS IN THE "HEAD" SECTION, AFTER JQUERY IS DECLARED -->
<link href="http://c1203812.cdn.cloudfiles.rackspacecloud.com/jquery.autocomplete.css" rel="stylesheet" type="text/css" />
<?php the_field('google_analytics', 'option'); ?>
</head>


<body>
<div id="main-wrapper-all">
  <div id="header-wrapper">
    <div id="main-header">
      <div id="header">
        <div id="logo">
          <a href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo('template_url'); ?>/images/maison-logo.png" alt="" border="0">
          </a>
        </div><!-- #logo -->
        <div id="header-content-wrapper">
          <div id="header-content">
            
            <div id="header-content1">Residential Realtors serving Charlotte, NC</div><!-- header-content1 -->
          <div class="header-cont-right">
            <div id="social-icons">
              <div id="social1"><a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"></a></div><!-- social1 -->
              <div id="social2"><a href="<?php the_field('youtube_link', 'option'); ?>" target="_blank"></a></div><!-- social1 -->
            </div><!-- social-icons -->

            <div id="header-content2"><a href="callto://7043774567" class="analytics action:phone label:7043774567 cat:header">704.377.4567</a></div><!-- header-content2 -->
            </div><!-- header cont right -->
            
          </div><!-- header-content -->
        </div><!-- header-content-wrapper -->


      <nav id="site-navigation" class="main-navigation" role="navigation">
      <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'acstarter' ); ?></button>
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
      </nav><!-- #site-navigation -->

      </div><!-- header -->
    </div><!-- main-header -->
  </div><!-- header-wrapper -->  

 
    
    

  