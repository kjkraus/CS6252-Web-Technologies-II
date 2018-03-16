<?php
require_once 'Fields.php';

class Validator {
    
	/*
	 * validate all fields in the specified array of Fields object
	 */
	public static function validateAll($fields, $db) {
		foreach($fields as $field) {
			self::validate($field, $db);
		}
	}
	
	public static function validate($field, $db) {
		$method = 'validate' . ucfirst($field->getName());
		if (method_exists('Validator', $method)) {
			self::$method($field, $db);
		}
		else {
			self::validateField($field);
		}
	}
	
	/*
	 * validate an unknown field type
	 *
	 * If a required field, the field must contain
	 * a value.
	 *
	 * In case a required field is empty, the error of the
	 * field is set to an error message.
	 */
	public static function validateField($field) {
		if ($field->isRequired() && $field->getValue() === '') {
			$field->setError('Enter a value.');
		}
	}
	
	/*
	 * validate a name field
	 *
	 * The name should consist of at most 128 characters.
	 * A valid character in the name is a letters, digit,
	 * space, and the hyphen.
	 *
	 * In case of an invalid name, the error of the name
	 * field is set to an error message.
	 */
	public static function validateFirstname($field) {
		self::validateName($field);
	}
	
	public static function validateLastname($field) {
		self::validateName($field);
	}
	
	public static function validateName($field) {
		// check if the field has a value
		$value = $field->getValue();
		if ($value === '') {
			if ($field->isRequired()) {
				$field->setError('Enter your name.');
			}
			return;
		}
		// Check for the length
		if (strlen($value) > 128) {
			$field->setError('The name is too long.');
			return;
		}
		// Call the pattern method to check for valid characters
		$pattern = '~^[a-zA-Z0-9 \-]+$~';
		if (preg_match($pattern, $value) === 0) {
			$field->setError('The name contains invalid characters');
		}
	}
	
	/*
	 * validate an email field
	 *
	 * The email field must follow the specification in
	 * RFC 5322 3.4.1 (quoted strings do not need to be
	 * considered as valid).
	 *
	 * In case of an invalid emial address, the error of
	 * the email field is set to an error message.
	 */
	public static function validateEmail($field) {
		$value = $field->getValue();
		if ($value === '') {
			if ($field->isRequired()) {
				$field->setError('Enter an email address.');
			}
			return;
		}
		// Check for the length
		if (strlen($value) > 256) {
			$field->setError('The email address can have at most 256 characters.');
			return;
		}
		$parts = explode('@', $value);
		if (count($parts) < 2) {
			$field->setError('At sign required.');
			return;
		}
		if (count($parts) > 2) {
			$field->setError('Only one at sign allowed.');
			return;
		}
		$local = $parts[0];
		$domain = $parts[1];
		 
		//Check the local part
		$valid_chars = "[a-zA-Z0-9!#$%&\'*+\-/=?^_`{|}\~]+";
		$local_pattern = '~^' . $valid_chars . '(\.' . $valid_chars . ')*$~';
		if (preg_match($local_pattern, $local) === 0) {
			$field->setError('Invalid local part');
			return;
		}
		 
		//Check the domain part
		$labels = explode('.', $domain);
		if (count($labels) < 2) {
			$field->setError('The domain must contain at least two lables.');
			return;
		}
		$label_pattern = '~^[a-zA-Z0-9\-]{1,63}$~';
		foreach($labels as $label) {
			if (preg_match($label_pattern, $label) === 0) {
				$field->setError('Invalid domain');
				return;
			}
		}
		$label = $labels[count($labels)-1];
		$label_pattern = '~^[0-9]+$~';
		if (preg_match($label_pattern, $label) === 1) {
			$field->setError('Invalid domain');
			return;
		}
	}
	
