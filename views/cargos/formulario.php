<?php
    use \yii\widgets\ActiveForm;
    use \yii\helpers\Html;
?>
<h2>Form</h2>

<?php  $form = ActiveForm::begin() ?> 
    <?= $form->field($model,'nome') ?>

    <div class="form-group">
        <?= Html::submitButton('Enviar Dados',['class'=>'btn btn-primary']); ?>
    </div>

<?php ActiveForm::end(); ?>