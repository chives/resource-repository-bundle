<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Bundle\ResourceRepositoryBundle\Model;

use DateTimeImmutable;

class Resource implements ResourceValue
{
    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $textValue;

    /**
     * @var DateTimeImmutable
     */
    protected $datetimeValue;

    /**
     * @var DateTimeImmutable
     */
    protected $dateValue;

    /**
     * @var DateTimeImmutable
     */
    protected $timeValue;

    /**
     * @var int
     */
    protected $numberValue;

    /**
     * @var int
     */
    protected $integerValue;

    /**
     * @var bool
     */
    protected $boolValue;

    public function __construct()
    {
        $this->boolValue = false;
    }

    /**
     * {@inheritdoc}
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * {@inheritdoc}
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * {@inheritdoc}
     */
    public function setTextValue($textValue)
    {
        $this->textValue = $textValue;
    }

    /**
     * {@inheritdoc}
     */
    public function getTextValue()
    {
        return $this->textValue;
    }

    /**
     * {@inheritdoc}
     */
    public function setDateValue($dateValue)
    {
        $this->dateValue = $dateValue;
    }

    /**
     * {@inheritdoc}
     */
    public function getDateValue()
    {
        return $this->dateValue;
    }

    /**
     * {@inheritdoc}
     */
    public function setDatetimeValue($datetimeValue)
    {
        $this->datetimeValue = $datetimeValue;
    }

    /**
     * {@inheritdoc}
     */
    public function getDatetimeValue()
    {
        return $this->datetimeValue;
    }

    /**
     * {@inheritdoc}
     */
    public function setTimeValue($timeValue)
    {
        $this->timeValue = $timeValue;
    }

    /**
     * {@inheritdoc}
     */
    public function getTimeValue()
    {
        return $this->timeValue;
    }

    /**
     * {@inheritdoc}
     */
    public function setNumberValue($numberValue)
    {
        $this->numberValue = $numberValue;
    }

    /**
     * {@inheritdoc}
     */
    public function getNumberValue()
    {
        return $this->numberValue;
    }

    /**
     * {@inheritdoc}
     */
    public function setIntegerValue($integerValue)
    {
        $this->integerValue = $integerValue;
    }

    /**
     * {@inheritdoc}
     */
    public function getIntegerValue()
    {
        return $this->integerValue;
    }

    /**
     * {@inheritdoc}
     */
    public function setBoolValue($boolValue)
    {
        $this->boolValue = $boolValue;
    }

    /**
     * {@inheritdoc}
     */
    public function getBoolValue()
    {
        return $this->boolValue;
    }
}
