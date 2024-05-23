<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class Validation extends BaseConfig
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	/*
	public $departamentos1 =[ 
		'department_name' => 'required|min_length[3]|max_length[255]'   
			];

	public $departamentos1_errors =[ 
				'department_name' => [
					'required'=>'El Nombre Departamento requerido',
					'min_length'=>'El Nombre Departamento debe contener minimo 3 caracteres',
					'max_length'=>'El Nombre Departamento debe contener maximo 255 caracteres',
				],					
		];
		*/
	public $departamentos =[ 
			'department_name' => [	'label' => 'Department Name',			
									'rules' => 'required|min_length[3]|max_length[255]',
									'errors'=> [
												'required'   =>'El Nombre Departamento es requerido 1',
												'min_length' =>'El Nombre Departamento debe contener minimo 3 caracteres',
												'max_length' =>'El Nombre Departamento debe contener maximo 255 caracteres',
												],			
								  ],  
		];
}
