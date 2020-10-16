<div id="ttr_sidebar" class="sider-bar">
<div class="table-of-contents">

<h2 class="side-block-title"><?php _e('Categories'); ?></h2>

<ul > <?php wp_list_cats('sort_column=namonthly'); ?> </ul>

</div>

<div class="table-of-contents">

<h2 class="side-block-title"><?php _e('Archives'); ?></h2>
<ul > <?php wp_get_archives(); ?> </ul>
</div>

</div>