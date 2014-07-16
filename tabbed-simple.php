<?php $block->open('header'); ?>
    <div class='tab-wrap'>
        <ul class="nav nav-tabs">
        <?php
        $i = 0;
        $block->document->each('@list', function ($prop, $value) use ($block, &$i) {
            $addID = strtolower(str_replace(' ', '-', $value['name'])); ?>
            <li<?= ($i == 0 ? ' class="active"' : '') ?>>
                <a href="#<?= $addID ?>" data-toggle="tab"><?= $value['name'] ?></a>
                <b class="caret"></b>
            </li>
            <?php
                $i++;
        }); ?>
        </ul>
    </div>
    <div class="clearfix"></div>
    <div class="tab-content">
    <?php 
    $i = 0;
    $block->document->each('@list', function ($value, $group) use ($block, &$i) {
        $addID = strtolower(str_replace(' ', '-', $group['name'])); ?>
        <div class="tab-pane<?= ($i == 0 ? ' active' : '') ?>" id="<?= $addID ?>">
            <?php
                $group->tag('h1', 'name', null);
                $group->tag('div', 'description', null);
            ?>
        </div>
    <?php 
        $i++;
    });
    ?>
    </div>
<?php $block->close();