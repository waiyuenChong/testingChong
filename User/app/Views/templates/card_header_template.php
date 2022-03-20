<?php 
    // preview($title);die;
?>
<div class="card-header">
    <h5><?= $title ?></h5>
    <div class="card-header-right">
        <div class="btn-group card-option">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="feather icon-more-horizontal"></i>
            </button>
            <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> <?=lang('lang.maximize') ?></span><span style="display:none"><i class="feather icon-minimize"></i> <?=lang('lang.restore') ?></span></a></li>
                <li class="dropdown-item minimize-card"><a href="javascript:"><span><i class="feather icon-minus"></i> <?=lang('lang.collapse') ?></span><span style="display:none"><i class="feather icon-plus"></i> <?=lang('lang.expand') ?></span></a></li>
                <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                <li class="dropdown-item close-card"><a href="javascript:"><i class="feather icon-trash"></i> remove</a></li>
            </ul>

        </div>
    </div>
</div>