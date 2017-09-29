<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payments
 *
 * @ORM\Table(name="payments")
 * @ORM\Entity
 */
class Payments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="contactID", type="integer", nullable=true)
     */
    private $contactid;

    /**
     * @var integer
     *
     * @ORM\Column(name="employeeID", type="integer", nullable=true)
     */
    private $employeeid;

    /**
     * @var string
     *
     * @ORM\Column(name="amountpaid", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $amountpaid;

    /**
     * @var string
     *
     * @ORM\Column(name="amountreceived", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $amountreceived;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="paymentdate", type="datetime", nullable=true)
     */
    private $paymentdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifieddate", type="datetime", nullable=false)
     */
    private $modifieddate = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="payment_listID", type="integer", nullable=true)
     */
    private $paymentListid;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="bankingcheckID", type="integer", nullable=true)
     */
    private $bankingcheckid;


}

