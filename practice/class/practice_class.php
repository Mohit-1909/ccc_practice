    <?php
    class A
    {
        public $a = 10;
        public $obj;

        public function test()
        {
            $this->a++;
            return $this;
        }

        public function test2()
        {
            if (!isset($this->obj)) {
                $this->obj = new A();
            }
            $this->obj->test()->test();
            $this->a = $this->obj->a;
            return $this;
        }
    }

    class B
    {
        public $a;
        public $obj;

        public function test2()
        {
            if (!isset($this->obj)) {
                $this->obj = new A();
            }
            $this->obj->test2()->test2();
            $this->obj->test();
            // Accessing property 'a' from the 'obj' property of object 'B'
            $this->a = $this->obj->a;
            return $this;
        }
    }

    $obj = new B();
    $obj->test2();
    print_r($obj->obj->a); // Accessing property 'a' of object 'A' stored in 'obj' property of object 'B'

    $obj->test2();
    print_r($obj->obj->a); // Accessing property 'a' of object 'A' stored in 'obj' property of object 'B'
