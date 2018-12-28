<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * DocumentForm is the model behind the contact form.
 */
class DocumentForm extends Model
{
    public $name;
    public $date;
    public $active;
    public $objective;
    public $causes_compliance;
    public $themes;

}
