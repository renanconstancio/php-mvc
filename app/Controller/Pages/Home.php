<?php

namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organization;


class Home extends Page
{

  public static function dashborad()
  {

    $organization = new Organization();

    $content = View::render('pages/home', [
      'name' => $organization->name
    ]);

    return parent::getPage($content);
  }
}
