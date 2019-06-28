<?php

namespace Drupal\iban\Plugin\Mask\Mask;

use Drupal\mask\Annotation\Mask;
use Drupal\mask\Plugin\Mask\Mask\MaskPluginBase;

/**
 * Provides a IBAN mask.
 *
 * @Mask(
 *   id = "iban",
 *   deriver = "Drupal\iban\Plugin\Mask\Mask\Derivative\IbanMaskDerivative"
 * )
 */
class IbanMaskPlugin extends MaskPluginBase {

}
