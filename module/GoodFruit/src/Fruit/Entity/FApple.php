<?php
    namespace Fruit\Entity;

    use Doctrine\ORM\Mapping\Entity;
    use Doctrine\ORM\Mapping\Column;

    /**
     *
     * @Entity
     *
     */
    class FApple extends Base
    {
    	/**
         *
         * @Column(type="string", length=255, nullable=true)
         *
         */
        protected $applePara;

    }