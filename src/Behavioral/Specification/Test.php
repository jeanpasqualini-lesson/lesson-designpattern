<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/6/15
 * Time: 2:25 AM
 */

namespace Test\Behavioral\Specification;

use DesignPatterns\Behavioral\Specification\Item;
use DesignPatterns\Behavioral\Specification\Plus;
use DesignPatterns\Behavioral\Specification\PriceSpecification;
use DesignPatterns\Behavioral\Specification\SpecificationInterface;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {
        // TODO: Implement describe() method.
    }


    public function runTest()
    {
        $item = new Item(100);

        // (!(MAX 90, MIN 90) && (MAX 100, MIN 100)) = true

        $spec = $this->buildLeft()->plus($this->buildRight());

        echo $this->describeSpec($spec). " : ".(($spec->isSatisfiedBy($item)) ? "OUI" : "NON");

        echo PHP_EOL;

        $spec = $this->buildLeft()->not()->plus($this->buildRight());

        echo $this->describeSpec($spec). " : ".(($spec->isSatisfiedBy($item)) ? "OUI" : "NON");

        echo PHP_EOL;
    }

    public function describeSpec(SpecificationInterface $spec, $item = null)
    {
        $refl = new \ReflectionClass($spec);

        $classe = $refl->getShortName();

        //echo "DEBUG : ".$classe.PHP_EOL;

        switch($classe)
        {
            case "Plus":
                $left = $refl->getProperty("left");
                $left->setAccessible(true);

                $right = $refl->getProperty("right");
                $right->setAccessible(true);

                return "(".$this->describeSpec($left->getValue($spec))." && ".$this->describeSpec($right->getValue($spec)).")";

                break;

            case "PriceSpecification":
                $minPrice = $refl->getProperty("minPrice");
                $minPrice->setAccessible(true);

                $maxPrice = $refl->getProperty("maxPrice");
                $maxPrice->setAccessible(true);

                return "(? > ".$minPrice->getValue($spec)." && ? < ".$maxPrice->getValue($spec).")";

                break;

            case "Not":

                $specInternal = $refl->getProperty("spec");

                $specInternal->setAccessible(true);

                return "!".$this->describeSpec($specInternal->getValue($spec));
        }

        return "";
    }

    public function buildLeft()
    {
        $left = new PriceSpecification();

        $left->setMaxPrice(90);

        $right = new PriceSpecification();

        $right->setMaxPrice(90);

        return $left->plus($right);
    }

    public function buildRight()
    {
        $left = new PriceSpecification();

        $left->setMaxPrice(100);

        $right = new PriceSpecification();

        $right->setMaxPrice(100);

        return $left->plus($right);
    }

}