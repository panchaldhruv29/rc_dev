<?php

/**
 * @file
 * Contains \Drupal\block_example\Plugin\Block\BlockExampleSimpleBlock.
 */
 
namespace Drupal\forms_example\Plugin\Block;
 
use Drupal\block\BlockBase;
use Drupal\Component\Annotation\Plugin;
use Drupal\Core\Annotation\Translation;
 
/**
 * Provides a 'Example: empty block' block.
 *
 * @Block(
 *   id = "example_simple",
 *   subject = @Translation("Simple example block"),
 *   admin_label = @Translation("Simple example block")
 * )
 */
class FormsExampleSimpleBlock extends BlockBase {
   
  /**
   * Implements \Drupal\block\BlockBase::blockBuild().
   */
  public function build() {
    return array(
      '#markup' => t('Dhruv Panchal'),
    );
  }
 
}
