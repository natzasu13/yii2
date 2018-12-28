<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * DocumentForm is the model behind the contact form.
 */
class AgreementForm extends Model
{
    public $name;
    public $description;
    public $subscription_date;
    public $agreement_date;
    public $active;

}
