<?php

namespace Validation\Schema;

use Validation\Assertions;

class NumberSchema extends AnySchema
{
    public function __construct()
    {
        $this->assert(new Assertions\IsNumber());
    }

    /**
     * @return $this
     */
    public function integer()
    {
        $this->assert(new Assertions\IsInteger());

        return $this;
    }

    /**
     * @return $this
     */
    public function float()
    {
        $this->assert(new Assertions\IsFloat());

        return $this;
    }
}
