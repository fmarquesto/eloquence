<?php
namespace Eloquence\Database;

use Eloquence\Behaviours\CamelCasing;

/**
 * Class Model
 *
 * Have your models extend the model class to include the below traits.
 *
 * @package Eloquence\Database
 */
abstract class Model extends \Illuminate\Database\Eloquent\Model
{
    use CamelCasing;
}
