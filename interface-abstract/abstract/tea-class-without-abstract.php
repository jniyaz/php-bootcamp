<?php

/**
 * Simple Tea Class
 */
class Tea
{
    protected function addHotWater() {
        var_dump("Pour Hot water into a cup");
        return $this;
    }

    protected function addSugar() {
        var_dump("Add some amount of sugar");
        return $this;
    }

    protected function addTea() {
        var_dump("Add proper amount of tea");
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
                ->addTea()
                ->addMilk();
    }

}

$tea = new Tea;
$tea->make();