<?php

namespace Berbageek\Instaform;

class FormBuilder
{
	protected $table;

	function __construct($table)
	{
		$this->table = $table;
	}

	public function toHtml($except = [])
	{
		return '<form><input type="text" placeHolder="Name.."/></form>';
	}
}