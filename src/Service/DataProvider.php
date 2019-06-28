<?php

namespace Drupal\iban\Service;

use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\StringTranslation\TranslationInterface;

/**
 * Class DataProvider.
 *
 * @package Drupal\iban
 * @SuppressWarnings(ExcessiveClassLength)
 */
class DataProvider implements ContainerInjectionInterface {

  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  public function __construct(TranslationInterface $stringTranslation) {
    $this->stringTranslation = $stringTranslation;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    /** @var TranslationInterface $stringTranslation */
    $stringTranslation = $container->get('string_translation');

    return new static(
      $stringTranslation
    );
  }

  /**
   * {@inheritdoc}
   *
   * @SuppressWarnings(ExcessiveMethodLength)
   */
  public function getList() {
    return [
      'AD' => [
        'mask' => '{AD} 00 0000 0000 ************',
      ],
      'AE' => [
        'mask' => '{AE} 00 000 0000000000000000',
      ],
      'AL' => [
        'mask' => '{AL} 00 00000000 ****************',
      ],
      'AO' => [
        'mask' => '{AO} 00 000000000000000000000',
      ],
      'AT' => [
        'mask' => '{AT} 00 00000 00000000000',
      ],
      'AX' => [
        'mask' => '{AX} 00 000000 00000000',
      ],
      'AZ' => [
        'mask' => '{AZ} 00 ZZZZ ********************',
      ],
      'BA' => [
        'mask' => '{BA} 00 000 000 0000000000',
      ],
      'BE' => [
        'mask' => '{BE}00 0000 0000 0000',
      ],
      'BF' => [
        'mask' => '{BF} 00000000000000000000000',
      ],
      'BG' => [
        'mask' => '{BG} 00 ZZZZ 0000 **********',
      ],
      'BY' => [
        'mask' => '{BY} 00 **** 0000 ****************',
      ],
      'BH' => [
        'mask' => '{BH} 00 ZZZZ **************',
      ],
      'BI' => [
        'mask' => '{BI} 00 000000000000',
      ],
      'BJ' => [
        'mask' => '{BJ} 00 Z 00000000000000000000000',
      ],
      'BL' => [
        'mask' => '{BL} 00 00000 00000 *********** 00',
      ],
      'BR' => [
        'mask' => '{BR} 00 00000000 00000 0000000000 Z *',
      ],
      'CH' => [
        'mask' => '{CH} 00 00000 000000000000',
      ],
      'CI' => [
        'mask' => '{CI} 00 Z 00000000000000000000000',
      ],
      'CM' => [
        'mask' => '{CM} 00 00000000000000000000000',
      ],
      'CR' => [
        'mask' => '{CR} 00 0 000 00000000000000',
      ],
      'CV' => [
        'mask' => '{CV} 00 000000000000000000000',
      ],
      'CY' => [
        'mask' => '{CY} 00 000 00000 ****************',
      ],
      'CZ' => [
        'mask' => '{CZ} 00 0000 000000 0000000000',
      ],
      'DE' => [
        'mask' => '{DE} 00 00000000 0000000000',
      ],
      'DK' => [
        'mask' => '{DK} 00 0000 0000000000',
      ],
      'DO' => [
        'mask' => '{DO} 00 ZZZZ 00000000000000000000',
      ],
      'DZ' => [
        'mask' => '{DZ} 00 00000000000000000000',
      ],
      'EE' => [
        'mask' => '{EE} 00 00 00 000000000000',
      ],
      'ES' => [
        'mask' => '{ES} 00 0000 0000 00 0000000000',
      ],
      'FI' => [
        'mask' => '{FI} 00 000000 00000000',
      ],
      'FO' => [
        'mask' => '{FO} 00 0000 0000000000',
      ],
      'FR' => [
        'mask' => '{FR}00 00000 00000 *********** 00',
      ],
      'GB' => [
        'mask' => '{GB} 00 ZZZZ 000000 00000000',
      ],
      'GE' => [
        'mask' => '{GE} 00 ZZ 0000000000000000',
      ],
      'GI' => [
        'mask' => '{GI} 00 ZZZZ ***************',
      ],
      'GL' => [
        'mask' => '{GL} 00 0000 0000000000',
      ],
      'GP' => [
        'mask' => '{GP} 00 00000 00000 *********** 00',
      ],
      'GR' => [
        'mask' => '{GR} 00 000 0000 ****************',
      ],
      'GT' => [
        'mask' => '{GT} 00 ZZZZ 00 00 ****************',
      ],
      'HR' => [
        'mask' => '{HR} 00 0000000 0000000000',
      ],
      'HU' => [
        'mask' => '{HU} 00 000 00000 0000000000000000',
      ],
      'IE' => [
        'mask' => '{IE} 00 ZZZZ 000000 00000000',
      ],
      'IL' => [
        'mask' => '{IL} 00 000 000 0000000000000',
      ],
      'IR' => [
        'mask' => '{IS} 00 0000000000000000000000',
      ],
      'IS' => [
        'mask' => '{IS} 00 0000 00 000000 0000000000',
      ],
      'IT' => [
        'mask' => '{FR}00 00000 00000 *********** 00',
      ],
      'IQ' => [
        'mask' => '{IQ} 00 ZZZZ 000 000000000000',
      ],
      'JO' => [
        'mask' => '{JO} 00 ZZZZ 0000 000000000000000000',
      ],
      'KW' => [
        'mask' => '{KZ} 00 000 *************',
      ],
      'KZ' => [
        'mask' => '{KZ} 00 ZZZZ **********************',
      ],
      'LB' => [
        'mask' => '{LB} 00 0000 ********************',
      ],
      'LC' => [
        'mask' => '{LC} 00 ZZZZ ************************',
      ],
      'LI' => [
        'mask' => '{LI} 00 00000 ************',
      ],
      'LT' => [
        'mask' => '{LT} 00 00000 00000000000',
      ],
      'LU' => [
        'mask' => '{LU} 00 000 *************',
      ],
      'LV' => [
        'mask' => '{LV} 00 ZZZZ *************',
      ],
      'MC' => [
        'mask' => '{MC} 00 00000 00000 *********** 00',
      ],
      'MD' => [
        'mask' => '{MD} 00 ZZ ******************',
      ],
      'ME' => [
        'mask' => '{ME} 00 000 000000000000000',
      ],
      'MF' => [
        'mask' => '{MF} 00 00000 00000 *********** 00',
      ],
      'MG' => [
        'mask' => '{MG} 00 00000000000000000000000',
      ],
      'MK' => [
        'mask' => '{MK} 00 000 ************',
      ],
      'ML' => [
        'mask' => '{ML} 00 Z ***********************',
      ],
      'MQ' => [
        'mask' => '{MQ} 00 00000 00000 *********** 00',
      ],
      'MR' => [
        'mask' => '{MR} 00 00000 00000 00000000000 00',
      ],
      'MT' => [
        'mask' => '{MT} 00 ZZZZ 00000 ******************',
      ],
      'MU' => [
        'mask' => '{MU} 00 ZZZZ **********************',
      ],
      'MZ' => [
        'mask' => '{MZ} 00 000000000000000000000',
      ],
      'NC' => [
        'mask' => '{NC} 00 00000 00000 *********** 00',
      ],
      'NL' => [
        'mask' => '{NL} 00 ZZZZ 0000 0000',
      ],
      'NO' => [
        'mask' => '{N0} 00 0000 0000000',
      ],
      'PF' => [
        'mask' => '{PF} 00 00000 00000 *********** 00',
      ],
      'PK' => [
        'mask' => '{PK} 00 ZZZZ ****************',
      ],
      'PL' => [
        'mask' => '{PL} 00 00000000 0000000000000000',
      ],
      'PM' => [
        'mask' => '{PM} 00 00000 00000 *********** 00',
      ],
      'PS' => [
        'mask' => '{PS} 00 ZZZZ *********************',
      ],
      'PT' => [
        'mask' => '{PT} 00 0000 0000 00000000000 00',
      ],
      'QA' => [
        'mask' => '{QA} 00 ZZZZ *********************',
      ],
      'RE' => [
        'mask' => '{RE} 00 00000 00000 *********** 00',
      ],
      'RO' => [
        'mask' => '{RO} 00 ZZZZ ****************',
      ],
      'RS' => [
        'mask' => '{RS} 00 000 000000000000000',
      ],
      'SA' => [
        'mask' => '{SA} 00 00 000000000000000000',
      ],
      'SC' => [
        'mask' => '{SC} 00 ZZZZ 0000 0000000000000000 ZZZ',
      ],
      'SE' => [
        'mask' => '{SE} 00 000 00000000000000000',
      ],
      'SI' => [
        'mask' => '{SI} 00 00 000 0000000000',
      ],
      'SK' => [
        'mask' => '{SK} 00 0000 000000 0000000000',
      ],
      'SM' => [
        'mask' => '{SM} 00 Z 00000 00000 ************',
      ],
      'SN' => [
        'mask' => '{SM} 00 Z 00000000000000000000000',
      ],
      'ST' => [
        'mask' => '{ST} 00 0000 0000 0000000000000',
      ],
      'SV' => [
        'mask' => '{SV} 00 ZZZZ 00000000000000000000',
      ],
      'TF' => [
        'mask' => '{TF} 00 00000 00000 *********** 00',
      ],
      'TL' => [
        'mask' => '{TL} 00 000 0000000000000000',
      ],
      'TN' => [
        'mask' => '{TN} 00 00 000 000000000000000',
      ],
      'TR' => [
        'mask' => '{TR} 00 00000 0 ****************',
      ],
      'UA' => [
        'mask' => '{UA} 00 000000 *******************',
      ],
      'VG' => [
        'mask' => '{VG} 00 ZZZZ 0000000000000000',
      ],
      'WF' => [
        'mask' => '{WF} 00 00000 00000 *********** 00',
      ],
      'YT' => [
        'mask' => '{YT} 00 00000 00000 *********** 00',
      ],
      'XK' =>[
        'mask' => '{XK} 00 0000 000000000000',
      ],
    ];
  }

}
