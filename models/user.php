<?php

/**
 * User model
 */
class User extends BaseModel{
	const requiredFields = ['name', 'email', 'city', 'phone_number'];

	// Define neccessary constansts so we know from which table to load data
	const tableName = 'users';
	// ClassName constant is important for find and findOne static functions to work
	const className = 'User';


	// Create getter functions

	public function getName() {
		return $this->getField('name');
	}

	public function getEmail() {
		return $this->getField('email');
	}

	public function getCity() {
		return $this->getField('city');
	}

	public function getPhoneNumber() {
		return $this->getField('phone_number');
	}

	public function validate() {
		$this->validatePhoneNumber();
		$this->validateEmail();

		return parent::validate();
	}

	private function validatePhoneNumber() {
		if (strlen($this->getField('phone_number')) < 5) {
			$this->errors['phone_number'] = 'too short';
		}

		return false;
	}

	private function validateEmail() {
		if (filter_var($this->getField('email'), FILTER_VALIDATE_EMAIL)) {
			return true;
		}

		$this->errors['email'] = 'invalid email';

		return false;
	}
}