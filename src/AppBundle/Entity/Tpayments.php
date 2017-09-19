<?php

namespace AppBundle\Entity;

/**
 * Tpayments
 */
class Tpayments
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $contactid;

    /**
     * @var integer
     */
    private $employeeid;

    /**
     * @var string
     */
    private $amountpaid;

    /**
     * @var string
     */
    private $amountreceived;

    /**
     * @var \DateTime
     */
    private $paymentdate;

    /**
     * @var \DateTime
     */
    private $modifieddate = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     */
    private $paymentListid;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
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
     * @return Tpayments
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
     * @return Tpayments
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
     * @return Tpayments
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
     * @return Tpayments
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
     * @return Tpayments
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
     * @return Tpayments
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
     * @return Tpayments
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
     * @return Tpayments
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
     * @return Tpayments
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

