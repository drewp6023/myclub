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



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contactid
     *
     * @param integer $contactid
     *
     * @return Payments
     */
    public function setContactid($contactid)
    {
        $this->contactid = $contactid;

        return $this;
    }

    /**
     * Get contactid
     *
     * @return integer
     */
    public function getContactid()
    {
        return $this->contactid;
    }

    /**
     * Set employeeid
     *
     * @param integer $employeeid
     *
     * @return Payments
     */
    public function setEmployeeid($employeeid)
    {
        $this->employeeid = $employeeid;

        return $this;
    }

    /**
     * Get employeeid
     *
     * @return integer
     */
    public function getEmployeeid()
    {
        return $this->employeeid;
    }

    /**
     * Set amountpaid
     *
     * @param string $amountpaid
     *
     * @return Payments
     */
    public function setAmountpaid($amountpaid)
    {
        $this->amountpaid = $amountpaid;

        return $this;
    }

    /**
     * Get amountpaid
     *
     * @return string
     */
    public function getAmountpaid()
    {
        return $this->amountpaid;
    }

    /**
     * Set amountreceived
     *
     * @param string $amountreceived
     *
     * @return Payments
     */
    public function setAmountreceived($amountreceived)
    {
        $this->amountreceived = $amountreceived;

        return $this;
    }

    /**
     * Get amountreceived
     *
     * @return string
     */
    public function getAmountreceived()
    {
        return $this->amountreceived;
    }

    /**
     * Set paymentdate
     *
     * @param \DateTime $paymentdate
     *
     * @return Payments
     */
    public function setPaymentdate($paymentdate)
    {
        $this->paymentdate = $paymentdate;

        return $this;
    }

    /**
     * Get paymentdate
     *
     * @return \DateTime
     */
    public function getPaymentdate()
    {
        return $this->paymentdate;
    }

    /**
     * Set modifieddate
     *
     * @param \DateTime $modifieddate
     *
     * @return Payments
     */
    public function setModifieddate($modifieddate)
    {
        $this->modifieddate = $modifieddate;

        return $this;
    }

    /**
     * Get modifieddate
     *
     * @return \DateTime
     */
    public function getModifieddate()
    {
        return $this->modifieddate;
    }

    /**
     * Set paymentListid
     *
     * @param integer $paymentListid
     *
     * @return Payments
     */
    public function setPaymentListid($paymentListid)
    {
        $this->paymentListid = $paymentListid;

        return $this;
    }

    /**
     * Get paymentListid
     *
     * @return integer
     */
    public function getPaymentListid()
    {
        return $this->paymentListid;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Payments
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set bankingcheckid
     *
     * @param integer $bankingcheckid
     *
     * @return Payments
     */
    public function setBankingcheckid($bankingcheckid)
    {
        $this->bankingcheckid = $bankingcheckid;

        return $this;
    }

    /**
     * Get bankingcheckid
     *
     * @return integer
     */
    public function getBankingcheckid()
    {
        return $this->bankingcheckid;
    }
}
