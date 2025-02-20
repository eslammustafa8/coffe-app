<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
        public function rules(): array
        {
            return [
                'first_name' => 'required|string|max:50',
                'last_name' => 'required|string|max:50',
                'phone' => 'required|digits:10', // Ensure phone is exactly 10 digits
                'email' => 'required|email|max:100', // Email is required, must be valid, and max 100 characters
                'date' => 'required|date|after:today', // Date must be after today
                'time' => 'required|date_format:H:i', // Time must match the format HH:MM
                'message' => 'nullable' // Message is optional
            ];
        }

        public function attributes(): array
        {
            return [
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'phone' => 'Phone Number',
                'email' => 'Email Address',
                'date' => 'Date of Booking',
                'time' => 'Time of Booking',
                'message' => 'Message'
            ];
        }
}
