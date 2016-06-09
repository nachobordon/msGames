<?php

namespace GameBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController
{
    /**
     * @View()
     *
     * @return View
     */
    public function getCatalogAction()
    {
        $data = array();
        for ($i = 0; $i < 10; $i++)
        {
            $game['id'] = $i;
            $game['name'] = "Game$i";

            $data[] = $game;
        }

        return $data;
    }
}
