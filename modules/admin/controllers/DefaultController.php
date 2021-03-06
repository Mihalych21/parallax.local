<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use yii\db\ActiveRecord;
use app\modules\admin\models\Content;
use app\modules\admin\models\Galery;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends AppAdminController
{
    /**
     * Renders the index view for the module
     * @return string
     */
//    public $layout = 'admin'; // в конфиге прописал

    public function actionIndex()
    {
        return $this->render('index');
    }

    /* Для всех страниц заголовок Last Modified текущее время c небольшим разбросом */
    public function actionLast()
    {
        if (Yii::$app->request->isAjax) {

            // таблица Content
            // start transaction
            $flag = true;
            $transaction = Yii::$app->db->beginTransaction();
            $lastContent = Content::find()->where(true)->all();

            foreach ($lastContent as $last) {
                $time = time() - rand(60, 300); // разброс от 1 до 5 минут
                $last->last_mod = $time;
                $res = $last->save();
                $flag = ($flag && $res) ? true : false;
                if (!$flag){
                    break;
                }
            }
            // таблица Galery
            $lastGalery = Galery::find()->where(true)->all();

            foreach ($lastGalery as $last) {
                $time = time() - rand(60, 300); // разброс от 1 до 5 минут
                $last->timestamp = $time;
                $res = $last->save();
                $flag = ($flag && $res) ? true : false;
                if (!$flag){
                    break;
                }
            }

            if ($flag){
                $transaction->commit();
                $msg = 'Успешно!';
            }else{
                $transaction->rollBack();
                $msg = '<span style="color:red">Сбой!</span>';
            }

            return $this->renderFile('@app/modules/admin/views/alert.php', compact('msg'));
        }
    }

    /* Очистка кэша */
    public function actionCache()
    {
        if (Yii::$app->request->isAjax) {
            if (Yii::$app->cache->flush()) {
                $msg = 'Успешно!';
            }else{
                $msg = '<span style="color:red">Сбой!</span>';
            }
            return $this->renderFile('@app/modules/admin/views/alert.php', compact('msg'));
        }
    }
    
    
}
