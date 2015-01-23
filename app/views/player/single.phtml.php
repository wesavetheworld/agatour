<style>
    div.player {
        padding: 20px;
        background: #d8d8d8; }
  
    div.image img {
        width: 100%; }
 
    div.player dl {
        float: left; }
  
    div.player dl dt.name {
        padding: 10px 0;
        font-size: 30px;
        color: #005391; }
  
    div.player dl dt.country {
        font-weight: 300;
        text-transform: uppercase;
        width: 100%;
        margin-bottom: 20px;
        border-bottom: 3px #005391 solid;
        font-size: 18px;
        color: #4e4e4e; }

    div.player dl dt.country img {
        vertical-align: middle;
        width: 25px; }
  
    div.player dl.details dl {
        padding-right: 30px; }

    div.player dl.details dl dd {
        text-transform: uppercase;
        color: #005391;
        font-weight: 400;
        font-size: 14px; }
  
    div.player dl.details dl dt {
        font-weight 400;
        font-size: 10px;
        color: #4e4e4e;
        text-transform: uppercase;
        padding-bottom: 15px; }
  
    div.bio {
        border-top: 2px solid #005391;
        padding: 20px;
        background: #d8d8d8;
        color: #000; }

    div.bio p {
        font-weight: 300; }
    
    ul.nav-tabs li a {
        font-weight: 400;
        font-size: 15px;
        border: 0;
        border-top: 4px #d8d8d8 solid;
        font-family: 'Roboto Condensed', sans-serif;
        text-transform: uppercase;
        border-radius: 0;
        color: #005391;
        background: #d8d8d8; 
        margin: 0; }
  
    ul.nav-tabs {
        border: 0; }
  
    ul.nav-tabs li.active a, ul.nav-tabs li:hover a, ul.nav-tabs li.active:hover a {
        border: 0;
        border-top: 4px #005391 solid;
        border-radius: 0;
        color: #005391;
        background: #ffffff;;
        margin: 0; }
  
    div.tab-content {
        padding: 20px 0; }
</style>

<div class="player">
  <div class="uk-grid">
    <div class="uk-width-1-3 image">
      <?php echo $player->photo; ?>
    </div>
    <div class="uk-width-2-3">
       <dl class="details">
          <dt class="name"><?php echo $player->post_title; ?></dt>
          <dt class="country"><?php echo $player->flag; ?> <?php echo $player->country; ?></dt>
          <dt>Handicap: <?php echo $player->handicap(); ?></dt>
          <dl>
            <dd><?php echo $player->height; ?> cms</dd>
            <dt>Height</dt>
            <dd><?php echo $player->weight; ?> kgs</dd>
            <dt>Weight</dt>
            <dd><?php echo $player->age; ?></dd>
            <dt>Age</dt>
          </dl>
          <dl>
            <dd><?php echo $player->college; ?></dd>
            <dt>College</dt>
            <dd><?php echo $player->pro; ?></dd>
            <dt>AGA Debut</dt>
            <dd><?php echo $player->pob; ?></dd>
            <dt>Place of Birth</dt>
          </dl>
          <dl>
            <dd><?php echo $player->clubs; ?></dd>
            <dt>Clubs</dt>
            <dd><?php echo $player->glove; ?></dd>
            <dt>Glove</dt>
          </dl>
        </dl>
    </div>
  </div>
</div>
<div class="uk-grid uk-margin-bottom">
    <div class="uk-width-1-1">
        <div class="bio">
            <p><?php echo $player->post_content; ?></p>
        </div>
    </div>
</div>

<?php $season = $player->season_stats(2014); ?>
<?php $made = $player->alltime_stats(); ?>
<?php $distance = $player->distance_stats(); ?>
<?php $region = $player->region_stats(); ?>

<!-- This is the tabbed navigation containing the toggling elements -->
<ul class="uk-tab" data-uk-tab="{connect:'#player_tabs'}">
    <li><a href="">Season Summary</a></li>
    <li><a href="">AGA Cup</a></li>
    <li><a href="">Stats</a></li>
    <li><a href="">Handicap Tracker</a></li>
</ul>

<!-- This is the container of the content items -->
<ul id="player_tabs" class="uk-switcher uk-margin">
    <li>{-- partial("player/season") --}</li>
    <li></li>
    <li></li>
    <li>{-- partial("player/tracker") --}</li>
</ul>