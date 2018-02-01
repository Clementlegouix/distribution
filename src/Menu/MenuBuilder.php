<?php
// src/AppBundle/Menu/MenuBuilder.php

namespace App\Menu;

use Knp\Menu\FactoryInterface;

class MenuBuilder
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     *
     * Add any other dependency you need
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(array $options)
    {
        $menu = $this->factory->createItem('root');

     	$menu->setChildrenAttribute('class', 'nav flex-column');
		$menu->addChild('Distribution', ['route' => 'home'])
		     ->setAttributes(array(
		         'class' => 'nav-item',
		         'icon' => 'test'
		     ));
		$menu->addChild('Adherents', array('route' => 'adherent'))
			->setAttributes(array(
		         'class' => 'nav-item'
		     ));
        //$menu['Adherents']->addChild('Ajouter un adhérent', array('route' => 'creerAdherent'));

		$menu->addChild('Bénévoles', array('route' => 'benevoles'))
			->setAttributes(array(
		         'class' => 'nav-item'
		     ));
        $menu->addChild('Administration', array('route' => 'admin'))
            ->setAttributes(array(
                 'class' => 'nav-item'
             ));
        return $menu;
    }
}