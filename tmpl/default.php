<?php
/**
* Component Info Listing Module for Joomla 1.5
* Author:  Jeremy Ford - jeremyfo@gmail.com
* Copyright 2011 jfo.me
* http://jfo.me
* License:  GNU General Public License
*
* File: default.php 
*/
defined( '_JEXEC' ) or die( 'Restricted access' );
$gfx = null;
?>

<table class="adminlist">
		<thead>
			<tr>
				<td class="title">
					<strong><?php echo 'id' ?></strong>
				</td>
				<td class="title">
					<strong><?php echo JText::_( 'Component' ); ?></strong>
				</td>
				<td class="title">
					<strong><?php echo JText::_( 'Description' ); ?></strong>
				</td>
				<td class="title"><center>
					<strong><?php echo JText::_( 'Enabled' ); ?></strong></center>
				</td>
			</tr>
		</thead>
<tbody>
<?php
    foreach ($items as $items) {	?>
			<tr>
				<td width="5%">
					<?php echo $items->id; ?>
				</td>
				<td>
					<a href="<?php echo $link . 'index.php?option=' . $items->option;?>"> <?php echo $items->name;?> </a>
				</td>
				<td>
					<?php echo $items->admin_menu_alt;?>
				</td>
				<td><center>
				    <?php if($items->enabled)$gfx = "check.png"; else $gfx = "x.png";?>
				    <?php echo '<img src="' . $link . 'modules/mod_jfocomlist/tmpl/'. $gfx . '"/>';?></center>
				</td>
			</tr>
			<?php } ?>
		</tbody>
</table>
<table class="adminlist">
        <thead>
			<tr>
				<td class="title">
					<center><strong><?php echo JText::_( 'Total Components' ); ?></strong>
				</td>
				<td class="title">
					<strong><?php echo JText::_( 'Total Enabled' ); ?></strong>
				</td>
				<td class="title">
					<strong><?php echo JText::_( 'Total Disabled' ); ?></strong></center>
				</td>
			</tr>
		</thead>
		<tbody>
		    <tr>
		        <td>
		            <center><?php echo $total;?></center>
		        </td>
		        <td>
		            <center><?php echo $total_en;?></center>
		        </td>
		        <td>
		            <center><?php echo $total_dis;?></center>
		        </td>
		    </tr>
		</tbody>
</table>
<center><a href="http://jfo.me">jfo.me</a></center>
