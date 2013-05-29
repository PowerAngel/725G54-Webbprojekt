<?php
	include("includes/db.inc.php");
   	db_connect();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv">
<head>
    <title>DotA 2 - Add Hero</title>
    <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
	<link media="screen" rel="stylesheet" href="stylesheets/stylesheet.css"/>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
	<script src="jquery.validate.js" type="text/javascript"></script>

	<script type="text/javascript">
	$(document).ready(function(){
		$("#AddHero").validate();
	});
	</script>

</head>

<body>

<?php

InsertIntoHero ('Axe', 'strength', '/images/heroes/strength/axe.png');
InsertIntoHero ('Beastmaster', 'strength', '/images/heroes/strength/beastmaster.png');
InsertIntoHero ('Brewmaster', 'strength', '/images/heroes/strength/brewmaster.png');
InsertIntoHero ('Bristleback', 'strength', '/images/heroes/strength/bristleback.png');
InsertIntoHero ('Centaur', 'strength', '/images/heroes/strength/centaur.png');
InsertIntoHero ('Chaos Knight', 'strength', '/images/heroes/strength/chaos_knight.png');
InsertIntoHero ('Clockwerk', 'strength', '/images/heroes/strength/clockwerk.png');
InsertIntoHero ('Doom Bringer', 'strength', '/images/heroes/strength/doom_bringer.png');
InsertIntoHero ('Dragon Knight', 'strength', '/images/heroes/strength/dragon_knight.png');
InsertIntoHero ('Elder Titan', 'strength', '/images/heroes/strength/elder_titan.png');
InsertIntoHero ('Huskar', 'strength', '/images/heroes/strength/huskar.png');
InsertIntoHero ('Kunkka', 'strength', '/images/heroes/strength/kunkka.png');
InsertIntoHero ('Lifestealer', 'strength', '/images/heroes/strength/lifestealer.png');
InsertIntoHero ('Lycan', 'strength', '/images/heroes/strength/lycan.png');
InsertIntoHero ('Magnus', 'strength', '/images/heroes/strength/magnus.png');
InsertIntoHero ('Night Stalker', 'strength', '/images/heroes/strength/night_stalker.png');
InsertIntoHero ('Omnninight', 'strength', '/images/heroes/strength/omninight.png');
InsertIntoHero ('Pudge', 'strength', '/images/heroes/strength/pudge.png');
InsertIntoHero ('Sand King', 'strength', '/images/heroes/strength/sand_king.png');
InsertIntoHero ('Skeleton King', 'strength', '/images/heroes/strength/skeleton_king.png');
InsertIntoHero ('Slardar', 'strength', '/images/heroes/strength/axe.slardar');
InsertIntoHero ('Spirit Breaker', 'strength', '/images/heroes/strength/spirit_breaker.png');
InsertIntoHero ('Sven', 'strength', '/images/heroes/strength/sven.png');
InsertIntoHero ('Tidehunter', 'strength', '/images/heroes/strength/tidehunter.png');
InsertIntoHero ('Timbersaw', 'strength', '/images/heroes/strength/timbersaw.png');
InsertIntoHero ('Tiny', 'strength', '/images/heroes/strength/Tiny.png');
InsertIntoHero ('Treant', 'strength', '/images/heroes/strength/treant.png');
InsertIntoHero ('Tusk', 'strength', '/images/heroes/strength/tusk.png');
InsertIntoHero ('Undying', 'strength', '/images/heroes/strength/undying.png');
InsertIntoHero ('Wisp', 'strength', '/images/heroes/strength/wisp.png');


