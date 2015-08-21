<?php defined('SYSPATH') OR die('No direct script access.');

return array(

	'alpha'         => ':field must contain only letters',
	'alpha_dash'    => ':field must contain only numbers, letters and dashes',
	'alpha_numeric' => ':field must contain only letters and numbers',
	'color'         => ':field must be a color',
	'credit_card'   => ':field must be a credit card number',
	'date'          => ':field must be a date',
	'decimal'       => ':field must be a decimal with :param2 places',
	'digit'         => ':field must be a digit',
	'equals'        => ':field must equal :param2',
	'exact_length'  => ':field must be exactly :param2 characters long',
	'in_array'      => ':field must be one of the available options',
	'ip'            => ':field must be an ip address',
	'matches'       => 'Поля не совпадают',
	'min_length'    => 'Поле :field должно быть не меньше :param2 символом',
	'max_length'    => 'Поле :field должно быть не больше :param2 символом',
	'not_empty'     => 'Поле :field не должно быть пустым',
	'numeric'       => 'Поле :field должно быть числом',
	'phone'         => ':field must be a phone number',
	'range'         => ':field must be within the range of :param2 to :param3',
	'regex'         => 'Поле :field содержит недопустимые символы',
	'url'           => ':field must be a url',
	'username' =>  array (
		'Model_Validate::unique_username'  => 'Такой пользователь уже существует',
	),
	'email' =>  array (
		'Model_Validate::unique_useremail' => 'Такой email-адрес уже существует',
		'email' => 'Поле :field должно содержать допустимый email-адрес',
		'email_domain' => 'Поле :field должно содержать допустимый email-домен',
	)
);
