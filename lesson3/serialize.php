<?php
/**
 * Serialize
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */

$students = [
    [
        'name'      => 'Vasya',
        'email'     => 'vasya@gmail.com',
        'phone'     => 333,
    ],
];

var_dump(serialize($students));
var_dump(unserialize('a:1:{i:0;a:3:{s:4:"name";s:5:"Vasya";s:5:"email";s:15:"vasya@gmail.com";s:5:"phone";i:333;}}'));