InsertIntoHero ('Antimage', 'agility', '/images/heroes/agility/antimage.png');
InsertIntoHero ('Bloodseeker', 'agility', '/images/heroes/agility/bloodseeker.png');
InsertIntoHero ('Bounty Hunter', 'agility', '/images/heroes/agility/bounty_hunter.png');
InsertIntoHero ('Broodmother', 'agility', '/images/heroes/agility/broodmother.png');
InsertIntoHero ('Clinkz', 'agility', '/images/heroes/agility/clinkz.png');
InsertIntoHero ('Drow Ranger', 'agility', '/images/heroes/agility/drow_ranger.png');
InsertIntoHero ('Faceless void', 'agility', '/images/heroes/agility/faceless_void.png');
InsertIntoHero ('Gyrocopter', 'agility', '/images/heroes/agility/gyrocopter.png');
InsertIntoHero ('Juggernaut', 'agility', '/images/heroes/agility/juggernaut.png');
InsertIntoHero ('Lone Druid', 'agility', '/images/heroes/agility/lone_druid.png');
InsertIntoHero ('Luna', 'agility', '/images/heroes/agility/luna.png');
InsertIntoHero ('Medusa', 'agility', '/images/heroes/agility/medusa.png');
InsertIntoHero ('Meepo', 'agility', '/images/heroes/agility/meepo.png');
InsertIntoHero ('Mirana', 'agility', '/images/heroes/agility/mirana.png');
InsertIntoHero ('Morphling', 'agility', '/images/heroes/agility/morphling.png');
InsertIntoHero ('Naga Siren', 'agility', '/images/heroes/agility/naga_siren.png');
InsertIntoHero ('Shadow Fiend', 'agility', '/images/heroes/agility/nevermore.png');
InsertIntoHero ('Nyx Assassin', 'agility', '/images/heroes/agility/nyx_assassin.png');
InsertIntoHero ('Phantom Assassin', 'agility', '/images/heroes/agility/phantom_assassin.png');
InsertIntoHero ('Phantom Lancer', 'agility', '/images/heroes/agility/phantom_lancer.png');
InsertIntoHero ('Razor', 'agility', '/images/heroes/agility/razor.png');
InsertIntoHero ('Slark', 'agility', '/images/heroes/agility/slark.png');
InsertIntoHero ('Sniper', 'agility', '/images/heroes/agility/sniper.png');
InsertIntoHero ('Spectre', 'agility', '/images/heroes/agility/spectre.png');
InsertIntoHero ('Templar Assassin', 'agility', '/images/heroes/agility/templar_assassin.png');
InsertIntoHero ('Troll Warlord', 'agility', '/images/heroes/agility/troll_warlord.png');
InsertIntoHero ('Ursa', 'agility', '/images/heroes/agility/ursa.png');
InsertIntoHero ('Weaver', 'agility', '/images/heroes/agility/weaver.png');
InsertIntoHero ('Vengeful Spirit', 'agility', '/images/heroes/agility/vengefulspirit.png');
InsertIntoHero ('Venomancer', 'agility', '/images/heroes/agility/venomancer.png');
InsertIntoHero ('Viper', 'agility', '/images/heroes/agility/viper.png');


