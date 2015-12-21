<?php


class A {
	private $foo = array();

	function f() {
		// should extract foo
		echo $this->foo[10];
	}

	function g() {
		// should extract foo
		echo $this->foo;
	}

}