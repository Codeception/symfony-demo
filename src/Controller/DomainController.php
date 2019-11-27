<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Controller used to test domains.
 *
 * @Route("/domain")
 */
class DomainController extends AbstractController
{
    /**
     * @Route("/", name="domain_index", host="example.com")
     */
    public function domainAction()
    {
        return Response::create('DOMAIN example.com');
    }

    /**
     * @Route("/", name="subdomain_index", host="{subdomain}.example.com")
     */
    public function subdomainAction($subdomain)
    {
        return Response::create('SUBDOMAIN '.$subdomain);
    }
}
