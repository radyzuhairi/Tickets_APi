<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class BaseTicketRequest extends FormRequest
{


    public function mappedAttributes(array $otherAttributes = [])
    {
        $attributeMap =  array_merge([
             'data.attributes.title' => 'title',
           'data.attributes.description' => 'description',
           'data.attributes.status' => 'status',
           'data.attributes.createdAt' => 'created_at',
           'data.attributes.updatedAt' => 'updated_at',
           'data.relationships.author.data.id' => 'user_id'
        ],$otherAttributes);

        $attribuetsToUpdate = [];
        foreach ($attributeMap as $key => $attribute) {
           if ($this->has($key))
           {
             $attribuetsToUpdate[$attribute] = $this->input($key);
           }
           return $attribuetsToUpdate;
        }
    }


    public function messages()
    {
        return
        [
          'data.attributes.status' => 'The data.attributes.status value is invalid. Please use A,C,H or X.'
        ];
    }
}
