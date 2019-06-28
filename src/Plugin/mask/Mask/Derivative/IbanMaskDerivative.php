<?php

namespace Drupal\iban\Plugin\Mask\Mask\Derivative;

use Drupal\Component\Plugin\Derivative\DeriverBase;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\iban\Service\DataProvider;
use Drupal\Core\Plugin\Discovery\ContainerDeriverInterface;
use Drupal\iso3166\Plugin\Iso3166\CountryManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides IBAN plugins.
 */
class IbanMaskDerivative extends DeriverBase implements ContainerDeriverInterface {

  use StringTranslationTrait;

  /**
   * The data provider.
   *
   * @var \Drupal\iban\Service\DataProvider
   */
  protected $dataProvider;

  /**
   * Creates a IbanDerivative.
   *
   * @param \Drupal\iban\Service\DataProvider $dataProvider
   *   The data provider.
   */
  public function __construct(DataProvider $dataProvider) {
    $this->dataProvider = $dataProvider;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, $basePluginId) {

    /** @var DataProvider $dataProvider */
    $dataProvider = $container->get('iban.data_provider');

    return new static(
      $dataProvider
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getDerivativeDefinitions($basePluginDefinition) {

    // Get the iban data for the provider.
    $dataList = $this->dataProvider->getList();

    // Loop continents.
    if (!empty($dataList)) {
      foreach ($dataList as $key => $data) {

        if (!$data) {
          continue;
        }

        $this->derivatives[$key] = $basePluginDefinition;
        $this->derivatives[$key]['id'] = $key;
        $this->derivatives[$key]['label'] = $this->t('Iban : %key', ['%key' => $key]);
        $this->derivatives[$key]['mask'] = $data['mask'];
      }
    }

    return parent::getDerivativeDefinitions($basePluginDefinition);
  }

}
