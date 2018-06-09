<!DOCTYPE HTML>

<html lang="en">

<head>

<title>Easy Menu Manager</title>

<meta charset="utf-8">



<link rel="stylesheet" href="<?php echo _BASE_URL_ASSETS; ?>templates/css/style.css">

<!--[if lte IE 8]>

<script type="text/javascript" src="<?php echo _BASE_URL_ASSETS; ?>templates/js/html5.js"></script>

<![endif]-->

<script>

var _BASE_URL = '<?php echo _BASE_URL; ?>';

var current_group_id = <?php echo $group_id; ?>;

</script>

<script src="<?php echo _BASE_URL_ASSETS; ?>templates/js/jquery.1.4.1.min.js"></script>

<script src="<?php echo _BASE_URL_ASSETS; ?>templates/js/interface-1.2.js"></script>

<script src="<?php echo _BASE_URL_ASSETS; ?>templates/js/inestedsortable.js"></script>

<script src="<?php echo _BASE_URL_ASSETS; ?>templates/js/menu.js"></script>



</head>

<body>

	<section>

		<header>

			<h1>Menu Manager</h1>	

		</header>

		<article>

			<section>

				<ul id="menu-group">

					<?php foreach ((array)$menu_groups as $id => $title) : ?>

					<li id="group-<?php echo $id; ?>">

						<a href="<?php echo site_url('store_design/listingdesign/easymenu?act=menu&amp;group_id=' . $id); ?>">

							<?php echo $title; ?>

						</a>

					</li>

					<?php endforeach; ?>

					

				</ul>

				<div class="clear"></div>



				<form method="post" id="form-menu" action="<?php echo site_url('store_design/listingdesign/easymenu?act=menu.save_position'); ?>">

					<div class="ns-row" id="ns-header">

						<div class="ns-actions">Actions</div>					

						<div class="ns-url">URL</div>

						<div class="ns-title">Title</div>

					</div>

					<?php echo $menu_ul; ?>

					<div id="ns-footer">

						<button type="submit" class="button green small" id="btn-save-menu">Update Menu</button>

					</div>

				</form>

			</section>

			<aside>

				<div class="box info">

					<h2>Info</h2>

					<section>

						<p>Drag the menu list to re-order, and click <b>Update Menu</b> to save the position.</p>

						<p>To add a menu, use the <b>Add Menu</b> form below.</p>

					</section>

				</div>


				<div class="box">

					<h2>Add Menu</h2>

					<section>

						<form id="form-add-menu" method="post" action="<?php echo site_url('store_design/listingdesign/easymenu?act=menu.add'); ?>">

							<p>

								<label for="menu-title">Title</label>

								<input type="text" name="title" id="menu-title">

							</p>

							<p>

								<label for="menu-url">URL</label>

								<input type="text" name="url" id="menu-url">

							</p>

							<p style="display: none;">

								<label for="menu-class">Class</label>

								<input type="text" name="class" id="menu-class">

							</p>

							<p class="buttons">

								<input type="hidden" name="group_id" value="<?php echo $group_id; ?>">

								<button id="add-menu" type="submit" class="button green small">Add Menu</button>

							</p>

						</form>

					</section>

				</div>
                            <?php
                            if(sizeof($store_pages)>0):
                                ?>
                            
                            <div class="box">

					<h2>Add Store Pages</h2>

					<section>

						<form id="form-add-menu" method="post" action="<?php echo site_url('store_design/listingdesign/easymenu?act=menu.add_pages'); ?>">

                                                    <ul>
                                                        <?php
                                                        
                                                        for($i=0;$i<sizeof($store_pages);$i++):
                                                            $id_page = $store_pages[$i]["id_store_page"];
                                                        $title = $store_pages[$i]["title"];
                                                        ?>
                                                        <li>
                                                        <input type="checkbox" name="page_id_<?=$i?>" value="<?=$id_page?>"/><?=$title?>
                                                        </li>  
                                                        <?php
                                                        endfor;
                                                        ?>                                                      
                                                    </ul>
                                                    <input type="hidden" name="group_id" value="<?php echo $group_id; ?>">
                                                    <p class="buttons">


								<button id="add-menu" type="submit" class="button green small">Add to Menu</button>

							</p>

						</form>

					</section>

				</div>
                            <?php
                            endif;
                            ?>

			</aside>

			<div class="clear"></div>

		</article>

	

	</section>

	<div id="loading">

		<img src="<?php echo _BASE_URL_ASSETS; ?>templates/images/ajax-loader.gif" alt="Loading">

		Processing...

	</div>

</body>

</html>