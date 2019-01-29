<?php

abstract class Template {

    public function make()
    {
        return $this
                ->addHotWater()
                ->addSugar()
                ->addPrimaryToppings()
                ->addMilk();
    }

    protected function addHotWater() {
        var_dump("Pour Hot water into a cup");
        return $this;
    }

    protected function addSugar() {
        var_dump("Add some amount of sugar");
        return $this;
    }

    protected function addMilk() {
        var_dump("Add proper amount of milk");
        return $this;
    }

    protected abstract function addPrimaryToppings();

}

class Tea extends Template {
    public function addPrimaryToppings() {
        var_dump('Add Proper amount of Tea');
        return $this;
    }
}

class Coffee extends Template {
    public function addPrimaryToppings() {
        var_dump('Add Proper amount of Coffee');
        return $this;
    }
}

// $item = new Coffee();
$item = new Tea();
$item->make();