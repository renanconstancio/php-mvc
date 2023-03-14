<?php

namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organization;


class Sobre extends Page
{
  public static function dashborad()
  {
    $organization = new Organization();

    $content = View::render('pages/sobre', [
      'name' => $organization->name
    ]);

    return parent::getPage($content);
  }
}
