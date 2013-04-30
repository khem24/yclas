<?php defined('SYSPATH') or die('No direct script access.');?>

<div class="page-header">
    <h1><?=__('Versions')?></h1>
    <p><?=__('Open Classifieds release history information.')?> 
        <?=__('Your installation version is')?> <span class="label label-info"><?=core::version?></span>
    </p>
        <a class="btn btn-primary pull-right" href="<?=Route::url('oc-panel',array('controller'=>'tools','action'=>'updates'))?>?reload=1">
            <?=__('Check for updates')?></a>

</div>

<table class="table table-striped">
<tr>
    <th><?=__('Version')?></th>
    <th><?=__('Information')?></th>
</tr>
<?foreach ($versions as $version=>$values):?> 
<tr>
        <td>
            <?=$version?>
            <?=($version==$latest_version)? '<span class="label label-success">'.__('Latest').'</span>':''?>
            <?=($version==core::version)? '<span class="label label-info">'.__('Current').'</span>':''?>
        </td>
    <td>
        <table class="table">
            <?foreach ($values as $key => $value):?>
                <tr>
                    <th><?=ucfirst($key)?></th>
                    <td><?=(strpos($value, 'http')===FALSE? $value: HTML::anchor($value,substr($value, 0,40)) )?></td>
                </tr>
            <?endforeach?>
        </table>
    </td>
</tr>
<?endforeach?>
</table>