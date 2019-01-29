<?php

/**
 * Simple Coffee Class
 */
class Coffee
{
    protected function addHotWater() {
        var_dump("Pour Hot water into a cup");
        return $this;
    }

    protected function addSugar() {
        var_dump("Add some amount of sugar");
        return $this;
    }

    protected function addCofee() {
        var_dump("Add proper amount of coffee");
        return $this;
    }

    protected function addMilk() {
        var_dump("Add proper amount of milk");
        return $this;
    }

    public function make() {
        return $this
                ->addHotWater()
                ->addSugar()
                ->addCofee()
                ->addMilk();
    }

}

// can see in both tea and coffee classes, there are duplicate methods..
// Abstract play the role here..

$coffee = new Coffee;
$coffee->make();