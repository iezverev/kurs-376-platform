<h3>Комментарии</h3>
<div style="width: 700px;">
    <ul class="list-group">
        <?php
            foreach ($comment as $comm) {
                echo '<li class="list-group-item"><h4>'.$comm->user->fio.'</h4><br>
                      <p>'.$comm->text.'</p>      
                      </li>';   
            }
        ?>
    </ul>
            <?php 
                $form = ActiveForm::begin() ?>
                

                <?= $form->field($model1, 'text')->textInput()->label('Текст комментария') ?>
                <?= Html::submitButton('Добавить комментарий', ['class' => 'btn btn-primary']) ?>
                <?= $form->field($model1, 'id_user')->textInput(['style' => 'display:none', 'value' => Yii::$app->user->identity->id])->label('') ?>
                <?= $form->field($model1, 'id_subject')->textInput(['style' => 'display:none', 'value' => $subjectinfo->id])->label('') ?>

            <?php ActiveForm::end(); 
                ?>
</div>