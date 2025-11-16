<?php
declare(strict_types=0);

/**
 * Abstract base class for all products in this exam.
 *
 * NOTE TO STUDENTS:
 * - Do NOT rename this class or its methods.
 * - Complete all TODO sections as described in README.md.
 */
abstract class Product
{
    protected int $id;
    protected string $title;
    protected int $price;

    public function __construct(int $id,string $title,int $price){
        $this->id=$id;
        $this->title=$title;
        $this->price=$price;
    }
    public function getTitle():string{
        return $this->title;
    }
    public function getPrice():int{
        return $this->price;
    }
    abstract public function getTypeLabel(): string;
}
