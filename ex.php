<?php 


use Acme\Business;
use Acme\Staff;
use Acme\User\Person;

$jeffrey = new Person('Jeffey Way');

$staff = new Staff([$jeffrey]);

$laracasts = new Business($staff);

$laracasts->hire(new Person('Jane Doe'));

var_dump($laracasts->getStaffMembers());



