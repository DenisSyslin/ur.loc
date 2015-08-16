<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Модель работы с тегами
	 *
	 * @name        Model_Tag
	 * @category    Classes
	 * @subcategory Model
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Model_Tag extends ORM {
	
		/**
		 * Table columns
		 * @var array
		 */
		protected $_table_columns = array(
			'id'   => 'id',
			'name' => 'name',
		);
	} 

    /* End of file Tag.php */
    /* Location: ./application/classes/Model/Tag.php */