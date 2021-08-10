<?php 
//  ContactsTransformer.php 

namespace App\Transformers;

use App\Contacts;
use League\Fractal;

class ContactsTransformer extends Fractal\TransformerAbstract {
    public function transform(Contacts $contact) {
        return [
            'id' => (int) $contact->Contacts_ID,
            'name' => $contact->Contacts_Name,
            'email' => $contact->Contacts_Email
        ];
    }
}