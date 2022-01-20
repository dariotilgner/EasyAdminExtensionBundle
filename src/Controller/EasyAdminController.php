<?php

namespace AlterPHP\EasyAdminExtensionBundle\Controller;

use AlterPHP\EasyAdminExtensionBundle\Security\AdminAuthorizationChecker;
use EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController as BaseEasyAdminControler;
use Symfony\Component\HttpFoundation\RequestStack;

class EasyAdminController extends BaseEasyAdminControler
{
    use AdminExtensionControllerTrait;

    public function __construct(private RequestStack $requestStack)
    {

    }

    public static function getSubscribedServices(): array
    {
        return \array_merge(parent::getSubscribedServices(), [AdminAuthorizationChecker::class]);
    }
}
