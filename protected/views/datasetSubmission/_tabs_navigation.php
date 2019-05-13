<?php
$action = Yii::app()->controller->action->id;
?>

<a href="<?= $model->getIsNewRecord() ? '#' : "/datasetSubmission/study/id/{$model->id}" ?>"
   class="btn <?= $action == 'study' ? 'sw-selected-btn' : 'nomargin' ?>"><?= Yii::t('app' , 'Study')?></a>
<a href="/datasetSubmission/author/id/<?= $model->id ?>"
   class="btn <?= $action == 'author' ? 'sw-selected-btn' : 'nomargin' ?>"><?= Yii::t('app' , 'Author')?></a>
<a href="/datasetSubmission/additional/id/<?= $model->id ?>"
   class="btn <?= $action == 'additional' ? 'sw-selected-btn' : 'nomargin' ?>"><?= Yii::t('app' , 'Additional Information')?></a>
<a href="/datasetSubmission/funding/id/<?= $model->id ?>"
   class="btn <?= $action == 'funding' ? 'sw-selected-btn' : 'nomargin' ?>"><?= Yii::t('app' , 'Funding')?></a>
<a href="/datasetSubmission/sample/id/<?= $model->id ?>"
   class="btn <?= $action == 'sample' || $action == 'end' ? 'sw-selected-btn' : 'nomargin' ?>"><?= Yii::t('app' , 'Sample')?></a>
<?php if($action == 'create1'): ?>
    <a href="/adminFile/create1/id/<?= $model->id ?>" class="btn <?= $action == 'create1' ? 'sw-selected-btn' : 'nomargin' ?>"><?= Yii::t('app' , 'File')?></a>
<?php endif ?>