	/*
	 * validate a phone field
	 *
	 * The phone should only contain digits space characters,  
	 * hyphens, and parenthesis. The phone has to contain 
	 * exactly 9 or 10 digits.
	 * 
	 * In case of an invalid name, the error of the name
	 * field is set to an error message.
	 */
	public static function validatePhone($field) {
		// check if the field has a value
		$value = $field->getValue();
		if ($value === '') {
			if ($field->isRequired()) {
				$field->setError('Enter a phone number.');
			}
			return;
		}
		// Check for the length
		if (strlen($value) > 14) {
		    $field->setError('The phone field can have at most 14 characters.');
		    return;
		}
		// Call the pattern method to check for valid number of digits (10 or 11).
		$pattern1 = '~^\D*(\d\D*){10}$~';
		$pattern2 = '~^\D*(\d\D*){11}$~';
		if ((preg_match_all($pattern1, $value) === 0) && (preg_match_all($pattern2, $value) === 0)) {
		    $field->setError('The phone field must contain 10 or 11 digits.');
		}
		// Call the pattern method to check for valid characters
		$pattern = '~^[0-9\s-()]+$~';
		if (preg_match_all($pattern, $value) === 0) {
		    $field->setError('The phone contains invalid characters. Please use digits, hyphens, spaces, and parenthesis only.');
		}
		
	}
	
	/*
	 * validate a date field
	 *
	 * The date must follow the MM/DD/YYYY or YYY-MM-DD format
	 * and must be a valid date.
	 *
	 * In case of an invalid date, the error of the date
	 * field is set to an error message.
	 */
	public static function validateDate($field) {
		// check if the field has a value
		$value = $field->getValue();
		if ($value === '') {
			if ($field->isRequired()) {
				$field->setError('Enter a date.');
			}
			return;
		}
		// Call the pattern method to check for a valid date format.
		$pattern1 = '~^[0-9]{2}/[0-9]{2}/[0-9]{4}$~';
		$pattern2 = '~^[0-9]{4}-[0-9]{2}-[0-9]{2}$~';
		if ((preg_match_all($pattern1, $value) === 0) && (preg_match_all($pattern2, $value) === 0))  {
		    $field->setError('The date field is not in a valid format.');
		}
		    return;
		if (preg_match_all($pattern2, $value) === 1) {
		    list($year , $month , $day) = explode('-',$value);
		    if (checkdate($month , $day , $year) !== 1) {
		    $field->setError('The date is not a valid date.');
		    }
		} return;
		if (preg_match_all($pattern1, $value) === 1) {
		    list($month, $day, $year) = explode('-',$value);
		    if (checkdate($month , $day , $year) !== 1) {
		        $field->setError('The date is not a valid date.');
		    }
		} return;
	}
	
	/*
	 * validate a library field
	 *
	 * The library field must contain a valid library name.
	 *
	 * In case of an invalid library, the error of the library
	 * field is set to an error message.
	 */
	public static function validateLibraryID($field, $db) {
		$value = $field->getValue();
		
		if ($value === '') {
			if ($field->isRequired()) {
				$field->setError('Select a library.');
			}
			return;
		}
		
		if ($db->getLibrary($value) == Null) {
			$field->setError('Select a valid library.');
			return;
		}
	}
	
	/*
	 * validate a comment field
	 *
	 * The comment field is not allowed to contain one or more
	 * three specific words.
	 *
	 * In case of an invalid comment, the error of the commemt
	 * field is set to an error message.
	 */
	public static function validateComments($field) {
		// check if the field has a value
		$value = $field->getValue();
		if ($value === '') {
			if ($field->isRequired()) {
				$field->setError('Enter your comments.');
			}
			return;
		}
		// Look for forbidden words - anarchy, rebellion, terrorist
		$pattern = '~^.*(?:anarchy|terrorist|rebellion).*$~';
		if (preg_match($pattern, $value) === 1) {
		    $field->setError('The comments field cannot contain anarchy, rebellion, or terrorist.');
		}
		// Check for the length
		if (strlen($value) > 512) {
		    $field->setError('The coments field can have at most 512 characters.');
		    return;
		}
	}
}
?>
