<?php

namespace Drupal\liensy\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class SearchViewForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'search_view_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['search_term'] = [
      '#type' => 'textfield',
      '#size' => 30,
      '#maxlength' => 128,
      '#required' => TRUE,
    ];

    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Search'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Lấy giá trị tìm kiếm từ form.
    $search_term = $form_state->getValue('search_term');

    // Chuyển hướng đến View với tham số tìm kiếm trong URL.
    $form_state->setRedirect('view.view_search_product.page_search_product', [], ['query' => ['title' => $search_term]]);
  }
}
