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
  * @var boolean
  */
  // public $shouldNotSetData = true;

  /**
  * @var boolean
  */
  public $isVisible = true;

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
    return $value;
  }

  /**
  * Set Value
  *
  * @param mixed $value
  *
  * @return void
  */
  public function setValue($value)
  {
    return $value;
  }

  /**
  * Get Store Rules
  *
  * @param PackageField $packageField
  *
  * @return array
  */
  // public function getStoreRules(PackageField $packageField)
  // {
  //   $rules = [];
  //
  //   return $rules;
  // }

  /**
  * Get Update Rules
  *
  * @param PackageField $packageField
  *
  * @return array
  */
  // public function getUpdateRules(PackageField $packageField)
  // {
  //   $rules = [];
  //
  //   return $rules;
  // }

  /**
  * Format Name
  *
  * @param PackageField $packageField
  *
  * @return string
  */
  // public function formatName(PackageField $packageField)
  // {
  //   return Str::plural($packageField->name);
  // }

  /**
  * Format Column Name
  *
  * @param PackageField $packageField
  *
  * @return string
  */
  // public function formatColumnName(PackageField $packageField)
  // {
  //   return strtolower(Str::plural($packageField->name));
  // }

  /**
  * After Store
  *
  * @param PackageField $packageField
  *
  * @return void
  */
  // public function afterStore(PackageField $packageField)
  // {
  //
  // }

  /**
  * With Form Meta
  *
  * @param Request      $request
  * @param PackageField $packageField
  *
  * @return array
  */
  // public function withFormMeta(Request $request, PackageField $packageField)
  // {
  //   $meta = [];
  //
  //   return $meta;
  // }

  /**
  * With Loaded Relationships
  *
  * @param Model        $model
  * @param PackageField $packageField
  *
  * @return Model
  */
  // public function withLoadedRelationships($model, PackageField $packageField)
  // {
  //   return $model;
  // }

  /**
  * After Model Store
  *
  * @param Model        $model
  * @param Request      $request
  * @param PackageField $packageField
  *
  * @return void
  */
  // public function afterModelStore($model, Request $request, PackageField $packageField)
  // {
  //   $this->afterModelSave($model, $request, $packageField);
  // }

  /**
  * After Model Update
  *
  * @param Model        $model
  * @param Request      $request
  * @param PackageField $packageField
  *
  * @return void
  */
  // public function afterModelUpdate($model, Request $request, PackageField $packageField)
  // {
  //   $this->afterModelSave($model, $request, $packageField);
  // }

  /**
  * After Model Save
  *
  * @param Model        $model
  * @param Request      $request
  * @param PackageField $packageField
  *
  * @return void
  */
  // public function afterModelSave($model, Request $request, PackageField $packageField)
  // {
  //
  // }
}
