<?php

namespace App\Http\Resources;

use App\Http\Controllers\Api\StudentController;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowStudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request):array
    {
        return $this->only('id', 'name','age', 'province', 'score', 'phoneNumber')+[
            'status' => $this->status,
            'created_at'=> $this->created_at,
            'updated_at'=>$this->updated_at,
        ];
    }
}
