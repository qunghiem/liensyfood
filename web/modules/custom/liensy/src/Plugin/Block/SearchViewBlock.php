<?php

namespace Drupal\liensy\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Search View Block' block.
 *
 * @Block(
 *   id = "search_view_block",
 *   admin_label = @Translation("Search View Block")
 * )
 */
class SearchViewBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Render search form.
    return \Drupal::formBuilder()->getForm('Drupal\liensy\Form\SearchViewForm');
  }
}
