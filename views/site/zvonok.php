<?php
    use yii\widgets\ActiveForm;
    use yii\widgets\MaskedInput;
?>

<?php
$subject = 'Обратный звонок';
$body = 'Клиент &nbsp;<b style="font-size: 120%;text-shadow: 0 1px 0 #e61b05">' . $name . '</b>&nbsp; просит перезвонить.<br>' .
    'Тел. :&nbsp;&nbsp;<b style="font-size: 110%;>' . $tel . '</b>';

$success = Yii::$app->mailer->compose()
    ->setTo('mail@s-solo.ru')
    ->setFrom(['mail@s-solo.ru' => 's-solo.ru'])
    ->setSubject($subject)
    ->setHtmlBody($body)
    ->send();

if ($success) {
//    die ('TEST');
    $msg = '<h3 style="color:green;text-align: center">Спасибо, ' . $name . ', ожидайте звонка!</h3>';
} else
    $msg = '<h3 style="color:red;text-align: center">Ошибка !</h3>';
?>

<div id="zv-resp" style="border: 1px solid #003333;padding: 1em"><?= $msg ?></div>

<?php $form = ActiveForm::begin([
    'options' => ['class' => 'call', 'data-pjax' => true],
]);
?>
<input type="text" name="name" placeholder="имя" , required>
<!--        --><? //= $form->field($model, 'name')->textInput(['required' => true, 'tabindex' => '1']) ?>
<?php
echo MaskedInput::widget([
    'options' => [
        'required' => true,
        'placeholder' => 'тел',
    ],
    'name' => 'tel',
    'mask' => '+7 (999)-999-99-99',
]);
?>
<i class=" fa fa-phone-volume"></i>
<button type="submit" class="tel_but but_gr">жду звонка</button>
<?php ActiveForm::end(); ?>

<script>
    // через 5 сек удаляем сообщение
    var timerId = setInterval(function() {
        document.getElementById('zv-resp').style.display = 'none';
    }, 5000);

    setTimeout(function() {
        clearInterval(timerId);
    }, 5000);
</script>

