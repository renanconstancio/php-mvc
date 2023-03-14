<?php

namespace App\Utils;


class View
{
  private static $vars = [];

  public static function init($vars = [])
  {
    self::$vars = $vars;
  }

  /**
   * Method return content view
   * @param string $view
   * @return string
   */
  private static function getContentView($view)
  {
    $file = __DIR__ . '/../../resources/view/' . $view . '.html';
    return file_exists($file) ? file_get_contents($file) : '';
  }

  /**
   * Method return renderized view
   * @param string $view
   * @param array $vars (strings|numercis)
   * @return string
   */
  public static function render($view, $vars = [])
  {
    $contentView = self::getContentView($view);

    $vars = array_merge(self::$vars, $vars);

    $keys = array_keys($vars);
    
    $keys = array_map(function ($item) {
      return sprintf('{{ %s }}', $item);
    }, $keys);

    return str_replace($keys, array_values($vars), $contentView);
  }
}
