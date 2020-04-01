<?php

namespace Drupal\ymehir\Controller;

use Drupal\Core\Controller\ControllerBase;
class Controller extends ControllerBase
{
  public function content()
  {
    $build = [
      '#markup' => $this->t('Hello world'),
    ];
    return $build;
  }
}
