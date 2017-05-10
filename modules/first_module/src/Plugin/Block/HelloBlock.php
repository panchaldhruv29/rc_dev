<?php
/**
 * @file
 * Contains \Drupal\first_module\Plugin\Block\HelloBlock.
 */
 
namespace Drupal\first_module\Plugin\Block;
use Drupal\Core\Block\BlockBase;
 
/**
 * Provides a 'Hello' Block
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("Hello block"),
 * )
 */
//class HelloBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
//  public function build() {
//    return array(
//      '#markup' => $this->t('Hello, World!'),
//    );
//  }
 
//}




class HelloBlock extends BlockBase {
echo "dsfdfdfds";
exit;
  public function build() {
    $config = $this->getConfiguration();
    return array(
      '#type'=>'markup',
      '#markup'=>t('This is test block : '). $config['test_field1'],
      '#title'=>t('test block title'),
    );
  }
   
  /**
   * {@inheritdoc}
   */
  public function blockForm($form, &$form_state) {
    $form = parent::blockForm($form, $form_state);
    //Retrieve existing configuration for this block.
    $config = $this->getConfiguration();
     
    $form['test_field1']=array(
      '#type'=>'textfield',
      '#title'=>t('Block setting'),
      '#default_value' => isset($config['test_field1']) ? $config['test_field1'] : '',
    );
    return $form;
  }
}
