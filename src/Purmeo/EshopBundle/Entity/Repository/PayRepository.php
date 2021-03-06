<?php

namespace Purmeo\EshopBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use Purmeo\EshopBundle\Entity\Pay;

/**
 * PayRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PayRepository extends EntityRepository {

    public function createPay($form, $order) {

        $em = $this->getEntityManager();

        $entity = new Pay();
        $entity->setUserEmail($form->getUserEmail());
        $entity->setBillingTitle($form->getBillingTitle());
        $entity->setBillingFirstname($form->getBillingFirstname());
        $entity->setBillingLastname($form->getBillingLastname());
        $entity->setBillingStreet($form->getBillingStreet());
        $entity->setBillingNumber($form->getBillingNumber());
        $entity->setBillingOtherInfo($form->getBillingOtherInfo());
        $entity->setBillingZipcode($form->getBillingZipcode());
        $entity->setBillingCity($form->getBillingCity());
        $entity->setBillingCountry($form->getBillingCountry());
        $entity->setBillingTelephone($form->getBillingTelephone());
        $entity->setShippingTitle($form->getShippingTitle() ? $form->getShippingTitle() : 0);
        $entity->setShippingFirstname($form->getShippingFirstname() ? $form->getShippingFirstname() : '');
        $entity->setShippingLastname($form->getShippingLastname() ? $form->getShippingLastname() : '');
        $entity->setShippingStreet($form->getShippingStreet() ? $form->getShippingStreet() : '');
        $entity->setShippingNumber($form->getShippingNumber() ? $form->getShippingNumber() : '');
        $entity->setShippingOtherInfo($form->getShippingOtherInfo() ? $form->getShippingOtherInfo() : '');
        $entity->setShippingZipcode($form->getShippingZipcode() ? $form->getShippingZipcode() : '');
        $entity->setShippingCity($form->getShippingCity() ? $form->getShippingCity() : '');
        $entity->setShippingCountry($form->getShippingCountry() ? $form->getShippingCountry() : 0);
        $entity->setShippingTelephone($form->getShippingTelephone() ? $form->getShippingTelephone() : '');
        $entity->setMethod($form->getMethod());

        $em->persist($entity);
        $em->flush();
    }

}
