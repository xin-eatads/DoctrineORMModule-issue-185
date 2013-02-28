<?php
    namespace Fruit\Entity;

    use Doctrine\ORM\Mapping\Entity;
    use Doctrine\ORM\Mapping\Table;
    use Doctrine\ORM\Mapping\InheritanceType;
    use Doctrine\ORM\Mapping\DiscriminatorColumn;
    use Doctrine\ORM\Mapping\DiscriminatorMap;
    use Doctrine\ORM\Mapping\Id;
    use Doctrine\ORM\Mapping\GeneratedValue;
    use Doctrine\ORM\Mapping\Column;
    /**
     *
     * @Entity
     * @Table(name="fruit")
     * @InheritanceType("SINGLE_TABLE")
     * @DiscriminatorColumn(name="dscr", type="string")
     * @DiscriminatorMap({  "apple" = "FApple",
     *                      "pear" = "Pear"
     *                  })
     *
     */
    abstract class Base
    {
        /**
         * @Id
         * @GeneratedValue(strategy="AUTO")
         * @Column(name="id", type="integer")
         */
        protected $id;

        /**
         *
         * @Column(type="string", length=255, nullable=true)
         *
         */
        protected $weight;
    }
