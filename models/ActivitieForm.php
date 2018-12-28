<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * DocumentForm is the model behind the contact form.
 */
class ActivitieForm extends Model
{
    public $name;
    public $description;
    public $goal;
    public $agreed_time;
    public $effective;

}
