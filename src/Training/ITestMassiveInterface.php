<?php
namespace Training;

interface ITestMassiveInterface
{
    /**
     * На входе массив array(2, 5, 3, 5, 4, 1, 6, 7, 8, 9, 25, 24, 18, 26, 27, 28, 29, 30, 31)
     * И некоторое число n
     *
     * Нужно: найти все пары значений, которые в сумме равны n
     *
     * На пример:
     * n = 5
     * Тогда, на выходе мультимассив array(
     *  array(2,5),
     *  array(2,3),
     *  ... и тд.
     * )
     * Причем, массив должен содержать только уникальные пары.
     * Т.е. нужна одна из пар array(2,5) или array(5,2), а не обе.
     * @param $array
     * @param $n
     * @return mixed
     */
    public function testMass1($array,$n);
}