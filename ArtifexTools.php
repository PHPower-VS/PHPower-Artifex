<?php

const Artifex_Logical_AND = 'AND';
const Artifex_Logical_OR = 'OR';
const Artifex_Logical_NOT = 'NOT';
const Artifex_Arithmetic_Equal = '=';
const Artifex_Arithmetic_LowerThan = '<';
const Artifex_Arithmetic_GreaterThan = '>';
const Artifex_Arithmetic_SmallerThanOrEqual = '<=';
const Artifex_Arithmetic_GreaterThanOrEqual = '>=';
const Artifex_Arithmetic_NOTequale = '!=';
const Artifex_Arithmetic_XOR = '^';
const Artifex_Get_Query = "1";
const Artifex_Excute_Query = "2";
const Artifex_Debug_Query = "3";
const Artifex_DebugAndExcute_Query = "4";

class ArtifexConditionsDescriptor {

    public $key;
    public $value;
    public $arithmeticOperator;
    public $nextLogicalOperator;

    public function __construct($key, $arithmeticOperator, $value, $nextLogicalOperator = false) {
        $this->key = $key;
        $this->value = $value;
        $this->arithmeticOperator = $arithmeticOperator;
        $this->nextLogicalOperator = $nextLogicalOperator;
    }

}

class ArtifexJoinDescriptor {

    public $table1, $table2;
    public $key1, $key2;
    public $joinType;

    public function __construct($table1, $table2, $key1, $key2, $joinType) {
        $this->table1 = $table1;
        $this->table2 = $table2;
        $this->key1 = $key1;
        $this->key2 = $key2;
        $this->joinType = $joinType;
    }

}

class UpdateListDescriptor {

    public $key1;
    public $value1;

    public function __construct($key1, $value1) {
        $this->key1 = $key1;
        $this->value1 = $value1;
    }

}
