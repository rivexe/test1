<?php

class Product
{

    private $code,
            $name,
            $level1,
            $level2,
            $level3,
            $price,
            $priceSP,
            $amount,
            $propertyFields,
            $jointPurchases,
            $unit,
            $picture,
            $displayOnMain,
            $description;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getLevel1()
    {
        return $this->level1;
    }

    /**
     * @return mixed
     */
    public function getLevel2()
    {
        return $this->level2;
    }

    /**
     * @return mixed
     */
    public function getLevel3()
    {
        return $this->level3;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getPriceSP()
    {
        return $this->priceSP;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return mixed
     */
    public function getPropertyFields()
    {
        return $this->propertyFields;
    }

    /**
     * @return mixed
     */
    public function getJointPurchases()
    {
        return $this->jointPurchases;
    }

    /**
     * @return mixed
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @return mixed
     */
    public function getDisplayOnMain()
    {
        return $this->displayOnMain;
    }


    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $level1
     */
    public function setLevel1($level1)
    {
        $this->level1 = $level1;
    }

    /**
     * @param mixed $level2
     */
    public function setLevel2($level2)
    {
        $this->level2 = $level2;
    }

    /**
     * @param mixed $level3
     */
    public function setLevel3($level3)
    {
        $this->level3 = $level3;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param mixed $priceSP
     */
    public function setPriceSP($priceSP)
    {
        $this->priceSP = $priceSP;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param mixed $propertyFields
     */
    public function setPropertyFields($propertyFields)
    {
        $this->propertyFields = $propertyFields;
    }

    /**
     * @param mixed $jointPurchases
     */
    public function setJointPurchases($jointPurchases)
    {
        $this->jointPurchases = $jointPurchases;
    }

    /**
     * @param mixed $unit
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @param mixed $displayOnMain
     */
    public function setDisplayOnMain($displayOnMain)
    {
        $this->displayOnMain = $displayOnMain;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function __construct(array $values)
    {

        $this->code = $values[0] ?: '';
        $this->name = $values[1] ?: '';
        $this->level1 = $values[2] ?: '';
        $this->level2 = $values[3] ?: '';
        $this->level3 = $values[4] ?: '';
        $this->price = $values[5] ?: '';
        $this->priceSP = $values[6] ?: '';
        $this->amount = $values[7] ?: '';
        $this->propertyFields = $values[8] ?: '';
        $this->jointPurchases = $values[9] ?: '';
        $this->unit = $values[10] ?: '';
        $this->picture = $values[11] ?: '';
        $this->displayOnMain = $values[12] ?: '';
        $this->description = $values[13] ?: '';

    }

}