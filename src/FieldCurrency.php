<?php

namespace Adaptcms\FieldCurrency;

use Adaptcms\Base\Models\Package;

class FieldCurrency
{
  /**
  * On Install
  *
  * @return void
  */
  public function onInstall()
  {
    Package::syncPackageFolder(get_class());
  }
}
