<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePianologRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => ['required', 'string', 'max:20'],
            'userid' => ['required', 'string', 'max:255'],
            'song' => ['required', 'string', 'max:255'], 
            'composer' => ['required', 'composer', 'max:255'], 
            'playingage' => ['required'],
            'difficulty' => ['required'],
            'degree' => ['required'],
            'playingtimerp' => ['required'],
            'playingtimenrp' => ['required'],
            'score' => ['required', 'string', 'max:255'], 
            'readingperiod' => ['required'],
            'exercise' => ['required', 'string', 'max:255'], 
            'technique' => ['required', 'string', 'max:255'], 
            'recording' => ['required', 'string', 'max:255'], 
            'url' => ['required', 'string', 'max:255'], 
            'soundsource' => ['required', 'string', 'max:255'], 
            'books' => ['required', 'string', 'max:255'], 
            'caution' => ['required', 'accepted']
            ];
    }
}
