<?php

namespace Adaptcms\FieldCurrency\Field;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Adaptcms\Base\Models\PackageField;
use Adaptcms\Fields\FieldType;

class FieldCurrency extends FieldType
{
  /**
  * Rules applied when record is being stored with a post type.
  *
  * @var array
  */
  public $storeRules = [
    //
  ];

  /**
  * Rules applied when record is being updated with a post type.
  *
  * @var array
  */
  public $updateRules = [
    //
  ];

  /**
  * Migration Command
  * When a package field is made from this field, you must supply a valid
  * migration string in string format.
  * Here is an example, please note the use of `:columnName` and having the command
  * in single quotes so the CMS can execute the command via migrations:
  *
  * '$table->string(":columnName")->nullable();'
  *
  * @return string
  */
  public function migrationCommand()
  {
    return '$table->decimal(":columnName", 5, 2)->default(0.00);';
  }

  /**
  * Get Value
  *
  * @param mixed $value
  *
  * @return mixed
  */
  public function getValue($value)
  {
    return (float) $value;
  }
}
