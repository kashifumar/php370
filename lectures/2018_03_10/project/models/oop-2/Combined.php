<?php
class ParentA{
    
}
interface ParentIA{
    
}
interface ParentIB{
    
}

trait DBTrait{
    
}

trait MyTrait{
    
}

class ChildA extends ParentA implements ParentIA, ParentIB{
    use DBTrait;
    use MyTrait;
}












