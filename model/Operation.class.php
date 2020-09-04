<?php
class Operation{

    private $id;
    private $date_begin;
    private $date_end;
    private $comment;
    private $id_worker;
    private $id_customer;
    private $id_TypeOperation

    public function __construct( DateTime $date_begin, DateTime $date_end, String $comment)
    {
        $this->date_begin = $date_begin;
        $this->date_end = $date_end;
        $this->comment = $comment;
    }

    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of date_begin
     */ 
    public function getDate_begin()
    {
        return $this->date_begin;
    }

    /**
     * Set the value of date_begin
     *
     * @return  self
     */ 
    public function setDate_begin($date_begin)
    {
        $this->date_begin = $date_begin;

        return $this;
    }

    /**
     * Get the value of date_end
     */ 
    public function getDate_end()
    {
        return $this->date_end;
    }

    /**
     * Set the value of date_end
     *
     * @return  self
     */ 
    public function setDate_end($date_end)
    {
        $this->date_end = $date_end;

        return $this;
    }

    /**
     * Get the value of comment
     */ 
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set the value of comment
     *
     * @return  self
     */ 
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get the value of id_worker
     */ 
    public function getId_worker()
    {
        return $this->id_worker;
    }

    /**
     * Set the value of id_worker
     *
     * @return  self
     */ 
    public function setId_worker($id_worker)
    {
        $this->id_worker = $id_worker;

        return $this;
    }

    /**
     * Get the value of id_customer
     */ 
    public function getId_customer()
    {
        return $this->id_customer;
    }

    /**
     * Set the value of id_customer
     *
     * @return  self
     */ 
    public function setId_customer($id_customer)
    {
        $this->id_customer = $id_customer;

        return $this;
    }

    /**
     * Get the value of id_TypeOperation
     */ 
    public function getId_TypeOperation()
    {
        return $this->id_TypeOperation;
    }

    /**
     * Set the value of id_TypeOperation
     *
     * @return  self
     */ 
    public function setId_TypeOperation($id_TypeOperation)
    {
        $this->id_TypeOperation = $id_TypeOperation;

        return $this;
    }
}
?>