<?php
/*
	May be overkill but all this does for now is use a version of TableField.js that works with checkboxes
	
*/
class ModifiedTableField extends TableField {
	protected $fieldDefaults = null;

	function FieldHolder() {
		
		
		Requirements::javascript(SAPPHIRE_DIR . '/thirdparty/prototype/prototype.js');
		Requirements::javascript(SAPPHIRE_DIR . '/thirdparty/behaviour/behaviour.js');
		Requirements::javascript(SAPPHIRE_DIR . '/javascript/prototype_improvements.js');
		Requirements::javascript(THIRDPARTY_DIR . '/scriptaculous/effects.js');
		Requirements::add_i18n_javascript(SAPPHIRE_DIR . '/javascript/lang');
		Requirements::javascript(SAPPHIRE_DIR . '/javascript/TableListField.js');
		
		// swap the js file
		Requirements::block(SAPPHIRE_DIR . '/javascript/TableField.js');
		Requirements::javascript('modifiedtablefield/javascript/ModifiedTableField.js');
		
		
		Requirements::css(SAPPHIRE_DIR . '/css/TableListField.css');
		

		$defaults = $this->fieldDefaults;
		if ($this->fieldDefaults == null && !is_array($this->fieldDefaults)) {
			$sourceClass = $this->sourceClass;
			
			$defaults = singleton($sourceClass)->stat('defaults');
		}
		
		if (count($defaults) > 0) {
			Requirements::customScript("var ".$this->name."_fieldDefaults = ".Convert::array2json($defaults));
		}
		
		
		return $this->renderWith($this->template);
	}
	
	
	/**
	 * Override the default values set in MyDataObject::$defaults if we want to
	 * 
	 * @param array $defaults
	 */
	function setDefaults($defaults) {
		$this->fieldDefaults = $defaults;
	}
	
	
}