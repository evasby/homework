<?php

/**
 * Implements hook_preprocess().
 */
function subbartik_preprocess_theming_template(&$variables) {
  $variables['theme_hook_suggestions'][] = 'theming_template__employees_extra';
  dpm($variables);
}
