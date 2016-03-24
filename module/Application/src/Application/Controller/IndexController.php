<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Index Controller.
 *
 * @package Application\Controller
 */
class IndexController extends AbstractActionController
{
    /**
     * Index homepage action.
     *
     * @return ViewModel
     */
    public function indexAction()
    {
        return new ViewModel();
    }
}
