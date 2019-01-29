<?php

use MyTest\Business;
use MyTest\Staff;
use MyTest\Users\Person;

$person1 = new Person('Niyaz Jamal');

$staff = new Staff([$person1]);

$business = new Business($staff);

$business->hire(new Person('Bousiya begam'));

var_dump($business->getStaffMembers());