InsertIntoHero ('Ancient Apparition', 'intelligence', '/images/heroes/intelligence/ancient_apparition.png');
InsertIntoHero ('Bane', 'intelligence', '/images/heroes/intelligence/bane.png');
InsertIntoHero ('Batrider', 'intelligence', '/images/heroes/intelligence/batrider.png');
InsertIntoHero ('Chen', 'intelligence', '/images/heroes/intelligence/chen.png');
InsertIntoHero ('Crystal Maiden', 'intelligence', '/images/heroes/intelligence/crystal_maiden.png');
InsertIntoHero ('Dark Seer', 'intelligence', '/images/heroes/intelligence/dark_seer.png');
InsertIntoHero ('Dazzle', 'intelligence', '/images/heroes/intelligence/dazzle.png');
InsertIntoHero ('Death Prophet', 'intelligence', '/images/heroes/intelligence/death_prophet.png');
InsertIntoHero ('Disruptor', 'intelligence', '/images/heroes/intelligence/disruptor.png');
InsertIntoHero ('Enchantress', 'intelligence', '/images/heroes/intelligence/enchantress.png');
InsertIntoHero ('Furion', 'intelligence', '/images/heroes/intelligence/furion.png');
InsertIntoHero ('Invoker', 'intelligence', '/images/heroes/intelligence/invoker.png');
InsertIntoHero ('Jakiro', 'intelligence', '/images/heroes/intelligence/jakiro.png');
InsertIntoHero ('Keeper of the Light', 'intelligence', '/images/heroes/intelligence/keeper_of_the_light.png');
InsertIntoHero ('Leshrac', 'intelligence', '/images/heroes/intelligence/leshrac.png');
InsertIntoHero ('Lina', 'intelligence', '/images/heroes/intelligence/lina.png');
InsertIntoHero ('Necrolyte', 'intelligence', '/images/heroes/intelligence/necrolyte.png');
InsertIntoHero ('Obsidian Destroyer', 'intelligence', '/images/heroes/intelligence/obsidian_destroyer.png');
InsertIntoHero ('Ogre Magi', 'intelligence', '/images/heroes/intelligence/ogre_magi.png');
InsertIntoHero ('Puck', 'intelligence', '/images/heroes/intelligence/puck.png');
InsertIntoHero ('Pugna', 'intelligence', '/images/heroes/intelligence/pugna.png');
InsertIntoHero ('Queen of Pain', 'intelligence', '/images/heroes/intelligence/queenofpain.png');
InsertIntoHero ('Rubick', 'intelligence', '/images/heroes/intelligence/rubick.png');
InsertIntoHero ('Shadow Demon', 'intelligence', '/images/heroes/intelligence/shadow_demon.png');
InsertIntoHero ('Shadow Shaman', 'intelligence', '/images/heroes/intelligence/shadow_shaman.png');
InsertIntoHero ('Silencer', 'intelligence', '/images/heroes/intelligence/silencer.png');
InsertIntoHero ('Skywrath Mage', 'intelligence', '/images/heroes/intelligence/skywrath_mage.png');
InsertIntoHero ('Storm Spirit', 'intelligence', '/images/heroes/intelligence/storm_spirit.png');
InsertIntoHero ('Tinker', 'intelligence', '/images/heroes/intelligence/tinker.png');
InsertIntoHero ('Warlock', 'intelligence', '/images/heroes/intelligence/warlock.png');
InsertIntoHero ('Windrunner', 'intelligence', '/images/heroes/intelligence/windrunner.png');
InsertIntoHero ('Visage', 'intelligence', '/images/heroes/intelligence/visage.png');
InsertIntoHero ('Zeus', 'intelligence', '/images/heroes/intelligence/zeus.png');





InsertIntoPlayer ('Xboct', 'Natus Vincere', '1', '/images/players/navi/xboct.png');
InsertIntoPlayer ('Dendi', 'Natus Vincere', '2', '/images/players/navi/dendi.png');
InsertIntoPlayer ('LighTofHeaveN', 'Natus Vincere', '3', '/images/players/navi/lightofheaven.png');
InsertIntoPlayer ('Puppey', 'Natus Vincere', '4', '/images/players/navi/puppey.png');
InsertIntoPlayer ('Ars-art', 'Natus Vincere', '5', '/images/players/navi/arsart.png');


InsertIntoPlayer ('Zhou', 'IG', '1', '/images/players/ig/zhou.png');
InsertIntoPlayer ('Ferrari', 'IG', '2', '/images/players/ig/ferrari.png');
InsertIntoPlayer ('YYF', 'IG', '3', '/images/players/ig/yyf.png');
InsertIntoPlayer ('Chuan', 'IG', '4', '/images/players/ig/chuan.png');
InsertIntoPlayer ('Faith', 'IG', '5', '/images/players/ig/faith.png');

function InsertIntoHero($Name, $Mainattribute, $HeroImage)
{

	$query = "INSERT INTO hero (Name, Mainattribute, HeroImage) VALUES ('$Name', '$Mainattribute', '$HeroImage')";
	mysql_query($query) or die(mysql_error());

	?><p><?php echo "Sucess! Heroes added!"; ?></p><?php
}

function InsertIntoPlayer($Name, $Team, $Position, $PlayerImage)
{
	$query = "INSERT INTO player (Name, Team, Position, PlayerImage) VALUES ('$Name', '$Team', '$Position', '$PlayerImage')";
	mysql_query($query) or die(mysql_error());

	?><p><?php echo "Sucess! Players added!"; ?></p><?php
}

?>

</body>