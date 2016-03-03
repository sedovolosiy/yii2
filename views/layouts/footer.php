    <div class="toplinks" style="padding-left:30px;">
        <a href="/">Главная</a>
    </div>
    <div class="sap2">::</div>
    <?php $i = 1;?>
    <?php foreach ($menus as $menu) { ?>
        <div class='toplinks'>
            <a href=''><?php echo $menu['menu_name']; ?></a>
        </div>
        <?php if($i != count($menus)) :?>
            <div class='sap2'>::</div>
        <?php endif;?>
        <?php $i++;?>
    <?php } ?>