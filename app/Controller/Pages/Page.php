<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Page {

  /**
   * @param string $content
   * @return string
   */
  public static function getPage($content) {
    return View::render('pages/page', [
      'content' => $content
    ]);
  }

}