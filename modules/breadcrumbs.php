<!-- ぱんクズリスト-->
<!-- Breadcrumb NavXTプラグイン利用 -->
<div class="breadcrumbs" typeof="BreadcrumbList" >
<?php if(!is_front_page() && function_exists('bcn_display'))
    {
        bcn_display();
    }?>
	</div>