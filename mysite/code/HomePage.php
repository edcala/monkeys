<?php
/* Notes */
/* Having a problem with enabling HTML5 required fields, and Javascript field focus error:
/* An invalid form control with name='' is not focusable.
/* The cause of the problem is related to the last hidden field that is generated through Silverstripe */

class HomePage extends Page {
}
class HomePage_Controller extends Page_Controller {
	private static $allowed_actions = array('ContactForm');

        // ...

        public function ContactForm() {
            // Create fields
            $field_fname = new TextField('firstname','First name *');
            $field_sname = new TextField('surname', 'Surname *');
            $field_email = new TextField('email','Email Address *');
            $field_contact = new TextField('number','Daytime contact number *');
            $field_address = new TextField('address','Address *');
            $field_suburb = new TextField('suburb','Suburb *');
            $field_state = new DropdownField('state', 'State *', array(
                    'default' => '-- Select --',
                    'ACT' => 'Australian Capital Territory',
                    'NSW' => 'New South Wales',
                    'NT' => 'Northern Territory',
                    'QLD' => 'Queensland',
                    'SA' => 'South Australia',
                    'TAS' => 'Tasmania',
                    'VIC' => 'Victoria',
                    'WA' => 'Western Australia',
                ));
            $field_postcode = new TextField('postcode','Postcode *');
            $field_enquiretype = new DropdownField('enquiretype', 'Enquiry Type *', array(
                    'default' => '-- Select --',
                    'General' => 'General Enquiry',
                    'Feedback' => 'Product feedback or enquiry',
                    'Complaint' => 'Product Complaint'
                ));

			// Set HTML5 Required fields
			// $field_fname -> setAttribute('required', 'required');
			// $field_sname -> setAttribute('required', 'required');
			// $field_email -> setAttribute('required', 'required');
			// $field_contact -> setAttribute('required', 'required');
			// $field_address -> setAttribute('required', 'required');
			// $field_suburb -> setAttribute('required', 'required');
			// $field_state -> setAttribute('required', 'required');
			// $field_postcode -> setAttribute('required', 'required');
			// $field_enquiretype -> setAttribute('required', 'required');

            // bring all fields into an array
            $fields = new FieldList(
                $field_fname,
				$field_sname,
				$field_email,
				$field_contact,
				$field_address,
				$field_suburb,
				$field_state,
				$field_postcode,
				$field_enquiretype,
				new TextField('pname','Product name'),
				new TextField('psize','Product size'),
				new TextField('useby','Use-by date'),
				new TextField('batchcode','Batch code'),
				new TextAreaField('enquiry','Enquiry *')
            );

            // Create actions
            $actions = new FieldList(
                new FormAction('registerContact', 'Submit >')
            );

            $formObj = new Form($this, '', $fields, $actions);
            $formObj  -> setAttribute('name', 'contactForm');
            return $formObj;
            //return new Form($this, 'ContactForm', $fields, $actions);
        }

}