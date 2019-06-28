<?php

namespace Drupal\iban\Service;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class Iban.
 *
 * @package Drupal\iban\Service
 */
class Iban implements ContainerInjectionInterface {

  /**
   * Creates an Iban service.
   */
  public function __construct() {
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static();
  }

}
